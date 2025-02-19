<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\DeleteSymRecordsRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\DeleteSymRecordsResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\DeleteSymRecordsShrinkRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetH5PageTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetH5PageTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetLaunchTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetLaunchTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNativePageTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNativePageTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNetworkTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNetworkTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetStatTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetStatTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetSymUploadParamRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetSymUploadParamResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetTodayStatTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetTodayStatTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\UpdateAlertPlanRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\UpdateAlertPlanResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\UploadSymbolFileAdvanceRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\UploadSymbolFileRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\UploadSymbolFileResponse;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Umengapm extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('umeng-apm', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 删除符号表记录.
     *
     * @param tmpReq - DeleteSymRecordsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSymRecordsResponse
     *
     * @param DeleteSymRecordsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSymRecordsResponse
     */
    public function deleteSymRecordsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteSymRecordsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->appVersions) {
            $request->appVersionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->appVersions, 'appVersions', 'simple');
        }

        $body = [];
        if (null !== $request->appVersionsShrink) {
            @$body['appVersions'] = $request->appVersionsShrink;
        }

        if (null !== $request->dataSourceId) {
            @$body['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->fileType) {
            @$body['fileType'] = $request->fileType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSymRecords',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/deleteSymRecords',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSymRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSymRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除符号表记录.
     *
     * @param request - DeleteSymRecordsRequest
     * @returns DeleteSymRecordsResponse
     *
     * @param DeleteSymRecordsRequest $request
     *
     * @return DeleteSymRecordsResponse
     */
    public function deleteSymRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSymRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取H5页面性能统计数据.
     *
     * @param request - GetH5PageTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetH5PageTrendResponse
     *
     * @param GetH5PageTrendRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetH5PageTrendResponse
     */
    public function getH5PageTrendWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['appVersion'] = $request->appVersion;
        }

        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['startDate'] = $request->startDate;
        }

        if (null !== $request->timeUnit) {
            @$query['timeUnit'] = $request->timeUnit;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetH5PageTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getH5PageTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetH5PageTrendResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetH5PageTrendResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取H5页面性能统计数据.
     *
     * @param request - GetH5PageTrendRequest
     * @returns GetH5PageTrendResponse
     *
     * @param GetH5PageTrendRequest $request
     *
     * @return GetH5PageTrendResponse
     */
    public function getH5PageTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getH5PageTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取启动性能统计数据.
     *
     * @param request - GetLaunchTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLaunchTrendResponse
     *
     * @param GetLaunchTrendRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetLaunchTrendResponse
     */
    public function getLaunchTrendWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['appVersion'] = $request->appVersion;
        }

        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['startDate'] = $request->startDate;
        }

        if (null !== $request->timeUnit) {
            @$query['timeUnit'] = $request->timeUnit;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLaunchTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getLaunchTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLaunchTrendResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLaunchTrendResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取启动性能统计数据.
     *
     * @param request - GetLaunchTrendRequest
     * @returns GetLaunchTrendResponse
     *
     * @param GetLaunchTrendRequest $request
     *
     * @return GetLaunchTrendResponse
     */
    public function getLaunchTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLaunchTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取原生页面性能统计数据.
     *
     * @param request - GetNativePageTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetNativePageTrendResponse
     *
     * @param GetNativePageTrendRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetNativePageTrendResponse
     */
    public function getNativePageTrendWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['appVersion'] = $request->appVersion;
        }

        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['startDate'] = $request->startDate;
        }

        if (null !== $request->timeUnit) {
            @$query['timeUnit'] = $request->timeUnit;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNativePageTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getNativePageTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNativePageTrendResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNativePageTrendResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取原生页面性能统计数据.
     *
     * @param request - GetNativePageTrendRequest
     * @returns GetNativePageTrendResponse
     *
     * @param GetNativePageTrendRequest $request
     *
     * @return GetNativePageTrendResponse
     */
    public function getNativePageTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNativePageTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取网络性能统计数据.
     *
     * @param request - GetNetworkTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetNetworkTrendResponse
     *
     * @param GetNetworkTrendRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetNetworkTrendResponse
     */
    public function getNetworkTrendWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['appVersion'] = $request->appVersion;
        }

        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['startDate'] = $request->startDate;
        }

        if (null !== $request->timeUnit) {
            @$query['timeUnit'] = $request->timeUnit;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNetworkTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getNetworkTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNetworkTrendResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNetworkTrendResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取网络性能统计数据.
     *
     * @param request - GetNetworkTrendRequest
     * @returns GetNetworkTrendResponse
     *
     * @param GetNetworkTrendRequest $request
     *
     * @return GetNetworkTrendResponse
     */
    public function getNetworkTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNetworkTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取离线统计数据.
     *
     * @param request - GetStatTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetStatTrendResponse
     *
     * @param GetStatTrendRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetStatTrendResponse
     */
    public function getStatTrendWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['appVersion'] = $request->appVersion;
        }

        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['startDate'] = $request->startDate;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStatTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getStatTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetStatTrendResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetStatTrendResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取离线统计数据.
     *
     * @param request - GetStatTrendRequest
     * @returns GetStatTrendResponse
     *
     * @param GetStatTrendRequest $request
     *
     * @return GetStatTrendResponse
     */
    public function getStatTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStatTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取符号表文件上传参数.
     *
     * @param request - GetSymUploadParamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSymUploadParamResponse
     *
     * @param GetSymUploadParamRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetSymUploadParamResponse
     */
    public function getSymUploadParamWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['appVersion'] = $request->appVersion;
        }

        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->fileType) {
            @$query['fileType'] = $request->fileType;
        }

        if (null !== $request->flutterName) {
            @$query['flutterName'] = $request->flutterName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSymUploadParam',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/getSymUploadParam',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSymUploadParamResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSymUploadParamResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取符号表文件上传参数.
     *
     * @param request - GetSymUploadParamRequest
     * @returns GetSymUploadParamResponse
     *
     * @param GetSymUploadParamRequest $request
     *
     * @return GetSymUploadParamResponse
     */
    public function getSymUploadParam($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSymUploadParamWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取今日实时统计数据.
     *
     * @param request - GetTodayStatTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTodayStatTrendResponse
     *
     * @param GetTodayStatTrendRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetTodayStatTrendResponse
     */
    public function getTodayStatTrendWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['appVersion'] = $request->appVersion;
        }

        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTodayStatTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getTodayStatTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTodayStatTrendResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTodayStatTrendResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取今日实时统计数据.
     *
     * @param request - GetTodayStatTrendRequest
     * @returns GetTodayStatTrendResponse
     *
     * @param GetTodayStatTrendRequest $request
     *
     * @return GetTodayStatTrendResponse
     */
    public function getTodayStatTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTodayStatTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新监控告警计划.
     *
     * @param request - UpdateAlertPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateAlertPlanResponse
     *
     * @param UpdateAlertPlanRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAlertPlanResponse
     */
    public function updateAlertPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->planId) {
            @$query['planId'] = $request->planId;
        }

        if (null !== $request->versions) {
            @$query['versions'] = $request->versions;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlertPlan',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/updateAlertPlan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAlertPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAlertPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新监控告警计划.
     *
     * @param request - UpdateAlertPlanRequest
     * @returns UpdateAlertPlanResponse
     *
     * @param UpdateAlertPlanRequest $request
     *
     * @return UpdateAlertPlanResponse
     */
    public function updateAlertPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlertPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * 上传符号表文件.
     *
     * @param request - UploadSymbolFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UploadSymbolFileResponse
     *
     * @param UploadSymbolFileRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UploadSymbolFileResponse
     */
    public function uploadSymbolFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['appVersion'] = $request->appVersion;
        }

        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->fileType) {
            @$query['fileType'] = $request->fileType;
        }

        if (null !== $request->flutterName) {
            @$query['flutterName'] = $request->flutterName;
        }

        if (null !== $request->ossUrl) {
            @$query['ossUrl'] = $request->ossUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadSymbolFile',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/uploadSymbolFile',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadSymbolFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadSymbolFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 上传符号表文件.
     *
     * @param request - UploadSymbolFileRequest
     * @returns UploadSymbolFileResponse
     *
     * @param UploadSymbolFileRequest $request
     *
     * @return UploadSymbolFileResponse
     */
    public function uploadSymbolFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadSymbolFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UploadSymbolFileAdvanceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UploadSymbolFileResponse
     */
    public function uploadSymbolFileAdvance($request, $headers, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'umeng-apm',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $uploadSymbolFileReq = new UploadSymbolFileRequest([]);
        Utils::convert($request, $uploadSymbolFileReq);
        if (null !== $request->ossUrlObject) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->ossUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $uploadSymbolFileReq->ossUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->uploadSymbolFileWithOptions($uploadSymbolFileReq, $headers, $runtime);
    }
}
