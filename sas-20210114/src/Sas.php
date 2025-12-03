<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Sas\V20210114\Models\CreateScreenSettingRequest;
use AlibabaCloud\SDK\Sas\V20210114\Models\CreateScreenSettingResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DeleteScreenSettingRequest;
use AlibabaCloud\SDK\Sas\V20210114\Models\DeleteScreenSettingResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenAlarmEventListRequest;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenAlarmEventListResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenAttackAnalysisDataRequest;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenAttackAnalysisDataResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenCloudHcRiskResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenEmerRiskResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenHostStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenOperateInfoRequest;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenOperateInfoResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenOssUploadInfoResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenScoreThreadRequest;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenScoreThreadResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSecurityStatInfoResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSettingRequest;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSettingResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSummaryInfoResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenTitlesResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenUploadPictureRequest;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenUploadPictureResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenVersionConfigResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\GetFileDetectResultInnerRequest;
use AlibabaCloud\SDK\Sas\V20210114\Models\GetFileDetectResultInnerResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\ListGlobalUserConfigRequest;
use AlibabaCloud\SDK\Sas\V20210114\Models\ListGlobalUserConfigResponse;
use AlibabaCloud\SDK\Sas\V20210114\Models\ListGlobalUserConfigShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Sas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-beijing' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-zhangjiakou' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-huhehaote' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-wulanchabu' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-hangzhou' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-shanghai' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-nanjing' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-fuzhou' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-shenzhen' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-heyuan' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-guangzhou' => 'tds.cn-shanghai.aliyuncs.com',
            'ap-southeast-2' => 'tds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-6' => 'tds.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2' => 'tds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3' => 'tds.ap-southeast-1.aliyuncs.com',
            'ap-northeast-1' => 'tds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-7' => 'tds.ap-southeast-1.aliyuncs.com',
            'cn-chengdu' => 'tds.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'tds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'tds.ap-southeast-1.aliyuncs.com',
            'cn-hongkong' => 'tds.cn-shanghai.aliyuncs.com',
            'eu-central-1' => 'tds.ap-southeast-1.aliyuncs.com',
            'us-east-1' => 'tds.ap-southeast-1.aliyuncs.com',
            'us-west-1' => 'tds.ap-southeast-1.aliyuncs.com',
            'eu-west-1' => 'tds.ap-southeast-1.aliyuncs.com',
            'me-east-1' => 'tds.ap-southeast-1.aliyuncs.com',
            'me-central-1' => 'tds.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'tds.ap-southeast-1.aliyuncs.com',
            'cn-beijing-finance-1' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-hangzhou-finance' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-shanghai-finance-1' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-heyuan-acdr-1' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-north-2-gov-1' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-qingdao-acdr-ut-1' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-shanghai-mybk' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-wuhan-lr' => 'tds.cn-shanghai.aliyuncs.com',
            'cn-zhengzhou-jva' => 'tds.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 新增或者修改用户大屏设置.
     *
     * @param request - CreateScreenSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScreenSettingResponse
     *
     * @param CreateScreenSettingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateScreenSettingResponse
     */
    public function createScreenSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->logoPower) {
            @$query['LogoPower'] = $request->logoPower;
        }

        if (null !== $request->logoUrl) {
            @$query['LogoUrl'] = $request->logoUrl;
        }

        if (null !== $request->monitorUrl) {
            @$query['MonitorUrl'] = $request->monitorUrl;
        }

        if (null !== $request->screenDataMap) {
            @$query['ScreenDataMap'] = $request->screenDataMap;
        }

        if (null !== $request->screenDefault) {
            @$query['ScreenDefault'] = $request->screenDefault;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScreenSetting',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScreenSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增或者修改用户大屏设置.
     *
     * @param request - CreateScreenSettingRequest
     *
     * @returns CreateScreenSettingResponse
     *
     * @param CreateScreenSettingRequest $request
     *
     * @return CreateScreenSettingResponse
     */
    public function createScreenSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScreenSettingWithOptions($request, $runtime);
    }

    /**
     * 删除大屏设置.
     *
     * @param request - DeleteScreenSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScreenSettingResponse
     *
     * @param DeleteScreenSettingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteScreenSettingResponse
     */
    public function deleteScreenSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScreenSetting',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScreenSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除大屏设置.
     *
     * @param request - DeleteScreenSettingRequest
     *
     * @returns DeleteScreenSettingResponse
     *
     * @param DeleteScreenSettingRequest $request
     *
     * @return DeleteScreenSettingResponse
     */
    public function deleteScreenSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScreenSettingWithOptions($request, $runtime);
    }

    /**
     * 查询安全大屏告警事件.
     *
     * @param request - DescribeScreenAlarmEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenAlarmEventListResponse
     *
     * @param DescribeScreenAlarmEventListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeScreenAlarmEventListResponse
     */
    public function describeScreenAlarmEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmEventName) {
            @$query['AlarmEventName'] = $request->alarmEventName;
        }

        if (null !== $request->alarmEventType) {
            @$query['AlarmEventType'] = $request->alarmEventType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dealed) {
            @$query['Dealed'] = $request->dealed;
        }

        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->levels) {
            @$query['Levels'] = $request->levels;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
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
            'action' => 'DescribeScreenAlarmEventList',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenAlarmEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询安全大屏告警事件.
     *
     * @param request - DescribeScreenAlarmEventListRequest
     *
     * @returns DescribeScreenAlarmEventListResponse
     *
     * @param DescribeScreenAlarmEventListRequest $request
     *
     * @return DescribeScreenAlarmEventListResponse
     */
    public function describeScreenAlarmEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenAlarmEventListWithOptions($request, $runtime);
    }

    /**
     * 查询大屏攻击防御事件.
     *
     * @param request - DescribeScreenAttackAnalysisDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenAttackAnalysisDataResponse
     *
     * @param DescribeScreenAttackAnalysisDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeScreenAttackAnalysisDataResponse
     */
    public function describeScreenAttackAnalysisDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->base64) {
            @$query['Base64'] = $request->base64;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScreenAttackAnalysisData',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenAttackAnalysisDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询大屏攻击防御事件.
     *
     * @param request - DescribeScreenAttackAnalysisDataRequest
     *
     * @returns DescribeScreenAttackAnalysisDataResponse
     *
     * @param DescribeScreenAttackAnalysisDataRequest $request
     *
     * @return DescribeScreenAttackAnalysisDataResponse
     */
    public function describeScreenAttackAnalysisData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenAttackAnalysisDataWithOptions($request, $runtime);
    }

    /**
     * 查询云产品基线问题.
     *
     * @param request - DescribeScreenCloudHcRiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenCloudHcRiskResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScreenCloudHcRiskResponse
     */
    public function describeScreenCloudHcRiskWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeScreenCloudHcRisk',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenCloudHcRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云产品基线问题.
     *
     * @returns DescribeScreenCloudHcRiskResponse
     *
     * @return DescribeScreenCloudHcRiskResponse
     */
    public function describeScreenCloudHcRisk()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenCloudHcRiskWithOptions($runtime);
    }

    /**
     * 获取大屏可展示数据列表.
     *
     * @param request - DescribeScreenDataMapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenDataMapResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScreenDataMapResponse
     */
    public function describeScreenDataMapWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeScreenDataMap',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenDataMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取大屏可展示数据列表.
     *
     * @returns DescribeScreenDataMapResponse
     *
     * @return DescribeScreenDataMapResponse
     */
    public function describeScreenDataMap()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenDataMapWithOptions($runtime);
    }

    /**
     * 查询云产品漏洞风险.
     *
     * @param request - DescribeScreenEmerRiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenEmerRiskResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScreenEmerRiskResponse
     */
    public function describeScreenEmerRiskWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeScreenEmerRisk',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenEmerRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云产品漏洞风险.
     *
     * @returns DescribeScreenEmerRiskResponse
     *
     * @return DescribeScreenEmerRiskResponse
     */
    public function describeScreenEmerRisk()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenEmerRiskWithOptions($runtime);
    }

    /**
     * 查询大屏主机统计数据.
     *
     * @param request - DescribeScreenHostStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenHostStatisticsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScreenHostStatisticsResponse
     */
    public function describeScreenHostStatisticsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeScreenHostStatistics',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenHostStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询大屏主机统计数据.
     *
     * @returns DescribeScreenHostStatisticsResponse
     *
     * @return DescribeScreenHostStatisticsResponse
     */
    public function describeScreenHostStatistics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenHostStatisticsWithOptions($runtime);
    }

    /**
     * 查看运营信息.
     *
     * @param request - DescribeScreenOperateInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenOperateInfoResponse
     *
     * @param DescribeScreenOperateInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScreenOperateInfoResponse
     */
    public function describeScreenOperateInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScreenOperateInfo',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenOperateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看运营信息.
     *
     * @param request - DescribeScreenOperateInfoRequest
     *
     * @returns DescribeScreenOperateInfoResponse
     *
     * @param DescribeScreenOperateInfoRequest $request
     *
     * @return DescribeScreenOperateInfoResponse
     */
    public function describeScreenOperateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenOperateInfoWithOptions($request, $runtime);
    }

    /**
     * 查询大屏上传信息.
     *
     * @param request - DescribeScreenOssUploadInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenOssUploadInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScreenOssUploadInfoResponse
     */
    public function describeScreenOssUploadInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeScreenOssUploadInfo',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenOssUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询大屏上传信息.
     *
     * @returns DescribeScreenOssUploadInfoResponse
     *
     * @return DescribeScreenOssUploadInfoResponse
     */
    public function describeScreenOssUploadInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenOssUploadInfoWithOptions($runtime);
    }

    /**
     * 查询安全大屏分数趋势
     *
     * @param request - DescribeScreenScoreThreadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenScoreThreadResponse
     *
     * @param DescribeScreenScoreThreadRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScreenScoreThreadResponse
     */
    public function describeScreenScoreThreadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScreenScoreThread',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenScoreThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询安全大屏分数趋势
     *
     * @param request - DescribeScreenScoreThreadRequest
     *
     * @returns DescribeScreenScoreThreadResponse
     *
     * @param DescribeScreenScoreThreadRequest $request
     *
     * @return DescribeScreenScoreThreadResponse
     */
    public function describeScreenScoreThread($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenScoreThreadWithOptions($request, $runtime);
    }

    /**
     * 查询已处理的风险.
     *
     * @param request - DescribeScreenSecurityStatInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenSecurityStatInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScreenSecurityStatInfoResponse
     */
    public function describeScreenSecurityStatInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeScreenSecurityStatInfo',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenSecurityStatInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询已处理的风险.
     *
     * @returns DescribeScreenSecurityStatInfoResponse
     *
     * @return DescribeScreenSecurityStatInfoResponse
     */
    public function describeScreenSecurityStatInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenSecurityStatInfoWithOptions($runtime);
    }

    /**
     * 查询大屏配置.
     *
     * @param request - DescribeScreenSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenSettingResponse
     *
     * @param DescribeScreenSettingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeScreenSettingResponse
     */
    public function describeScreenSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScreenSetting',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询大屏配置.
     *
     * @param request - DescribeScreenSettingRequest
     *
     * @returns DescribeScreenSettingResponse
     *
     * @param DescribeScreenSettingRequest $request
     *
     * @return DescribeScreenSettingResponse
     */
    public function describeScreenSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenSettingWithOptions($request, $runtime);
    }

    /**
     * 查询大屏统计信息.
     *
     * @param request - DescribeScreenSummaryInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenSummaryInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScreenSummaryInfoResponse
     */
    public function describeScreenSummaryInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeScreenSummaryInfo',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenSummaryInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询大屏统计信息.
     *
     * @returns DescribeScreenSummaryInfoResponse
     *
     * @return DescribeScreenSummaryInfoResponse
     */
    public function describeScreenSummaryInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenSummaryInfoWithOptions($runtime);
    }

    /**
     * 获取大屏幕设置全部列表.
     *
     * @param request - DescribeScreenTitlesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenTitlesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScreenTitlesResponse
     */
    public function describeScreenTitlesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeScreenTitles',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenTitlesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取大屏幕设置全部列表.
     *
     * @returns DescribeScreenTitlesResponse
     *
     * @return DescribeScreenTitlesResponse
     */
    public function describeScreenTitles()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenTitlesWithOptions($runtime);
    }

    /**
     * 查询上传之后的图片显示地址
     *
     * @param request - DescribeScreenUploadPictureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenUploadPictureResponse
     *
     * @param DescribeScreenUploadPictureRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeScreenUploadPictureResponse
     */
    public function describeScreenUploadPictureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logoUrl) {
            @$query['LogoUrl'] = $request->logoUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScreenUploadPicture',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenUploadPictureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询上传之后的图片显示地址
     *
     * @param request - DescribeScreenUploadPictureRequest
     *
     * @returns DescribeScreenUploadPictureResponse
     *
     * @param DescribeScreenUploadPictureRequest $request
     *
     * @return DescribeScreenUploadPictureResponse
     */
    public function describeScreenUploadPicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenUploadPictureWithOptions($request, $runtime);
    }

    /**
     * 查询安全大屏版本配置.
     *
     * @param request - DescribeScreenVersionConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScreenVersionConfigResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScreenVersionConfigResponse
     */
    public function describeScreenVersionConfigWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeScreenVersionConfig',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScreenVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询安全大屏版本配置.
     *
     * @returns DescribeScreenVersionConfigResponse
     *
     * @return DescribeScreenVersionConfigResponse
     */
    public function describeScreenVersionConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenVersionConfigWithOptions($runtime);
    }

    /**
     * 获取文件检测结果。
     *
     * @param request - GetFileDetectResultInnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileDetectResultInnerResponse
     *
     * @param GetFileDetectResultInnerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetFileDetectResultInnerResponse
     */
    public function getFileDetectResultInnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dnaHashKeyList) {
            @$query['DnaHashKeyList'] = $request->dnaHashKeyList;
        }

        if (null !== $request->hashKeyList) {
            @$query['HashKeyList'] = $request->hashKeyList;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFileDetectResultInner',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFileDetectResultInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取文件检测结果。
     *
     * @param request - GetFileDetectResultInnerRequest
     *
     * @returns GetFileDetectResultInnerResponse
     *
     * @param GetFileDetectResultInnerRequest $request
     *
     * @return GetFileDetectResultInnerResponse
     */
    public function getFileDetectResultInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileDetectResultInnerWithOptions($request, $runtime);
    }

    /**
     * 首页配置情况汇总接口.
     *
     * @param tmpReq - ListGlobalUserConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGlobalUserConfigResponse
     *
     * @param ListGlobalUserConfigRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListGlobalUserConfigResponse
     */
    public function listGlobalUserConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListGlobalUserConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->moduleList) {
            $request->moduleListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->moduleList, 'ModuleList', 'json');
        }

        $query = [];
        if (null !== $request->moduleListShrink) {
            @$query['ModuleList'] = $request->moduleListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGlobalUserConfig',
            'version' => '2021-01-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGlobalUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 首页配置情况汇总接口.
     *
     * @param request - ListGlobalUserConfigRequest
     *
     * @returns ListGlobalUserConfigResponse
     *
     * @param ListGlobalUserConfigRequest $request
     *
     * @return ListGlobalUserConfigResponse
     */
    public function listGlobalUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGlobalUserConfigWithOptions($request, $runtime);
    }
}
