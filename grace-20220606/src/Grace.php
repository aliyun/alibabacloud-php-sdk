<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Grace\V20220606;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Grace\V20220606\Models\AnalyzeFileRequest;
use AlibabaCloud\SDK\Grace\V20220606\Models\AnalyzeFileResponse;
use AlibabaCloud\SDK\Grace\V20220606\Models\GetFileRequest;
use AlibabaCloud\SDK\Grace\V20220606\Models\GetFileResponse;
use AlibabaCloud\SDK\Grace\V20220606\Models\UploadFileByOSSRequest;
use AlibabaCloud\SDK\Grace\V20220606\Models\UploadFileByOSSResponse;
use AlibabaCloud\SDK\Grace\V20220606\Models\UploadFileByURLRequest;
use AlibabaCloud\SDK\Grace\V20220606\Models\UploadFileByURLResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Grace extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('grace', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AnalyzeFileRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AnalyzeFileResponse
     */
    public function analyzeFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keepUnreachableObjects)) {
            $query['keepUnreachableObjects'] = $request->keepUnreachableObjects;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->token)) {
            $query['token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AnalyzeFile',
            'version'     => '2022-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/AnalyzeFile',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AnalyzeFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AnalyzeFileRequest $request
     *
     * @return AnalyzeFileResponse
     */
    public function analyzeFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->analyzeFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetFileRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFileResponse
     */
    public function getFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->token)) {
            $query['token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFile',
            'version'     => '2022-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/GetFile',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFileRequest $request
     *
     * @return GetFileResponse
     */
    public function getFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UploadFileByOSSRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UploadFileByOSSResponse
     */
    public function uploadFileByOSSWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['bucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $query['endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->objectName)) {
            $query['objectName'] = $request->objectName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadFileByOSS',
            'version'     => '2022-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/UploadFileByOSS',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UploadFileByOSSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadFileByOSSRequest $request
     *
     * @return UploadFileByOSSResponse
     */
    public function uploadFileByOSS($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadFileByOSSWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UploadFileByURLRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UploadFileByURLResponse
     */
    public function uploadFileByURLWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            $query['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->url)) {
            $query['url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadFileByURL',
            'version'     => '2022-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/UploadFileByURL',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UploadFileByURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadFileByURLRequest $request
     *
     * @return UploadFileByURLResponse
     */
    public function uploadFileByURL($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadFileByURLWithOptions($request, $headers, $runtime);
    }
}
