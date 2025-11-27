<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoRequest;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PAICopilot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paicopilot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * /api/v1/sessions.
     *
     * @param request - SearchInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchInfoResponse
     *
     * @param SearchInfoRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return SearchInfoResponse
     */
    public function searchInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->knowledgeBaseFilters) {
            @$body['KnowledgeBaseFilters'] = $request->knowledgeBaseFilters;
        }

        if (null !== $request->webFilters) {
            @$body['WebFilters'] = $request->webFilters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchInfo',
            'version' => '2025-07-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/searches',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * /api/v1/sessions.
     *
     * @param request - SearchInfoRequest
     *
     * @returns SearchInfoResponse
     *
     * @param SearchInfoRequest $request
     *
     * @return SearchInfoResponse
     */
    public function searchInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchInfoWithOptions($request, $headers, $runtime);
    }
}
