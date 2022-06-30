<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAdaptationRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAdaptationResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAdaptationShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateCapacityReservationRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateCapacityReservationResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateDatasetDeployTaskRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateDatasetDeployTaskResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateProjectRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateProjectResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateProjectShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAdaptationRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAdaptationResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetDatasetRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetDatasetResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetProjectRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetProjectResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyProjectRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyProjectResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyProjectShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\PageQueryProjectAppsRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\PageQueryProjectAppsResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\PageQueryProjectRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\PageQueryProjectResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryOfflineTaskProgressRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryOfflineTaskProgressResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\RefreshDistrictMetaResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\SubmitOfflineTaskRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\SubmitOfflineTaskResponse;
use AlibabaCloud\Tea\Tea;
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
     * @param CreateAdaptationRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAdaptationResponse
     */
    public function createAdaptationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAdaptationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adaptTarget)) {
            $request->adaptTargetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->adaptTarget), 'AdaptTarget', 'json');
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
     * @param CreateAdaptationRequest $request
     *
     * @return CreateAdaptationResponse
     */
    public function createAdaptation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAdaptationWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
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
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppSessionRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAppSessionResponse
     */
    public function createAppSessionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppSessionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resultStore)) {
            $request->resultStoreShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->resultStore), 'ResultStore', 'json');
        }
        if (!Utils::isUnset($tmpReq->startParametersV2)) {
            $request->startParametersV2Shrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->startParametersV2, 'StartParametersV2', 'json');
        }
        $query = [];
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
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->enablePostpaid)) {
            $query['EnablePostpaid'] = $request->enablePostpaid;
        }
        if (!Utils::isUnset($request->resultStoreShrink)) {
            $query['ResultStore'] = $request->resultStoreShrink;
        }
        if (!Utils::isUnset($request->startParameters)) {
            $query['StartParameters'] = $request->startParameters;
        }
        if (!Utils::isUnset($request->startParametersV2Shrink)) {
            $query['StartParametersV2'] = $request->startParametersV2Shrink;
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
     * @param CreateAppSessionRequest $request
     *
     * @return CreateAppSessionResponse
     */
    public function createAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSessionWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppSessionSyncRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateAppSessionSyncResponse
     */
    public function createAppSessionSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->speedInfo)) {
            $query['SpeedInfo'] = $request->speedInfo;
        }
        if (!Utils::isUnset($request->startParameters)) {
            $query['StartParameters'] = $request->startParameters;
        }
        if (!Utils::isUnset($request->systemInfo)) {
            $query['SystemInfo'] = $request->systemInfo;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['tags'] = $request->tags;
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
     * @param CreateAppSessionSyncRequest $request
     *
     * @return CreateAppSessionSyncResponse
     */
    public function createAppSessionSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSessionSyncWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAppVersionResponse
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
     * @param CreateAppVersionRequest $request
     *
     * @return CreateAppVersionResponse
     */
    public function createAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param CreateCapacityReservationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateCapacityReservationResponse
     */
    public function createCapacityReservationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->districtId)) {
            $query['DistrictId'] = $request->districtId;
        }
        if (!Utils::isUnset($request->expectResourceReadyTime)) {
            $query['ExpectResourceReadyTime'] = $request->expectResourceReadyTime;
        }
        if (!Utils::isUnset($request->expectSessionCapacity)) {
            $query['ExpectSessionCapacity'] = $request->expectSessionCapacity;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @param CreateCapacityReservationRequest $request
     *
     * @return CreateCapacityReservationResponse
     */
    public function createCapacityReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCapacityReservationWithOptions($request, $runtime);
    }

    /**
     * @param CreateDatasetDeployTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDatasetDeployTaskResponse
     */
    public function createDatasetDeployTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->customParam)) {
            $query['CustomParam'] = $request->customParam;
        }
        if (!Utils::isUnset($request->needUnzip)) {
            $query['NeedUnzip'] = $request->needUnzip;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossFilePath)) {
            $query['OssFilePath'] = $request->ossFilePath;
        }
        if (!Utils::isUnset($request->ossRegionId)) {
            $query['OssRegionId'] = $request->ossRegionId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDatasetDeployTask',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDatasetDeployTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDatasetDeployTaskRequest $request
     *
     * @return CreateDatasetDeployTaskResponse
     */
    public function createDatasetDeployTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetDeployTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->boundAppIdList)) {
            $request->boundAppIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->boundAppIdList, 'BoundAppIdList', 'json');
        }
        if (!Utils::isUnset($tmpReq->projectQuotaLimit)) {
            $request->projectQuotaLimitShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->projectQuotaLimit), 'ProjectQuotaLimit', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->boundAppIdListShrink)) {
            $body['BoundAppIdList'] = $request->boundAppIdListShrink;
        }
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->projectMemo)) {
            $body['ProjectMemo'] = $request->projectMemo;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->projectQuotaLimitShrink)) {
            $body['ProjectQuotaLimit'] = $request->projectQuotaLimitShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
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
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAppVersionResponse
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
     * @param DeleteAppVersionRequest $request
     *
     * @return DeleteAppVersionResponse
     */
    public function deleteAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * @param GetAdaptationRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAdaptationResponse
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
     * @param GetAdaptationRequest $request
     *
     * @return GetAdaptationResponse
     */
    public function getAdaptation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAdaptationWithOptions($request, $runtime);
    }

    /**
     * @param GetAppRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetAppResponse
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
     * @param GetAppRequest $request
     *
     * @return GetAppResponse
     */
    public function getApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppWithOptions($request, $runtime);
    }

    /**
     * @param GetAppSessionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAppSessionResponse
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
     * @param GetAppSessionRequest $request
     *
     * @return GetAppSessionResponse
     */
    public function getAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSessionWithOptions($request, $runtime);
    }

    /**
     * @param GetAppVersionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAppVersionResponse
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
     * @param GetAppVersionRequest $request
     *
     * @return GetAppVersionResponse
     */
    public function getAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param GetDatasetRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetDatasetResponse
     */
    public function getDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataset',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDatasetRequest $request
     *
     * @return GetDatasetResponse
     */
    public function getDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatasetWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectWithOptions($request, $runtime);
    }

    /**
     * @param ListAppRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListAppResponse
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
     * @param ListAppRequest $request
     *
     * @return ListAppResponse
     */
    public function listApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppWithOptions($request, $runtime);
    }

    /**
     * @param ListAppSessionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAppSessionsResponse
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
     * @param ListAppSessionsRequest $request
     *
     * @return ListAppSessionsResponse
     */
    public function listAppSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppSessionsWithOptions($request, $runtime);
    }

    /**
     * @param ListAppVersionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAppVersionResponse
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
     * @param ListAppVersionRequest $request
     *
     * @return ListAppVersionResponse
     */
    public function listAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyAppResponse
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
     * @param ModifyAppRequest $request
     *
     * @return ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAppVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyAppVersionResponse
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
     * @param ModifyAppVersionRequest $request
     *
     * @return ModifyAppVersionResponse
     */
    public function modifyAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProjectRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyProjectResponse
     */
    public function modifyProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->boundAppIdList)) {
            $request->boundAppIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->boundAppIdList, 'BoundAppIdList', 'json');
        }
        if (!Utils::isUnset($tmpReq->projectQuotaLimit)) {
            $request->projectQuotaLimitShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->projectQuotaLimit), 'ProjectQuotaLimit', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->boundAppIdListShrink)) {
            $body['BoundAppIdList'] = $request->boundAppIdListShrink;
        }
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectMemo)) {
            $body['ProjectMemo'] = $request->projectMemo;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->projectQuotaLimitShrink)) {
            $body['ProjectQuotaLimit'] = $request->projectQuotaLimitShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyProject',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyProjectRequest $request
     *
     * @return ModifyProjectResponse
     */
    public function modifyProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProjectWithOptions($request, $runtime);
    }

    /**
     * @param PageQueryProjectRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PageQueryProjectResponse
     */
    public function pageQueryProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keySearch)) {
            $body['KeySearch'] = $request->keySearch;
        }
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
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
            'action'      => 'PageQueryProject',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageQueryProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PageQueryProjectRequest $request
     *
     * @return PageQueryProjectResponse
     */
    public function pageQueryProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageQueryProjectWithOptions($request, $runtime);
    }

    /**
     * @param PageQueryProjectAppsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PageQueryProjectAppsResponse
     */
    public function pageQueryProjectAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operatorId)) {
            $body['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorType)) {
            $body['OperatorType'] = $request->operatorType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
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
            'action'      => 'PageQueryProjectApps',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageQueryProjectAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PageQueryProjectAppsRequest $request
     *
     * @return PageQueryProjectAppsResponse
     */
    public function pageQueryProjectApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageQueryProjectAppsWithOptions($request, $runtime);
    }

    /**
     * @param QueryOfflineTaskProgressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryOfflineTaskProgressResponse
     */
    public function queryOfflineTaskProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->versionId)) {
            $body['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOfflineTaskProgress',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOfflineTaskProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOfflineTaskProgressRequest $request
     *
     * @return QueryOfflineTaskProgressResponse
     */
    public function queryOfflineTaskProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOfflineTaskProgressWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RefreshDistrictMetaResponse
     */
    public function refreshDistrictMetaWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RefreshDistrictMeta',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshDistrictMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RefreshDistrictMetaResponse
     */
    public function refreshDistrictMeta()
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDistrictMetaWithOptions($runtime);
    }

    /**
     * @param StopAppSessionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopAppSessionResponse
     */
    public function stopAppSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customSessionId)) {
            $query['CustomSessionId'] = $request->customSessionId;
        }
        if (!Utils::isUnset($request->platformSessionId)) {
            $query['PlatformSessionId'] = $request->platformSessionId;
        }
        if (!Utils::isUnset($request->stopParam)) {
            $query['StopParam'] = $request->stopParam;
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
     * @param StopAppSessionRequest $request
     *
     * @return StopAppSessionResponse
     */
    public function stopAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAppSessionWithOptions($request, $runtime);
    }

    /**
     * @param SubmitOfflineTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitOfflineTaskResponse
     */
    public function submitOfflineTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        if (!Utils::isUnset($request->versionId)) {
            $body['VersionId'] = $request->versionId;
        }
        if (!Utils::isUnset($request->versionName)) {
            $body['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitOfflineTask',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitOfflineTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitOfflineTaskRequest $request
     *
     * @return SubmitOfflineTaskResponse
     */
    public function submitOfflineTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitOfflineTaskWithOptions($request, $runtime);
    }
}
