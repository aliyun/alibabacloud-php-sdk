<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Exception\DaraException;
use AlibabaCloud\Dara\Exception\DaraUnableRetryException;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\RetryPolicy\RetryPolicyContext;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\DeleteSymRecordsRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\DeleteSymRecordsResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\DeleteSymRecordsShrinkRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetErrorMinuteStatTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetErrorMinuteStatTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetH5PageTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetH5PageTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetLaunchTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetLaunchTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNativePageTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNativePageTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNetworkMinuteTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNetworkMinuteTrendResponse;
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
use Darabonba\OpenApi\Exceptions\ClientException;
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
     * @param string         $bucketName
     * @param mixed[]        $form
     * @param RuntimeOptions $runtime
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form, $runtime)
    {
        $_runtime = [
            'key' => '' . ($runtime->key ?: $this->_key),
            'cert' => '' . ($runtime->cert ?: $this->_cert),
            'ca' => '' . ($runtime->ca ?: $this->_ca),
            'readTimeout' => (($runtime->readTimeout ?: $this->_readTimeout) + 0),
            'connectTimeout' => (($runtime->connectTimeout ?: $this->_connectTimeout) + 0),
            'httpProxy' => '' . ($runtime->httpProxy ?: $this->_httpProxy),
            'httpsProxy' => '' . ($runtime->httpsProxy ?: $this->_httpsProxy),
            'noProxy' => '' . ($runtime->noProxy ?: $this->_noProxy),
            'socks5Proxy' => '' . ($runtime->socks5Proxy ?: $this->_socks5Proxy),
            'socks5NetWork' => '' . ($runtime->socks5NetWork ?: $this->_socks5NetWork),
            'maxIdleConns' => (($runtime->maxIdleConns ?: $this->_maxIdleConns) + 0),
            'retryOptions' => $this->_retryOptions,
            'ignoreSSL' => (bool) (($runtime->ignoreSSL ?: false)),
            'tlsMinVersion' => $this->_tlsMinVersion,
        ];

        $_retriesAttempted = 0;
        $_lastRequest = null;
        $_lastResponse = null;
        $_context = new RetryPolicyContext([
            'retriesAttempted' => $_retriesAttempted,
        ]);
        while (Dara::shouldRetry($_runtime['retryOptions'], $_context)) {
            if ($_retriesAttempted > 0) {
                $_backoffTime = Dara::getBackoffDelay($_runtime['retryOptions'], $_context);
                if ($_backoffTime > 0) {
                    Dara::sleep($_backoffTime);
                }
            }

            ++$_retriesAttempted;

            try {
                $_request = new Request();
                $boundary = FormUtil::getBoundary();
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => '' . @$form['host'],
                    'date' => Utils::getDateUTCString(),
                    'user-agent' => Utils::getUserAgent(''),
                ];
                @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $_request->body = FormUtil::toFileForm($form, $boundary);
                $_lastRequest = $_request;
                $_response = Dara::send($_request, $_runtime);
                $_lastResponse = $_response;

                $respMap = null;
                $bodyStr = StreamUtil::readAsString($_response->body);
                if (($_response->statusCode >= 400) && ($_response->statusCode < 600)) {
                    $respMap = XML::parseXml($bodyStr, null);
                    $err = @$respMap['Error'];

                    throw new ClientException([
                        'code' => '' . @$err['Code'],
                        'message' => '' . @$err['Message'],
                        'data' => [
                            'httpCode' => $_response->statusCode,
                            'requestId' => '' . @$err['RequestId'],
                            'hostId' => '' . @$err['HostId'],
                        ],
                    ]);
                }

                $respMap = XML::parseXml($bodyStr, null);

                return Dara::merge([
                ], $respMap);
            } catch (DaraException $e) {
                $_context = new RetryPolicyContext([
                    'retriesAttempted' => $_retriesAttempted,
                    'lastRequest' => $_lastRequest,
                    'lastResponse' => $_lastResponse,
                    'exception' => $e,
                ]);

                continue;
            }
        }

        throw new DaraUnableRetryException($_context);
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
     *
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSymRecords',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/deleteSymRecords',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSymRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除符号表记录.
     *
     * @param Request - DeleteSymRecordsRequest
     *
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
     * 获取分钟粒度稳定性统计数据.
     *
     * @param Request - GetErrorMinuteStatTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetErrorMinuteStatTrendResponse
     *
     * @param GetErrorMinuteStatTrendRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetErrorMinuteStatTrendResponse
     */
    public function getErrorMinuteStatTrendWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetErrorMinuteStatTrend',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/stat/GetErrorMinuteStatTrend',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetErrorMinuteStatTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取分钟粒度稳定性统计数据.
     *
     * @param Request - GetErrorMinuteStatTrendRequest
     *
     * @returns GetErrorMinuteStatTrendResponse
     *
     * @param GetErrorMinuteStatTrendRequest $request
     *
     * @return GetErrorMinuteStatTrendResponse
     */
    public function getErrorMinuteStatTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getErrorMinuteStatTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取H5页面性能统计数据.
     *
     * @param Request - GetH5PageTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetH5PageTrend',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/stat/getH5PageTrend',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetH5PageTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取H5页面性能统计数据.
     *
     * @param Request - GetH5PageTrendRequest
     *
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
     * @param Request - GetLaunchTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLaunchTrend',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/stat/getLaunchTrend',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLaunchTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取启动性能统计数据.
     *
     * @param Request - GetLaunchTrendRequest
     *
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
     * @param Request - GetNativePageTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNativePageTrend',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/stat/getNativePageTrend',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetNativePageTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取原生页面性能统计数据.
     *
     * @param Request - GetNativePageTrendRequest
     *
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
     * 获取分钟粒度网络统计数据.
     *
     * @param Request - GetNetworkMinuteTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNetworkMinuteTrendResponse
     *
     * @param GetNetworkMinuteTrendRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetNetworkMinuteTrendResponse
     */
    public function getNetworkMinuteTrendWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSourceId) {
            @$query['dataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNetworkMinuteTrend',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/stat/getNetworkMinuteTrend',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetNetworkMinuteTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取分钟粒度网络统计数据.
     *
     * @param Request - GetNetworkMinuteTrendRequest
     *
     * @returns GetNetworkMinuteTrendResponse
     *
     * @param GetNetworkMinuteTrendRequest $request
     *
     * @return GetNetworkMinuteTrendResponse
     */
    public function getNetworkMinuteTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNetworkMinuteTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取网络性能统计数据.
     *
     * @param Request - GetNetworkTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNetworkTrend',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/stat/getNetworkTrend',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetNetworkTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取网络性能统计数据.
     *
     * @param Request - GetNetworkTrendRequest
     *
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
     * @param Request - GetStatTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStatTrend',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/stat/getStatTrend',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetStatTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取离线统计数据.
     *
     * @param Request - GetStatTrendRequest
     *
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
     * @param Request - GetSymUploadParamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSymUploadParam',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/getSymUploadParam',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSymUploadParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取符号表文件上传参数.
     *
     * @param Request - GetSymUploadParamRequest
     *
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
     * @param Request - GetTodayStatTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTodayStatTrend',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/stat/getTodayStatTrend',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTodayStatTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取今日实时统计数据.
     *
     * @param Request - GetTodayStatTrendRequest
     *
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
     * @param Request - UpdateAlertPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAlertPlan',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/updateAlertPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAlertPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新监控告警计划.
     *
     * @param Request - UpdateAlertPlanRequest
     *
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
     * @param Request - UploadSymbolFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadSymbolFile',
            'version' => '2022-02-14',
            'protocol' => 'HTTPS',
            'pathname' => '/uploadSymbolFile',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UploadSymbolFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传符号表文件.
     *
     * @param Request - UploadSymbolFileRequest
     *
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
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'umeng-apm',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $uploadSymbolFileReq = new UploadSymbolFileRequest([]);
        Utils::convert($request, $uploadSymbolFileReq);
        if (null !== $request->ossUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->ossUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $uploadSymbolFileReq->ossUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->uploadSymbolFileWithOptions($uploadSymbolFileReq, $headers, $runtime);
    }
}
