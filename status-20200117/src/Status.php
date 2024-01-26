<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Status\V20200117;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Status\V20200117\Models\ListEventInProgressRequest;
use AlibabaCloud\SDK\Status\V20200117\Models\ListEventInProgressResponse;
use AlibabaCloud\SDK\Status\V20200117\Models\ListEventInProgressShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Status extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('status', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ListEventInProgressRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListEventInProgressResponse
     */
    public function listEventInProgressWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListEventInProgressShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->regionIds)) {
            $request->regionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->regionIdsShrink)) {
            $body['RegionIds'] = $request->regionIdsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListEventInProgress',
            'version'     => '2020-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEventInProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEventInProgressRequest $request
     *
     * @return ListEventInProgressResponse
     */
    public function listEventInProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventInProgressWithOptions($request, $runtime);
    }
}
