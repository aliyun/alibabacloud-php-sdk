<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\CreateHpoExperimentRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\CreateHpoExperimentResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\DeleteHpoExperimentResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\GetHpoExperimentResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\GetHpoTrialResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoExperimentsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoExperimentsResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialLogsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialLogsResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialsResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\RestartHpoTrialsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\RestartHpoTrialsResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\StopHpoExperimentResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\StopHpoTrialsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\StopHpoTrialsResponse;
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
     * @param string         $ExperimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHpoExperimentResponse
     */
    public function deleteHpoExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteHpoExperiment',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/delete',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteHpoExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ExperimentId
     *
     * @return DeleteHpoExperimentResponse
     */
    public function deleteHpoExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHpoExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @param string         $ExperimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHpoExperimentResponse
     */
    public function getHpoExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetHpoExperiment',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHpoExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ExperimentId
     *
     * @return GetHpoExperimentResponse
     */
    public function getHpoExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHpoExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @param string         $ExperimentId
     * @param string         $TrialId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHpoTrialResponse
     */
    public function getHpoTrialWithOptions($ExperimentId, $TrialId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetHpoTrial',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/trial/' . OpenApiUtilClient::getEncodeParam($TrialId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHpoTrialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ExperimentId
     * @param string $TrialId
     *
     * @return GetHpoTrialResponse
     */
    public function getHpoTrial($ExperimentId, $TrialId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHpoTrialWithOptions($ExperimentId, $TrialId, $headers, $runtime);
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

    /**
     * @param string                  $ExperimentId
     * @param string                  $TrialId
     * @param ListHpoTrialLogsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListHpoTrialLogsResponse
     */
    public function listHpoTrialLogsWithOptions($ExperimentId, $TrialId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logName)) {
            $query['LogName'] = $request->logName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHpoTrialLogs',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/trial/' . OpenApiUtilClient::getEncodeParam($TrialId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHpoTrialLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $ExperimentId
     * @param string                  $TrialId
     * @param ListHpoTrialLogsRequest $request
     *
     * @return ListHpoTrialLogsResponse
     */
    public function listHpoTrialLogs($ExperimentId, $TrialId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHpoTrialLogsWithOptions($ExperimentId, $TrialId, $request, $headers, $runtime);
    }

    /**
     * @param string               $ExperimentId
     * @param ListHpoTrialsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListHpoTrialsResponse
     */
    public function listHpoTrialsWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHpoTrials',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/trials',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHpoTrialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $ExperimentId
     * @param ListHpoTrialsRequest $request
     *
     * @return ListHpoTrialsResponse
     */
    public function listHpoTrials($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHpoTrialsWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $ExperimentId
     * @param RestartHpoTrialsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RestartHpoTrialsResponse
     */
    public function restartHpoTrialsWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->trialHyperParameters)) {
            $body['TrialHyperParameters'] = $request->trialHyperParameters;
        }
        if (!Utils::isUnset($request->trialIds)) {
            $body['TrialIds'] = $request->trialIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RestartHpoTrials',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/restart_trials',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartHpoTrialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $ExperimentId
     * @param RestartHpoTrialsRequest $request
     *
     * @return RestartHpoTrialsResponse
     */
    public function restartHpoTrials($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartHpoTrialsWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @param string         $ExperimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopHpoExperimentResponse
     */
    public function stopHpoExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopHpoExperiment',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopHpoExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ExperimentId
     *
     * @return StopHpoExperimentResponse
     */
    public function stopHpoExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopHpoExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @param string               $ExperimentId
     * @param StopHpoTrialsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return StopHpoTrialsResponse
     */
    public function stopHpoTrialsWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->trialIds)) {
            $body['TrialIds'] = $request->trialIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopHpoTrials',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/stop_trials',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopHpoTrialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $ExperimentId
     * @param StopHpoTrialsRequest $request
     *
     * @return StopHpoTrialsResponse
     */
    public function stopHpoTrials($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopHpoTrialsWithOptions($ExperimentId, $request, $headers, $runtime);
    }
}
