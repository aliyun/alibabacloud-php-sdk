<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetErrorRequest;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetErrorResponse;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetErrorsRequest;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetErrorsResponse;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetErrorsShrinkRequest;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssueRequest;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssueResponse;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssueShrinkRequest;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssuesRequest;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssuesResponse;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssuesShrinkRequest;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetSymbolicFilesRequest;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetSymbolicFilesResponse;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\RequestUploadTokenRequest;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\RequestUploadTokenResponse;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\SubmitSymbolicRequest;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\SubmitSymbolicResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Emasappmonitor extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('emas-appmonitor', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 获取错误事件详情.
     *
     * @param request - GetErrorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetErrorResponse
     *
     * @param GetErrorRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetErrorResponse
     */
    public function getErrorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appKey) {
            @$body['AppKey'] = $request->appKey;
        }

        if (null !== $request->bizModule) {
            @$body['BizModule'] = $request->bizModule;
        }

        if (null !== $request->clientTime) {
            @$body['ClientTime'] = $request->clientTime;
        }

        if (null !== $request->did) {
            @$body['Did'] = $request->did;
        }

        if (null !== $request->force) {
            @$body['Force'] = $request->force;
        }

        if (null !== $request->os) {
            @$body['Os'] = $request->os;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetError',
            'version' => '2019-06-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetErrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取错误事件详情.
     *
     * @param request - GetErrorRequest
     *
     * @returns GetErrorResponse
     *
     * @param GetErrorRequest $request
     *
     * @return GetErrorResponse
     */
    public function getError($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErrorWithOptions($request, $runtime);
    }

    /**
     * 获取某一聚合错误下所有的错误事件列表.
     *
     * @param tmpReq - GetErrorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetErrorsResponse
     *
     * @param GetErrorsRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return GetErrorsResponse
     */
    public function getErrorsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetErrorsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $body = [];
        if (null !== $request->appKey) {
            @$body['AppKey'] = $request->appKey;
        }

        if (null !== $request->bizModule) {
            @$body['BizModule'] = $request->bizModule;
        }

        if (null !== $request->digestHash) {
            @$body['DigestHash'] = $request->digestHash;
        }

        if (null !== $request->filterShrink) {
            @$body['Filter'] = $request->filterShrink;
        }

        if (null !== $request->os) {
            @$body['Os'] = $request->os;
        }

        if (null !== $request->pageIndex) {
            @$body['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $bodyFlat = [];
        if (null !== $request->timeRange) {
            @$bodyFlat['TimeRange'] = $request->timeRange;
        }

        if (null !== $request->utdid) {
            @$body['Utdid'] = $request->utdid;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetErrors',
            'version' => '2019-06-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetErrorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取某一聚合错误下所有的错误事件列表.
     *
     * @param request - GetErrorsRequest
     *
     * @returns GetErrorsResponse
     *
     * @param GetErrorsRequest $request
     *
     * @return GetErrorsResponse
     */
    public function getErrors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErrorsWithOptions($request, $runtime);
    }

    /**
     * 获取聚合错误详情.
     *
     * @param tmpReq - GetIssueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIssueResponse
     *
     * @param GetIssueRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return GetIssueResponse
     */
    public function getIssueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetIssueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $body = [];
        if (null !== $request->appKey) {
            @$body['AppKey'] = $request->appKey;
        }

        if (null !== $request->bizModule) {
            @$body['BizModule'] = $request->bizModule;
        }

        if (null !== $request->digestHash) {
            @$body['DigestHash'] = $request->digestHash;
        }

        if (null !== $request->filterShrink) {
            @$body['Filter'] = $request->filterShrink;
        }

        if (null !== $request->os) {
            @$body['Os'] = $request->os;
        }

        $bodyFlat = [];
        if (null !== $request->timeRange) {
            @$bodyFlat['TimeRange'] = $request->timeRange;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetIssue',
            'version' => '2019-06-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIssueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取聚合错误详情.
     *
     * @param request - GetIssueRequest
     *
     * @returns GetIssueResponse
     *
     * @param GetIssueRequest $request
     *
     * @return GetIssueResponse
     */
    public function getIssue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIssueWithOptions($request, $runtime);
    }

    /**
     * 获取聚合错误列表.
     *
     * @param tmpReq - GetIssuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIssuesResponse
     *
     * @param GetIssuesRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return GetIssuesResponse
     */
    public function getIssuesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetIssuesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $body = [];
        if (null !== $request->appKey) {
            @$body['AppKey'] = $request->appKey;
        }

        if (null !== $request->bizModule) {
            @$body['BizModule'] = $request->bizModule;
        }

        if (null !== $request->filterShrink) {
            @$body['Filter'] = $request->filterShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$body['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$body['OrderType'] = $request->orderType;
        }

        if (null !== $request->os) {
            @$body['Os'] = $request->os;
        }

        if (null !== $request->pageIndex) {
            @$body['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $bodyFlat = [];
        if (null !== $request->timeRange) {
            @$bodyFlat['TimeRange'] = $request->timeRange;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetIssues',
            'version' => '2019-06-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIssuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取聚合错误列表.
     *
     * @param request - GetIssuesRequest
     *
     * @returns GetIssuesResponse
     *
     * @param GetIssuesRequest $request
     *
     * @return GetIssuesResponse
     */
    public function getIssues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIssuesWithOptions($request, $runtime);
    }

    /**
     * 获取符号表文件列表.
     *
     * @param request - GetSymbolicFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSymbolicFilesResponse
     *
     * @param GetSymbolicFilesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSymbolicFilesResponse
     */
    public function getSymbolicFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appKey) {
            @$body['AppKey'] = $request->appKey;
        }

        if (null !== $request->appVersion) {
            @$body['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->buildId) {
            @$body['BuildId'] = $request->buildId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->exportStatus) {
            @$body['ExportStatus'] = $request->exportStatus;
        }

        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->fileType) {
            @$body['FileType'] = $request->fileType;
        }

        if (null !== $request->os) {
            @$body['Os'] = $request->os;
        }

        if (null !== $request->pageIndex) {
            @$body['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSymbolicFiles',
            'version' => '2019-06-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSymbolicFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取符号表文件列表.
     *
     * @param request - GetSymbolicFilesRequest
     *
     * @returns GetSymbolicFilesResponse
     *
     * @param GetSymbolicFilesRequest $request
     *
     * @return GetSymbolicFilesResponse
     */
    public function getSymbolicFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSymbolicFilesWithOptions($request, $runtime);
    }

    /**
     * @param request - RequestUploadTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RequestUploadTokenResponse
     *
     * @param RequestUploadTokenRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RequestUploadTokenResponse
     */
    public function requestUploadTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appKey) {
            @$body['AppKey'] = $request->appKey;
        }

        if (null !== $request->os) {
            @$body['Os'] = $request->os;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RequestUploadToken',
            'version' => '2019-06-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RequestUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RequestUploadTokenRequest
     *
     * @returns RequestUploadTokenResponse
     *
     * @param RequestUploadTokenRequest $request
     *
     * @return RequestUploadTokenResponse
     */
    public function requestUploadToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestUploadTokenWithOptions($request, $runtime);
    }

    /**
     * @param request - SubmitSymbolicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSymbolicResponse
     *
     * @param SubmitSymbolicRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitSymbolicResponse
     */
    public function submitSymbolicWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appKey) {
            @$body['AppKey'] = $request->appKey;
        }

        if (null !== $request->appVersion) {
            @$body['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->buildId) {
            @$body['BuildId'] = $request->buildId;
        }

        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->filePath) {
            @$body['FilePath'] = $request->filePath;
        }

        if (null !== $request->fileType) {
            @$body['FileType'] = $request->fileType;
        }

        if (null !== $request->os) {
            @$body['Os'] = $request->os;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitSymbolic',
            'version' => '2019-06-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSymbolicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SubmitSymbolicRequest
     *
     * @returns SubmitSymbolicResponse
     *
     * @param SubmitSymbolicRequest $request
     *
     * @return SubmitSymbolicResponse
     */
    public function submitSymbolic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSymbolicWithOptions($request, $runtime);
    }
}
