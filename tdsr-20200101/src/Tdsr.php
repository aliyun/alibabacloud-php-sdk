<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotTagRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotTagResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetPolicyRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetPolicyResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneListRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneListResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetWindowConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetWindowConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListMainScenesRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListMainScenesResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListScenesRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListScenesResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishHotspotRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishHotspotResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveFileRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveFileResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Tdsr extends Rpc
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
     * @param SaveHotspotConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SaveHotspotConfigResponse
     */
    public function saveHotspotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SaveHotspotConfigResponse::fromMap($this->doRequest('SaveHotspotConfig', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param GetHotspotConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetHotspotConfigResponse
     */
    public function getHotspotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetHotspotConfigResponse::fromMap($this->doRequest('GetHotspotConfig', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param ListMainScenesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListMainScenesResponse
     */
    public function listMainScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListMainScenesResponse::fromMap($this->doRequest('ListMainScenes', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param SaveHotspotTagRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveHotspotTagResponse
     */
    public function saveHotspotTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SaveHotspotTagResponse::fromMap($this->doRequest('SaveHotspotTag', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param GetSceneListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSceneListResponse
     */
    public function getSceneListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSceneListResponse::fromMap($this->doRequest('GetSceneList', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param SaveFileRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SaveFileResponse
     */
    public function saveFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SaveFileResponse::fromMap($this->doRequest('SaveFile', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param DeleteFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFileResponse::fromMap($this->doRequest('DeleteFile', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param GetHotspotTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetHotspotTagResponse
     */
    public function getHotspotTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetHotspotTagResponse::fromMap($this->doRequest('GetHotspotTag', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param GetPolicyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPolicyResponse::fromMap($this->doRequest('GetPolicy', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param PublishHotspotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PublishHotspotResponse
     */
    public function publishHotspotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PublishHotspotResponse::fromMap($this->doRequest('PublishHotspot', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param GetWindowConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetWindowConfigResponse
     */
    public function getWindowConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetWindowConfigResponse::fromMap($this->doRequest('GetWindowConfig', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param GetSceneDataRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSceneDataResponse
     */
    public function getSceneDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSceneDataResponse::fromMap($this->doRequest('GetSceneData', 'HTTPS', 'POST', '2020-01-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param CheckPermissionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckPermissionResponse
     */
    public function checkPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckPermissionResponse::fromMap($this->doRequest('CheckPermission', 'HTTPS', 'POST', '2020-01-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CheckResourceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckResourceResponse
     */
    public function checkResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckResourceResponse::fromMap($this->doRequest('CheckResource', 'HTTPS', 'POST', '2020-01-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSceneResponse
     */
    public function createSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSceneResponse::fromMap($this->doRequest('CreateScene', 'HTTPS', 'POST', '2020-01-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateProjectResponse::fromMap($this->doRequest('CreateProject', 'HTTPS', 'POST', '2020-01-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteProjectResponse::fromMap($this->doRequest('DeleteProject', 'HTTPS', 'POST', '2020-01-01', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListScenesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListScenesResponse
     */
    public function listScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListScenesResponse::fromMap($this->doRequest('ListScenes', 'HTTPS', 'POST', '2020-01-01', 'AK', null, Tea::merge($request), $runtime));
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
}
