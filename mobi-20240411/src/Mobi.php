<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mobi\V20240411;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Mobi\V20240411\Models\CreateAppFromTemplateRequest;
use AlibabaCloud\SDK\Mobi\V20240411\Models\CreateAppFromTemplateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 通过模板创建应用
     *  *
     * @param CreateAppFromTemplateRequest $request CreateAppFromTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppFromTemplateResponse CreateAppFromTemplateResponse
     */
    public function createAppFromTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actualParameters)) {
            $query['ActualParameters'] = $request->actualParameters;
        }
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->connectionsContent)) {
            $query['ConnectionsContent'] = $request->connectionsContent;
        }
        if (!Utils::isUnset($request->databasesContent)) {
            $query['DatabasesContent'] = $request->databasesContent;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->icon)) {
            $query['Icon'] = $request->icon;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->variablesContent)) {
            $query['VariablesContent'] = $request->variablesContent;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 通过模板创建应用
     *  *
     * @param CreateAppFromTemplateRequest $request CreateAppFromTemplateRequest
     *
     * @return CreateAppFromTemplateResponse CreateAppFromTemplateResponse
     */
    public function createAppFromTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppFromTemplateWithOptions($request, $runtime);
    }
}
