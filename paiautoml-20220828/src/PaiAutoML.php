<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\CreateHpoExperimentRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\CreateHpoExperimentResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoExperimentsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoExperimentsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class PaiAutoML extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paiautoml', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateHpoExperimentRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateHpoExperimentResponse
     */
    public function createHpoExperimentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->hpoExperimentConfiguration)) {
            $body['HpoExperimentConfiguration'] = $request->hpoExperimentConfiguration;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateHpoExperiment',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateHpoExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHpoExperimentRequest $request
     *
     * @return CreateHpoExperimentResponse
     */
    public function createHpoExperiment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHpoExperimentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHpoExperimentsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListHpoExperimentsResponse
     */
    public function listHpoExperimentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessibility)) {
            $query['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->creator)) {
            $query['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->includeConfigData)) {
            $query['IncludeConfigData'] = $request->includeConfigData;
        }
        if (!Utils::isUnset($request->maxCreateTime)) {
            $query['MaxCreateTime'] = $request->maxCreateTime;
        }
        if (!Utils::isUnset($request->minCreateTime)) {
            $query['MinCreateTime'] = $request->minCreateTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHpoExperiments',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHpoExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHpoExperimentsRequest $request
     *
     * @return ListHpoExperimentsResponse
     */
    public function listHpoExperiments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHpoExperimentsWithOptions($request, $headers, $runtime);
    }
}
