<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RMC\V20211104;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\RMC\V20211104\Models\ListResourceRelationshipsRequest;
use AlibabaCloud\SDK\RMC\V20211104\Models\ListResourceRelationshipsResponse;
use AlibabaCloud\SDK\RMC\V20211104\Models\SearchResourcesRequest;
use AlibabaCloud\SDK\RMC\V20211104\Models\SearchResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class RMC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rmc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * This section provides the types of resources that can be queried. Two-way queries are supported. For example, you can query the disks (ACS::ECS::Disk) that are associated with a specific Elastic Compute Service (ECS) instance (ACS::ECS::Instance) or query the ECS instance that is associated with a specific disk.
     *   * - For ECS instances, the following types of resources can be queried:    - ACS::ECS::Disk
     *   *   - ACS::EIP::EipAddress
     *   *   - ACS::VPC::VPC
     *   *   - ACS::ECS::KeyPair
     *   *   - ACS::ECS::SecurityGroup
     *   *   - ACS::ECS::NetworkInterface
     *   *   - ACS::ECS::Image
     *   * - For virtual private clouds (VPCs), which are indicated by ACS::VPC::VPC, the following types of resources can be queried:    - ACS::ECS::Instance
     *   *   - ACS::RDS::DBInstance
     *   *   - ACS::SLB::LoadBalancer
     *   *   - ACS::ALB::LoadBalancer
     *   *   - ACS::Elasticsearch::Instance
     *   *   - ACS::Redis::DBInstance
     *   *   - ACS::PolarDB::DBCluster
     *   *   - ACS::MongoDB::DBInstance
     *   *   - ACS::DRDS::PolarDBXInstance
     *   *   - ACS::EDAS::Cluster
     *   *   - ACS::ECI::ContainerGroup
     *   *   - ACS::ADB::DBCluster
     *   *   - ACS::DRDS::DBInstance
     *   *   - ACS::HBase::Cluster
     *   *   - ACS::EMR::Cluster
     *   * This topic provides an example on how to call the API operation to query the resources that are associated with the ECS instance `i-uf6imlgyr1nudhud****` in the China (Shanghai) region.
     *   * ## Prerequisites
     *   * Resource Meta Center (RMC) is enabled. For more information, see [Query resources that belong to different resource groups](~~310198~~).
     *   * ## QPS limits
     *   * You can call this API operation up to 20 times per second per account. Requests that exceed this limit will fail, and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *   *
     * @param ListResourceRelationshipsRequest $request ListResourceRelationshipsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceRelationshipsResponse ListResourceRelationshipsResponse
     */
    public function listResourceRelationshipsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->sourceRegionId)) {
            $query['SourceRegionId'] = $request->sourceRegionId;
        }
        if (!Utils::isUnset($request->sourceResourceId)) {
            $query['SourceResourceId'] = $request->sourceResourceId;
        }
        if (!Utils::isUnset($request->sourceResourceType)) {
            $query['SourceResourceType'] = $request->sourceResourceType;
        }
        if (!Utils::isUnset($request->targetResourceType)) {
            $query['TargetResourceType'] = $request->targetResourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceRelationships',
            'version'     => '2021-11-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceRelationshipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This section provides the types of resources that can be queried. Two-way queries are supported. For example, you can query the disks (ACS::ECS::Disk) that are associated with a specific Elastic Compute Service (ECS) instance (ACS::ECS::Instance) or query the ECS instance that is associated with a specific disk.
     *   * - For ECS instances, the following types of resources can be queried:    - ACS::ECS::Disk
     *   *   - ACS::EIP::EipAddress
     *   *   - ACS::VPC::VPC
     *   *   - ACS::ECS::KeyPair
     *   *   - ACS::ECS::SecurityGroup
     *   *   - ACS::ECS::NetworkInterface
     *   *   - ACS::ECS::Image
     *   * - For virtual private clouds (VPCs), which are indicated by ACS::VPC::VPC, the following types of resources can be queried:    - ACS::ECS::Instance
     *   *   - ACS::RDS::DBInstance
     *   *   - ACS::SLB::LoadBalancer
     *   *   - ACS::ALB::LoadBalancer
     *   *   - ACS::Elasticsearch::Instance
     *   *   - ACS::Redis::DBInstance
     *   *   - ACS::PolarDB::DBCluster
     *   *   - ACS::MongoDB::DBInstance
     *   *   - ACS::DRDS::PolarDBXInstance
     *   *   - ACS::EDAS::Cluster
     *   *   - ACS::ECI::ContainerGroup
     *   *   - ACS::ADB::DBCluster
     *   *   - ACS::DRDS::DBInstance
     *   *   - ACS::HBase::Cluster
     *   *   - ACS::EMR::Cluster
     *   * This topic provides an example on how to call the API operation to query the resources that are associated with the ECS instance `i-uf6imlgyr1nudhud****` in the China (Shanghai) region.
     *   * ## Prerequisites
     *   * Resource Meta Center (RMC) is enabled. For more information, see [Query resources that belong to different resource groups](~~310198~~).
     *   * ## QPS limits
     *   * You can call this API operation up to 20 times per second per account. Requests that exceed this limit will fail, and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *   *
     * @param ListResourceRelationshipsRequest $request ListResourceRelationshipsRequest
     *
     * @return ListResourceRelationshipsResponse ListResourceRelationshipsResponse
     */
    public function listResourceRelationships($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceRelationshipsWithOptions($request, $runtime);
    }

    /**
     * For more information about resource types that support RMC, see [Resource types that support RMC](https://www.alibabacloud.com/help/en/resource-management/latest/resource-types-that-support-rmc).
     *   * This topic provides an example on how to call the API operation to query the resources that can be accessed within the current account in the China (Hangzhou) region.
     *   * ## Prerequisites
     *   * Resource Meta Center (RMC) is enabled. For more information, see [Query resources that belong to different resource groups](~~310198~~).
     *   * ## QPS limits
     *   * You can call this API operation up to 20 times per second per account. Requests that exceed this limit will fail, and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *   *
     * @param SearchResourcesRequest $request SearchResourcesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchResourcesResponse SearchResourcesResponse
     */
    public function searchResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sortCriterion)) {
            $query['SortCriterion'] = $request->sortCriterion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchResources',
            'version'     => '2021-11-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about resource types that support RMC, see [Resource types that support RMC](https://www.alibabacloud.com/help/en/resource-management/latest/resource-types-that-support-rmc).
     *   * This topic provides an example on how to call the API operation to query the resources that can be accessed within the current account in the China (Hangzhou) region.
     *   * ## Prerequisites
     *   * Resource Meta Center (RMC) is enabled. For more information, see [Query resources that belong to different resource groups](~~310198~~).
     *   * ## QPS limits
     *   * You can call this API operation up to 20 times per second per account. Requests that exceed this limit will fail, and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *   *
     * @param SearchResourcesRequest $request SearchResourcesRequest
     *
     * @return SearchResourcesResponse SearchResourcesResponse
     */
    public function searchResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchResourcesWithOptions($request, $runtime);
    }
}
