<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddHotspotFileRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddHotspotFileResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddMosaicsRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddMosaicsResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddRelativePositionRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddRelativePositionResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddRoomPlanRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddRoomPlanResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CheckUserPropertyRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CheckUserPropertyResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CopySceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CopySceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CreateUploadPolicyRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CreateUploadPolicyResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetConnDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetConnDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetCopySceneTaskStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetCopySceneTaskStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotSceneDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotSceneDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotTagRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotTagResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetLayoutDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetLayoutDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOriginLayoutDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOriginLayoutDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOssPolicyRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOssPolicyResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetPackSceneTaskStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetPackSceneTaskStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetRectifyImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetRectifyImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneBuildTaskStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneBuildTaskStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePackUrlRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePackUrlResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewInfoRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewInfoResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewResourceRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewResourceResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSingleConnDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSingleConnDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSourcePackStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSourcePackStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSubSceneTaskStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSubSceneTaskStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetWindowConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetWindowConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LabelBuildRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LabelBuildResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LinkImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LinkImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\OptimizeRightAngleRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\OptimizeRightAngleResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PackSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PackSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PackSourceRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PackSourceResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredictionWallLineRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredictionWallLineResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishHotspotConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishHotspotConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishHotspotRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishHotspotResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RecoveryOriginImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RecoveryOriginImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectifyImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectifyImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectVerticalRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectVerticalResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RollbackSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RollbackSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagListRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagListResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveMinimapRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveMinimapResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveModelConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveModelConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ScenePublishRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ScenePublishResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateConnDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateConnDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateLayoutDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateLayoutDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSubSceneSeqRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSubSceneSeqResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSubSceneSeqShrinkRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSubSceneShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Tdsr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'lyj.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('tdsr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 保存模型文件.
     *
     * @param request - AddHotspotFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddHotspotFileResponse
     *
     * @param AddHotspotFileRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddHotspotFileResponse
     */
    public function addHotspotFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddHotspotFile',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddHotspotFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存模型文件.
     *
     * @param request - AddHotspotFileRequest
     *
     * @returns AddHotspotFileResponse
     *
     * @param AddHotspotFileRequest $request
     *
     * @return AddHotspotFileResponse
     */
    public function addHotspotFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addHotspotFileWithOptions($request, $runtime);
    }

    /**
     * 打马赛克.
     *
     * @param request - AddMosaicsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMosaicsResponse
     *
     * @param AddMosaicsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddMosaicsResponse
     */
    public function addMosaicsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->markPosition) {
            @$query['MarkPosition'] = $request->markPosition;
        }

        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddMosaics',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddMosaicsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打马赛克.
     *
     * @param request - AddMosaicsRequest
     *
     * @returns AddMosaicsResponse
     *
     * @param AddMosaicsRequest $request
     *
     * @return AddMosaicsResponse
     */
    public function addMosaics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMosaicsWithOptions($request, $runtime);
    }

    /**
     * 添加项目.
     *
     * @param request - AddProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddProjectResponse
     *
     * @param AddProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddProjectResponse
     */
    public function addProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessId) {
            @$query['BusinessId'] = $request->businessId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddProject',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加项目.
     *
     * @param request - AddProjectRequest
     *
     * @returns AddProjectResponse
     *
     * @param AddProjectRequest $request
     *
     * @return AddProjectResponse
     */
    public function addProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addProjectWithOptions($request, $runtime);
    }

    /**
     * 添加相对位置.
     *
     * @deprecated OpenAPI AddRelativePosition is deprecated
     *
     * @param request - AddRelativePositionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddRelativePositionResponse
     *
     * @param AddRelativePositionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddRelativePositionResponse
     */
    public function addRelativePositionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->relativePosition) {
            @$query['RelativePosition'] = $request->relativePosition;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddRelativePosition',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddRelativePositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 添加相对位置.
     *
     * @deprecated OpenAPI AddRelativePosition is deprecated
     *
     * @param request - AddRelativePositionRequest
     *
     * @returns AddRelativePositionResponse
     *
     * @param AddRelativePositionRequest $request
     *
     * @return AddRelativePositionResponse
     */
    public function addRelativePosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRelativePositionWithOptions($request, $runtime);
    }

    /**
     * 移动端添加rooms.json.
     *
     * @param request - AddRoomPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddRoomPlanResponse
     *
     * @param AddRoomPlanRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddRoomPlanResponse
     */
    public function addRoomPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddRoomPlan',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddRoomPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 移动端添加rooms.json.
     *
     * @param request - AddRoomPlanRequest
     *
     * @returns AddRoomPlanResponse
     *
     * @param AddRoomPlanRequest $request
     *
     * @return AddRoomPlanResponse
     */
    public function addRoomPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRoomPlanWithOptions($request, $runtime);
    }

    /**
     * 添加主场景.
     *
     * @param request - AddSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSceneResponse
     *
     * @param AddSceneRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddSceneResponse
     */
    public function addSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerUid) {
            @$query['CustomerUid'] = $request->customerUid;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加主场景.
     *
     * @param request - AddSceneRequest
     *
     * @returns AddSceneResponse
     *
     * @param AddSceneRequest $request
     *
     * @return AddSceneResponse
     */
    public function addScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSceneWithOptions($request, $runtime);
    }

    /**
     * 创建子场景.
     *
     * @param request - AddSubSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSubSceneResponse
     *
     * @param AddSubSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddSubSceneResponse
     */
    public function addSubSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->uploadType) {
            @$query['UploadType'] = $request->uploadType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSubScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建子场景.
     *
     * @param request - AddSubSceneRequest
     *
     * @returns AddSubSceneResponse
     *
     * @param AddSubSceneRequest $request
     *
     * @return AddSubSceneResponse
     */
    public function addSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSubSceneWithOptions($request, $runtime);
    }

    /**
     * 检查指定uid用户属性.
     *
     * @param request - CheckUserPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckUserPropertyResponse
     *
     * @param CheckUserPropertyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckUserPropertyResponse
     */
    public function checkUserPropertyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckUserProperty',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckUserPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查指定uid用户属性.
     *
     * @param request - CheckUserPropertyRequest
     *
     * @returns CheckUserPropertyResponse
     *
     * @param CheckUserPropertyRequest $request
     *
     * @return CheckUserPropertyResponse
     */
    public function checkUserProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUserPropertyWithOptions($request, $runtime);
    }

    /**
     * 复制主场景.
     *
     * @param request - CopySceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopySceneResponse
     *
     * @param CopySceneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CopySceneResponse
     */
    public function copySceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopyScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopySceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 复制主场景.
     *
     * @param request - CopySceneRequest
     *
     * @returns CopySceneResponse
     *
     * @param CopySceneRequest $request
     *
     * @return CopySceneResponse
     */
    public function copyScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copySceneWithOptions($request, $runtime);
    }

    /**
     * 获取OSS授权.
     *
     * @param request - CreateUploadPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUploadPolicyResponse
     *
     * @param CreateUploadPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateUploadPolicyResponse
     */
    public function createUploadPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->option) {
            @$query['Option'] = $request->option;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUploadPolicy',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取OSS授权.
     *
     * @param request - CreateUploadPolicyRequest
     *
     * @returns CreateUploadPolicyResponse
     *
     * @param CreateUploadPolicyRequest $request
     *
     * @return CreateUploadPolicyResponse
     */
    public function createUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * 查询项目详情.
     *
     * @param request - DetailProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetailProjectResponse
     *
     * @param DetailProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetailProjectResponse
     */
    public function detailProjectWithOptions($request, $runtime)
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
            'action' => 'DetailProject',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetailProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询项目详情.
     *
     * @param request - DetailProjectRequest
     *
     * @returns DetailProjectResponse
     *
     * @param DetailProjectRequest $request
     *
     * @return DetailProjectResponse
     */
    public function detailProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detailProjectWithOptions($request, $runtime);
    }

    /**
     * 主场景详细.
     *
     * @param request - DetailSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetailSceneResponse
     *
     * @param DetailSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DetailSceneResponse
     */
    public function detailSceneWithOptions($request, $runtime)
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
            'action' => 'DetailScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetailSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 主场景详细.
     *
     * @param request - DetailSceneRequest
     *
     * @returns DetailSceneResponse
     *
     * @param DetailSceneRequest $request
     *
     * @return DetailSceneResponse
     */
    public function detailScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detailSceneWithOptions($request, $runtime);
    }

    /**
     * 查询子场景详情.
     *
     * @param request - DetailSubSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetailSubSceneResponse
     *
     * @param DetailSubSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DetailSubSceneResponse
     */
    public function detailSubSceneWithOptions($request, $runtime)
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
            'action' => 'DetailSubScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetailSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询子场景详情.
     *
     * @param request - DetailSubSceneRequest
     *
     * @returns DetailSubSceneResponse
     *
     * @param DetailSubSceneRequest $request
     *
     * @return DetailSubSceneResponse
     */
    public function detailSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detailSubSceneWithOptions($request, $runtime);
    }

    /**
     * 删除项目.
     *
     * @param request - DropProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DropProjectResponse
     *
     * @param DropProjectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DropProjectResponse
     */
    public function dropProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DropProject',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DropProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除项目.
     *
     * @param request - DropProjectRequest
     *
     * @returns DropProjectResponse
     *
     * @param DropProjectRequest $request
     *
     * @return DropProjectResponse
     */
    public function dropProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropProjectWithOptions($request, $runtime);
    }

    /**
     * 删除主场景.
     *
     * @param request - DropSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DropSceneResponse
     *
     * @param DropSceneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DropSceneResponse
     */
    public function dropSceneWithOptions($request, $runtime)
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
            'action' => 'DropScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DropSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除主场景.
     *
     * @param request - DropSceneRequest
     *
     * @returns DropSceneResponse
     *
     * @param DropSceneRequest $request
     *
     * @return DropSceneResponse
     */
    public function dropScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSceneWithOptions($request, $runtime);
    }

    /**
     * 删除子场景.
     *
     * @param request - DropSubSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DropSubSceneResponse
     *
     * @param DropSubSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DropSubSceneResponse
     */
    public function dropSubSceneWithOptions($request, $runtime)
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
            'action' => 'DropSubScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DropSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除子场景.
     *
     * @param request - DropSubSceneRequest
     *
     * @returns DropSubSceneResponse
     *
     * @param DropSubSceneRequest $request
     *
     * @return DropSubSceneResponse
     */
    public function dropSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSubSceneWithOptions($request, $runtime);
    }

    /**
     * 查询关联数据.
     *
     * @param request - GetConnDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConnDataResponse
     *
     * @param GetConnDataRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetConnDataResponse
     */
    public function getConnDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConnData',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConnDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询关联数据.
     *
     * @param request - GetConnDataRequest
     *
     * @returns GetConnDataResponse
     *
     * @param GetConnDataRequest $request
     *
     * @return GetConnDataResponse
     */
    public function getConnData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnDataWithOptions($request, $runtime);
    }

    /**
     * 复制场景任务状态查询.
     *
     * @param request - GetCopySceneTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCopySceneTaskStatusResponse
     *
     * @param GetCopySceneTaskStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetCopySceneTaskStatusResponse
     */
    public function getCopySceneTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCopySceneTaskStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCopySceneTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 复制场景任务状态查询.
     *
     * @param request - GetCopySceneTaskStatusRequest
     *
     * @returns GetCopySceneTaskStatusResponse
     *
     * @param GetCopySceneTaskStatusRequest $request
     *
     * @return GetCopySceneTaskStatusResponse
     */
    public function getCopySceneTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCopySceneTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - GetHotspotConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotspotConfigResponse
     *
     * @param GetHotspotConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetHotspotConfigResponse
     */
    public function getHotspotConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->previewToken) {
            @$query['PreviewToken'] = $request->previewToken;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHotspotConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotspotConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetHotspotConfigRequest
     *
     * @returns GetHotspotConfigResponse
     *
     * @param GetHotspotConfigRequest $request
     *
     * @return GetHotspotConfigResponse
     */
    public function getHotspotConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotspotConfigWithOptions($request, $runtime);
    }

    /**
     * 查询后处理场景信息.
     *
     * @param request - GetHotspotSceneDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotspotSceneDataResponse
     *
     * @param GetHotspotSceneDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetHotspotSceneDataResponse
     */
    public function getHotspotSceneDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->previewToken) {
            @$query['PreviewToken'] = $request->previewToken;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHotspotSceneData',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotspotSceneDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询后处理场景信息.
     *
     * @param request - GetHotspotSceneDataRequest
     *
     * @returns GetHotspotSceneDataResponse
     *
     * @param GetHotspotSceneDataRequest $request
     *
     * @return GetHotspotSceneDataResponse
     */
    public function getHotspotSceneData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotspotSceneDataWithOptions($request, $runtime);
    }

    /**
     * @param request - GetHotspotTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotspotTagResponse
     *
     * @param GetHotspotTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetHotspotTagResponse
     */
    public function getHotspotTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->previewToken) {
            @$query['PreviewToken'] = $request->previewToken;
        }

        if (null !== $request->subSceneUuid) {
            @$query['SubSceneUuid'] = $request->subSceneUuid;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHotspotTag',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotspotTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetHotspotTagRequest
     *
     * @returns GetHotspotTagResponse
     *
     * @param GetHotspotTagRequest $request
     *
     * @return GetHotspotTagResponse
     */
    public function getHotspotTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotspotTagWithOptions($request, $runtime);
    }

    /**
     * 获取标注数据.
     *
     * @param request - GetLayoutDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLayoutDataResponse
     *
     * @param GetLayoutDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetLayoutDataResponse
     */
    public function getLayoutDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLayoutData',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLayoutDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标注数据.
     *
     * @param request - GetLayoutDataRequest
     *
     * @returns GetLayoutDataResponse
     *
     * @param GetLayoutDataRequest $request
     *
     * @return GetLayoutDataResponse
     */
    public function getLayoutData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLayoutDataWithOptions($request, $runtime);
    }

    /**
     * 获取算法自动标注数据.
     *
     * @param request - GetOriginLayoutDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOriginLayoutDataResponse
     *
     * @param GetOriginLayoutDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOriginLayoutDataResponse
     */
    public function getOriginLayoutDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOriginLayoutData',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOriginLayoutDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取算法自动标注数据.
     *
     * @param request - GetOriginLayoutDataRequest
     *
     * @returns GetOriginLayoutDataResponse
     *
     * @param GetOriginLayoutDataRequest $request
     *
     * @return GetOriginLayoutDataResponse
     */
    public function getOriginLayoutData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginLayoutDataWithOptions($request, $runtime);
    }

    /**
     * 获取OSS授权.
     *
     * @param request - GetOssPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssPolicyResponse
     *
     * @param GetOssPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetOssPolicyResponse
     */
    public function getOssPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssPolicy',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取OSS授权.
     *
     * @param request - GetOssPolicyRequest
     *
     * @returns GetOssPolicyResponse
     *
     * @param GetOssPolicyRequest $request
     *
     * @return GetOssPolicyResponse
     */
    public function getOssPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssPolicyWithOptions($request, $runtime);
    }

    /**
     * 打包场景任务状态查询.
     *
     * @param request - GetPackSceneTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPackSceneTaskStatusResponse
     *
     * @param GetPackSceneTaskStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPackSceneTaskStatusResponse
     */
    public function getPackSceneTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPackSceneTaskStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPackSceneTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打包场景任务状态查询.
     *
     * @param request - GetPackSceneTaskStatusRequest
     *
     * @returns GetPackSceneTaskStatusResponse
     *
     * @param GetPackSceneTaskStatusRequest $request
     *
     * @return GetPackSceneTaskStatusResponse
     */
    public function getPackSceneTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPackSceneTaskStatusWithOptions($request, $runtime);
    }

    /**
     * 查询矫正后图片.
     *
     * @param request - GetRectifyImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRectifyImageResponse
     *
     * @param GetRectifyImageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRectifyImageResponse
     */
    public function getRectifyImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRectifyImage',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRectifyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询矫正后图片.
     *
     * @param request - GetRectifyImageRequest
     *
     * @returns GetRectifyImageResponse
     *
     * @param GetRectifyImageRequest $request
     *
     * @return GetRectifyImageResponse
     */
    public function getRectifyImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRectifyImageWithOptions($request, $runtime);
    }

    /**
     * 查看场景下重建任务
     *
     * @param request - GetSceneBuildTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSceneBuildTaskStatusResponse
     *
     * @param GetSceneBuildTaskStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSceneBuildTaskStatusResponse
     */
    public function getSceneBuildTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSceneBuildTaskStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSceneBuildTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看场景下重建任务
     *
     * @param request - GetSceneBuildTaskStatusRequest
     *
     * @returns GetSceneBuildTaskStatusResponse
     *
     * @param GetSceneBuildTaskStatusRequest $request
     *
     * @return GetSceneBuildTaskStatusResponse
     */
    public function getSceneBuildTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSceneBuildTaskStatusWithOptions($request, $runtime);
    }

    /**
     * 获取场景的打包地址
     *
     * @param request - GetScenePackUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScenePackUrlResponse
     *
     * @param GetScenePackUrlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetScenePackUrlResponse
     */
    public function getScenePackUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScenePackUrl',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScenePackUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取场景的打包地址
     *
     * @param request - GetScenePackUrlRequest
     *
     * @returns GetScenePackUrlResponse
     *
     * @param GetScenePackUrlRequest $request
     *
     * @return GetScenePackUrlResponse
     */
    public function getScenePackUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScenePackUrlWithOptions($request, $runtime);
    }

    /**
     * 查询模型数据.
     *
     * @param request - GetScenePreviewDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScenePreviewDataResponse
     *
     * @param GetScenePreviewDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetScenePreviewDataResponse
     */
    public function getScenePreviewDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->previewToken) {
            @$query['PreviewToken'] = $request->previewToken;
        }

        if (null !== $request->showTag) {
            @$query['ShowTag'] = $request->showTag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScenePreviewData',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScenePreviewDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询模型数据.
     *
     * @param request - GetScenePreviewDataRequest
     *
     * @returns GetScenePreviewDataResponse
     *
     * @param GetScenePreviewDataRequest $request
     *
     * @return GetScenePreviewDataResponse
     */
    public function getScenePreviewData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScenePreviewDataWithOptions($request, $runtime);
    }

    /**
     * 查询模型预览信息.
     *
     * @param request - GetScenePreviewInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScenePreviewInfoResponse
     *
     * @param GetScenePreviewInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetScenePreviewInfoResponse
     */
    public function getScenePreviewInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->modelToken) {
            @$query['ModelToken'] = $request->modelToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScenePreviewInfo',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScenePreviewInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询模型预览信息.
     *
     * @param request - GetScenePreviewInfoRequest
     *
     * @returns GetScenePreviewInfoResponse
     *
     * @param GetScenePreviewInfoRequest $request
     *
     * @return GetScenePreviewInfoResponse
     */
    public function getScenePreviewInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScenePreviewInfoWithOptions($request, $runtime);
    }

    /**
     * 获取模型预览数据.
     *
     * @param request - GetScenePreviewResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScenePreviewResourceResponse
     *
     * @param GetScenePreviewResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetScenePreviewResourceResponse
     */
    public function getScenePreviewResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->draft) {
            @$query['Draft'] = $request->draft;
        }

        if (null !== $request->previewToken) {
            @$query['PreviewToken'] = $request->previewToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScenePreviewResource',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScenePreviewResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取模型预览数据.
     *
     * @param request - GetScenePreviewResourceRequest
     *
     * @returns GetScenePreviewResourceResponse
     *
     * @param GetScenePreviewResourceRequest $request
     *
     * @return GetScenePreviewResourceResponse
     */
    public function getScenePreviewResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScenePreviewResourceWithOptions($request, $runtime);
    }

    /**
     * 查询单场景关联数据.
     *
     * @param request - GetSingleConnDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSingleConnDataResponse
     *
     * @param GetSingleConnDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSingleConnDataResponse
     */
    public function getSingleConnDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSingleConnData',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSingleConnDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单场景关联数据.
     *
     * @param request - GetSingleConnDataRequest
     *
     * @returns GetSingleConnDataResponse
     *
     * @param GetSingleConnDataRequest $request
     *
     * @return GetSingleConnDataResponse
     */
    public function getSingleConnData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSingleConnDataWithOptions($request, $runtime);
    }

    /**
     * 打包58数据状态检查.
     *
     * @param request - GetSourcePackStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSourcePackStatusResponse
     *
     * @param GetSourcePackStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSourcePackStatusResponse
     */
    public function getSourcePackStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSourcePackStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSourcePackStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打包58数据状态检查.
     *
     * @param request - GetSourcePackStatusRequest
     *
     * @returns GetSourcePackStatusResponse
     *
     * @param GetSourcePackStatusRequest $request
     *
     * @return GetSourcePackStatusResponse
     */
    public function getSourcePackStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSourcePackStatusWithOptions($request, $runtime);
    }

    /**
     * 查看子场景下预处理及切图任务
     *
     * @param request - GetSubSceneTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubSceneTaskStatusResponse
     *
     * @param GetSubSceneTaskStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSubSceneTaskStatusResponse
     */
    public function getSubSceneTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSubSceneTaskStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSubSceneTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看子场景下预处理及切图任务
     *
     * @param request - GetSubSceneTaskStatusRequest
     *
     * @returns GetSubSceneTaskStatusResponse
     *
     * @param GetSubSceneTaskStatusRequest $request
     *
     * @return GetSubSceneTaskStatusResponse
     */
    public function getSubSceneTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubSceneTaskStatusWithOptions($request, $runtime);
    }

    /**
     * 查看任务状态
     *
     * @param request - GetTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskStatusResponse
     *
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看任务状态
     *
     * @param request - GetTaskStatusRequest
     *
     * @returns GetTaskStatusResponse
     *
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - GetWindowConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWindowConfigResponse
     *
     * @param GetWindowConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetWindowConfigResponse
     */
    public function getWindowConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->previewToken) {
            @$query['PreviewToken'] = $request->previewToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWindowConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWindowConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetWindowConfigRequest
     *
     * @returns GetWindowConfigResponse
     *
     * @param GetWindowConfigRequest $request
     *
     * @return GetWindowConfigResponse
     */
    public function getWindowConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWindowConfigWithOptions($request, $runtime);
    }

    /**
     * 重建.
     *
     * @param request - LabelBuildRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LabelBuildResponse
     *
     * @param LabelBuildRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return LabelBuildResponse
     */
    public function labelBuildWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->modelStyle) {
            @$query['ModelStyle'] = $request->modelStyle;
        }

        if (null !== $request->optimizeWallWidth) {
            @$query['OptimizeWallWidth'] = $request->optimizeWallWidth;
        }

        if (null !== $request->planStyle) {
            @$query['PlanStyle'] = $request->planStyle;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->wallHeight) {
            @$query['WallHeight'] = $request->wallHeight;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LabelBuild',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LabelBuildResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重建.
     *
     * @param request - LabelBuildRequest
     *
     * @returns LabelBuildResponse
     *
     * @param LabelBuildRequest $request
     *
     * @return LabelBuildResponse
     */
    public function labelBuild($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->labelBuildWithOptions($request, $runtime);
    }

    /**
     * 关联图片.
     *
     * @param request - LinkImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LinkImageResponse
     *
     * @param LinkImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return LinkImageResponse
     */
    public function linkImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cameraHeight) {
            @$query['CameraHeight'] = $request->cameraHeight;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LinkImage',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LinkImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关联图片.
     *
     * @param request - LinkImageRequest
     *
     * @returns LinkImageResponse
     *
     * @param LinkImageRequest $request
     *
     * @return LinkImageResponse
     */
    public function linkImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->linkImageWithOptions($request, $runtime);
    }

    /**
     * 分页查询项目列表.
     *
     * @param request - ListProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListProjectResponse
     */
    public function listProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProject',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询项目列表.
     *
     * @param request - ListProjectRequest
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $request
     *
     * @return ListProjectResponse
     */
    public function listProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectWithOptions($request, $runtime);
    }

    /**
     * 分页查询主场景列表.
     *
     * @param request - ListSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSceneResponse
     *
     * @param ListSceneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListSceneResponse
     */
    public function listSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询主场景列表.
     *
     * @param request - ListSceneRequest
     *
     * @returns ListSceneResponse
     *
     * @param ListSceneRequest $request
     *
     * @return ListSceneResponse
     */
    public function listScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSceneWithOptions($request, $runtime);
    }

    /**
     * 查询子场景列表.
     *
     * @param request - ListSubSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubSceneResponse
     *
     * @param ListSubSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSubSceneResponse
     */
    public function listSubSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->showLayoutData) {
            @$query['ShowLayoutData'] = $request->showLayoutData;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSubScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询子场景列表.
     *
     * @param request - ListSubSceneRequest
     *
     * @returns ListSubSceneResponse
     *
     * @param ListSubSceneRequest $request
     *
     * @return ListSubSceneResponse
     */
    public function listSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubSceneWithOptions($request, $runtime);
    }

    /**
     * 直角优化.
     *
     * @param request - OptimizeRightAngleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OptimizeRightAngleResponse
     *
     * @param OptimizeRightAngleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OptimizeRightAngleResponse
     */
    public function optimizeRightAngleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OptimizeRightAngle',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OptimizeRightAngleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 直角优化.
     *
     * @param request - OptimizeRightAngleRequest
     *
     * @returns OptimizeRightAngleResponse
     *
     * @param OptimizeRightAngleRequest $request
     *
     * @return OptimizeRightAngleResponse
     */
    public function optimizeRightAngle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->optimizeRightAngleWithOptions($request, $runtime);
    }

    /**
     * 打包场景.
     *
     * @param request - PackSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PackSceneResponse
     *
     * @param PackSceneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PackSceneResponse
     */
    public function packSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PackScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PackSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打包场景.
     *
     * @param request - PackSceneRequest
     *
     * @returns PackSceneResponse
     *
     * @param PackSceneRequest $request
     *
     * @return PackSceneResponse
     */
    public function packScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->packSceneWithOptions($request, $runtime);
    }

    /**
     * 打包场景.
     *
     * @param request - PackSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PackSourceResponse
     *
     * @param PackSourceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PackSourceResponse
     */
    public function packSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PackSource',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PackSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打包场景.
     *
     * @param request - PackSourceRequest
     *
     * @returns PackSourceResponse
     *
     * @param PackSourceRequest $request
     *
     * @return PackSourceResponse
     */
    public function packSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->packSourceWithOptions($request, $runtime);
    }

    /**
     * 预处理.
     *
     * @param request - PredImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PredImageResponse
     *
     * @param PredImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PredImageResponse
     */
    public function predImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->correctVertical) {
            @$query['CorrectVertical'] = $request->correctVertical;
        }

        if (null !== $request->countDetectDoor) {
            @$query['CountDetectDoor'] = $request->countDetectDoor;
        }

        if (null !== $request->detectDoor) {
            @$query['DetectDoor'] = $request->detectDoor;
        }

        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PredImage',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PredImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预处理.
     *
     * @param request - PredImageRequest
     *
     * @returns PredImageResponse
     *
     * @param PredImageRequest $request
     *
     * @return PredImageResponse
     */
    public function predImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predImageWithOptions($request, $runtime);
    }

    /**
     * 墙线预测.
     *
     * @param request - PredictionWallLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PredictionWallLineResponse
     *
     * @param PredictionWallLineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PredictionWallLineResponse
     */
    public function predictionWallLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cameraHeight) {
            @$query['CameraHeight'] = $request->cameraHeight;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PredictionWallLine',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PredictionWallLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 墙线预测.
     *
     * @param request - PredictionWallLineRequest
     *
     * @returns PredictionWallLineResponse
     *
     * @param PredictionWallLineRequest $request
     *
     * @return PredictionWallLineResponse
     */
    public function predictionWallLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictionWallLineWithOptions($request, $runtime);
    }

    /**
     * @param request - PublishHotspotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishHotspotResponse
     *
     * @param PublishHotspotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PublishHotspotResponse
     */
    public function publishHotspotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramTag) {
            @$query['ParamTag'] = $request->paramTag;
        }

        if (null !== $request->subSceneUuid) {
            @$query['SubSceneUuid'] = $request->subSceneUuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishHotspot',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishHotspotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PublishHotspotRequest
     *
     * @returns PublishHotspotResponse
     *
     * @param PublishHotspotRequest $request
     *
     * @return PublishHotspotResponse
     */
    public function publishHotspot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishHotspotWithOptions($request, $runtime);
    }

    /**
     * 保存扩展配置.
     *
     * @param request - PublishHotspotConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishHotspotConfigResponse
     *
     * @param PublishHotspotConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PublishHotspotConfigResponse
     */
    public function publishHotspotConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishHotspotConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishHotspotConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存扩展配置.
     *
     * @param request - PublishHotspotConfigRequest
     *
     * @returns PublishHotspotConfigResponse
     *
     * @param PublishHotspotConfigRequest $request
     *
     * @return PublishHotspotConfigResponse
     */
    public function publishHotspotConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishHotspotConfigWithOptions($request, $runtime);
    }

    /**
     * 发布.
     *
     * @param request - PublishSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishSceneResponse
     *
     * @param PublishSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PublishSceneResponse
     */
    public function publishSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布.
     *
     * @param request - PublishSceneRequest
     *
     * @returns PublishSceneResponse
     *
     * @param PublishSceneRequest $request
     *
     * @return PublishSceneResponse
     */
    public function publishScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishSceneWithOptions($request, $runtime);
    }

    /**
     * 发布.
     *
     * @param request - PublishStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishStatusResponse
     *
     * @param PublishStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PublishStatusResponse
     */
    public function publishStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布.
     *
     * @param request - PublishStatusRequest
     *
     * @returns PublishStatusResponse
     *
     * @param PublishStatusRequest $request
     *
     * @return PublishStatusResponse
     */
    public function publishStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishStatusWithOptions($request, $runtime);
    }

    /**
     * 恢复原图.
     *
     * @param request - RecoveryOriginImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecoveryOriginImageResponse
     *
     * @param RecoveryOriginImageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecoveryOriginImageResponse
     */
    public function recoveryOriginImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecoveryOriginImage',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecoveryOriginImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 恢复原图.
     *
     * @param request - RecoveryOriginImageRequest
     *
     * @returns RecoveryOriginImageResponse
     *
     * @param RecoveryOriginImageRequest $request
     *
     * @return RecoveryOriginImageResponse
     */
    public function recoveryOriginImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoveryOriginImageWithOptions($request, $runtime);
    }

    /**
     * 手动矫正.
     *
     * @param request - RectVerticalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RectVerticalResponse
     *
     * @param RectVerticalRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RectVerticalResponse
     */
    public function rectVerticalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->countDetectDoor) {
            @$query['CountDetectDoor'] = $request->countDetectDoor;
        }

        if (null !== $request->detectDoor) {
            @$query['DetectDoor'] = $request->detectDoor;
        }

        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        if (null !== $request->verticalRect) {
            @$query['VerticalRect'] = $request->verticalRect;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RectVertical',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RectVerticalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 手动矫正.
     *
     * @param request - RectVerticalRequest
     *
     * @returns RectVerticalResponse
     *
     * @param RectVerticalRequest $request
     *
     * @return RectVerticalResponse
     */
    public function rectVertical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rectVerticalWithOptions($request, $runtime);
    }

    /**
     * 图片矫正.
     *
     * @param request - RectifyImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RectifyImageResponse
     *
     * @param RectifyImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RectifyImageResponse
     */
    public function rectifyImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cameraHeight) {
            @$query['CameraHeight'] = $request->cameraHeight;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RectifyImage',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RectifyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片矫正.
     *
     * @param request - RectifyImageRequest
     *
     * @returns RectifyImageResponse
     *
     * @param RectifyImageRequest $request
     *
     * @return RectifyImageResponse
     */
    public function rectifyImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rectifyImageWithOptions($request, $runtime);
    }

    /**
     * 恢复子场景.
     *
     * @param request - RollbackSubSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackSubSceneResponse
     *
     * @param RollbackSubSceneRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RollbackSubSceneResponse
     */
    public function rollbackSubSceneWithOptions($request, $runtime)
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
            'action' => 'RollbackSubScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 恢复子场景.
     *
     * @param request - RollbackSubSceneRequest
     *
     * @returns RollbackSubSceneResponse
     *
     * @param RollbackSubSceneRequest $request
     *
     * @return RollbackSubSceneResponse
     */
    public function rollbackSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackSubSceneWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveHotspotConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveHotspotConfigResponse
     *
     * @param SaveHotspotConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SaveHotspotConfigResponse
     */
    public function saveHotspotConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramTag) {
            @$query['ParamTag'] = $request->paramTag;
        }

        if (null !== $request->previewToken) {
            @$query['PreviewToken'] = $request->previewToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveHotspotConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveHotspotConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveHotspotConfigRequest
     *
     * @returns SaveHotspotConfigResponse
     *
     * @param SaveHotspotConfigRequest $request
     *
     * @return SaveHotspotConfigResponse
     */
    public function saveHotspotConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveHotspotConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveHotspotTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveHotspotTagResponse
     *
     * @param SaveHotspotTagRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveHotspotTagResponse
     */
    public function saveHotspotTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramTag) {
            @$query['ParamTag'] = $request->paramTag;
        }

        if (null !== $request->subSceneUuid) {
            @$query['SubSceneUuid'] = $request->subSceneUuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveHotspotTag',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveHotspotTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveHotspotTagRequest
     *
     * @returns SaveHotspotTagResponse
     *
     * @param SaveHotspotTagRequest $request
     *
     * @return SaveHotspotTagResponse
     */
    public function saveHotspotTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveHotspotTagWithOptions($request, $runtime);
    }

    /**
     * 保存热点.
     *
     * @param request - SaveHotspotTagListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveHotspotTagListResponse
     *
     * @param SaveHotspotTagListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SaveHotspotTagListResponse
     */
    public function saveHotspotTagListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hotspotListJson) {
            @$query['HotspotListJson'] = $request->hotspotListJson;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveHotspotTagList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveHotspotTagListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存热点.
     *
     * @param request - SaveHotspotTagListRequest
     *
     * @returns SaveHotspotTagListResponse
     *
     * @param SaveHotspotTagListRequest $request
     *
     * @return SaveHotspotTagListResponse
     */
    public function saveHotspotTagList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveHotspotTagListWithOptions($request, $runtime);
    }

    /**
     * 保存小地图数据.
     *
     * @param request - SaveMinimapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveMinimapResponse
     *
     * @param SaveMinimapRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SaveMinimapResponse
     */
    public function saveMinimapWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveMinimap',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveMinimapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存小地图数据.
     *
     * @param request - SaveMinimapRequest
     *
     * @returns SaveMinimapResponse
     *
     * @param SaveMinimapRequest $request
     *
     * @return SaveMinimapResponse
     */
    public function saveMinimap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveMinimapWithOptions($request, $runtime);
    }

    /**
     * 保存模型文件.
     *
     * @param request - SaveModelConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveModelConfigResponse
     *
     * @param SaveModelConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveModelConfigResponse
     */
    public function saveModelConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveModelConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveModelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存模型文件.
     *
     * @param request - SaveModelConfigRequest
     *
     * @returns SaveModelConfigResponse
     *
     * @param SaveModelConfigRequest $request
     *
     * @return SaveModelConfigResponse
     */
    public function saveModelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveModelConfigWithOptions($request, $runtime);
    }

    /**
     * 发布.
     *
     * @param request - ScenePublishRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScenePublishResponse
     *
     * @param ScenePublishRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ScenePublishResponse
     */
    public function scenePublishWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ScenePublish',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ScenePublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布.
     *
     * @param request - ScenePublishRequest
     *
     * @returns ScenePublishResponse
     *
     * @param ScenePublishRequest $request
     *
     * @return ScenePublishResponse
     */
    public function scenePublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scenePublishWithOptions($request, $runtime);
    }

    /**
     * 预览.
     *
     * @param request - TempPreviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TempPreviewResponse
     *
     * @param TempPreviewRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return TempPreviewResponse
     */
    public function tempPreviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TempPreview',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TempPreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预览.
     *
     * @param request - TempPreviewRequest
     *
     * @returns TempPreviewResponse
     *
     * @param TempPreviewRequest $request
     *
     * @return TempPreviewResponse
     */
    public function tempPreview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tempPreviewWithOptions($request, $runtime);
    }

    /**
     * 查询预览任务处理状态
     *
     * @param request - TempPreviewStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TempPreviewStatusResponse
     *
     * @param TempPreviewStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TempPreviewStatusResponse
     */
    public function tempPreviewStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TempPreviewStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TempPreviewStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询预览任务处理状态
     *
     * @param request - TempPreviewStatusRequest
     *
     * @returns TempPreviewStatusResponse
     *
     * @param TempPreviewStatusRequest $request
     *
     * @return TempPreviewStatusResponse
     */
    public function tempPreviewStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tempPreviewStatusWithOptions($request, $runtime);
    }

    /**
     * 更新关联数据.
     *
     * @param request - UpdateConnDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConnDataResponse
     *
     * @param UpdateConnDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateConnDataResponse
     */
    public function updateConnDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connData) {
            @$query['ConnData'] = $request->connData;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateConnData',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConnDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新关联数据.
     *
     * @param request - UpdateConnDataRequest
     *
     * @returns UpdateConnDataResponse
     *
     * @param UpdateConnDataRequest $request
     *
     * @return UpdateConnDataResponse
     */
    public function updateConnData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnDataWithOptions($request, $runtime);
    }

    /**
     * 更新标注数据.
     *
     * @param request - UpdateLayoutDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLayoutDataResponse
     *
     * @param UpdateLayoutDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateLayoutDataResponse
     */
    public function updateLayoutDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->layoutData) {
            @$query['LayoutData'] = $request->layoutData;
        }

        if (null !== $request->subSceneId) {
            @$query['SubSceneId'] = $request->subSceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLayoutData',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLayoutDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新标注数据.
     *
     * @param request - UpdateLayoutDataRequest
     *
     * @returns UpdateLayoutDataResponse
     *
     * @param UpdateLayoutDataRequest $request
     *
     * @return UpdateLayoutDataResponse
     */
    public function updateLayoutData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLayoutDataWithOptions($request, $runtime);
    }

    /**
     * 变更项目信息.
     *
     * @param request - UpdateProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessId) {
            @$query['BusinessId'] = $request->businessId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateProject',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更项目信息.
     *
     * @param request - UpdateProjectRequest
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }

    /**
     * 更新主场景.
     *
     * @param request - UpdateSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSceneResponse
     *
     * @param UpdateSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSceneResponse
     */
    public function updateSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新主场景.
     *
     * @param request - UpdateSceneRequest
     *
     * @returns UpdateSceneResponse
     *
     * @param UpdateSceneRequest $request
     *
     * @return UpdateSceneResponse
     */
    public function updateScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSceneWithOptions($request, $runtime);
    }

    /**
     * 更新子场景.
     *
     * @param tmpReq - UpdateSubSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSubSceneResponse
     *
     * @param UpdateSubSceneRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateSubSceneResponse
     */
    public function updateSubSceneWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSubSceneShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->viewPoint) {
            $request->viewPointShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->viewPoint, 'ViewPoint', 'json');
        }

        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->viewPointShrink) {
            @$query['ViewPoint'] = $request->viewPointShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSubScene',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新子场景.
     *
     * @param request - UpdateSubSceneRequest
     *
     * @returns UpdateSubSceneResponse
     *
     * @param UpdateSubSceneRequest $request
     *
     * @return UpdateSubSceneResponse
     */
    public function updateSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubSceneWithOptions($request, $runtime);
    }

    /**
     * 更新子场景顺序.
     *
     * @param tmpReq - UpdateSubSceneSeqRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSubSceneSeqResponse
     *
     * @param UpdateSubSceneSeqRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSubSceneSeqResponse
     */
    public function updateSubSceneSeqWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSubSceneSeqShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sortSubSceneIds) {
            $request->sortSubSceneIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sortSubSceneIds, 'SortSubSceneIds', 'json');
        }

        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->sortSubSceneIdsShrink) {
            @$query['SortSubSceneIds'] = $request->sortSubSceneIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSubSceneSeq',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSubSceneSeqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新子场景顺序.
     *
     * @param request - UpdateSubSceneSeqRequest
     *
     * @returns UpdateSubSceneSeqResponse
     *
     * @param UpdateSubSceneSeqRequest $request
     *
     * @return UpdateSubSceneSeqResponse
     */
    public function updateSubSceneSeq($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubSceneSeqWithOptions($request, $runtime);
    }
}
