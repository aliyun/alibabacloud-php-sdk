<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190522;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PTS\V20190522\Models\GetAliwareReportRequest;
use AlibabaCloud\SDK\PTS\V20190522\Models\GetAliwareReportResponse;
use AlibabaCloud\SDK\PTS\V20190522\Models\GetReportRequest;
use AlibabaCloud\SDK\PTS\V20190522\Models\GetReportResponse;
use AlibabaCloud\SDK\PTS\V20190522\Models\StartSceneRequest;
use AlibabaCloud\SDK\PTS\V20190522\Models\StartSceneResponse;
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
     * @param GetAliwareReportRequest $request GetAliwareReportRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAliwareReportResponse GetAliwareReportResponse
     */
    public function getAliwareReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAliwareReport',
            'version'     => '2019-05-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAliwareReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param GetAliwareReportRequest $request GetAliwareReportRequest
     *
     * @return GetAliwareReportResponse GetAliwareReportResponse
     */
    public function getAliwareReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAliwareReportWithOptions($request, $runtime);
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
            'version'     => '2019-05-22',
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
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->teamId)) {
            $query['TeamId'] = $request->teamId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartScene',
            'version'     => '2019-05-22',
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
}
