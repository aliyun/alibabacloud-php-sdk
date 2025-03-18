<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 新增或者修改用户大屏设置
     *  *
     * @param CreateScreenSettingRequest $request CreateScreenSettingRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScreenSettingResponse CreateScreenSettingResponse
     */
    public function createScreenSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->logoPower)) {
            $query['LogoPower'] = $request->logoPower;
        }
        if (!Utils::isUnset($request->logoUrl)) {
            $query['LogoUrl'] = $request->logoUrl;
        }
        if (!Utils::isUnset($request->monitorUrl)) {
            $query['MonitorUrl'] = $request->monitorUrl;
        }
        if (!Utils::isUnset($request->screenDataMap)) {
            $query['ScreenDataMap'] = $request->screenDataMap;
        }
        if (!Utils::isUnset($request->screenDefault)) {
            $query['ScreenDefault'] = $request->screenDefault;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateScreenSettingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScreenSettingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 新增或者修改用户大屏设置
     *  *
     * @param CreateScreenSettingRequest $request CreateScreenSettingRequest
     *
     * @return CreateScreenSettingResponse CreateScreenSettingResponse
     */
    public function createScreenSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScreenSettingWithOptions($request, $runtime);
    }

    /**
     * @summary 删除大屏设置
     *  *
     * @param DeleteScreenSettingRequest $request DeleteScreenSettingRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScreenSettingResponse DeleteScreenSettingResponse
     */
    public function deleteScreenSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteScreenSettingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteScreenSettingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除大屏设置
     *  *
     * @param DeleteScreenSettingRequest $request DeleteScreenSettingRequest
     *
     * @return DeleteScreenSettingResponse DeleteScreenSettingResponse
     */
    public function deleteScreenSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScreenSettingWithOptions($request, $runtime);
    }

    /**
     * @summary 查询安全大屏告警事件
     *  *
     * @param DescribeScreenAlarmEventListRequest $request DescribeScreenAlarmEventListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenAlarmEventListResponse DescribeScreenAlarmEventListResponse
     */
    public function describeScreenAlarmEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmEventName)) {
            $query['AlarmEventName'] = $request->alarmEventName;
        }
        if (!Utils::isUnset($request->alarmEventType)) {
            $query['AlarmEventType'] = $request->alarmEventType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->levels)) {
            $query['Levels'] = $request->levels;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->timeEnd)) {
            $query['TimeEnd'] = $request->timeEnd;
        }
        if (!Utils::isUnset($request->timeStart)) {
            $query['TimeStart'] = $request->timeStart;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenAlarmEventListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenAlarmEventListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询安全大屏告警事件
     *  *
     * @param DescribeScreenAlarmEventListRequest $request DescribeScreenAlarmEventListRequest
     *
     * @return DescribeScreenAlarmEventListResponse DescribeScreenAlarmEventListResponse
     */
    public function describeScreenAlarmEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenAlarmEventListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询大屏攻击防御事件
     *  *
     * @param DescribeScreenAttackAnalysisDataRequest $request DescribeScreenAttackAnalysisDataRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenAttackAnalysisDataResponse DescribeScreenAttackAnalysisDataResponse
     */
    public function describeScreenAttackAnalysisDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->base64)) {
            $query['Base64'] = $request->base64;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenAttackAnalysisDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenAttackAnalysisDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询大屏攻击防御事件
     *  *
     * @param DescribeScreenAttackAnalysisDataRequest $request DescribeScreenAttackAnalysisDataRequest
     *
     * @return DescribeScreenAttackAnalysisDataResponse DescribeScreenAttackAnalysisDataResponse
     */
    public function describeScreenAttackAnalysisData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenAttackAnalysisDataWithOptions($request, $runtime);
    }

    /**
     * @summary 查询云产品基线问题
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenCloudHcRiskResponse DescribeScreenCloudHcRiskResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenCloudHcRiskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenCloudHcRiskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询云产品基线问题
     *  *
     * @return DescribeScreenCloudHcRiskResponse DescribeScreenCloudHcRiskResponse
     */
    public function describeScreenCloudHcRisk()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenCloudHcRiskWithOptions($runtime);
    }

    /**
     * @summary 获取大屏可展示数据列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenDataMapResponse DescribeScreenDataMapResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenDataMapResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenDataMapResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取大屏可展示数据列表
     *  *
     * @return DescribeScreenDataMapResponse DescribeScreenDataMapResponse
     */
    public function describeScreenDataMap()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenDataMapWithOptions($runtime);
    }

    /**
     * @summary 查询云产品漏洞风险
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenEmerRiskResponse DescribeScreenEmerRiskResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenEmerRiskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenEmerRiskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询云产品漏洞风险
     *  *
     * @return DescribeScreenEmerRiskResponse DescribeScreenEmerRiskResponse
     */
    public function describeScreenEmerRisk()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenEmerRiskWithOptions($runtime);
    }

    /**
     * @summary 查询大屏主机统计数据
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenHostStatisticsResponse DescribeScreenHostStatisticsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenHostStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenHostStatisticsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询大屏主机统计数据
     *  *
     * @return DescribeScreenHostStatisticsResponse DescribeScreenHostStatisticsResponse
     */
    public function describeScreenHostStatistics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenHostStatisticsWithOptions($runtime);
    }

    /**
     * @summary 查看运营信息
     *  *
     * @param DescribeScreenOperateInfoRequest $request DescribeScreenOperateInfoRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenOperateInfoResponse DescribeScreenOperateInfoResponse
     */
    public function describeScreenOperateInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenOperateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenOperateInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查看运营信息
     *  *
     * @param DescribeScreenOperateInfoRequest $request DescribeScreenOperateInfoRequest
     *
     * @return DescribeScreenOperateInfoResponse DescribeScreenOperateInfoResponse
     */
    public function describeScreenOperateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenOperateInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询大屏上传信息
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenOssUploadInfoResponse DescribeScreenOssUploadInfoResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenOssUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenOssUploadInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询大屏上传信息
     *  *
     * @return DescribeScreenOssUploadInfoResponse DescribeScreenOssUploadInfoResponse
     */
    public function describeScreenOssUploadInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenOssUploadInfoWithOptions($runtime);
    }

    /**
     * @summary 查询安全大屏分数趋势
     *  *
     * @param DescribeScreenScoreThreadRequest $request DescribeScreenScoreThreadRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenScoreThreadResponse DescribeScreenScoreThreadResponse
     */
    public function describeScreenScoreThreadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenScoreThreadResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenScoreThreadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询安全大屏分数趋势
     *  *
     * @param DescribeScreenScoreThreadRequest $request DescribeScreenScoreThreadRequest
     *
     * @return DescribeScreenScoreThreadResponse DescribeScreenScoreThreadResponse
     */
    public function describeScreenScoreThread($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenScoreThreadWithOptions($request, $runtime);
    }

    /**
     * @summary 查询已处理的风险
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenSecurityStatInfoResponse DescribeScreenSecurityStatInfoResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenSecurityStatInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenSecurityStatInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询已处理的风险
     *  *
     * @return DescribeScreenSecurityStatInfoResponse DescribeScreenSecurityStatInfoResponse
     */
    public function describeScreenSecurityStatInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenSecurityStatInfoWithOptions($runtime);
    }

    /**
     * @summary 查询大屏配置
     *  *
     * @param DescribeScreenSettingRequest $request DescribeScreenSettingRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenSettingResponse DescribeScreenSettingResponse
     */
    public function describeScreenSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenSettingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenSettingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询大屏配置
     *  *
     * @param DescribeScreenSettingRequest $request DescribeScreenSettingRequest
     *
     * @return DescribeScreenSettingResponse DescribeScreenSettingResponse
     */
    public function describeScreenSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenSettingWithOptions($request, $runtime);
    }

    /**
     * @summary 查询大屏统计信息
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenSummaryInfoResponse DescribeScreenSummaryInfoResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenSummaryInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenSummaryInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询大屏统计信息
     *  *
     * @return DescribeScreenSummaryInfoResponse DescribeScreenSummaryInfoResponse
     */
    public function describeScreenSummaryInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenSummaryInfoWithOptions($runtime);
    }

    /**
     * @summary 获取大屏幕设置全部列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenTitlesResponse DescribeScreenTitlesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenTitlesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenTitlesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取大屏幕设置全部列表
     *  *
     * @return DescribeScreenTitlesResponse DescribeScreenTitlesResponse
     */
    public function describeScreenTitles()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenTitlesWithOptions($runtime);
    }

    /**
     * @summary 查询上传之后的图片显示地址
     *  *
     * @param DescribeScreenUploadPictureRequest $request DescribeScreenUploadPictureRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenUploadPictureResponse DescribeScreenUploadPictureResponse
     */
    public function describeScreenUploadPictureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logoUrl)) {
            $query['LogoUrl'] = $request->logoUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenUploadPictureResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenUploadPictureResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询上传之后的图片显示地址
     *  *
     * @param DescribeScreenUploadPictureRequest $request DescribeScreenUploadPictureRequest
     *
     * @return DescribeScreenUploadPictureResponse DescribeScreenUploadPictureResponse
     */
    public function describeScreenUploadPicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenUploadPictureWithOptions($request, $runtime);
    }

    /**
     * @summary 查询安全大屏版本配置
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScreenVersionConfigResponse DescribeScreenVersionConfigResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeScreenVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScreenVersionConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询安全大屏版本配置
     *  *
     * @return DescribeScreenVersionConfigResponse DescribeScreenVersionConfigResponse
     */
    public function describeScreenVersionConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScreenVersionConfigWithOptions($runtime);
    }

    /**
     * @summary 获取文件检测结果。
     *  *
     * @param GetFileDetectResultInnerRequest $request GetFileDetectResultInnerRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFileDetectResultInnerResponse GetFileDetectResultInnerResponse
     */
    public function getFileDetectResultInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dnaHashKeyList)) {
            $query['DnaHashKeyList'] = $request->dnaHashKeyList;
        }
        if (!Utils::isUnset($request->hashKeyList)) {
            $query['HashKeyList'] = $request->hashKeyList;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetFileDetectResultInnerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFileDetectResultInnerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取文件检测结果。
     *  *
     * @param GetFileDetectResultInnerRequest $request GetFileDetectResultInnerRequest
     *
     * @return GetFileDetectResultInnerResponse GetFileDetectResultInnerResponse
     */
    public function getFileDetectResultInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileDetectResultInnerWithOptions($request, $runtime);
    }

    /**
     * @summary 首页配置情况汇总接口
     *  *
     * @param ListGlobalUserConfigRequest $tmpReq  ListGlobalUserConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGlobalUserConfigResponse ListGlobalUserConfigResponse
     */
    public function listGlobalUserConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGlobalUserConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->moduleList)) {
            $request->moduleListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->moduleList, 'ModuleList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->moduleListShrink)) {
            $query['ModuleList'] = $request->moduleListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListGlobalUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGlobalUserConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 首页配置情况汇总接口
     *  *
     * @param ListGlobalUserConfigRequest $request ListGlobalUserConfigRequest
     *
     * @return ListGlobalUserConfigResponse ListGlobalUserConfigResponse
     */
    public function listGlobalUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGlobalUserConfigWithOptions($request, $runtime);
    }
}
