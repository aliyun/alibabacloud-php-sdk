<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\CheckWhiteBoardHostRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\CheckWhiteBoardHostResponse;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\CreateAppRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\CreateAppResponse;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\CreateWhiteBoardRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\CreateWhiteBoardResponse;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\GetUserPermissionCallbackRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\GetUserPermissionCallbackResponse;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\GetUserProfileCallbackRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\GetUserProfileCallbackResponse;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\GetWhiteBoardProfileCallbackRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\GetWhiteBoardProfileCallbackResponse;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\OpenWhiteBoardRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\OpenWhiteBoardResponse;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\RefreshUsersPermissionsRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\RefreshUsersPermissionsResponse;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\SetAppCallbackUrlRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\SetAppCallbackUrlResponse;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\SetAppDomainNamesRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\SetAppDomainNamesResponse;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\SetAppNameRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\SetAppNameResponse;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\SetAppStatusRequest;
use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\SetAppStatusResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Rtcwhiteboard extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rtc-white-board', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CheckWhiteBoardHostRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CheckWhiteBoardHostResponse
     */
    public function checkWhiteBoardHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckWhiteBoardHostResponse::fromMap($this->doRPCRequest('CheckWhiteBoardHost', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckWhiteBoardHostRequest $request
     *
     * @return CheckWhiteBoardHostResponse
     */
    public function checkWhiteBoardHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkWhiteBoardHostWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAppResponse::fromMap($this->doRPCRequest('CreateApp', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateWhiteBoardRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateWhiteBoardResponse
     */
    public function createWhiteBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateWhiteBoardResponse::fromMap($this->doRPCRequest('CreateWhiteBoard', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateWhiteBoardRequest $request
     *
     * @return CreateWhiteBoardResponse
     */
    public function createWhiteBoard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWhiteBoardWithOptions($request, $runtime);
    }

    /**
     * @param GetUserPermissionCallbackRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetUserPermissionCallbackResponse
     */
    public function getUserPermissionCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserPermissionCallbackResponse::fromMap($this->doRPCRequest('GetUserPermissionCallback', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserPermissionCallbackRequest $request
     *
     * @return GetUserPermissionCallbackResponse
     */
    public function getUserPermissionCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserPermissionCallbackWithOptions($request, $runtime);
    }

    /**
     * @param GetUserProfileCallbackRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetUserProfileCallbackResponse
     */
    public function getUserProfileCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserProfileCallbackResponse::fromMap($this->doRPCRequest('GetUserProfileCallback', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserProfileCallbackRequest $request
     *
     * @return GetUserProfileCallbackResponse
     */
    public function getUserProfileCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserProfileCallbackWithOptions($request, $runtime);
    }

    /**
     * @param GetWhiteBoardProfileCallbackRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetWhiteBoardProfileCallbackResponse
     */
    public function getWhiteBoardProfileCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWhiteBoardProfileCallbackResponse::fromMap($this->doRPCRequest('GetWhiteBoardProfileCallback', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetWhiteBoardProfileCallbackRequest $request
     *
     * @return GetWhiteBoardProfileCallbackResponse
     */
    public function getWhiteBoardProfileCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWhiteBoardProfileCallbackWithOptions($request, $runtime);
    }

    /**
     * @param OpenWhiteBoardRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OpenWhiteBoardResponse
     */
    public function openWhiteBoardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenWhiteBoardResponse::fromMap($this->doRPCRequest('OpenWhiteBoard', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OpenWhiteBoardRequest $request
     *
     * @return OpenWhiteBoardResponse
     */
    public function openWhiteBoard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openWhiteBoardWithOptions($request, $runtime);
    }

    /**
     * @param RefreshUsersPermissionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RefreshUsersPermissionsResponse
     */
    public function refreshUsersPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshUsersPermissionsResponse::fromMap($this->doRPCRequest('RefreshUsersPermissions', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RefreshUsersPermissionsRequest $request
     *
     * @return RefreshUsersPermissionsResponse
     */
    public function refreshUsersPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshUsersPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param SetAppCallbackUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetAppCallbackUrlResponse
     */
    public function setAppCallbackUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetAppCallbackUrlResponse::fromMap($this->doRPCRequest('SetAppCallbackUrl', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetAppCallbackUrlRequest $request
     *
     * @return SetAppCallbackUrlResponse
     */
    public function setAppCallbackUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppCallbackUrlWithOptions($request, $runtime);
    }

    /**
     * @param SetAppDomainNamesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetAppDomainNamesResponse
     */
    public function setAppDomainNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetAppDomainNamesResponse::fromMap($this->doRPCRequest('SetAppDomainNames', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetAppDomainNamesRequest $request
     *
     * @return SetAppDomainNamesResponse
     */
    public function setAppDomainNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppDomainNamesWithOptions($request, $runtime);
    }

    /**
     * @param SetAppNameRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetAppNameResponse
     */
    public function setAppNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetAppNameResponse::fromMap($this->doRPCRequest('SetAppName', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetAppNameRequest $request
     *
     * @return SetAppNameResponse
     */
    public function setAppName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppNameWithOptions($request, $runtime);
    }

    /**
     * @param SetAppStatusRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetAppStatusResponse
     */
    public function setAppStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetAppStatusResponse::fromMap($this->doRPCRequest('SetAppStatus', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetAppStatusRequest $request
     *
     * @return SetAppStatusResponse
     */
    public function setAppStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppStatusWithOptions($request, $runtime);
    }
}
