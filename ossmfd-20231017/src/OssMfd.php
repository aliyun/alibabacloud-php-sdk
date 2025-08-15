<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssMfd\V20231017;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\CheckMfdServiceOpenResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\CreateOssBucketScanTaskRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\CreateOssBucketScanTaskResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\CreateOssScanConfigRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\CreateOssScanConfigResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\DescribeExportInfoRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\DescribeExportInfoResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\DescribeServiceLinkedRoleStatusRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\DescribeServiceLinkedRoleStatusResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\ExportRecordRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\ExportRecordResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\GetFileDetectReportRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\GetFileDetectReportResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\GetOssBucketScanStatisticRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\GetOssBucketScanStatisticResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\GetOssScanConfigRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\GetOssScanConfigResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\ListObjectScanEventRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\ListObjectScanEventResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\ListOssBucketRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\ListOssBucketResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\ListOssBucketScanInfoRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\ListOssBucketScanInfoResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\ListSupportObjectSuffixResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\OperateBucketScanTaskRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\OperateBucketScanTaskResponse;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\UpdateOssScanConfigRequest;
use AlibabaCloud\SDK\OssMfd\V20231017\Models\UpdateOssScanConfigResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class OssMfd extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ossmfd', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 检查服务是否开通.
     *
     * @param request - CheckMfdServiceOpenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckMfdServiceOpenResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return CheckMfdServiceOpenResponse
     */
    public function checkMfdServiceOpenWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'CheckMfdServiceOpen',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckMfdServiceOpenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查服务是否开通.
     *
     * @returns CheckMfdServiceOpenResponse
     *
     * @return CheckMfdServiceOpenResponse
     */
    public function checkMfdServiceOpen()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMfdServiceOpenWithOptions($runtime);
    }

    /**
     * 创建bucket扫描任务
     *
     * @param request - CreateOssBucketScanTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOssBucketScanTaskResponse
     *
     * @param CreateOssBucketScanTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateOssBucketScanTaskResponse
     */
    public function createOssBucketScanTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allKeyPrefix) {
            @$query['AllKeyPrefix'] = $request->allKeyPrefix;
        }

        if (null !== $request->bucketNameList) {
            @$query['BucketNameList'] = $request->bucketNameList;
        }

        if (null !== $request->decompressMaxFileCount) {
            @$query['DecompressMaxFileCount'] = $request->decompressMaxFileCount;
        }

        if (null !== $request->decompressMaxLayer) {
            @$query['DecompressMaxLayer'] = $request->decompressMaxLayer;
        }

        if (null !== $request->decryptionList) {
            @$query['DecryptionList'] = $request->decryptionList;
        }

        if (null !== $request->excludeKeySuffixList) {
            @$query['ExcludeKeySuffixList'] = $request->excludeKeySuffixList;
        }

        if (null !== $request->keyPrefixList) {
            @$query['KeyPrefixList'] = $request->keyPrefixList;
        }

        if (null !== $request->keySuffixList) {
            @$query['KeySuffixList'] = $request->keySuffixList;
        }

        if (null !== $request->lastModifiedStartTime) {
            @$query['LastModifiedStartTime'] = $request->lastModifiedStartTime;
        }

        if (null !== $request->scanMode) {
            @$query['ScanMode'] = $request->scanMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOssBucketScanTask',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOssBucketScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建bucket扫描任务
     *
     * @param request - CreateOssBucketScanTaskRequest
     *
     * @returns CreateOssBucketScanTaskResponse
     *
     * @param CreateOssBucketScanTaskRequest $request
     *
     * @return CreateOssBucketScanTaskResponse
     */
    public function createOssBucketScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOssBucketScanTaskWithOptions($request, $runtime);
    }

    /**
     * 创建Bucket检测策略配置.
     *
     * @param request - CreateOssScanConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOssScanConfigResponse
     *
     * @param CreateOssScanConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateOssScanConfigResponse
     */
    public function createOssScanConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allKeyPrefix) {
            @$query['AllKeyPrefix'] = $request->allKeyPrefix;
        }

        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->decompressMaxFileCount) {
            @$query['DecompressMaxFileCount'] = $request->decompressMaxFileCount;
        }

        if (null !== $request->decompressMaxLayer) {
            @$query['DecompressMaxLayer'] = $request->decompressMaxLayer;
        }

        if (null !== $request->decryptionList) {
            @$query['DecryptionList'] = $request->decryptionList;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyPrefixList) {
            @$query['KeyPrefixList'] = $request->keyPrefixList;
        }

        if (null !== $request->keySuffixList) {
            @$query['KeySuffixList'] = $request->keySuffixList;
        }

        if (null !== $request->lastModifiedStartTime) {
            @$query['LastModifiedStartTime'] = $request->lastModifiedStartTime;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->realTimeIncr) {
            @$query['RealTimeIncr'] = $request->realTimeIncr;
        }

        if (null !== $request->scanDayList) {
            @$query['ScanDayList'] = $request->scanDayList;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOssScanConfig',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOssScanConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Bucket检测策略配置.
     *
     * @param request - CreateOssScanConfigRequest
     *
     * @returns CreateOssScanConfigResponse
     *
     * @param CreateOssScanConfigRequest $request
     *
     * @return CreateOssScanConfigResponse
     */
    public function createOssScanConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOssScanConfigWithOptions($request, $runtime);
    }

    /**
     * 查询导出信息.
     *
     * @param request - DescribeExportInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExportInfoResponse
     *
     * @param DescribeExportInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeExportInfoResponse
     */
    public function describeExportInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exportId) {
            @$query['ExportId'] = $request->exportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExportInfo',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExportInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询导出信息.
     *
     * @param request - DescribeExportInfoRequest
     *
     * @returns DescribeExportInfoResponse
     *
     * @param DescribeExportInfoRequest $request
     *
     * @return DescribeExportInfoResponse
     */
    public function describeExportInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportInfoWithOptions($request, $runtime);
    }

    /**
     * 查询您是否已创建云安全中心服务关联角色.
     *
     * @param request - DescribeServiceLinkedRoleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceLinkedRoleStatusResponse
     *
     * @param DescribeServiceLinkedRoleStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeServiceLinkedRoleStatusResponse
     */
    public function describeServiceLinkedRoleStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceLinkedRole) {
            @$query['ServiceLinkedRole'] = $request->serviceLinkedRole;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceLinkedRoleStatus',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceLinkedRoleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询您是否已创建云安全中心服务关联角色.
     *
     * @param request - DescribeServiceLinkedRoleStatusRequest
     *
     * @returns DescribeServiceLinkedRoleStatusResponse
     *
     * @param DescribeServiceLinkedRoleStatusRequest $request
     *
     * @return DescribeServiceLinkedRoleStatusResponse
     */
    public function describeServiceLinkedRoleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceLinkedRoleStatusWithOptions($request, $runtime);
    }

    /**
     * 导出恶意文件列表.
     *
     * @param request - ExportRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportRecordResponse
     *
     * @param ExportRecordRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExportRecordResponse
     */
    public function exportRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exportType) {
            @$query['ExportType'] = $request->exportType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportRecord',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出恶意文件列表.
     *
     * @param request - ExportRecordRequest
     *
     * @returns ExportRecordResponse
     *
     * @param ExportRecordRequest $request
     *
     * @return ExportRecordResponse
     */
    public function exportRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportRecordWithOptions($request, $runtime);
    }

    /**
     * 获取沙箱检测报告。
     *
     * @param request - GetFileDetectReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileDetectReportResponse
     *
     * @param GetFileDetectReportRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetFileDetectReportResponse
     */
    public function getFileDetectReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->field) {
            @$query['Field'] = $request->field;
        }

        if (null !== $request->fileHash) {
            @$query['FileHash'] = $request->fileHash;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFileDetectReport',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFileDetectReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取沙箱检测报告。
     *
     * @param request - GetFileDetectReportRequest
     *
     * @returns GetFileDetectReportResponse
     *
     * @param GetFileDetectReportRequest $request
     *
     * @return GetFileDetectReportResponse
     */
    public function getFileDetectReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileDetectReportWithOptions($request, $runtime);
    }

    /**
     * 获取bucket检测统计信息.
     *
     * @param request - GetOssBucketScanStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssBucketScanStatisticResponse
     *
     * @param GetOssBucketScanStatisticRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetOssBucketScanStatisticResponse
     */
    public function getOssBucketScanStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketNameList) {
            @$query['BucketNameList'] = $request->bucketNameList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssBucketScanStatistic',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssBucketScanStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取bucket检测统计信息.
     *
     * @param request - GetOssBucketScanStatisticRequest
     *
     * @returns GetOssBucketScanStatisticResponse
     *
     * @param GetOssBucketScanStatisticRequest $request
     *
     * @return GetOssBucketScanStatisticResponse
     */
    public function getOssBucketScanStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssBucketScanStatisticWithOptions($request, $runtime);
    }

    /**
     * 获取Bucket检测配置.
     *
     * @param request - GetOssScanConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssScanConfigResponse
     *
     * @param GetOssScanConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOssScanConfigResponse
     */
    public function getOssScanConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssScanConfig',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssScanConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Bucket检测配置.
     *
     * @param request - GetOssScanConfigRequest
     *
     * @returns GetOssScanConfigResponse
     *
     * @param GetOssScanConfigRequest $request
     *
     * @return GetOssScanConfigResponse
     */
    public function getOssScanConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssScanConfigWithOptions($request, $runtime);
    }

    /**
     * 获取文件检测告警列表.
     *
     * @param request - ListObjectScanEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListObjectScanEventResponse
     *
     * @param ListObjectScanEventRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListObjectScanEventResponse
     */
    public function listObjectScanEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->eventName) {
            @$query['EventName'] = $request->eventName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->md5) {
            @$query['Md5'] = $request->md5;
        }

        if (null !== $request->ossKey) {
            @$query['OssKey'] = $request->ossKey;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentEventId) {
            @$query['ParentEventId'] = $request->parentEventId;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->timeEnd) {
            @$query['TimeEnd'] = $request->timeEnd;
        }

        if (null !== $request->timeStart) {
            @$query['TimeStart'] = $request->timeStart;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListObjectScanEvent',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListObjectScanEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取文件检测告警列表.
     *
     * @param request - ListObjectScanEventRequest
     *
     * @returns ListObjectScanEventResponse
     *
     * @param ListObjectScanEventRequest $request
     *
     * @return ListObjectScanEventResponse
     */
    public function listObjectScanEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listObjectScanEventWithOptions($request, $runtime);
    }

    /**
     * 列举用户所有的bucket.
     *
     * @param request - ListOssBucketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOssBucketResponse
     *
     * @param ListOssBucketRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListOssBucketResponse
     */
    public function listOssBucketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOssBucket',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOssBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举用户所有的bucket.
     *
     * @param request - ListOssBucketRequest
     *
     * @returns ListOssBucketResponse
     *
     * @param ListOssBucketRequest $request
     *
     * @return ListOssBucketResponse
     */
    public function listOssBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOssBucketWithOptions($request, $runtime);
    }

    /**
     * 获取bucket详情.
     *
     * @param request - ListOssBucketScanInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOssBucketScanInfoResponse
     *
     * @param ListOssBucketScanInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListOssBucketScanInfoResponse
     */
    public function listOssBucketScanInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->fuzzBucketName) {
            @$query['FuzzBucketName'] = $request->fuzzBucketName;
        }

        if (null !== $request->hasRisk) {
            @$query['HasRisk'] = $request->hasRisk;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOssBucketScanInfo',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOssBucketScanInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取bucket详情.
     *
     * @param request - ListOssBucketScanInfoRequest
     *
     * @returns ListOssBucketScanInfoResponse
     *
     * @param ListOssBucketScanInfoRequest $request
     *
     * @return ListOssBucketScanInfoResponse
     */
    public function listOssBucketScanInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOssBucketScanInfoWithOptions($request, $runtime);
    }

    /**
     * 获取支持的文件后缀
     *
     * @param request - ListSupportObjectSuffixRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSupportObjectSuffixResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListSupportObjectSuffixResponse
     */
    public function listSupportObjectSuffixWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListSupportObjectSuffix',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSupportObjectSuffixResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取支持的文件后缀
     *
     * @returns ListSupportObjectSuffixResponse
     *
     * @return ListSupportObjectSuffixResponse
     */
    public function listSupportObjectSuffix()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSupportObjectSuffixWithOptions($runtime);
    }

    /**
     * 操作oss检测任务
     *
     * @param request - OperateBucketScanTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateBucketScanTaskResponse
     *
     * @param OperateBucketScanTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return OperateBucketScanTaskResponse
     */
    public function operateBucketScanTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->operateCode) {
            @$query['OperateCode'] = $request->operateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateBucketScanTask',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateBucketScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 操作oss检测任务
     *
     * @param request - OperateBucketScanTaskRequest
     *
     * @returns OperateBucketScanTaskResponse
     *
     * @param OperateBucketScanTaskRequest $request
     *
     * @return OperateBucketScanTaskResponse
     */
    public function operateBucketScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateBucketScanTaskWithOptions($request, $runtime);
    }

    /**
     * 修改Bucket检测配置.
     *
     * @param request - UpdateOssScanConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOssScanConfigResponse
     *
     * @param UpdateOssScanConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateOssScanConfigResponse
     */
    public function updateOssScanConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allKeyPrefix) {
            @$query['AllKeyPrefix'] = $request->allKeyPrefix;
        }

        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->decompressMaxFileCount) {
            @$query['DecompressMaxFileCount'] = $request->decompressMaxFileCount;
        }

        if (null !== $request->decompressMaxLayer) {
            @$query['DecompressMaxLayer'] = $request->decompressMaxLayer;
        }

        if (null !== $request->decryptionList) {
            @$query['DecryptionList'] = $request->decryptionList;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->keyPrefixList) {
            @$query['KeyPrefixList'] = $request->keyPrefixList;
        }

        if (null !== $request->keySuffixList) {
            @$query['KeySuffixList'] = $request->keySuffixList;
        }

        if (null !== $request->lastModifiedStartTime) {
            @$query['LastModifiedStartTime'] = $request->lastModifiedStartTime;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->realTimeIncr) {
            @$query['RealTimeIncr'] = $request->realTimeIncr;
        }

        if (null !== $request->scanDayList) {
            @$query['ScanDayList'] = $request->scanDayList;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOssScanConfig',
            'version' => '2023-10-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOssScanConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改Bucket检测配置.
     *
     * @param request - UpdateOssScanConfigRequest
     *
     * @returns UpdateOssScanConfigResponse
     *
     * @param UpdateOssScanConfigRequest $request
     *
     * @return UpdateOssScanConfigResponse
     */
    public function updateOssScanConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssScanConfigWithOptions($request, $runtime);
    }
}
