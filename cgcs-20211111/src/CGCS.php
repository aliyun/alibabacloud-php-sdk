<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CGCS\V20211111\Models\BatchCheckSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\BatchCheckSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\BatchCheckSessionShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CancelReserveTaskRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CancelReserveTaskResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAdaptationRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAdaptationResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAdaptationShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateCapacityReservationRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateCapacityReservationResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DescribeInstanceStatsInfoRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DescribeInstanceStatsInfoResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAdaptationRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAdaptationResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppCcuRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppCcuResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetCapacityRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetCapacityResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetReserveTaskDetailRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetReserveTaskDetailResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetResourcePublicIPsRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetResourcePublicIPsResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListInstancesRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListInstancesResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReleaseCapacityByBatchRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReleaseCapacityByBatchResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReleaseCapacityRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReleaseCapacityResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReleaseInstancesRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReleaseInstancesResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReserveInstancesRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ReserveInstancesResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\SendBizCocChangeCallbackRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\SendBizCocChangeCallbackResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionBatchRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionBatchResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionBatchShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\UpdateSessionBizStatusRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\UpdateSessionBizStatusResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CGCS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cgcs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 批量检查异常会话
     *  *
     * @param BatchCheckSessionRequest $tmpReq  BatchCheckSessionRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCheckSessionResponse BatchCheckSessionResponse
     */
    public function batchCheckSessionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchCheckSessionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->records)) {
            $request->recordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->records, 'Records', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->recordsShrink)) {
            $query['Records'] = $request->recordsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchCheckSession',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchCheckSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量检查异常会话
     *  *
     * @param BatchCheckSessionRequest $request BatchCheckSessionRequest
     *
     * @return BatchCheckSessionResponse BatchCheckSessionResponse
     */
    public function batchCheckSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCheckSessionWithOptions($request, $runtime);
    }

    /**
     * @summary 取消 session 资源预定任务
     *  *
     * @param CancelReserveTaskRequest $request CancelReserveTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelReserveTaskResponse CancelReserveTaskResponse
     */
    public function cancelReserveTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelReserveTask',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelReserveTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消 session 资源预定任务
     *  *
     * @param CancelReserveTaskRequest $request CancelReserveTaskRequest
     *
     * @return CancelReserveTaskResponse CancelReserveTaskResponse
     */
    public function cancelReserveTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelReserveTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 提交适配请求
     *  *
     * @param CreateAdaptationRequest $tmpReq  CreateAdaptationRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAdaptationResponse CreateAdaptationResponse
     */
    public function createAdaptationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAdaptationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adaptTarget)) {
            $request->adaptTargetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->adaptTarget, 'AdaptTarget', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->adaptTargetShrink)) {
            $body['AdaptTarget'] = $request->adaptTargetShrink;
        }
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAdaptation',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAdaptationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交适配请求
     *  *
     * @param CreateAdaptationRequest $request CreateAdaptationRequest
     *
     * @return CreateAdaptationResponse CreateAdaptationResponse
     */
    public function createAdaptation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAdaptationWithOptions($request, $runtime);
    }

    /**
     * @summary 应用创建服务
     *  *
     * @param CreateAppRequest $request CreateAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->streamingAppId)) {
            $body['StreamingAppId'] = $request->streamingAppId;
        }
        if (!Utils::isUnset($request->streamingSolution)) {
            $body['StreamingSolution'] = $request->streamingSolution;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用创建服务
     *  *
     * @param CreateAppRequest $request CreateAppRequest
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @summary 增加实时生产资源的相关字段
     *  *
     * @param CreateAppSessionRequest $request CreateAppSessionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppSessionResponse CreateAppSessionResponse
     */
    public function createAppSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adapterFileId)) {
            $query['AdapterFileId'] = $request->adapterFileId;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->customSessionId)) {
            $query['CustomSessionId'] = $request->customSessionId;
        }
        if (!Utils::isUnset($request->customUserId)) {
            $query['CustomUserId'] = $request->customUserId;
        }
        if (!Utils::isUnset($request->districtId)) {
            $query['DistrictId'] = $request->districtId;
        }
        if (!Utils::isUnset($request->enablePostpaid)) {
            $query['EnablePostpaid'] = $request->enablePostpaid;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->startParameters)) {
            $query['StartParameters'] = $request->startParameters;
        }
        if (!Utils::isUnset($request->systemInfo)) {
            $query['SystemInfo'] = $request->systemInfo;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppSession',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 增加实时生产资源的相关字段
     *  *
     * @param CreateAppSessionRequest $request CreateAppSessionRequest
     *
     * @return CreateAppSessionResponse CreateAppSessionResponse
     */
    public function createAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSessionWithOptions($request, $runtime);
    }

    /**
     * @summary 批量创建会话
     *  *
     * @param CreateAppSessionBatchRequest $tmpReq  CreateAppSessionBatchRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppSessionBatchResponse CreateAppSessionBatchResponse
     */
    public function createAppSessionBatchWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppSessionBatchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->appInfos)) {
            $request->appInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->appInfos, 'AppInfos', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appInfosShrink)) {
            $query['AppInfos'] = $request->appInfosShrink;
        }
        if (!Utils::isUnset($request->customTaskId)) {
            $query['CustomTaskId'] = $request->customTaskId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppSessionBatch',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppSessionBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量创建会话
     *  *
     * @param CreateAppSessionBatchRequest $request CreateAppSessionBatchRequest
     *
     * @return CreateAppSessionBatchResponse CreateAppSessionBatchResponse
     */
    public function createAppSessionBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSessionBatchWithOptions($request, $runtime);
    }

    /**
     * @summary 同步批量创建多个会话
     *  *
     * @param CreateAppSessionBatchSyncRequest $tmpReq  CreateAppSessionBatchSyncRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppSessionBatchSyncResponse CreateAppSessionBatchSyncResponse
     */
    public function createAppSessionBatchSyncWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppSessionBatchSyncShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->appInfos)) {
            $request->appInfosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->appInfos, 'AppInfos', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appInfosShrink)) {
            $query['AppInfos'] = $request->appInfosShrink;
        }
        if (!Utils::isUnset($request->batchId)) {
            $query['BatchId'] = $request->batchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppSessionBatchSync',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppSessionBatchSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 同步批量创建多个会话
     *  *
     * @param CreateAppSessionBatchSyncRequest $request CreateAppSessionBatchSyncRequest
     *
     * @return CreateAppSessionBatchSyncResponse CreateAppSessionBatchSyncResponse
     */
    public function createAppSessionBatchSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSessionBatchSyncWithOptions($request, $runtime);
    }

    /**
     * @summary 同步创建会话
     *  *
     * @param CreateAppSessionSyncRequest $request CreateAppSessionSyncRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppSessionSyncResponse CreateAppSessionSyncResponse
     */
    public function createAppSessionSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adapterFileId)) {
            $query['AdapterFileId'] = $request->adapterFileId;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->customSessionId)) {
            $query['CustomSessionId'] = $request->customSessionId;
        }
        if (!Utils::isUnset($request->customUserId)) {
            $query['CustomUserId'] = $request->customUserId;
        }
        if (!Utils::isUnset($request->districtId)) {
            $query['DistrictId'] = $request->districtId;
        }
        if (!Utils::isUnset($request->matchRules)) {
            $query['MatchRules'] = $request->matchRules;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->startParameters)) {
            $query['StartParameters'] = $request->startParameters;
        }
        if (!Utils::isUnset($request->systemInfo)) {
            $query['SystemInfo'] = $request->systemInfo;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppSessionSync',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppSessionSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 同步创建会话
     *  *
     * @param CreateAppSessionSyncRequest $request CreateAppSessionSyncRequest
     *
     * @return CreateAppSessionSyncResponse CreateAppSessionSyncResponse
     */
    public function createAppSessionSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSessionSyncWithOptions($request, $runtime);
    }

    /**
     * @summary 应用版本创建服务
     *  *
     * @param CreateAppVersionRequest $request CreateAppVersionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppVersionResponse CreateAppVersionResponse
     */
    public function createAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersionName)) {
            $body['AppVersionName'] = $request->appVersionName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAppVersion',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用版本创建服务
     *  *
     * @param CreateAppVersionRequest $request CreateAppVersionRequest
     *
     * @return CreateAppVersionResponse CreateAppVersionResponse
     */
    public function createAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppVersionWithOptions($request, $runtime);
    }

    /**
     * @summary 预定session资源
     *  *
     * @param CreateCapacityReservationRequest $request CreateCapacityReservationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCapacityReservationResponse CreateCapacityReservationResponse
     */
    public function createCapacityReservationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $body['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->districtId)) {
            $body['DistrictId'] = $request->districtId;
        }
        if (!Utils::isUnset($request->expectResourceReadyTime)) {
            $body['ExpectResourceReadyTime'] = $request->expectResourceReadyTime;
        }
        if (!Utils::isUnset($request->expectSessionCapacity)) {
            $body['ExpectSessionCapacity'] = $request->expectSessionCapacity;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCapacityReservation',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCapacityReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 预定session资源
     *  *
     * @param CreateCapacityReservationRequest $request CreateCapacityReservationRequest
     *
     * @return CreateCapacityReservationResponse CreateCapacityReservationResponse
     */
    public function createCapacityReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCapacityReservationWithOptions($request, $runtime);
    }

    /**
     * @summary 应用删除接口
     *  *
     * @param DeleteAppRequest $request DeleteAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppResponse DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteApp',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用删除接口
     *  *
     * @param DeleteAppRequest $request DeleteAppRequest
     *
     * @return DeleteAppResponse DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @summary 应用版本删除接口
     *  *
     * @param DeleteAppVersionRequest $request DeleteAppVersionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppVersionResponse DeleteAppVersionResponse
     */
    public function deleteAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppVersion',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用版本删除接口
     *  *
     * @param DeleteAppVersionRequest $request DeleteAppVersionRequest
     *
     * @return DeleteAppVersionResponse DeleteAppVersionResponse
     */
    public function deleteAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceStatsInfoRequest $request DescribeInstanceStatsInfoRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceStatsInfoResponse DescribeInstanceStatsInfoResponse
     */
    public function describeInstanceStatsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceStatsInfo',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceStatsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceStatsInfoRequest $request DescribeInstanceStatsInfoRequest
     *
     * @return DescribeInstanceStatsInfoResponse DescribeInstanceStatsInfoResponse
     */
    public function describeInstanceStatsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStatsInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取适配申请详情
     *  *
     * @param GetAdaptationRequest $request GetAdaptationRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAdaptationResponse GetAdaptationResponse
     */
    public function getAdaptationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->adaptApplyId)) {
            $body['AdaptApplyId'] = $request->adaptApplyId;
        }
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAdaptation',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAdaptationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取适配申请详情
     *  *
     * @param GetAdaptationRequest $request GetAdaptationRequest
     *
     * @return GetAdaptationResponse GetAdaptationResponse
     */
    public function getAdaptation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAdaptationWithOptions($request, $runtime);
    }

    /**
     * @summary 应用详情接口
     *  *
     * @param GetAppRequest  $request GetAppRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppResponse GetAppResponse
     */
    public function getAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetApp',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用详情接口
     *  *
     * @param GetAppRequest $request GetAppRequest
     *
     * @return GetAppResponse GetAppResponse
     */
    public function getApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppWithOptions($request, $runtime);
    }

    /**
     * @summary 查询会话并发数
     *  *
     * @param GetAppCcuRequest $request GetAppCcuRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppCcuResponse GetAppCcuResponse
     */
    public function getAppCcuWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppCcu',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppCcuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询会话并发数
     *  *
     * @param GetAppCcuRequest $request GetAppCcuRequest
     *
     * @return GetAppCcuResponse GetAppCcuResponse
     */
    public function getAppCcu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppCcuWithOptions($request, $runtime);
    }

    /**
     * @summary 获取App会话信息
     *  *
     * @param GetAppSessionRequest $request GetAppSessionRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppSessionResponse GetAppSessionResponse
     */
    public function getAppSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customSessionId)) {
            $query['CustomSessionId'] = $request->customSessionId;
        }
        if (!Utils::isUnset($request->platformSessionId)) {
            $query['PlatformSessionId'] = $request->platformSessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppSession',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取App会话信息
     *  *
     * @param GetAppSessionRequest $request GetAppSessionRequest
     *
     * @return GetAppSessionResponse GetAppSessionResponse
     */
    public function getAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSessionWithOptions($request, $runtime);
    }

    /**
     * @summary 应用版本详情接口
     *  *
     * @param GetAppVersionRequest $request GetAppVersionRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppVersionResponse GetAppVersionResponse
     */
    public function getAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAppVersion',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用版本详情接口
     *  *
     * @param GetAppVersionRequest $request GetAppVersionRequest
     *
     * @return GetAppVersionResponse GetAppVersionResponse
     */
    public function getAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppVersionWithOptions($request, $runtime);
    }

    /**
     * @summary 查询 session 会话容量信息
     *  *
     * @param GetCapacityRequest $request GetCapacityRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCapacityResponse GetCapacityResponse
     */
    public function getCapacityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $body['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->districtId)) {
            $body['DistrictId'] = $request->districtId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCapacity',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询 session 会话容量信息
     *  *
     * @param GetCapacityRequest $request GetCapacityRequest
     *
     * @return GetCapacityResponse GetCapacityResponse
     */
    public function getCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCapacityWithOptions($request, $runtime);
    }

    /**
     * @summary 查询预定任务的详情信息
     *  *
     * @param GetReserveTaskDetailRequest $request GetReserveTaskDetailRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetReserveTaskDetailResponse GetReserveTaskDetailResponse
     */
    public function getReserveTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetReserveTaskDetail',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetReserveTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询预定任务的详情信息
     *  *
     * @param GetReserveTaskDetailRequest $request GetReserveTaskDetailRequest
     *
     * @return GetReserveTaskDetailResponse GetReserveTaskDetailResponse
     */
    public function getReserveTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getReserveTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查询公网ip
     *  *
     * @param GetResourcePublicIPsRequest $request GetResourcePublicIPsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourcePublicIPsResponse GetResourcePublicIPsResponse
     */
    public function getResourcePublicIPsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetResourcePublicIPs',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourcePublicIPsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询公网ip
     *  *
     * @param GetResourcePublicIPsRequest $request GetResourcePublicIPsRequest
     *
     * @return GetResourcePublicIPsResponse GetResourcePublicIPsResponse
     */
    public function getResourcePublicIPs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourcePublicIPsWithOptions($request, $runtime);
    }

    /**
     * @summary 应用列表接口
     *  *
     * @param ListAppRequest $request ListAppRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppResponse ListAppResponse
     */
    public function listAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keySearch)) {
            $body['KeySearch'] = $request->keySearch;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListApp',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用列表接口
     *  *
     * @param ListAppRequest $request ListAppRequest
     *
     * @return ListAppResponse ListAppResponse
     */
    public function listApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppWithOptions($request, $runtime);
    }

    /**
     * @summary 查询App会话
     *  *
     * @param ListAppSessionsRequest $request ListAppSessionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppSessionsResponse ListAppSessionsResponse
     */
    public function listAppSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->customSessionIds)) {
            $query['CustomSessionIds'] = $request->customSessionIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platformSessionIds)) {
            $query['PlatformSessionIds'] = $request->platformSessionIds;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppSessions',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询App会话
     *  *
     * @param ListAppSessionsRequest $request ListAppSessionsRequest
     *
     * @return ListAppSessionsResponse ListAppSessionsResponse
     */
    public function listAppSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppSessionsWithOptions($request, $runtime);
    }

    /**
     * @summary 应用版本列表接口
     *  *
     * @param ListAppVersionRequest $request ListAppVersionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppVersionResponse ListAppVersionResponse
     */
    public function listAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAppVersion',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用版本列表接口
     *  *
     * @param ListAppVersionRequest $request ListAppVersionRequest
     *
     * @return ListAppVersionResponse ListAppVersionResponse
     */
    public function listAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppVersionWithOptions($request, $runtime);
    }

    /**
     * @summary 查询GCS实例列表
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询GCS实例列表
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 应用修改服务
     *  *
     * @param ModifyAppRequest $request ModifyAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppResponse ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyApp',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用修改服务
     *  *
     * @param ModifyAppRequest $request ModifyAppRequest
     *
     * @return ModifyAppResponse ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @summary 应用版本修改服务
     *  *
     * @param ModifyAppVersionRequest $request ModifyAppVersionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppVersionResponse ModifyAppVersionResponse
     */
    public function modifyAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        if (!Utils::isUnset($request->appVersionName)) {
            $body['AppVersionName'] = $request->appVersionName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppVersion',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用版本修改服务
     *  *
     * @param ModifyAppVersionRequest $request ModifyAppVersionRequest
     *
     * @return ModifyAppVersionResponse ModifyAppVersionResponse
     */
    public function modifyAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppVersionWithOptions($request, $runtime);
    }

    /**
     * @summary 释放 session 资源预定的资源
     *  *
     * @param ReleaseCapacityRequest $request ReleaseCapacityRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseCapacityResponse ReleaseCapacityResponse
     */
    public function releaseCapacityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $body['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->districtId)) {
            $body['DistrictId'] = $request->districtId;
        }
        if (!Utils::isUnset($request->expectReleaseSessionCapacity)) {
            $body['ExpectReleaseSessionCapacity'] = $request->expectReleaseSessionCapacity;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReleaseCapacity',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放 session 资源预定的资源
     *  *
     * @param ReleaseCapacityRequest $request ReleaseCapacityRequest
     *
     * @return ReleaseCapacityResponse ReleaseCapacityResponse
     */
    public function releaseCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseCapacityWithOptions($request, $runtime);
    }

    /**
     * @summary 根据资源批次号释放 session 资源预定的资源
     *  *
     * @param ReleaseCapacityByBatchRequest $request ReleaseCapacityByBatchRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseCapacityByBatchResponse ReleaseCapacityByBatchResponse
     */
    public function releaseCapacityByBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resBatchId)) {
            $body['ResBatchId'] = $request->resBatchId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReleaseCapacityByBatch',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseCapacityByBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据资源批次号释放 session 资源预定的资源
     *  *
     * @param ReleaseCapacityByBatchRequest $request ReleaseCapacityByBatchRequest
     *
     * @return ReleaseCapacityByBatchResponse ReleaseCapacityByBatchResponse
     */
    public function releaseCapacityByBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseCapacityByBatchWithOptions($request, $runtime);
    }

    /**
     * @summary 退订GCS实例
     *  *
     * @param ReleaseInstancesRequest $request ReleaseInstancesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstancesResponse ReleaseInstancesResponse
     */
    public function releaseInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->amount)) {
            $body['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->districtId)) {
            $body['DistrictId'] = $request->districtId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstances',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 退订GCS实例
     *  *
     * @param ReleaseInstancesRequest $request ReleaseInstancesRequest
     *
     * @return ReleaseInstancesResponse ReleaseInstancesResponse
     */
    public function releaseInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 预定GCS实例
     *  *
     * @param ReserveInstancesRequest $request ReserveInstancesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ReserveInstancesResponse ReserveInstancesResponse
     */
    public function reserveInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->amount)) {
            $body['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->districtId)) {
            $body['DistrictId'] = $request->districtId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReserveInstances',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReserveInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 预定GCS实例
     *  *
     * @param ReserveInstancesRequest $request ReserveInstancesRequest
     *
     * @return ReserveInstancesResponse ReserveInstancesResponse
     */
    public function reserveInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reserveInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 发送业务能力变更结果回调
     *  *
     * @param SendBizCocChangeCallbackRequest $request SendBizCocChangeCallbackRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SendBizCocChangeCallbackResponse SendBizCocChangeCallbackResponse
     */
    public function sendBizCocChangeCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->platformSessionId)) {
            $query['PlatformSessionId'] = $request->platformSessionId;
        }
        if (!Utils::isUnset($request->result)) {
            $query['Result'] = $request->result;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendBizCocChangeCallback',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendBizCocChangeCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发送业务能力变更结果回调
     *  *
     * @param SendBizCocChangeCallbackRequest $request SendBizCocChangeCallbackRequest
     *
     * @return SendBizCocChangeCallbackResponse SendBizCocChangeCallbackResponse
     */
    public function sendBizCocChangeCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendBizCocChangeCallbackWithOptions($request, $runtime);
    }

    /**
     * @summary 停止App会话
     *  *
     * @param StopAppSessionRequest $tmpReq  StopAppSessionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StopAppSessionResponse StopAppSessionResponse
     */
    public function stopAppSessionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopAppSessionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->stopParam)) {
            $request->stopParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->stopParam, 'StopParam', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->customSessionId)) {
            $query['CustomSessionId'] = $request->customSessionId;
        }
        if (!Utils::isUnset($request->platformSessionId)) {
            $query['PlatformSessionId'] = $request->platformSessionId;
        }
        if (!Utils::isUnset($request->stopParamShrink)) {
            $query['StopParam'] = $request->stopParamShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAppSession',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopAppSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止App会话
     *  *
     * @param StopAppSessionRequest $request StopAppSessionRequest
     *
     * @return StopAppSessionResponse StopAppSessionResponse
     */
    public function stopAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAppSessionWithOptions($request, $runtime);
    }

    /**
     * @summary 批量停止会话接口
     *  *
     * @param StopAppSessionBatchRequest $tmpReq  StopAppSessionBatchRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StopAppSessionBatchResponse StopAppSessionBatchResponse
     */
    public function stopAppSessionBatchWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopAppSessionBatchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->stopParam)) {
            $request->stopParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->stopParam, 'StopParam', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->batchId)) {
            $query['BatchId'] = $request->batchId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->stopParamShrink)) {
            $query['StopParam'] = $request->stopParamShrink;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAppSessionBatch',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopAppSessionBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量停止会话接口
     *  *
     * @param StopAppSessionBatchRequest $request StopAppSessionBatchRequest
     *
     * @return StopAppSessionBatchResponse StopAppSessionBatchResponse
     */
    public function stopAppSessionBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAppSessionBatchWithOptions($request, $runtime);
    }

    /**
     * @summary 更新会话状态
     *  *
     * @param UpdateSessionBizStatusRequest $request UpdateSessionBizStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSessionBizStatusResponse UpdateSessionBizStatusResponse
     */
    public function updateSessionBizStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizStatus)) {
            $query['BizStatus'] = $request->bizStatus;
        }
        if (!Utils::isUnset($request->platformSessionId)) {
            $query['PlatformSessionId'] = $request->platformSessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSessionBizStatus',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSessionBizStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新会话状态
     *  *
     * @param UpdateSessionBizStatusRequest $request UpdateSessionBizStatusRequest
     *
     * @return UpdateSessionBizStatusResponse UpdateSessionBizStatusResponse
     */
    public function updateSessionBizStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSessionBizStatusWithOptions($request, $runtime);
    }
}
