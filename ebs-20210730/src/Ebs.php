<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ReprotectDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ReprotectDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StartDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StartDiskReplicaPairResponse;
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
     * @param CreateDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDiskReplicaPairResponse
     */
    public function createDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['Bandwidth']           = $request->bandwidth;
        $query['ChargeType']          = $request->chargeType;
        $query['ClientToken']         = $request->clientToken;
        $query['Description']         = $request->description;
        $query['DestinationDiskId']   = $request->destinationDiskId;
        $query['DestinationRegionId'] = $request->destinationRegionId;
        $query['DestinationZoneId']   = $request->destinationZoneId;
        $query['DiskId']              = $request->diskId;
        $query['PairName']            = $request->pairName;
        $query['Period']              = $request->period;
        $query['PeriodUnit']          = $request->periodUnit;
        $query['SourceRegionId']      = $request->sourceRegionId;
        $query['SourceZoneId']        = $request->sourceZoneId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DeleteDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDiskReplicaPairResponse
     */
    public function deleteDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ClientToken']   = $request->clientToken;
        $query['RegionId']      = $request->regionId;
        $query['ReplicaPairId'] = $request->replicaPairId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeDiskReplicaPairsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiskReplicaPairsResponse
     */
    public function describeDiskReplicaPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['MaxResults'] = $request->maxResults;
        $query['NextToken']  = $request->nextToken;
        $query['PairIds']    = $request->pairIds;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiskReplicaPairs',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['AcceptLanguage'] = $request->acceptLanguage;
        $query['ResourceType']   = $request->resourceType;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param FailoverDiskReplicaPairRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return FailoverDiskReplicaPairResponse
     */
    public function failoverDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ClientToken']   = $request->clientToken;
        $query['RegionId']      = $request->regionId;
        $query['ReplicaPairId'] = $request->replicaPairId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'FailoverDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ModifyDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDiskReplicaPairResponse
     */
    public function modifyDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ClientToken']   = $request->clientToken;
        $query['Description']   = $request->description;
        $query['PairName']      = $request->pairName;
        $query['RegionId']      = $request->regionId;
        $query['ReplicaPairId'] = $request->replicaPairId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ReprotectDiskReplicaPairRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReprotectDiskReplicaPairResponse
     */
    public function reprotectDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ClientToken']   = $request->clientToken;
        $query['RegionId']      = $request->regionId;
        $query['ReplicaPairId'] = $request->replicaPairId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReprotectDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param StartDiskReplicaPairRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartDiskReplicaPairResponse
     */
    public function startDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ClientToken']   = $request->clientToken;
        $query['RegionId']      = $request->regionId;
        $query['ReplicaPairId'] = $request->replicaPairId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StartDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param StopDiskReplicaPairRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopDiskReplicaPairResponse
     */
    public function stopDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ClientToken']   = $request->clientToken;
        $query['RegionId']      = $request->regionId;
        $query['ReplicaPairId'] = $request->replicaPairId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StopDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
