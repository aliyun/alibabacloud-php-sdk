<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateIllustrationTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateIllustrationTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateTextTaskRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateTextTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetIllustrationResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetIllustrationTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetOssUploadTokenRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetOssUploadTokenResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTaskResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextsRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextsResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextThemesRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListTextThemesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class IntelligentCreation extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('intelligentcreation', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 创建配图生成任务
     *  *
     * @param string                        $textId
     * @param CreateIllustrationTaskRequest $request CreateIllustrationTaskRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIllustrationTaskResponse CreateIllustrationTaskResponse
     */
    public function createIllustrationTaskWithOptions($textId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateIllustrationTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/texts/' . OpenApiUtilClient::getEncodeParam($textId) . '/illustrationTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIllustrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建配图生成任务
     *  *
     * @param string                        $textId
     * @param CreateIllustrationTaskRequest $request CreateIllustrationTaskRequest
     *
     * @return CreateIllustrationTaskResponse CreateIllustrationTaskResponse
     */
    public function createIllustrationTask($textId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIllustrationTaskWithOptions($textId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建文案生成任务
     *  *
     * @param CreateTextTaskRequest $request CreateTextTaskRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTextTaskResponse CreateTextTaskResponse
     */
    public function createTextTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateTextTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/textTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建文案生成任务
     *  *
     * @param CreateTextTaskRequest $request CreateTextTaskRequest
     *
     * @return CreateTextTaskResponse CreateTextTaskResponse
     */
    public function createTextTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTextTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询配图
     *  *
     * @param string         $textId
     * @param string         $illustrationId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetIllustrationResponse GetIllustrationResponse
     */
    public function getIllustrationWithOptions($textId, $illustrationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIllustration',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/texts/' . OpenApiUtilClient::getEncodeParam($textId) . '/illustrations/' . OpenApiUtilClient::getEncodeParam($illustrationId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIllustrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询配图
     *  *
     * @param string $textId
     * @param string $illustrationId
     *
     * @return GetIllustrationResponse GetIllustrationResponse
     */
    public function getIllustration($textId, $illustrationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIllustrationWithOptions($textId, $illustrationId, $headers, $runtime);
    }

    /**
     * @summary 查询配图任务
     *  *
     * @param string         $textId
     * @param string         $illustrationTaskId
     * @param string[]       $headers            map
     * @param RuntimeOptions $runtime            runtime options for this request RuntimeOptions
     *
     * @return GetIllustrationTaskResponse GetIllustrationTaskResponse
     */
    public function getIllustrationTaskWithOptions($textId, $illustrationTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIllustrationTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/texts/' . OpenApiUtilClient::getEncodeParam($textId) . '/illustrationTasks/' . OpenApiUtilClient::getEncodeParam($illustrationTaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIllustrationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询配图任务
     *  *
     * @param string $textId
     * @param string $illustrationTaskId
     *
     * @return GetIllustrationTaskResponse GetIllustrationTaskResponse
     */
    public function getIllustrationTask($textId, $illustrationTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIllustrationTaskWithOptions($textId, $illustrationTaskId, $headers, $runtime);
    }

    /**
     * @summary 获取图片上传oss token
     *  *
     * @param GetOssUploadTokenRequest $request GetOssUploadTokenRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssUploadTokenResponse GetOssUploadTokenResponse
     */
    public function getOssUploadTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['fileType'] = $request->fileType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssUploadToken',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/uploadToken',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOssUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取图片上传oss token
     *  *
     * @param GetOssUploadTokenRequest $request GetOssUploadTokenRequest
     *
     * @return GetOssUploadTokenResponse GetOssUploadTokenResponse
     */
    public function getOssUploadToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOssUploadTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询文案
     *  *
     * @param string         $textId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTextResponse GetTextResponse
     */
    public function getTextWithOptions($textId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetText',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/texts/' . OpenApiUtilClient::getEncodeParam($textId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询文案
     *  *
     * @param string $textId
     *
     * @return GetTextResponse GetTextResponse
     */
    public function getText($textId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextWithOptions($textId, $headers, $runtime);
    }

    /**
     * @summary 查询文案任务
     *  *
     * @param string         $textTaskId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetTextTaskResponse GetTextTaskResponse
     */
    public function getTextTaskWithOptions($textTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTextTask',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/textTasks/' . OpenApiUtilClient::getEncodeParam($textTaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTextTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询文案任务
     *  *
     * @param string $textTaskId
     *
     * @return GetTextTaskResponse GetTextTaskResponse
     */
    public function getTextTask($textTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTextTaskWithOptions($textTaskId, $headers, $runtime);
    }

    /**
     * @summary 查询文案主题列表
     *  *
     * @param ListTextThemesRequest $request ListTextThemesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTextThemesResponse ListTextThemesResponse
     */
    public function listTextThemesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->industry)) {
            $query['industry'] = $request->industry;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTextThemes',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/textThemes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTextThemesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询文案主题列表
     *  *
     * @param ListTextThemesRequest $request ListTextThemesRequest
     *
     * @return ListTextThemesResponse ListTextThemesResponse
     */
    public function listTextThemes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextThemesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列举文案
     *  *
     * @param ListTextsRequest $request ListTextsRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTextsResponse ListTextsResponse
     */
    public function listTextsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->generationSource)) {
            $query['generationSource'] = $request->generationSource;
        }
        if (!Utils::isUnset($request->industry)) {
            $query['industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->publishStatus)) {
            $query['publishStatus'] = $request->publishStatus;
        }
        if (!Utils::isUnset($request->textStyleType)) {
            $query['textStyleType'] = $request->textStyleType;
        }
        if (!Utils::isUnset($request->textTheme)) {
            $query['textTheme'] = $request->textTheme;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTexts',
            'version'     => '2024-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/texts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTextsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举文案
     *  *
     * @param ListTextsRequest $request ListTextsRequest
     *
     * @return ListTextsResponse ListTextsResponse
     */
    public function listTexts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTextsWithOptions($request, $headers, $runtime);
    }
}
