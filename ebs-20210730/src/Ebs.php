<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ebs\V20210730\Models\AddDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\AddDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaPairResponse;
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
use AlibabaCloud\SDK\Ebs\V20210730\Models\StopDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StopDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StopDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StopDiskReplicaPairResponse;
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
     * @param AddDiskReplicaPairRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddDiskReplicaPairResponse
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
     * @param CreateDiskReplicaGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDiskReplicaGroupResponse
     */
    public function createDiskReplicaGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->sourceZoneId)) {
            $query['SourceZoneId'] = $request->sourceZoneId;
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
     * @param CreateDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDiskReplicaPairResponse
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
        if (!Utils::isUnset($request->sourceZoneId)) {
            $query['SourceZoneId'] = $request->sourceZoneId;
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
     * @param DeleteDiskReplicaGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteDiskReplicaGroupResponse
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
     * @param DeleteDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDiskReplicaPairResponse
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
     * @param DescribeDiskReplicaGroupsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDiskReplicaGroupsResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->site)) {
            $query['Site'] = $request->site;
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
     * @param DescribeDiskReplicaPairsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiskReplicaPairsResponse
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
        if (!Utils::isUnset($request->pairIds)) {
            $query['PairIds'] = $request->pairIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaGroupId)) {
            $query['ReplicaGroupId'] = $request->replicaGroupId;
        }
        if (!Utils::isUnset($request->site)) {
            $query['Site'] = $request->site;
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
     * @param FailoverDiskReplicaGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return FailoverDiskReplicaGroupResponse
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
     * @param FailoverDiskReplicaPairRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return FailoverDiskReplicaPairResponse
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
     * @param ModifyDiskReplicaGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDiskReplicaGroupResponse
     */
    public function modifyDiskReplicaGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param ModifyDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDiskReplicaPairResponse
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
     * @param RemoveDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveDiskReplicaPairResponse
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
     * @param ReprotectDiskReplicaGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ReprotectDiskReplicaGroupResponse
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
        if (!Utils::isUnset($request->sourceRegionId)) {
            $query['SourceRegionId'] = $request->sourceRegionId;
        }
        if (!Utils::isUnset($request->sourceZoneId)) {
            $query['SourceZoneId'] = $request->sourceZoneId;
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
     * @param ReprotectDiskReplicaPairRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReprotectDiskReplicaPairResponse
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
     * @param StartDiskReplicaGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return StartDiskReplicaGroupResponse
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
     * @param StartDiskReplicaPairRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartDiskReplicaPairResponse
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
     * @param StopDiskReplicaGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StopDiskReplicaGroupResponse
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
     * @param StopDiskReplicaPairRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopDiskReplicaPairResponse
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
     * @param StopDiskReplicaPairRequest $request
     *
     * @return StopDiskReplicaPairResponse
     */
    public function stopDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDiskReplicaPairWithOptions($request, $runtime);
    }
}
