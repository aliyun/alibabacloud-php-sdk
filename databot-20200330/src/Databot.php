<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Databot\V20200330;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Databot\V20200330\Models\QueryDatabotRequest;
use AlibabaCloud\SDK\Databot\V20200330\Models\QueryDatabotResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Databot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('databot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param QueryDatabotRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryDatabotResponse
     */
    public function queryDatabotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDatabotResponse::fromMap($this->doRPCRequest('QueryDatabot', '2020-03-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDatabotRequest $request
     *
     * @return QueryDatabotResponse
     */
    public function queryDatabot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatabotWithOptions($request, $runtime);
    }
}
