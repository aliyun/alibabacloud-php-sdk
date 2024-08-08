<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\CreateAutofeExperimentRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\CreateAutofeExperimentResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\CreateHpoExperimentRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\CreateHpoExperimentResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\CreateServiceIdentityRoleResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\DeleteHpoExperimentResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\GetAutofeExperimentResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\GetHpoExperimentResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\GetHpoTrialResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\GetServiceIdentityRoleResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoExperimentLogsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoExperimentLogsResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoExperimentsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoExperimentsResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialCommandsResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialLogNamesResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialLogsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialLogsResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialsResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\RestartHpoTrialsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\RestartHpoTrialsResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\StopHpoExperimentResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\StopHpoTrialsRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\StopHpoTrialsResponse;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\UpdateHpoExperimentRequest;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\UpdateHpoExperimentResponse;
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
     * @summary CreateAutofeExperiment
     *  *
     * @param CreateAutofeExperimentRequest $request CreateAutofeExperimentRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAutofeExperimentResponse CreateAutofeExperimentResponse
     */
    public function createAutofeExperimentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->autofeExperimentConfiguration)) {
            $body['AutofeExperimentConfiguration'] = $request->autofeExperimentConfiguration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
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
            'action'      => 'CreateAutofeExperiment',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/autofe/experiment',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAutofeExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CreateAutofeExperiment
     *  *
     * @param CreateAutofeExperimentRequest $request CreateAutofeExperimentRequest
     *
     * @return CreateAutofeExperimentResponse CreateAutofeExperimentResponse
     */
    public function createAutofeExperiment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAutofeExperimentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Create an HyperParameter Optimization experiment.
     *  *
     * @param CreateHpoExperimentRequest $request CreateHpoExperimentRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHpoExperimentResponse CreateHpoExperimentResponse
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
     * @summary Create an HyperParameter Optimization experiment.
     *  *
     * @param CreateHpoExperimentRequest $request CreateHpoExperimentRequest
     *
     * @return CreateHpoExperimentResponse CreateHpoExperimentResponse
     */
    public function createHpoExperiment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHpoExperimentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary CreateServiceIdentityRole
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceIdentityRoleResponse CreateServiceIdentityRoleResponse
     */
    public function createServiceIdentityRoleWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateServiceIdentityRole',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/serviceidentityrole',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceIdentityRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CreateServiceIdentityRole
     *  *
     * @return CreateServiceIdentityRoleResponse CreateServiceIdentityRoleResponse
     */
    public function createServiceIdentityRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceIdentityRoleWithOptions($headers, $runtime);
    }

    /**
     * @summary Delete an HPO experiment
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteHpoExperimentResponse DeleteHpoExperimentResponse
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
     * @summary Delete an HPO experiment
     *  *
     * @param string $ExperimentId
     *
     * @return DeleteHpoExperimentResponse DeleteHpoExperimentResponse
     */
    public function deleteHpoExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHpoExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary Get AutoFE Experiment。
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetAutofeExperimentResponse GetAutofeExperimentResponse
     */
    public function getAutofeExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAutofeExperiment',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/autofe/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAutofeExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get AutoFE Experiment。
     *  *
     * @param string $ExperimentId
     *
     * @return GetAutofeExperimentResponse GetAutofeExperimentResponse
     */
    public function getAutofeExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAutofeExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary get hpo experiment by user id and exp id
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetHpoExperimentResponse GetHpoExperimentResponse
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
     * @summary get hpo experiment by user id and exp id
     *  *
     * @param string $ExperimentId
     *
     * @return GetHpoExperimentResponse GetHpoExperimentResponse
     */
    public function getHpoExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHpoExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary Get trial detail information
     *  *
     * @param string         $ExperimentId
     * @param string         $TrialId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetHpoTrialResponse GetHpoTrialResponse
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
     * @summary Get trial detail information
     *  *
     * @param string $ExperimentId
     * @param string $TrialId
     *
     * @return GetHpoTrialResponse GetHpoTrialResponse
     */
    public function getHpoTrial($ExperimentId, $TrialId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHpoTrialWithOptions($ExperimentId, $TrialId, $headers, $runtime);
    }

    /**
     * @summary GetServiceIdentityRole, return role name if SLR exists, empty otherwise
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceIdentityRoleResponse GetServiceIdentityRoleResponse
     */
    public function getServiceIdentityRoleWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetServiceIdentityRole',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/serviceidentityrole',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceIdentityRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetServiceIdentityRole, return role name if SLR exists, empty otherwise
     *  *
     * @return GetServiceIdentityRoleResponse GetServiceIdentityRoleResponse
     */
    public function getServiceIdentityRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceIdentityRoleWithOptions($headers, $runtime);
    }

    /**
     * @summary list the content of a specified hpo experiment log
     *  *
     * @param string                       $ExperimentId
     * @param ListHpoExperimentLogsRequest $request      ListHpoExperimentLogsRequest
     * @param string[]                     $headers      map
     * @param RuntimeOptions               $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListHpoExperimentLogsResponse ListHpoExperimentLogsResponse
     */
    public function listHpoExperimentLogsWithOptions($ExperimentId, $request, $headers, $runtime)
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
            'action'      => 'ListHpoExperimentLogs',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHpoExperimentLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary list the content of a specified hpo experiment log
     *  *
     * @param string                       $ExperimentId
     * @param ListHpoExperimentLogsRequest $request      ListHpoExperimentLogsRequest
     *
     * @return ListHpoExperimentLogsResponse ListHpoExperimentLogsResponse
     */
    public function listHpoExperimentLogs($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHpoExperimentLogsWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary List HPO experiments
     *  *
     * @param ListHpoExperimentsRequest $request ListHpoExperimentsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHpoExperimentsResponse ListHpoExperimentsResponse
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
     * @summary List HPO experiments
     *  *
     * @param ListHpoExperimentsRequest $request ListHpoExperimentsRequest
     *
     * @return ListHpoExperimentsResponse ListHpoExperimentsResponse
     */
    public function listHpoExperiments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHpoExperimentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 返回一个trial所对应的任务里所有已经执行的命令
     *  *
     * @param string         $ExperimentId
     * @param string         $TrialId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListHpoTrialCommandsResponse ListHpoTrialCommandsResponse
     */
    public function listHpoTrialCommandsWithOptions($ExperimentId, $TrialId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListHpoTrialCommands',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/trial/' . OpenApiUtilClient::getEncodeParam($TrialId) . '/commands',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHpoTrialCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 返回一个trial所对应的任务里所有已经执行的命令
     *  *
     * @param string $ExperimentId
     * @param string $TrialId
     *
     * @return ListHpoTrialCommandsResponse ListHpoTrialCommandsResponse
     */
    public function listHpoTrialCommands($ExperimentId, $TrialId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHpoTrialCommandsWithOptions($ExperimentId, $TrialId, $headers, $runtime);
    }

    /**
     * @summary List all log file names a trial have.
     *  *
     * @param string         $ExperimentId
     * @param string         $TrialId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListHpoTrialLogNamesResponse ListHpoTrialLogNamesResponse
     */
    public function listHpoTrialLogNamesWithOptions($ExperimentId, $TrialId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListHpoTrialLogNames',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/trial/' . OpenApiUtilClient::getEncodeParam($TrialId) . '/lognames',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHpoTrialLogNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary List all log file names a trial have.
     *  *
     * @param string $ExperimentId
     * @param string $TrialId
     *
     * @return ListHpoTrialLogNamesResponse ListHpoTrialLogNamesResponse
     */
    public function listHpoTrialLogNames($ExperimentId, $TrialId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHpoTrialLogNamesWithOptions($ExperimentId, $TrialId, $headers, $runtime);
    }

    /**
     * @summary List Trial log lines
     *  *
     * @param string                  $ExperimentId
     * @param string                  $TrialId
     * @param ListHpoTrialLogsRequest $request      ListHpoTrialLogsRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListHpoTrialLogsResponse ListHpoTrialLogsResponse
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
     * @summary List Trial log lines
     *  *
     * @param string                  $ExperimentId
     * @param string                  $TrialId
     * @param ListHpoTrialLogsRequest $request      ListHpoTrialLogsRequest
     *
     * @return ListHpoTrialLogsResponse ListHpoTrialLogsResponse
     */
    public function listHpoTrialLogs($ExperimentId, $TrialId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHpoTrialLogsWithOptions($ExperimentId, $TrialId, $request, $headers, $runtime);
    }

    /**
     * @summary List HPO trials
     *  *
     * @param string               $ExperimentId
     * @param ListHpoTrialsRequest $request      ListHpoTrialsRequest
     * @param string[]             $headers      map
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListHpoTrialsResponse ListHpoTrialsResponse
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
     * @summary List HPO trials
     *  *
     * @param string               $ExperimentId
     * @param ListHpoTrialsRequest $request      ListHpoTrialsRequest
     *
     * @return ListHpoTrialsResponse ListHpoTrialsResponse
     */
    public function listHpoTrials($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHpoTrialsWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary Restart HPO trials
     *  *
     * @param string                  $ExperimentId
     * @param RestartHpoTrialsRequest $request      RestartHpoTrialsRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return RestartHpoTrialsResponse RestartHpoTrialsResponse
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
     * @summary Restart HPO trials
     *  *
     * @param string                  $ExperimentId
     * @param RestartHpoTrialsRequest $request      RestartHpoTrialsRequest
     *
     * @return RestartHpoTrialsResponse RestartHpoTrialsResponse
     */
    public function restartHpoTrials($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartHpoTrialsWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary calling hpo StopExperiment
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return StopHpoExperimentResponse StopHpoExperimentResponse
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
     * @summary calling hpo StopExperiment
     *  *
     * @param string $ExperimentId
     *
     * @return StopHpoExperimentResponse StopHpoExperimentResponse
     */
    public function stopHpoExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopHpoExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary Stop an HPO trial.
     *  *
     * @param string               $ExperimentId
     * @param StopHpoTrialsRequest $request      StopHpoTrialsRequest
     * @param string[]             $headers      map
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return StopHpoTrialsResponse StopHpoTrialsResponse
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
     * @summary Stop an HPO trial.
     *  *
     * @param string               $ExperimentId
     * @param StopHpoTrialsRequest $request      StopHpoTrialsRequest
     *
     * @return StopHpoTrialsResponse StopHpoTrialsResponse
     */
    public function stopHpoTrials($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopHpoTrialsWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary Update a running HPO experiment\\"s configuration
     *  *
     * @param string                     $ExperimentId
     * @param UpdateHpoExperimentRequest $request      UpdateHpoExperimentRequest
     * @param string[]                   $headers      map
     * @param RuntimeOptions             $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateHpoExperimentResponse UpdateHpoExperimentResponse
     */
    public function updateHpoExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
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
            'action'      => 'UpdateHpoExperiment',
            'version'     => '2022-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/automl/v1/hpo/experiment/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/update',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateHpoExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update a running HPO experiment\\"s configuration
     *  *
     * @param string                     $ExperimentId
     * @param UpdateHpoExperimentRequest $request      UpdateHpoExperimentRequest
     *
     * @return UpdateHpoExperimentResponse UpdateHpoExperimentResponse
     */
    public function updateHpoExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHpoExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }
}
