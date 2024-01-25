<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\MindLive\V20210301\Models\LoginDeviceRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\LoginDeviceResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\LogoutDeviceRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\LogoutDeviceResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\QueryItemBackgroundsRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\QueryItemBackgroundsResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\QueryItemBackgroundsShrinkRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ReportCurrentBackgroundRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ReportCurrentBackgroundResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ReportCurrentBackgroundShrinkRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ReportDevConfigRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ReportDevConfigResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ReportLiveStateRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ReportLiveStateResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ReportScreenRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ReportScreenResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ReportUserConfigRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ReportUserConfigResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestAuthorizationDataResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestBackgroundResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestBindDataRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestBindDataResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestBindingStateResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestDeviceInfoResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestIotTriadResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestLiveSellPointStateResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestLiveTeleprompterStateResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestOssStsRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestOssStsResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestPasterResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestResetDataRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestResetDataResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestServiceInfoResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestUserConfigRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestUserConfigResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\RequestUserSellPointTemplateResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ResetDeviceRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\ResetDeviceResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\UpdateCurrentItemRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\UpdateCurrentItemResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\UpdateLiveSellPointStateRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\UpdateLiveSellPointStateResponse;
use AlibabaCloud\SDK\MindLive\V20210301\Models\UpdateLiveTeleprompterStateRequest;
use AlibabaCloud\SDK\MindLive\V20210301\Models\UpdateLiveTeleprompterStateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class MindLive extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mindlive', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param LoginDeviceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return LoginDeviceResponse
     */
    public function loginDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userSource)) {
            $query['UserSource'] = $request->userSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LoginDevice',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LoginDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LoginDeviceRequest $request
     *
     * @return LoginDeviceResponse
     */
    public function loginDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loginDeviceWithOptions($request, $runtime);
    }

    /**
     * @param LogoutDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return LogoutDeviceResponse
     */
    public function logoutDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userSource)) {
            $query['UserSource'] = $request->userSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LogoutDevice',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LogoutDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LogoutDeviceRequest $request
     *
     * @return LogoutDeviceResponse
     */
    public function logoutDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->logoutDeviceWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemBackgroundsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return QueryItemBackgroundsResponse
     */
    public function queryItemBackgroundsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryItemBackgroundsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemIds)) {
            $request->itemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemIds, 'ItemIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->itemIdsShrink)) {
            $query['ItemIds'] = $request->itemIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryItemBackgrounds',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryItemBackgroundsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryItemBackgroundsRequest $request
     *
     * @return QueryItemBackgroundsResponse
     */
    public function queryItemBackgrounds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemBackgroundsWithOptions($request, $runtime);
    }

    /**
     * @param ReportCurrentBackgroundRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ReportCurrentBackgroundResponse
     */
    public function reportCurrentBackgroundWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReportCurrentBackgroundShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->bgConfig)) {
            $request->bgConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->bgConfig, 'BgConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bgConfigShrink)) {
            $query['BgConfig'] = $request->bgConfigShrink;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->open)) {
            $query['Open'] = $request->open;
        }
        if (!Utils::isUnset($request->resourceUuid)) {
            $query['ResourceUuid'] = $request->resourceUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportCurrentBackground',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportCurrentBackgroundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportCurrentBackgroundRequest $request
     *
     * @return ReportCurrentBackgroundResponse
     */
    public function reportCurrentBackground($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportCurrentBackgroundWithOptions($request, $runtime);
    }

    /**
     * @param ReportDevConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReportDevConfigResponse
     */
    public function reportDevConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configs)) {
            $query['Configs'] = $request->configs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportDevConfig',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportDevConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportDevConfigRequest $request
     *
     * @return ReportDevConfigResponse
     */
    public function reportDevConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportDevConfigWithOptions($request, $runtime);
    }

    /**
     * @param ReportLiveStateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReportLiveStateResponse
     */
    public function reportLiveStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->anchorId)) {
            $query['AnchorId'] = $request->anchorId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->liveMode)) {
            $query['LiveMode'] = $request->liveMode;
        }
        if (!Utils::isUnset($request->liveState)) {
            $query['LiveState'] = $request->liveState;
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
            'action'      => 'ReportLiveState',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportLiveStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportLiveStateRequest $request
     *
     * @return ReportLiveStateResponse
     */
    public function reportLiveState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportLiveStateWithOptions($request, $runtime);
    }

    /**
     * @param ReportScreenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ReportScreenResponse
     */
    public function reportScreenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ossBucketName)) {
            $query['OssBucketName'] = $request->ossBucketName;
        }
        if (!Utils::isUnset($request->ossObjectKey)) {
            $query['OssObjectKey'] = $request->ossObjectKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportScreen',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportScreenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportScreenRequest $request
     *
     * @return ReportScreenResponse
     */
    public function reportScreen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportScreenWithOptions($request, $runtime);
    }

    /**
     * @param ReportUserConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReportUserConfigResponse
     */
    public function reportUserConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportUserConfig',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportUserConfigRequest $request
     *
     * @return ReportUserConfigResponse
     */
    public function reportUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportUserConfigWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RequestAuthorizationDataResponse
     */
    public function requestAuthorizationDataWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RequestAuthorizationData',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestAuthorizationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RequestAuthorizationDataResponse
     */
    public function requestAuthorizationData()
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestAuthorizationDataWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RequestBackgroundResponse
     */
    public function requestBackgroundWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RequestBackground',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestBackgroundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RequestBackgroundResponse
     */
    public function requestBackground()
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestBackgroundWithOptions($runtime);
    }

    /**
     * @param RequestBindDataRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RequestBindDataResponse
     */
    public function requestBindDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->liveSource)) {
            $query['LiveSource'] = $request->liveSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RequestBindData',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestBindDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RequestBindDataRequest $request
     *
     * @return RequestBindDataResponse
     */
    public function requestBindData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestBindDataWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RequestBindingStateResponse
     */
    public function requestBindingStateWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RequestBindingState',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestBindingStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RequestBindingStateResponse
     */
    public function requestBindingState()
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestBindingStateWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RequestDeviceInfoResponse
     */
    public function requestDeviceInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RequestDeviceInfo',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RequestDeviceInfoResponse
     */
    public function requestDeviceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestDeviceInfoWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RequestIotTriadResponse
     */
    public function requestIotTriadWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RequestIotTriad',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestIotTriadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RequestIotTriadResponse
     */
    public function requestIotTriad()
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestIotTriadWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RequestLiveSellPointStateResponse
     */
    public function requestLiveSellPointStateWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RequestLiveSellPointState',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestLiveSellPointStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RequestLiveSellPointStateResponse
     */
    public function requestLiveSellPointState()
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestLiveSellPointStateWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RequestLiveTeleprompterStateResponse
     */
    public function requestLiveTeleprompterStateWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RequestLiveTeleprompterState',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestLiveTeleprompterStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RequestLiveTeleprompterStateResponse
     */
    public function requestLiveTeleprompterState()
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestLiveTeleprompterStateWithOptions($runtime);
    }

    /**
     * @param RequestOssStsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RequestOssStsResponse
     */
    public function requestOssStsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCode)) {
            $query['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->expireSeconds)) {
            $query['ExpireSeconds'] = $request->expireSeconds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RequestOssSts',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestOssStsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RequestOssStsRequest $request
     *
     * @return RequestOssStsResponse
     */
    public function requestOssSts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestOssStsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RequestPasterResponse
     */
    public function requestPasterWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RequestPaster',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestPasterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RequestPasterResponse
     */
    public function requestPaster()
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestPasterWithOptions($runtime);
    }

    /**
     * @param RequestResetDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RequestResetDataResponse
     */
    public function requestResetDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->liveSource)) {
            $query['LiveSource'] = $request->liveSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RequestResetData',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestResetDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RequestResetDataRequest $request
     *
     * @return RequestResetDataResponse
     */
    public function requestResetData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestResetDataWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RequestServiceInfoResponse
     */
    public function requestServiceInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RequestServiceInfo',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestServiceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RequestServiceInfoResponse
     */
    public function requestServiceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestServiceInfoWithOptions($runtime);
    }

    /**
     * @param RequestUserConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RequestUserConfigResponse
     */
    public function requestUserConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RequestUserConfig',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RequestUserConfigRequest $request
     *
     * @return RequestUserConfigResponse
     */
    public function requestUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestUserConfigWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RequestUserSellPointTemplateResponse
     */
    public function requestUserSellPointTemplateWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RequestUserSellPointTemplate',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestUserSellPointTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RequestUserSellPointTemplateResponse
     */
    public function requestUserSellPointTemplate()
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestUserSellPointTemplateWithOptions($runtime);
    }

    /**
     * @param ResetDeviceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ResetDeviceResponse
     */
    public function resetDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetDevice',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetDeviceRequest $request
     *
     * @return ResetDeviceResponse
     */
    public function resetDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCurrentItemRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCurrentItemResponse
     */
    public function updateCurrentItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCurrentItem',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCurrentItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCurrentItemRequest $request
     *
     * @return UpdateCurrentItemResponse
     */
    public function updateCurrentItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCurrentItemWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveSellPointStateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLiveSellPointStateResponse
     */
    public function updateLiveSellPointStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->display)) {
            $query['Display'] = $request->display;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveSellPointState',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveSellPointStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveSellPointStateRequest $request
     *
     * @return UpdateLiveSellPointStateResponse
     */
    public function updateLiveSellPointState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveSellPointStateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveTeleprompterStateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLiveTeleprompterStateResponse
     */
    public function updateLiveTeleprompterStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->display)) {
            $query['Display'] = $request->display;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveTeleprompterState',
            'version'     => '2021-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveTeleprompterStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveTeleprompterStateRequest $request
     *
     * @return UpdateLiveTeleprompterStateResponse
     */
    public function updateLiveTeleprompterState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveTeleprompterStateWithOptions($request, $runtime);
    }
}
