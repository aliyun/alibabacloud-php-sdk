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
     * @param ListResourceRelationshipsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListResourceRelationshipsResponse
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
     * @param ListResourceRelationshipsRequest $request
     *
     * @return ListResourceRelationshipsResponse
     */
    public function listResourceRelationships($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceRelationshipsWithOptions($request, $runtime);
    }

    /**
     * @param SearchResourcesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SearchResourcesResponse
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
     * @param SearchResourcesRequest $request
     *
     * @return SearchResourcesResponse
     */
    public function searchResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchResourcesWithOptions($request, $runtime);
    }
}
