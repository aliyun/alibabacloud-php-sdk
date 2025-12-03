<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mobi\V20240411;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Mobi\V20240411\Models\CreateAppFromTemplateRequest;
use AlibabaCloud\SDK\Mobi\V20240411\Models\CreateAppFromTemplateResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Mobi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mobi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 通过模板创建应用.
     *
     * @param request - CreateAppFromTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppFromTemplateResponse
     *
     * @param CreateAppFromTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAppFromTemplateResponse
     */
    public function createAppFromTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actualParameters) {
            @$query['ActualParameters'] = $request->actualParameters;
        }

        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->connectionsContent) {
            @$query['ConnectionsContent'] = $request->connectionsContent;
        }

        if (null !== $request->databasesContent) {
            @$query['DatabasesContent'] = $request->databasesContent;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->icon) {
            @$query['Icon'] = $request->icon;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->variablesContent) {
            @$query['VariablesContent'] = $request->variablesContent;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppFromTemplate',
            'version' => '2024-04-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppFromTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过模板创建应用.
     *
     * @param request - CreateAppFromTemplateRequest
     *
     * @returns CreateAppFromTemplateResponse
     *
     * @param CreateAppFromTemplateRequest $request
     *
     * @return CreateAppFromTemplateResponse
     */
    public function createAppFromTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppFromTemplateWithOptions($request, $runtime);
    }
}
