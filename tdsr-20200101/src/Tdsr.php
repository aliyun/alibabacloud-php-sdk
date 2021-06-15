<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddBucketRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddBucketResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddRelativePositionRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddRelativePositionResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\BucketIsExistRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\BucketIsExistResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CheckPermissionRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CheckPermissionResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CheckResourceRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CheckResourceResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CreateSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CreateSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropBucketRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropBucketResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetConnDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetConnDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotTagRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotTagResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetLayoutDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetLayoutDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOriginLayoutDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOriginLayoutDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOssPolicyRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOssPolicyResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetPolicyRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetPolicyResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetRectifyImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetRectifyImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneBuildTaskStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneBuildTaskStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneListRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneListResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSingleConnDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSingleConnDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSubSceneTaskStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSubSceneTaskStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetUserBucketConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetUserOssStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetWindowConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetWindowConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\IsEnableOssRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\IsEnableOssResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LabelBuildRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LabelBuildResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LinkImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LinkImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListMainScenesRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListMainScenesResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListScenesRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListScenesResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\OptimizeRightAngleRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\OptimizeRightAngleResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredictionWallLineRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredictionWallLineResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishHotspotRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishHotspotResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectifyImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectifyImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectVerticalRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectVerticalResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveFileRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveFileResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ScenePublishRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ScenePublishResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\StatisExportSceneInfoRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\StatisExportSceneInfoResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\StatisListSceneInfoRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\StatisListSceneInfoResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\StatisQueryByDayRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\StatisQueryByDayResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\StatisQueryByTypeRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\StatisQueryByTypeResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateBucketRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateBucketResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param GetSingleConnDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSingleConnDataResponse
     */
    public function getSingleConnDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSingleConnDataResponse::fromMap($this->doRPCRequest('GetSingleConnData', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTaskStatusResponse::fromMap($this->doRPCRequest('GetTaskStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetSceneDataRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSceneDataResponse
     */
    public function getSceneDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSceneDataResponse::fromMap($this->doRPCRequest('GetSceneData', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSceneDataRequest $request
     *
     * @return GetSceneDataResponse
     */
    public function getSceneData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSceneDataWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LinkImageResponse::fromMap($this->doRPCRequest('LinkImage', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddSceneRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddSceneResponse
     */
    public function addSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSceneResponse::fromMap($this->doRPCRequest('AddScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateConnDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateConnDataResponse
     */
    public function updateConnDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateConnDataResponse::fromMap($this->doRPCRequest('UpdateConnData', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BucketIsExistRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BucketIsExistResponse
     */
    public function bucketIsExistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BucketIsExistResponse::fromMap($this->doRPCRequest('BucketIsExist', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BucketIsExistRequest $request
     *
     * @return BucketIsExistResponse
     */
    public function bucketIsExist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bucketIsExistWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RectifyImageResponse::fromMap($this->doRPCRequest('RectifyImage', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param LabelBuildRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return LabelBuildResponse
     */
    public function labelBuildWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LabelBuildResponse::fromMap($this->doRPCRequest('LabelBuild', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DropSceneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DropSceneResponse
     */
    public function dropSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DropSceneResponse::fromMap($this->doRPCRequest('DropScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param OptimizeRightAngleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OptimizeRightAngleResponse
     */
    public function optimizeRightAngleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OptimizeRightAngleResponse::fromMap($this->doRPCRequest('OptimizeRightAngle', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddRelativePositionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddRelativePositionResponse
     */
    public function addRelativePositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddRelativePositionResponse::fromMap($this->doRPCRequest('AddRelativePosition', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DetailSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DetailSceneResponse
     */
    public function detailSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetailSceneResponse::fromMap($this->doRPCRequest('DetailScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSceneResponse
     */
    public function createSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSceneResponse::fromMap($this->doRPCRequest('CreateScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSceneRequest $request
     *
     * @return CreateSceneResponse
     */
    public function createScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSceneWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFileResponse::fromMap($this->doRPCRequest('DeleteFile', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileWithOptions($request, $runtime);
    }

    /**
     * @param CheckResourceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckResourceResponse
     */
    public function checkResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckResourceResponse::fromMap($this->doRPCRequest('CheckResource', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckResourceRequest $request
     *
     * @return CheckResourceResponse
     */
    public function checkResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkResourceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSceneResponse::fromMap($this->doRPCRequest('ListScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PublishHotspotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PublishHotspotResponse
     */
    public function publishHotspotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishHotspotResponse::fromMap($this->doRPCRequest('PublishHotspot', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSceneResponse
     */
    public function updateSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSceneResponse::fromMap($this->doRPCRequest('UpdateScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateLayoutDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateLayoutDataResponse
     */
    public function updateLayoutDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLayoutDataResponse::fromMap($this->doRPCRequest('UpdateLayoutData', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SaveHotspotTagRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveHotspotTagResponse
     */
    public function saveHotspotTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveHotspotTagResponse::fromMap($this->doRPCRequest('SaveHotspotTag', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CheckPermissionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckPermissionResponse
     */
    public function checkPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckPermissionResponse::fromMap($this->doRPCRequest('CheckPermission', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckPermissionRequest $request
     *
     * @return CheckPermissionResponse
     */
    public function checkPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkPermissionWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProjectResponse::fromMap($this->doRPCRequest('DeleteProject', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RectVerticalRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RectVerticalResponse
     */
    public function rectVerticalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RectVerticalResponse::fromMap($this->doRPCRequest('RectVertical', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PredImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PredImageResponse
     */
    public function predImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PredImageResponse::fromMap($this->doRPCRequest('PredImage', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetOssPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetOssPolicyResponse
     */
    public function getOssPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOssPolicyResponse::fromMap($this->doRPCRequest('GetOssPolicy', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetConnDataRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetConnDataResponse
     */
    public function getConnDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetConnDataResponse::fromMap($this->doRPCRequest('GetConnData', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TempPreviewStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TempPreviewStatusResponse
     */
    public function tempPreviewStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TempPreviewStatusResponse::fromMap($this->doRPCRequest('TempPreviewStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddProjectResponse
     */
    public function addProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddProjectResponse::fromMap($this->doRPCRequest('AddProject', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListMainScenesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListMainScenesResponse
     */
    public function listMainScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMainScenesResponse::fromMap($this->doRPCRequest('ListMainScenes', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMainScenesRequest $request
     *
     * @return ListMainScenesResponse
     */
    public function listMainScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMainScenesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetailSubSceneResponse::fromMap($this->doRPCRequest('DetailSubScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListSubSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSubSceneResponse
     */
    public function listSubSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSubSceneResponse::fromMap($this->doRPCRequest('ListSubScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateSubSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateSubSceneResponse
     */
    public function updateSubSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSubSceneResponse::fromMap($this->doRPCRequest('UpdateSubScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProjectResponse::fromMap($this->doRPCRequest('CreateProject', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DropBucketRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DropBucketResponse
     */
    public function dropBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DropBucketResponse::fromMap($this->doRPCRequest('DropBucket', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DropBucketRequest $request
     *
     * @return DropBucketResponse
     */
    public function dropBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropBucketWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetUserBucketConfigResponse
     */
    public function getUserBucketConfigWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetUserBucketConfigResponse::fromMap($this->doRPCRequest('GetUserBucketConfig', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetUserBucketConfigResponse
     */
    public function getUserBucketConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserBucketConfigWithOptions($runtime);
    }

    /**
     * @param AddBucketRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddBucketResponse
     */
    public function addBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddBucketResponse::fromMap($this->doRPCRequest('AddBucket', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddBucketRequest $request
     *
     * @return AddBucketResponse
     */
    public function addBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBucketWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveHotspotConfigResponse::fromMap($this->doRPCRequest('SaveHotspotConfig', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetWindowConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetWindowConfigResponse
     */
    public function getWindowConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWindowConfigResponse::fromMap($this->doRPCRequest('GetWindowConfig', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StatisQueryByTypeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StatisQueryByTypeResponse
     */
    public function statisQueryByTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StatisQueryByTypeResponse::fromMap($this->doRPCRequest('StatisQueryByType', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StatisQueryByTypeRequest $request
     *
     * @return StatisQueryByTypeResponse
     */
    public function statisQueryByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->statisQueryByTypeWithOptions($request, $runtime);
    }

    /**
     * @param StatisExportSceneInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return StatisExportSceneInfoResponse
     */
    public function statisExportSceneInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StatisExportSceneInfoResponse::fromMap($this->doRPCRequest('StatisExportSceneInfo', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StatisExportSceneInfoRequest $request
     *
     * @return StatisExportSceneInfoResponse
     */
    public function statisExportSceneInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->statisExportSceneInfoWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHotspotConfigResponse::fromMap($this->doRPCRequest('GetHotspotConfig', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetSceneBuildTaskStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSceneBuildTaskStatusResponse
     */
    public function getSceneBuildTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSceneBuildTaskStatusResponse::fromMap($this->doRPCRequest('GetSceneBuildTaskStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TempPreviewRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return TempPreviewResponse
     */
    public function tempPreviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TempPreviewResponse::fromMap($this->doRPCRequest('TempPreview', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PublishSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PublishSceneResponse
     */
    public function publishSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishSceneResponse::fromMap($this->doRPCRequest('PublishScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DetailProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetailProjectResponse
     */
    public function detailProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetailProjectResponse::fromMap($this->doRPCRequest('DetailProject', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListScenesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListScenesResponse
     */
    public function listScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListScenesResponse::fromMap($this->doRPCRequest('ListScenes', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListScenesRequest $request
     *
     * @return ListScenesResponse
     */
    public function listScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScenesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DropSubSceneResponse::fromMap($this->doRPCRequest('DropSubScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param IsEnableOssRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return IsEnableOssResponse
     */
    public function isEnableOssWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return IsEnableOssResponse::fromMap($this->doRPCRequest('IsEnableOss', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param IsEnableOssRequest $request
     *
     * @return IsEnableOssResponse
     */
    public function isEnableOss($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->isEnableOssWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHotspotTagResponse::fromMap($this->doRPCRequest('GetHotspotTag', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DropProjectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DropProjectResponse
     */
    public function dropProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DropProjectResponse::fromMap($this->doRPCRequest('DropProject', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return GetUserOssStatusResponse
     */
    public function getUserOssStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetUserOssStatusResponse::fromMap($this->doRPCRequest('GetUserOssStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetUserOssStatusResponse
     */
    public function getUserOssStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserOssStatusWithOptions($runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProjectResponse::fromMap($this->doRPCRequest('ListProject', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetOriginLayoutDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOriginLayoutDataResponse
     */
    public function getOriginLayoutDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOriginLayoutDataResponse::fromMap($this->doRPCRequest('GetOriginLayoutData', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StatisListSceneInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StatisListSceneInfoResponse
     */
    public function statisListSceneInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StatisListSceneInfoResponse::fromMap($this->doRPCRequest('StatisListSceneInfo', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StatisListSceneInfoRequest $request
     *
     * @return StatisListSceneInfoResponse
     */
    public function statisListSceneInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->statisListSceneInfoWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ScenePublishResponse::fromMap($this->doRPCRequest('ScenePublish', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SaveFileRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SaveFileResponse
     */
    public function saveFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveFileResponse::fromMap($this->doRPCRequest('SaveFile', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveFileRequest $request
     *
     * @return SaveFileResponse
     */
    public function saveFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveFileWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRectifyImageResponse::fromMap($this->doRPCRequest('GetRectifyImage', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProjectResponse::fromMap($this->doRPCRequest('UpdateProject', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateBucketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateBucketResponse
     */
    public function updateBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateBucketResponse::fromMap($this->doRPCRequest('UpdateBucket', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateBucketRequest $request
     *
     * @return UpdateBucketResponse
     */
    public function updateBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBucketWithOptions($request, $runtime);
    }

    /**
     * @param StatisQueryByDayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StatisQueryByDayResponse
     */
    public function statisQueryByDayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StatisQueryByDayResponse::fromMap($this->doRPCRequest('StatisQueryByDay', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StatisQueryByDayRequest $request
     *
     * @return StatisQueryByDayResponse
     */
    public function statisQueryByDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->statisQueryByDayWithOptions($request, $runtime);
    }

    /**
     * @param GetSceneListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSceneListResponse
     */
    public function getSceneListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSceneListResponse::fromMap($this->doRPCRequest('GetSceneList', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSceneListRequest $request
     *
     * @return GetSceneListResponse
     */
    public function getSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSceneListWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSubSceneTaskStatusResponse::fromMap($this->doRPCRequest('GetSubSceneTaskStatus', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PredictionWallLineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PredictionWallLineResponse
     */
    public function predictionWallLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PredictionWallLineResponse::fromMap($this->doRPCRequest('PredictionWallLine', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetPolicyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPolicyResponse::fromMap($this->doRPCRequest('GetPolicy', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPolicyRequest $request
     *
     * @return GetPolicyResponse
     */
    public function getPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSubSceneResponse::fromMap($this->doRPCRequest('AddSubScene', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetLayoutDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetLayoutDataResponse
     */
    public function getLayoutDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLayoutDataResponse::fromMap($this->doRPCRequest('GetLayoutData', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
