<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Avatar\V20220130\Models\CancelVideoTaskRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\CancelVideoTaskResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\CancelVideoTaskShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\DuplexDecisionRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\DuplexDecisionResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\DuplexDecisionShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\GetVideoTaskInfoRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\GetVideoTaskInfoResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\GetVideoTaskInfoShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryRunningInstanceRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryRunningInstanceResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryRunningInstanceShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo3DAvatarVideoTaskRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo3DAvatarVideoTaskResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo3DAvatarVideoTaskShrinkRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextToSignVideoTaskRequest;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextToSignVideoTaskResponse;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextToSignVideoTaskShrinkRequest;
use AlibabaCloud\Tea\Tea;
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
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->app), 'App', 'json');
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
            $request->dialogContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->dialogContext), 'DialogContext', 'json');
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
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->app), 'App', 'json');
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
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->app), 'App', 'json');
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
        if (!Utils::isUnset($tmpReq->textRequest)) {
            $request->textRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->textRequest), 'TextRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->VAMLRequest)) {
            $request->VAMLRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->VAMLRequest), 'VAMLRequest', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
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
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->app), 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->channel)) {
            $request->channelShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->channel), 'Channel', 'json');
        }
        if (!Utils::isUnset($tmpReq->commandRequest)) {
            $request->commandRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->commandRequest), 'CommandRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->user), 'User', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
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
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->app), 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoInfo)) {
            $request->videoInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->videoInfo), 'VideoInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
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
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->app), 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoInfo)) {
            $request->videoInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->videoInfo), 'VideoInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
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
     * @param SubmitTextToSignVideoTaskRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitTextToSignVideoTaskResponse
     */
    public function submitTextToSignVideoTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitTextToSignVideoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->app), 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoInfo)) {
            $request->videoInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->videoInfo), 'VideoInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
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
            'action'      => 'SubmitTextToSignVideoTask',
            'version'     => '2022-01-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTextToSignVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitTextToSignVideoTaskRequest $request
     *
     * @return SubmitTextToSignVideoTaskResponse
     */
    public function submitTextToSignVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTextToSignVideoTaskWithOptions($request, $runtime);
    }
}
