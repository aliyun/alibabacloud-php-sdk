<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20181111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PTS\V20181111\Models\GetReportRequest;
use AlibabaCloud\SDK\PTS\V20181111\Models\GetReportResponse;
use AlibabaCloud\SDK\PTS\V20181111\Models\ListRunnableScenesRequest;
use AlibabaCloud\SDK\PTS\V20181111\Models\ListRunnableScenesResponse;
use AlibabaCloud\SDK\PTS\V20181111\Models\QueryPlanStatusRequest;
use AlibabaCloud\SDK\PTS\V20181111\Models\QueryPlanStatusResponse;
use AlibabaCloud\SDK\PTS\V20181111\Models\StartSceneRequest;
use AlibabaCloud\SDK\PTS\V20181111\Models\StartSceneResponse;
use AlibabaCloud\SDK\PTS\V20181111\Models\StopSceneRequest;
use AlibabaCloud\SDK\PTS\V20181111\Models\StopSceneResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class PTS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetReportRequest $request GetReportRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetReportResponse GetReportResponse
     */
    public function getReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetReport',
            'version'     => '2018-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetReportRequest $request GetReportRequest
     *
     * @return GetReportResponse GetReportResponse
     */
    public function getReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getReportWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListRunnableScenesRequest $request ListRunnableScenesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRunnableScenesResponse ListRunnableScenesResponse
     */
    public function listRunnableScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRunnableScenes',
            'version'     => '2018-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRunnableScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ListRunnableScenesRequest $request ListRunnableScenesRequest
     *
     * @return ListRunnableScenesResponse ListRunnableScenesResponse
     */
    public function listRunnableScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRunnableScenesWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param QueryPlanStatusRequest $request QueryPlanStatusRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPlanStatusResponse QueryPlanStatusResponse
     */
    public function queryPlanStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPlanStatus',
            'version'     => '2018-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPlanStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param QueryPlanStatusRequest $request QueryPlanStatusRequest
     *
     * @return QueryPlanStatusResponse QueryPlanStatusResponse
     */
    public function queryPlanStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPlanStatusWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param StartSceneRequest $request StartSceneRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return StartSceneResponse StartSceneResponse
     */
    public function startSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartScene',
            'version'     => '2018-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param StartSceneRequest $request StartSceneRequest
     *
     * @return StartSceneResponse StartSceneResponse
     */
    public function startScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSceneWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param StopSceneRequest $request StopSceneRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return StopSceneResponse StopSceneResponse
     */
    public function stopSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopScene',
            'version'     => '2018-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param StopSceneRequest $request StopSceneRequest
     *
     * @return StopSceneResponse StopSceneResponse
     */
    public function stopScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopSceneWithOptions($request, $runtime);
    }
}
