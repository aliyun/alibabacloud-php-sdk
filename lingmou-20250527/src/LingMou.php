<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class LingMou extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('lingmou', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 创建数字人会话
     *  *
     * @param string                   $id
     * @param CreateChatSessionRequest $request CreateChatSessionRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateChatSessionResponse CreateChatSessionResponse
     */
    public function createChatSessionWithOptions($id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->license)) {
            $query['license'] = $request->license;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['platform'] = $request->platform;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateChatSession',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/chat/init/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateChatSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数字人会话
     *  *
     * @param string                   $id
     * @param CreateChatSessionRequest $request CreateChatSessionRequest
     *
     * @return CreateChatSessionResponse CreateChatSessionResponse
     */
    public function createChatSession($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChatSessionWithOptions($id, $request, $headers, $runtime);
    }
}
