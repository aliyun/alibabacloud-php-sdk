<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DashDeviceConsole\V20250408;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\DashDeviceConsole\V20250408\Models\DeletePromptRequest;
use AlibabaCloud\SDK\DashDeviceConsole\V20250408\Models\DeletePromptResponse;
use AlibabaCloud\SDK\DashDeviceConsole\V20250408\Models\GetPromptRequest;
use AlibabaCloud\SDK\DashDeviceConsole\V20250408\Models\GetPromptResponse;
use AlibabaCloud\SDK\DashDeviceConsole\V20250408\Models\PushPromptRequest;
use AlibabaCloud\SDK\DashDeviceConsole\V20250408\Models\PushPromptResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class DashDeviceConsole extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dashdeviceconsole', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * delete prompt.
     *
     * @param request - DeletePromptRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePromptResponse
     *
     * @param DeletePromptRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePromptResponse
     */
    public function deletePromptWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePrompt',
            'version' => '2025-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/prompt/delete',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePromptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * delete prompt.
     *
     * @param request - DeletePromptRequest
     *
     * @returns DeletePromptResponse
     *
     * @param DeletePromptRequest $request
     *
     * @return DeletePromptResponse
     */
    public function deletePrompt($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePromptWithOptions($request, $headers, $runtime);
    }

    /**
     * get prompt.
     *
     * @param request - GetPromptRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPromptResponse
     *
     * @param GetPromptRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetPromptResponse
     */
    public function getPromptWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrompt',
            'version' => '2025-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/prompt/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPromptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get prompt.
     *
     * @param request - GetPromptRequest
     *
     * @returns GetPromptResponse
     *
     * @param GetPromptRequest $request
     *
     * @return GetPromptResponse
     */
    public function getPrompt($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPromptWithOptions($request, $headers, $runtime);
    }

    /**
     * push prompt.
     *
     * @param request - PushPromptRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushPromptResponse
     *
     * @param PushPromptRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return PushPromptResponse
     */
    public function pushPromptWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        $body = [];
        if (null !== $request->promptContent) {
            @$body['promptContent'] = $request->promptContent;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushPrompt',
            'version' => '2025-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/prompt/push',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushPromptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * push prompt.
     *
     * @param request - PushPromptRequest
     *
     * @returns PushPromptResponse
     *
     * @param PushPromptRequest $request
     *
     * @return PushPromptResponse
     */
    public function pushPrompt($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushPromptWithOptions($request, $headers, $runtime);
    }
}
