<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snapshot\V20201118;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Snapshot\V20201118\Models\ListChangedBlocksRequest;
use AlibabaCloud\SDK\Snapshot\V20201118\Models\ListChangedBlocksResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Snapshot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('snapshot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ListChangedBlocksRequest $request
     *
     * @return ListChangedBlocksResponse
     */
    public function listChangedBlocks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChangedBlocksWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListChangedBlocksRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListChangedBlocksResponse
     */
    public function listChangedBlocksWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            @$query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->maxResults)) {
            @$query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->firstSnapshotId)) {
            @$query['FirstSnapshotId'] = $request->firstSnapshotId;
        }
        if (!Utils::isUnset($request->secondSnapshotId)) {
            @$query['SecondSnapshotId'] = $request->secondSnapshotId;
        }
        if (!Utils::isUnset($request->startingBlockIndex)) {
            @$query['StartingBlockIndex'] = $request->startingBlockIndex;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListChangedBlocksResponse::fromMap($this->doROARequest('ListChangedBlocks', '2020-11-18', 'HTTPS', 'GET', 'AK', '/snapshots/changedblocks', 'json', $req, $runtime));
    }
}
