<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Tdsr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddMosaicsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddMosaicsResponse
     */
    public function addMosaicsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->markPosition)) {
            $query['MarkPosition'] = $request->markPosition;
        }
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMosaics',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMosaicsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AddProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddProjectResponse
     */
    public function addProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessId)) {
            $query['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AddRelativePositionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddRelativePositionResponse
     */
    public function addRelativePositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->relativePosition)) {
            $query['RelativePosition'] = $request->relativePosition;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddRelativePosition',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddRelativePositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AddRoomPlanRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddRoomPlanResponse
     */
    public function addRoomPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddRoomPlan',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddRoomPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AddSceneRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddSceneResponse
     */
    public function addSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customerUid)) {
            $query['CustomerUid'] = $request->customerUid;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AddSubSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddSubSceneResponse
     */
    public function addSubSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->uploadType)) {
            $query['UploadType'] = $request->uploadType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CheckUserPropertyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckUserPropertyResponse
     */
    public function checkUserPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckUserProperty',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckUserPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CopySceneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CopySceneResponse
     */
    public function copySceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $query['SceneName'] = $request->sceneName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopySceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DetailProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetailProjectResponse
     */
    public function detailProjectWithOptions($request, $runtime)
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
            'action'      => 'DetailProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetailProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DetailSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DetailSceneResponse
     */
    public function detailSceneWithOptions($request, $runtime)
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
            'action'      => 'DetailScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetailSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DetailSubSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DetailSubSceneResponse
     */
    public function detailSubSceneWithOptions($request, $runtime)
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
            'action'      => 'DetailSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetailSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DropProjectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DropProjectResponse
     */
    public function dropProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DropProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DropProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DropSceneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DropSceneResponse
     */
    public function dropSceneWithOptions($request, $runtime)
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
            'action'      => 'DropScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DropSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DropSubSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DropSubSceneResponse
     */
    public function dropSubSceneWithOptions($request, $runtime)
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
            'action'      => 'DropSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DropSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetConnDataRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetConnDataResponse
     */
    public function getConnDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConnData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConnDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetCopySceneTaskStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetCopySceneTaskStatusResponse
     */
    public function getCopySceneTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCopySceneTaskStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCopySceneTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetHotspotConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetHotspotConfigResponse
     */
    public function getHotspotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->previewToken)) {
            $query['PreviewToken'] = $request->previewToken;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotspotConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotspotConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetHotspotSceneDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetHotspotSceneDataResponse
     */
    public function getHotspotSceneDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->previewToken)) {
            $query['PreviewToken'] = $request->previewToken;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotspotSceneData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotspotSceneDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetHotspotTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetHotspotTagResponse
     */
    public function getHotspotTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->previewToken)) {
            $query['PreviewToken'] = $request->previewToken;
        }
        if (!Utils::isUnset($request->subSceneUuid)) {
            $query['SubSceneUuid'] = $request->subSceneUuid;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotspotTag',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotspotTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetLayoutDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetLayoutDataResponse
     */
    public function getLayoutDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLayoutData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLayoutDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetOriginLayoutDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOriginLayoutDataResponse
     */
    public function getOriginLayoutDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOriginLayoutData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOriginLayoutDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetOssPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetOssPolicyResponse
     */
    public function getOssPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssPolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetPackSceneTaskStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPackSceneTaskStatusResponse
     */
    public function getPackSceneTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPackSceneTaskStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPackSceneTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetRectifyImageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRectifyImageResponse
     */
    public function getRectifyImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRectifyImage',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRectifyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetSceneBuildTaskStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSceneBuildTaskStatusResponse
     */
    public function getSceneBuildTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSceneBuildTaskStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSceneBuildTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetScenePackUrlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetScenePackUrlResponse
     */
    public function getScenePackUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScenePackUrl',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScenePackUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetScenePreviewDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetScenePreviewDataResponse
     */
    public function getScenePreviewDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->previewToken)) {
            $query['PreviewToken'] = $request->previewToken;
        }
        if (!Utils::isUnset($request->showTag)) {
            $query['ShowTag'] = $request->showTag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScenePreviewData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScenePreviewDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetScenePreviewInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetScenePreviewInfoResponse
     */
    public function getScenePreviewInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->modelToken)) {
            $query['ModelToken'] = $request->modelToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScenePreviewInfo',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScenePreviewInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetScenePreviewResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetScenePreviewResourceResponse
     */
    public function getScenePreviewResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->previewToken)) {
            $query['PreviewToken'] = $request->previewToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScenePreviewResource',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScenePreviewResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetSingleConnDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSingleConnDataResponse
     */
    public function getSingleConnDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSingleConnData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSingleConnDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetSourcePackStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSourcePackStatusResponse
     */
    public function getSourcePackStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSourcePackStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSourcePackStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetSubSceneTaskStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSubSceneTaskStatusResponse
     */
    public function getSubSceneTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSubSceneTaskStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSubSceneTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetWindowConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetWindowConfigResponse
     */
    public function getWindowConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->previewToken)) {
            $query['PreviewToken'] = $request->previewToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWindowConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWindowConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param LabelBuildRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return LabelBuildResponse
     */
    public function labelBuildWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->modelStyle)) {
            $query['ModelStyle'] = $request->modelStyle;
        }
        if (!Utils::isUnset($request->optimizeWallWidth)) {
            $query['OptimizeWallWidth'] = $request->optimizeWallWidth;
        }
        if (!Utils::isUnset($request->planStyle)) {
            $query['PlanStyle'] = $request->planStyle;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->wallHeight)) {
            $query['WallHeight'] = $request->wallHeight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LabelBuild',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LabelBuildResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param LinkImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return LinkImageResponse
     */
    public function linkImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cameraHeight)) {
            $query['CameraHeight'] = $request->cameraHeight;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LinkImage',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LinkImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListProjectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListProjectResponse
     */
    public function listProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListSceneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListSceneResponse
     */
    public function listSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListSubSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSubSceneResponse
     */
    public function listSubSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->showLayoutData)) {
            $query['ShowLayoutData'] = $request->showLayoutData;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param OptimizeRightAngleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OptimizeRightAngleResponse
     */
    public function optimizeRightAngleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OptimizeRightAngle',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OptimizeRightAngleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PackSceneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PackSceneResponse
     */
    public function packSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PackScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PackSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PackSourceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PackSourceResponse
     */
    public function packSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PackSource',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PackSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PredImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PredImageResponse
     */
    public function predImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->correctVertical)) {
            $query['CorrectVertical'] = $request->correctVertical;
        }
        if (!Utils::isUnset($request->countDetectDoor)) {
            $query['CountDetectDoor'] = $request->countDetectDoor;
        }
        if (!Utils::isUnset($request->detectDoor)) {
            $query['DetectDoor'] = $request->detectDoor;
        }
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PredImage',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PredImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PredictionWallLineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PredictionWallLineResponse
     */
    public function predictionWallLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cameraHeight)) {
            $query['CameraHeight'] = $request->cameraHeight;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PredictionWallLine',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PredictionWallLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PublishHotspotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PublishHotspotResponse
     */
    public function publishHotspotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->paramTag)) {
            $query['ParamTag'] = $request->paramTag;
        }
        if (!Utils::isUnset($request->subSceneUuid)) {
            $query['SubSceneUuid'] = $request->subSceneUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishHotspot',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishHotspotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PublishSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PublishSceneResponse
     */
    public function publishSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PublishStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PublishStatusResponse
     */
    public function publishStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecoveryOriginImageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecoveryOriginImageResponse
     */
    public function recoveryOriginImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoveryOriginImage',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecoveryOriginImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RectVerticalRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RectVerticalResponse
     */
    public function rectVerticalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->countDetectDoor)) {
            $query['CountDetectDoor'] = $request->countDetectDoor;
        }
        if (!Utils::isUnset($request->detectDoor)) {
            $query['DetectDoor'] = $request->detectDoor;
        }
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        if (!Utils::isUnset($request->verticalRect)) {
            $query['VerticalRect'] = $request->verticalRect;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RectVertical',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RectVerticalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RectifyImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RectifyImageResponse
     */
    public function rectifyImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cameraHeight)) {
            $query['CameraHeight'] = $request->cameraHeight;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RectifyImage',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RectifyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RollbackSubSceneRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RollbackSubSceneResponse
     */
    public function rollbackSubSceneWithOptions($request, $runtime)
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
            'action'      => 'RollbackSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SaveHotspotConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SaveHotspotConfigResponse
     */
    public function saveHotspotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->paramTag)) {
            $query['ParamTag'] = $request->paramTag;
        }
        if (!Utils::isUnset($request->previewToken)) {
            $query['PreviewToken'] = $request->previewToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveHotspotConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveHotspotConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SaveHotspotTagRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveHotspotTagResponse
     */
    public function saveHotspotTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->paramTag)) {
            $query['ParamTag'] = $request->paramTag;
        }
        if (!Utils::isUnset($request->subSceneUuid)) {
            $query['SubSceneUuid'] = $request->subSceneUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveHotspotTag',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveHotspotTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ScenePublishRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ScenePublishResponse
     */
    public function scenePublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScenePublish',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScenePublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TempPreviewRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return TempPreviewResponse
     */
    public function tempPreviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TempPreview',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TempPreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TempPreviewStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TempPreviewStatusResponse
     */
    public function tempPreviewStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TempPreviewStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TempPreviewStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateConnDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateConnDataResponse
     */
    public function updateConnDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connData)) {
            $query['ConnData'] = $request->connData;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateConnData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConnDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateLayoutDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateLayoutDataResponse
     */
    public function updateLayoutDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->layoutData)) {
            $query['LayoutData'] = $request->layoutData;
        }
        if (!Utils::isUnset($request->subSceneId)) {
            $query['SubSceneId'] = $request->subSceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLayoutData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLayoutDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessId)) {
            $query['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSceneResponse
     */
    public function updateSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateSubSceneRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateSubSceneResponse
     */
    public function updateSubSceneWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSubSceneShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->viewPoint)) {
            $request->viewPointShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->viewPoint, 'ViewPoint', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->viewPointShrink)) {
            $query['ViewPoint'] = $request->viewPointShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateSubSceneSeqRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSubSceneSeqResponse
     */
    public function updateSubSceneSeqWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSubSceneSeqShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sortSubSceneIds)) {
            $request->sortSubSceneIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sortSubSceneIds, 'SortSubSceneIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->sortSubSceneIdsShrink)) {
            $query['SortSubSceneIds'] = $request->sortSubSceneIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubSceneSeq',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSubSceneSeqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
