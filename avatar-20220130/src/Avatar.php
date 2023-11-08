<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Avatar\V20220130\Models\CancelVideoTaskRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\CancelVideoTaskResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\CancelVideoTaskShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\ClientAuthRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\ClientAuthResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\ClientStartRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\ClientStartResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\CloseTimedResetOperateRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\CloseTimedResetOperateResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\Create2dAvatarRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\Create2dAvatarResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\DeleteAvatarRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\DeleteAvatarResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\DuplexDecisionRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\DuplexDecisionResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\DuplexDecisionShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\GetVideoTaskInfoRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\GetVideoTaskInfoResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\GetVideoTaskInfoShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\LicenseAuthRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\LicenseAuthResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarListRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarListResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryAvatarResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryRunningInstanceRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryRunningInstanceResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryRunningInstanceShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryTimedResetOperateStatusRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryTimedResetOperateStatusResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryVideoTaskInfoRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryVideoTaskInfoResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryVideoTaskInfoShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\Render3dAvatarRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\Render3dAvatarResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendCommandRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendCommandResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendCommandShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendTextRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendTextResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendTextShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendVamlRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendVamlResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartTimedResetOperateRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartTimedResetOperateResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo2DAvatarVideoTaskRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo2DAvatarVideoTaskResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo2DAvatarVideoTaskShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo3DAvatarVideoTaskRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo3DAvatarVideoTaskResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo3DAvatarVideoTaskShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAvatarVideoTaskRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAvatarVideoTaskResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAvatarVideoTaskShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo3DAvatarVideoTaskRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo3DAvatarVideoTaskResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo3DAvatarVideoTaskShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\Update2dAvatarRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\Update2dAvatarResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Avatar extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('avatar', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelVideoTaskRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CancelVideoTaskResponse
     */
    public function cancelVideoTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CancelVideoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
        }
        if (!Utils::isUnset($request->taskUuid)) {
            $query['TaskUuid'] = $request->taskUuid;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelVideoTask',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelVideoTaskRequest $request
     *
     * @return CancelVideoTaskResponse
     */
    public function cancelVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param ClientAuthRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ClientAuthResponse
     */
    public function clientAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->deviceInfo)) {
            $query['DeviceInfo'] = $request->deviceInfo;
        }
        if (!Utils::isUnset($request->deviceType)) {
            $query['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->license)) {
            $query['License'] = $request->license;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClientAuth',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClientAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ClientAuthRequest $request
     *
     * @return ClientAuthResponse
     */
    public function clientAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clientAuthWithOptions($request, $runtime);
    }

    /**
     * @param ClientStartRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ClientStartResponse
     */
    public function clientStartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClientStart',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClientStartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ClientStartRequest $request
     *
     * @return ClientStartResponse
     */
    public function clientStart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clientStartWithOptions($request, $runtime);
    }

    /**
     * @param CloseTimedResetOperateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CloseTimedResetOperateResponse
     */
    public function closeTimedResetOperateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseTimedResetOperate',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseTimedResetOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseTimedResetOperateRequest $request
     *
     * @return CloseTimedResetOperateResponse
     */
    public function closeTimedResetOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeTimedResetOperateWithOptions($request, $runtime);
    }

    /**
     * @param Create2dAvatarRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return Create2dAvatarResponse
     */
    public function create2dAvatarWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->orientation)) {
            $query['Orientation'] = $request->orientation;
        }
        if (!Utils::isUnset($request->portrait)) {
            $query['Portrait'] = $request->portrait;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->transparent)) {
            $query['Transparent'] = $request->transparent;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Create2dAvatar',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return Create2dAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Create2dAvatarRequest $request
     *
     * @return Create2dAvatarResponse
     */
    public function create2dAvatar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->create2dAvatarWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAvatarRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteAvatarResponse
     */
    public function deleteAvatarWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAvatar',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAvatarRequest $request
     *
     * @return DeleteAvatarResponse
     */
    public function deleteAvatar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAvatarWithOptions($request, $runtime);
    }

    /**
     * @param DuplexDecisionRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return DuplexDecisionResponse
     */
    public function duplexDecisionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DuplexDecisionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->customKeywords)) {
            $request->customKeywordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customKeywords, 'CustomKeywords', 'json');
        }
        if (!Utils::isUnset($tmpReq->dialogContext)) {
            $request->dialogContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dialogContext, 'DialogContext', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bizRequestId)) {
            $query['BizRequestId'] = $request->bizRequestId;
        }
        if (!Utils::isUnset($request->callTime)) {
            $query['CallTime'] = $request->callTime;
        }
        if (!Utils::isUnset($request->customKeywordsShrink)) {
            $query['CustomKeywords'] = $request->customKeywordsShrink;
        }
        if (!Utils::isUnset($request->dialogContextShrink)) {
            $query['DialogContext'] = $request->dialogContextShrink;
        }
        if (!Utils::isUnset($request->dialogStatus)) {
            $query['DialogStatus'] = $request->dialogStatus;
        }
        if (!Utils::isUnset($request->interruptType)) {
            $query['InterruptType'] = $request->interruptType;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DuplexDecision',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DuplexDecisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DuplexDecisionRequest $request
     *
     * @return DuplexDecisionResponse
     */
    public function duplexDecision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->duplexDecisionWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoTaskInfoRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return GetVideoTaskInfoResponse
     */
    public function getVideoTaskInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetVideoTaskInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideoTaskInfo',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVideoTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVideoTaskInfoRequest $request
     *
     * @return GetVideoTaskInfoResponse
     */
    public function getVideoTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @param LicenseAuthRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return LicenseAuthResponse
     */
    public function licenseAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->license)) {
            $query['License'] = $request->license;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LicenseAuth',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LicenseAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LicenseAuthRequest $request
     *
     * @return LicenseAuthResponse
     */
    public function licenseAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->licenseAuthWithOptions($request, $runtime);
    }

    /**
     * @param QueryAvatarRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryAvatarResponse
     */
    public function queryAvatarWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAvatar',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAvatarRequest $request
     *
     * @return QueryAvatarResponse
     */
    public function queryAvatar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAvatarWithOptions($request, $runtime);
    }

    /**
     * @param QueryAvatarListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryAvatarListResponse
     */
    public function queryAvatarListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->modelType)) {
            $query['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAvatarList',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAvatarListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAvatarListRequest $request
     *
     * @return QueryAvatarListResponse
     */
    public function queryAvatarList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAvatarListWithOptions($request, $runtime);
    }

    /**
     * @param QueryRunningInstanceRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return QueryRunningInstanceResponse
     */
    public function queryRunningInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryRunningInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRunningInstance',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRunningInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRunningInstanceRequest $request
     *
     * @return QueryRunningInstanceResponse
     */
    public function queryRunningInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRunningInstanceWithOptions($request, $runtime);
    }

    /**
     * @param QueryTimedResetOperateStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryTimedResetOperateStatusResponse
     */
    public function queryTimedResetOperateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTimedResetOperateStatus',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTimedResetOperateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTimedResetOperateStatusRequest $request
     *
     * @return QueryTimedResetOperateStatusResponse
     */
    public function queryTimedResetOperateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTimedResetOperateStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryVideoTaskInfoRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return QueryVideoTaskInfoResponse
     */
    public function queryVideoTaskInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryVideoTaskInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
        }
        if (!Utils::isUnset($request->orderById)) {
            $query['OrderById'] = $request->orderById;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskUuid)) {
            $query['TaskUuid'] = $request->taskUuid;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryVideoTaskInfo',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVideoTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryVideoTaskInfoRequest $request
     *
     * @return QueryVideoTaskInfoResponse
     */
    public function queryVideoTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVideoTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @param Render3dAvatarRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return Render3dAvatarResponse
     */
    public function render3dAvatarWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Render3dAvatar',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return Render3dAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Render3dAvatarRequest $request
     *
     * @return Render3dAvatarResponse
     */
    public function render3dAvatar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->render3dAvatarWithOptions($request, $runtime);
    }

    /**
     * @param SendCommandRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return SendCommandResponse
     */
    public function sendCommandWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendCommandShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->content)) {
            $request->contentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->contentShrink)) {
            $query['Content'] = $request->contentShrink;
        }
        if (!Utils::isUnset($request->feedback)) {
            $query['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->uniqueCode)) {
            $query['UniqueCode'] = $request->uniqueCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendCommand',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendCommandRequest $request
     *
     * @return SendCommandResponse
     */
    public function sendCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCommandWithOptions($request, $runtime);
    }

    /**
     * @param SendMessageRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->streamExtension)) {
            $request->streamExtensionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamExtension, 'StreamExtension', 'json');
        }
        if (!Utils::isUnset($tmpReq->textRequest)) {
            $request->textRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->textRequest, 'TextRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->VAMLRequest)) {
            $request->VAMLRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->VAMLRequest, 'VAMLRequest', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->feedback)) {
            $query['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->streamExtensionShrink)) {
            $query['StreamExtension'] = $request->streamExtensionShrink;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->textRequestShrink)) {
            $query['TextRequest'] = $request->textRequestShrink;
        }
        if (!Utils::isUnset($request->VAMLRequestShrink)) {
            $query['VAMLRequest'] = $request->VAMLRequestShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendMessage',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendMessageRequest $request
     *
     * @return SendMessageResponse
     */
    public function sendMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageWithOptions($request, $runtime);
    }

    /**
     * @param SendTextRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return SendTextResponse
     */
    public function sendTextWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendTextShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->streamExtension)) {
            $request->streamExtensionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamExtension, 'StreamExtension', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->feedback)) {
            $query['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->interrupt)) {
            $query['Interrupt'] = $request->interrupt;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->streamExtensionShrink)) {
            $query['StreamExtension'] = $request->streamExtensionShrink;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->uniqueCode)) {
            $query['UniqueCode'] = $request->uniqueCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendText',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendTextRequest $request
     *
     * @return SendTextResponse
     */
    public function sendText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendTextWithOptions($request, $runtime);
    }

    /**
     * @param SendVamlRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SendVamlResponse
     */
    public function sendVamlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->vaml)) {
            $query['Vaml'] = $request->vaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendVaml',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendVamlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendVamlRequest $request
     *
     * @return SendVamlResponse
     */
    public function sendVaml($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVamlWithOptions($request, $runtime);
    }

    /**
     * @param StartInstanceRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->channel)) {
            $request->channelShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->channel, 'Channel', 'json');
        }
        if (!Utils::isUnset($tmpReq->commandRequest)) {
            $request->commandRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->commandRequest, 'CommandRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->channelShrink)) {
            $query['Channel'] = $request->channelShrink;
        }
        if (!Utils::isUnset($request->commandRequestShrink)) {
            $query['CommandRequest'] = $request->commandRequestShrink;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userShrink)) {
            $query['User'] = $request->userShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartInstance',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StartTimedResetOperateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StartTimedResetOperateResponse
     */
    public function startTimedResetOperateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartTimedResetOperate',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartTimedResetOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartTimedResetOperateRequest $request
     *
     * @return StartTimedResetOperateResponse
     */
    public function startTimedResetOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTimedResetOperateWithOptions($request, $runtime);
    }

    /**
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopInstance',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAudioTo2DAvatarVideoTaskRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return SubmitAudioTo2DAvatarVideoTaskResponse
     */
    public function submitAudioTo2DAvatarVideoTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitAudioTo2DAvatarVideoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->avatarInfo)) {
            $request->avatarInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->avatarInfo, 'AvatarInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoInfo)) {
            $request->videoInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoInfo, 'VideoInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
        }
        if (!Utils::isUnset($request->avatarInfoShrink)) {
            $query['AvatarInfo'] = $request->avatarInfoShrink;
        }
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->callbackParams)) {
            $query['CallbackParams'] = $request->callbackParams;
        }
        if (!Utils::isUnset($request->extParams)) {
            $query['ExtParams'] = $request->extParams;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->videoInfoShrink)) {
            $query['VideoInfo'] = $request->videoInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAudioTo2DAvatarVideoTask',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAudioTo2DAvatarVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitAudioTo2DAvatarVideoTaskRequest $request
     *
     * @return SubmitAudioTo2DAvatarVideoTaskResponse
     */
    public function submitAudioTo2DAvatarVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAudioTo2DAvatarVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAudioTo3DAvatarVideoTaskRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return SubmitAudioTo3DAvatarVideoTaskResponse
     */
    public function submitAudioTo3DAvatarVideoTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitAudioTo3DAvatarVideoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->avatarInfo)) {
            $request->avatarInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->avatarInfo, 'AvatarInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoInfo)) {
            $request->videoInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoInfo, 'VideoInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
        }
        if (!Utils::isUnset($request->avatarInfoShrink)) {
            $query['AvatarInfo'] = $request->avatarInfoShrink;
        }
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->callbackParams)) {
            $query['CallbackParams'] = $request->callbackParams;
        }
        if (!Utils::isUnset($request->extParams)) {
            $query['ExtParams'] = $request->extParams;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->videoInfoShrink)) {
            $query['VideoInfo'] = $request->videoInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAudioTo3DAvatarVideoTask',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAudioTo3DAvatarVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitAudioTo3DAvatarVideoTaskRequest $request
     *
     * @return SubmitAudioTo3DAvatarVideoTaskResponse
     */
    public function submitAudioTo3DAvatarVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAudioTo3DAvatarVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAvatarVideoTaskRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitAvatarVideoTaskResponse
     */
    public function submitAvatarVideoTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitAvatarVideoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
        }
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->callbackParams)) {
            $query['CallbackParams'] = $request->callbackParams;
        }
        if (!Utils::isUnset($request->extParams)) {
            $query['ExtParams'] = $request->extParams;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->videoParams)) {
            $query['VideoParams'] = $request->videoParams;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAvatarVideoTask',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAvatarVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitAvatarVideoTaskRequest $request
     *
     * @return SubmitAvatarVideoTaskResponse
     */
    public function submitAvatarVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAvatarVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTextTo2DAvatarVideoTaskRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return SubmitTextTo2DAvatarVideoTaskResponse
     */
    public function submitTextTo2DAvatarVideoTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitTextTo2DAvatarVideoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->audioInfo)) {
            $request->audioInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->audioInfo, 'AudioInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->avatarInfo)) {
            $request->avatarInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->avatarInfo, 'AvatarInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoInfo)) {
            $request->videoInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoInfo, 'VideoInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
        }
        if (!Utils::isUnset($request->audioInfoShrink)) {
            $query['AudioInfo'] = $request->audioInfoShrink;
        }
        if (!Utils::isUnset($request->avatarInfoShrink)) {
            $query['AvatarInfo'] = $request->avatarInfoShrink;
        }
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->callbackParams)) {
            $query['CallbackParams'] = $request->callbackParams;
        }
        if (!Utils::isUnset($request->extParams)) {
            $query['ExtParams'] = $request->extParams;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->videoInfoShrink)) {
            $query['VideoInfo'] = $request->videoInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTextTo2DAvatarVideoTask',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTextTo2DAvatarVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitTextTo2DAvatarVideoTaskRequest $request
     *
     * @return SubmitTextTo2DAvatarVideoTaskResponse
     */
    public function submitTextTo2DAvatarVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTextTo2DAvatarVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTextTo3DAvatarVideoTaskRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return SubmitTextTo3DAvatarVideoTaskResponse
     */
    public function submitTextTo3DAvatarVideoTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitTextTo3DAvatarVideoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->audioInfo)) {
            $request->audioInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->audioInfo, 'AudioInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->avatarInfo)) {
            $request->avatarInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->avatarInfo, 'AvatarInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoInfo)) {
            $request->videoInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoInfo, 'VideoInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
        }
        if (!Utils::isUnset($request->audioInfoShrink)) {
            $query['AudioInfo'] = $request->audioInfoShrink;
        }
        if (!Utils::isUnset($request->avatarInfoShrink)) {
            $query['AvatarInfo'] = $request->avatarInfoShrink;
        }
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->callbackParams)) {
            $query['CallbackParams'] = $request->callbackParams;
        }
        if (!Utils::isUnset($request->extParams)) {
            $query['ExtParams'] = $request->extParams;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->videoInfoShrink)) {
            $query['VideoInfo'] = $request->videoInfoShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTextTo3DAvatarVideoTask',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTextTo3DAvatarVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitTextTo3DAvatarVideoTaskRequest $request
     *
     * @return SubmitTextTo3DAvatarVideoTaskResponse
     */
    public function submitTextTo3DAvatarVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTextTo3DAvatarVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param Update2dAvatarRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return Update2dAvatarResponse
     */
    public function update2dAvatarWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->orientation)) {
            $query['Orientation'] = $request->orientation;
        }
        if (!Utils::isUnset($request->portrait)) {
            $query['Portrait'] = $request->portrait;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->transparent)) {
            $query['Transparent'] = $request->transparent;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Update2dAvatar',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return Update2dAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Update2dAvatarRequest $request
     *
     * @return Update2dAvatarResponse
     */
    public function update2dAvatar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->update2dAvatarWithOptions($request, $runtime);
    }
}
