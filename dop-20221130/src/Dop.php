<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dop\V20221130;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dop\V20221130\Models\GetOssMetaDownloadRequest;
use AlibabaCloud\SDK\Dop\V20221130\Models\GetOssMetaDownloadResponse;
use AlibabaCloud\SDK\Dop\V20221130\Models\GetOssMetaListRequest;
use AlibabaCloud\SDK\Dop\V20221130\Models\GetOssMetaListResponse;
use AlibabaCloud\SDK\Dop\V20221130\Models\SubmitBackfill4ApiRequest;
use AlibabaCloud\SDK\Dop\V20221130\Models\SubmitBackfill4ApiResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dop extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dop', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetOssMetaDownloadRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetOssMetaDownloadResponse
     */
    public function getOssMetaDownloadWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ds)) {
            $query['ds'] = $request->ds;
        }
        if (!Utils::isUnset($request->expire)) {
            $query['expire'] = $request->expire;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['tableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssMetaDownload',
            'version'     => '2022-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dop/getOssMetaDownload',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOssMetaDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOssMetaDownloadRequest $request
     *
     * @return GetOssMetaDownloadResponse
     */
    public function getOssMetaDownload($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOssMetaDownloadWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetOssMetaListRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetOssMetaListResponse
     */
    public function getOssMetaListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['tableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssMetaList',
            'version'     => '2022-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dop/getOssMetaList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOssMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOssMetaListRequest $request
     *
     * @return GetOssMetaListResponse
     */
    public function getOssMetaList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOssMetaListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitBackfill4ApiRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitBackfill4ApiResponse
     */
    public function submitBackfill4ApiWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->packageId)) {
            $query['packageId'] = $request->packageId;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitBackfill4Api',
            'version'     => '2022-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dop/submitBackfill4Api',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitBackfill4ApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitBackfill4ApiRequest $request
     *
     * @return SubmitBackfill4ApiResponse
     */
    public function submitBackfill4Api($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitBackfill4ApiWithOptions($request, $headers, $runtime);
    }
}
