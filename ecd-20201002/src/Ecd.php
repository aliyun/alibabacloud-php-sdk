<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ApproveFotaUpdateRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ApproveFotaUpdateResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ChangePasswordRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ChangePasswordResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DeleteFingerPrintTemplateRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DeleteFingerPrintTemplateResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeDirectoriesRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeDirectoriesResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeFingerPrintTemplatesRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeFingerPrintTemplatesResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeOfficeSitesRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeOfficeSitesResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeSnapshotsResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\EncryptPasswordRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\EncryptPasswordResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetCloudDriveServiceMountTokenRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetCloudDriveServiceMountTokenResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenShrinkRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\IsKeepAliveRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\IsKeepAliveResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\QueryEdsAgentReportConfigRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\QueryEdsAgentReportConfigResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\RebootDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\RebootDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\RefreshLoginTokenRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\RefreshLoginTokenResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ReportEdsAgentInfoRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ReportEdsAgentInfoResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ReportSessionStatusRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ReportSessionStatusResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ResetPasswordRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ResetPasswordResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ResetSnapshotRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\ResetSnapshotResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\SendTokenCodeRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\SendTokenCodeResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\SetFingerPrintTemplateDescriptionRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\SetFingerPrintTemplateDescriptionResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\SetFingerPrintTemplateRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\SetFingerPrintTemplateResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\StartDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\StartDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\StartRecordContentRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\StartRecordContentResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\StopDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\StopDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\StopRecordContentRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\StopRecordContentResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\UnbindUserDesktopRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\UnbindUserDesktopResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\VerifyCredentialRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\VerifyCredentialResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ecd extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecd', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 允许桌面FOTA升级.
     *
     * @param request - ApproveFotaUpdateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApproveFotaUpdateResponse
     *
     * @param ApproveFotaUpdateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ApproveFotaUpdateResponse
     */
    public function approveFotaUpdateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->targetStatus) {
            @$query['TargetStatus'] = $request->targetStatus;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApproveFotaUpdate',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApproveFotaUpdateResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 允许桌面FOTA升级.
     *
     * @param request - ApproveFotaUpdateRequest
     *
     * @returns ApproveFotaUpdateResponse
     *
     * @param ApproveFotaUpdateRequest $request
     *
     * @return ApproveFotaUpdateResponse
     */
    public function approveFotaUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveFotaUpdateWithOptions($request, $runtime);
    }

    /**
     * Changes the password of a user account.
     *
     * @param request - ChangePasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangePasswordResponse
     *
     * @param ChangePasswordRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ChangePasswordResponse
     */
    public function changePasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->newPassword) {
            @$query['NewPassword'] = $request->newPassword;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->oldPassword) {
            @$query['OldPassword'] = $request->oldPassword;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangePassword',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangePasswordResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Changes the password of a user account.
     *
     * @param request - ChangePasswordRequest
     *
     * @returns ChangePasswordResponse
     *
     * @param ChangePasswordRequest $request
     *
     * @return ChangePasswordResponse
     */
    public function changePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changePasswordWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteFingerPrintTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFingerPrintTemplateResponse
     *
     * @param DeleteFingerPrintTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteFingerPrintTemplateResponse
     */
    public function deleteFingerPrintTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->index) {
            @$query['Index'] = $request->index;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFingerPrintTemplate',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFingerPrintTemplateResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - DeleteFingerPrintTemplateRequest
     *
     * @returns DeleteFingerPrintTemplateResponse
     *
     * @param DeleteFingerPrintTemplateRequest $request
     *
     * @return DeleteFingerPrintTemplateResponse
     */
    public function deleteFingerPrintTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFingerPrintTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries directory details.
     *
     * @param request - DescribeDirectoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDirectoriesResponse
     *
     * @param DescribeDirectoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDirectories',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDirectoriesResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries directory details.
     *
     * @param request - DescribeDirectoriesRequest
     *
     * @returns DescribeDirectoriesResponse
     *
     * @param DescribeDirectoriesRequest $request
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirectoriesWithOptions($request, $runtime);
    }

    /**
     * Queries fingerprint templates.
     *
     * @param request - DescribeFingerPrintTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFingerPrintTemplatesResponse
     *
     * @param DescribeFingerPrintTemplatesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeFingerPrintTemplatesResponse
     */
    public function describeFingerPrintTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFingerPrintTemplates',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFingerPrintTemplatesResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries fingerprint templates.
     *
     * @param request - DescribeFingerPrintTemplatesRequest
     *
     * @returns DescribeFingerPrintTemplatesResponse
     *
     * @param DescribeFingerPrintTemplatesRequest $request
     *
     * @return DescribeFingerPrintTemplatesResponse
     */
    public function describeFingerPrintTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFingerPrintTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeGlobalDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGlobalDesktopsResponse
     *
     * @param DescribeGlobalDesktopsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeGlobalDesktopsResponse
     */
    public function describeGlobalDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->desktopAccessType) {
            @$query['DesktopAccessType'] = $request->desktopAccessType;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopName) {
            @$query['DesktopName'] = $request->desktopName;
        }

        if (null !== $request->desktopStatus) {
            @$query['DesktopStatus'] = $request->desktopStatus;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->loginRegionId) {
            @$query['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->queryFotaUpdate) {
            @$query['QueryFotaUpdate'] = $request->queryFotaUpdate;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->searchRegionId) {
            @$query['SearchRegionId'] = $request->searchRegionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        if (null !== $request->withoutLatency) {
            @$query['WithoutLatency'] = $request->withoutLatency;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGlobalDesktops',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGlobalDesktopsResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - DescribeGlobalDesktopsRequest
     *
     * @returns DescribeGlobalDesktopsResponse
     *
     * @param DescribeGlobalDesktopsRequest $request
     *
     * @return DescribeGlobalDesktopsResponse
     */
    public function describeGlobalDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeOfficeSitesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOfficeSitesResponse
     *
     * @param DescribeOfficeSitesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOfficeSitesResponse
     */
    public function describeOfficeSitesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOfficeSites',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOfficeSitesResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - DescribeOfficeSitesRequest
     *
     * @returns DescribeOfficeSitesResponse
     *
     * @param DescribeOfficeSitesRequest $request
     *
     * @return DescribeOfficeSitesResponse
     */
    public function describeOfficeSites($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOfficeSitesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * 列举快照.
     *
     * @param request - DescribeSnapshotsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSnapshotsResponse
     *
     * @param DescribeSnapshotsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshotsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSnapshots',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSnapshotsResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 列举快照.
     *
     * @param request - DescribeSnapshotsRequest
     *
     * @returns DescribeSnapshotsResponse
     *
     * @param DescribeSnapshotsRequest $request
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsWithOptions($request, $runtime);
    }

    /**
     * 查询用户资源列表.
     *
     * @param request - DescribeUserResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserResourcesResponse
     *
     * @param DescribeUserResourcesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUserResourcesResponse
     */
    public function describeUserResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->autoRefresh) {
            @$query['AutoRefresh'] = $request->autoRefresh;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->categoryType) {
            @$query['CategoryType'] = $request->categoryType;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->dualCenterForward) {
            @$query['DualCenterForward'] = $request->dualCenterForward;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->loginRegionId) {
            @$query['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteIds) {
            @$query['OfficeSiteIds'] = $request->officeSiteIds;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->productTypes) {
            @$query['ProductTypes'] = $request->productTypes;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->queryDesktopDurationList) {
            @$query['QueryDesktopDurationList'] = $request->queryDesktopDurationList;
        }

        if (null !== $request->queryDesktopTimers) {
            @$query['QueryDesktopTimers'] = $request->queryDesktopTimers;
        }

        if (null !== $request->queryFotaUpdate) {
            @$query['QueryFotaUpdate'] = $request->queryFotaUpdate;
        }

        if (null !== $request->refreshFotaUpdate) {
            @$query['RefreshFotaUpdate'] = $request->refreshFotaUpdate;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->searchRegionId) {
            @$query['SearchRegionId'] = $request->searchRegionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserResources',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserResourcesResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 查询用户资源列表.
     *
     * @param request - DescribeUserResourcesRequest
     *
     * @returns DescribeUserResourcesResponse
     *
     * @param DescribeUserResourcesRequest $request
     *
     * @return DescribeUserResourcesResponse
     */
    public function describeUserResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserResourcesWithOptions($request, $runtime);
    }

    /**
     * Encrypts a password.
     *
     * @param request - EncryptPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EncryptPasswordResponse
     *
     * @param EncryptPasswordRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EncryptPasswordResponse
     */
    public function encryptPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EncryptPassword',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EncryptPasswordResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Encrypts a password.
     *
     * @param request - EncryptPasswordRequest
     *
     * @returns EncryptPasswordResponse
     *
     * @param EncryptPasswordRequest $request
     *
     * @return EncryptPasswordResponse
     */
    public function encryptPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encryptPasswordWithOptions($request, $runtime);
    }

    /**
     * 获取无影云盘的免密token.
     *
     * @param request - GetCloudDriveServiceMountTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCloudDriveServiceMountTokenResponse
     *
     * @param GetCloudDriveServiceMountTokenRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetCloudDriveServiceMountTokenResponse
     */
    public function getCloudDriveServiceMountTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCloudDriveServiceMountToken',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCloudDriveServiceMountTokenResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 获取无影云盘的免密token.
     *
     * @param request - GetCloudDriveServiceMountTokenRequest
     *
     * @returns GetCloudDriveServiceMountTokenResponse
     *
     * @param GetCloudDriveServiceMountTokenRequest $request
     *
     * @return GetCloudDriveServiceMountTokenResponse
     */
    public function getCloudDriveServiceMountToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudDriveServiceMountTokenWithOptions($request, $runtime);
    }

    /**
     * 获得连接凭证
     *
     * @param request - GetConnectionTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConnectionTicketResponse
     *
     * @param GetConnectionTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->commandContent) {
            @$query['CommandContent'] = $request->commandContent;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConnectionTicket',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConnectionTicketResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 获得连接凭证
     *
     * @param request - GetConnectionTicketRequest
     *
     * @returns GetConnectionTicketResponse
     *
     * @param GetConnectionTicketRequest $request
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * Obtains logon credentials.
     *
     * @param tmpReq - GetLoginTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLoginTokenResponse
     *
     * @param GetLoginTokenRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginTokenWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetLoginTokenShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->availableFeatures) {
            $request->availableFeaturesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->availableFeatures, 'AvailableFeatures', 'json');
        }

        $query = [];
        if (null !== $request->authenticationCode) {
            @$query['AuthenticationCode'] = $request->authenticationCode;
        }

        if (null !== $request->availableFeaturesShrink) {
            @$query['AvailableFeatures'] = $request->availableFeaturesShrink;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientName) {
            @$query['ClientName'] = $request->clientName;
        }

        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->currentStage) {
            @$query['CurrentStage'] = $request->currentStage;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->keepAlive) {
            @$query['KeepAlive'] = $request->keepAlive;
        }

        if (null !== $request->keepAliveToken) {
            @$query['KeepAliveToken'] = $request->keepAliveToken;
        }

        if (null !== $request->newPassword) {
            @$query['NewPassword'] = $request->newPassword;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->oldPassword) {
            @$query['OldPassword'] = $request->oldPassword;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->tokenCode) {
            @$query['TokenCode'] = $request->tokenCode;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLoginToken',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLoginTokenResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Obtains logon credentials.
     *
     * @param request - GetLoginTokenRequest
     *
     * @returns GetLoginTokenResponse
     *
     * @param GetLoginTokenRequest $request
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginTokenWithOptions($request, $runtime);
    }

    /**
     * 是否保持登录判断接口.
     *
     * @param request - IsKeepAliveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IsKeepAliveResponse
     *
     * @param IsKeepAliveRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return IsKeepAliveResponse
     */
    public function isKeepAliveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IsKeepAlive',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IsKeepAliveResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 是否保持登录判断接口.
     *
     * @param request - IsKeepAliveRequest
     *
     * @returns IsKeepAliveResponse
     *
     * @param IsKeepAliveRequest $request
     *
     * @return IsKeepAliveResponse
     */
    public function isKeepAlive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->isKeepAliveWithOptions($request, $runtime);
    }

    /**
     * 查询Agent需要上报的配置信息.
     *
     * @param request - QueryEdsAgentReportConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEdsAgentReportConfigResponse
     *
     * @param QueryEdsAgentReportConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryEdsAgentReportConfigResponse
     */
    public function queryEdsAgentReportConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->ecsInstanceId) {
            @$query['EcsInstanceId'] = $request->ecsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEdsAgentReportConfig',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEdsAgentReportConfigResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 查询Agent需要上报的配置信息.
     *
     * @param request - QueryEdsAgentReportConfigRequest
     *
     * @returns QueryEdsAgentReportConfigResponse
     *
     * @param QueryEdsAgentReportConfigRequest $request
     *
     * @return QueryEdsAgentReportConfigResponse
     */
    public function queryEdsAgentReportConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdsAgentReportConfigWithOptions($request, $runtime);
    }

    /**
     * Restart cloud computers.
     *
     * @param request - RebootDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootDesktopsResponse
     *
     * @param RebootDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootDesktopsResponse
     */
    public function rebootDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->osUpdate) {
            @$query['OsUpdate'] = $request->osUpdate;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sessionToken) {
            @$query['SessionToken'] = $request->sessionToken;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebootDesktops',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebootDesktopsResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Restart cloud computers.
     *
     * @param request - RebootDesktopsRequest
     *
     * @returns RebootDesktopsResponse
     *
     * @param RebootDesktopsRequest $request
     *
     * @return RebootDesktopsResponse
     */
    public function rebootDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param request - RefreshLoginTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshLoginTokenResponse
     *
     * @param RefreshLoginTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RefreshLoginTokenResponse
     */
    public function refreshLoginTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshLoginToken',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshLoginTokenResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - RefreshLoginTokenRequest
     *
     * @returns RefreshLoginTokenResponse
     *
     * @param RefreshLoginTokenRequest $request
     *
     * @return RefreshLoginTokenResponse
     */
    public function refreshLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshLoginTokenWithOptions($request, $runtime);
    }

    /**
     * 上报edsAgent的信息.
     *
     * @param request - ReportEdsAgentInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReportEdsAgentInfoResponse
     *
     * @param ReportEdsAgentInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReportEdsAgentInfoResponse
     */
    public function reportEdsAgentInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->ecsInstanceId) {
            @$query['EcsInstanceId'] = $request->ecsInstanceId;
        }

        if (null !== $request->edsAgentInfo) {
            @$query['EdsAgentInfo'] = $request->edsAgentInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReportEdsAgentInfo',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReportEdsAgentInfoResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 上报edsAgent的信息.
     *
     * @param request - ReportEdsAgentInfoRequest
     *
     * @returns ReportEdsAgentInfoResponse
     *
     * @param ReportEdsAgentInfoRequest $request
     *
     * @return ReportEdsAgentInfoResponse
     */
    public function reportEdsAgentInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportEdsAgentInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - ReportSessionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReportSessionStatusResponse
     *
     * @param ReportSessionStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReportSessionStatusResponse
     */
    public function reportSessionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionChangeTime) {
            @$query['SessionChangeTime'] = $request->sessionChangeTime;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sessionStatus) {
            @$query['SessionStatus'] = $request->sessionStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReportSessionStatus',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReportSessionStatusResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - ReportSessionStatusRequest
     *
     * @returns ReportSessionStatusResponse
     *
     * @param ReportSessionStatusRequest $request
     *
     * @return ReportSessionStatusResponse
     */
    public function reportSessionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportSessionStatusWithOptions($request, $runtime);
    }

    /**
     * Resets a password.
     *
     * @param request - ResetPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetPasswordResponse
     *
     * @param ResetPasswordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResetPasswordResponse
     */
    public function resetPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->phone) {
            @$query['phone'] = $request->phone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetPassword',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetPasswordResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Resets a password.
     *
     * @param request - ResetPasswordRequest
     *
     * @returns ResetPasswordResponse
     *
     * @param ResetPasswordRequest $request
     *
     * @return ResetPasswordResponse
     */
    public function resetPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetPasswordWithOptions($request, $runtime);
    }

    /**
     * Restores the data of a disk from a snapshot.
     *
     * @param request - ResetSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetSnapshotResponse
     *
     * @param ResetSnapshotRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResetSnapshotResponse
     */
    public function resetSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->stopDesktop) {
            @$query['StopDesktop'] = $request->stopDesktop;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetSnapshot',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetSnapshotResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Restores the data of a disk from a snapshot.
     *
     * @param request - ResetSnapshotRequest
     *
     * @returns ResetSnapshotResponse
     *
     * @param ResetSnapshotRequest $request
     *
     * @return ResetSnapshotResponse
     */
    public function resetSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSnapshotWithOptions($request, $runtime);
    }

    /**
     * Sends a logon verification code.
     *
     * @param request - SendTokenCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendTokenCodeResponse
     *
     * @param SendTokenCodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SendTokenCodeResponse
     */
    public function sendTokenCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->tokenCode) {
            @$query['TokenCode'] = $request->tokenCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendTokenCode',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendTokenCodeResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Sends a logon verification code.
     *
     * @param request - SendTokenCodeRequest
     *
     * @returns SendTokenCodeResponse
     *
     * @param SendTokenCodeRequest $request
     *
     * @return SendTokenCodeResponse
     */
    public function sendTokenCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendTokenCodeWithOptions($request, $runtime);
    }

    /**
     * @param request - SetFingerPrintTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetFingerPrintTemplateResponse
     *
     * @param SetFingerPrintTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetFingerPrintTemplateResponse
     */
    public function setFingerPrintTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->encryptedFingerPrintTemplate) {
            @$query['EncryptedFingerPrintTemplate'] = $request->encryptedFingerPrintTemplate;
        }

        if (null !== $request->encryptedKey) {
            @$query['EncryptedKey'] = $request->encryptedKey;
        }

        if (null !== $request->fingerPrintTemplate) {
            @$query['FingerPrintTemplate'] = $request->fingerPrintTemplate;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetFingerPrintTemplate',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetFingerPrintTemplateResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - SetFingerPrintTemplateRequest
     *
     * @returns SetFingerPrintTemplateResponse
     *
     * @param SetFingerPrintTemplateRequest $request
     *
     * @return SetFingerPrintTemplateResponse
     */
    public function setFingerPrintTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFingerPrintTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - SetFingerPrintTemplateDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetFingerPrintTemplateDescriptionResponse
     *
     * @param SetFingerPrintTemplateDescriptionRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SetFingerPrintTemplateDescriptionResponse
     */
    public function setFingerPrintTemplateDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->index) {
            @$query['Index'] = $request->index;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetFingerPrintTemplateDescription',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetFingerPrintTemplateDescriptionResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - SetFingerPrintTemplateDescriptionRequest
     *
     * @returns SetFingerPrintTemplateDescriptionResponse
     *
     * @param SetFingerPrintTemplateDescriptionRequest $request
     *
     * @return SetFingerPrintTemplateDescriptionResponse
     */
    public function setFingerPrintTemplateDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFingerPrintTemplateDescriptionWithOptions($request, $runtime);
    }

    /**
     * Start cloud computers.
     *
     * @remarks
     * The cloud computers that you want to start must be in the Stopped state. After you call this operation, the cloud computers enter the Running state.
     *
     * @param request - StartDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDesktopsResponse
     *
     * @param StartDesktopsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartDesktopsResponse
     */
    public function startDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDesktops',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDesktopsResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Start cloud computers.
     *
     * @remarks
     * The cloud computers that you want to start must be in the Stopped state. After you call this operation, the cloud computers enter the Running state.
     *
     * @param request - StartDesktopsRequest
     *
     * @returns StartDesktopsResponse
     *
     * @param StartDesktopsRequest $request
     *
     * @return StartDesktopsResponse
     */
    public function startDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param request - StartRecordContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartRecordContentResponse
     *
     * @param StartRecordContentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartRecordContentResponse
     */
    public function startRecordContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartRecordContent',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartRecordContentResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - StartRecordContentRequest
     *
     * @returns StartRecordContentResponse
     *
     * @param StartRecordContentRequest $request
     *
     * @return StartRecordContentResponse
     */
    public function startRecordContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRecordContentWithOptions($request, $runtime);
    }

    /**
     * Stops cloud computers.
     *
     * @remarks
     * The cloud computers that you want to stop must be in the Running state. After you call this operation, the cloud computers enter the Stopped state.
     *
     * @param request - StopDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDesktopsResponse
     *
     * @param StopDesktopsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopDesktopsResponse
     */
    public function stopDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->osUpdate) {
            @$query['OsUpdate'] = $request->osUpdate;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sessionToken) {
            @$query['SessionToken'] = $request->sessionToken;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDesktops',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDesktopsResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Stops cloud computers.
     *
     * @remarks
     * The cloud computers that you want to stop must be in the Running state. After you call this operation, the cloud computers enter the Stopped state.
     *
     * @param request - StopDesktopsRequest
     *
     * @returns StopDesktopsResponse
     *
     * @param StopDesktopsRequest $request
     *
     * @return StopDesktopsResponse
     */
    public function stopDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param request - StopRecordContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopRecordContentResponse
     *
     * @param StopRecordContentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StopRecordContentResponse
     */
    public function stopRecordContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopRecordContent',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopRecordContentResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - StopRecordContentRequest
     *
     * @returns StopRecordContentResponse
     *
     * @param StopRecordContentRequest $request
     *
     * @return StopRecordContentResponse
     */
    public function stopRecordContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRecordContentWithOptions($request, $runtime);
    }

    /**
     * Unbinds end users from cloud computers.
     *
     * @param request - UnbindUserDesktopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindUserDesktopResponse
     *
     * @param UnbindUserDesktopRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnbindUserDesktopResponse
     */
    public function unbindUserDesktopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->userDesktopId) {
            @$query['UserDesktopId'] = $request->userDesktopId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindUserDesktop',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindUserDesktopResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Unbinds end users from cloud computers.
     *
     * @param request - UnbindUserDesktopRequest
     *
     * @returns UnbindUserDesktopResponse
     *
     * @param UnbindUserDesktopRequest $request
     *
     * @return UnbindUserDesktopResponse
     */
    public function unbindUserDesktop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindUserDesktopWithOptions($request, $runtime);
    }

    /**
     * @param request - VerifyCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyCredentialResponse
     *
     * @param VerifyCredentialRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return VerifyCredentialResponse
     */
    public function verifyCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->credential) {
            @$query['Credential'] = $request->credential;
        }

        if (null !== $request->credentialType) {
            @$query['CredentialType'] = $request->credentialType;
        }

        if (null !== $request->encryptedKey) {
            @$query['EncryptedKey'] = $request->encryptedKey;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyCredential',
            'version' => '2020-10-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyCredentialResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - VerifyCredentialRequest
     *
     * @returns VerifyCredentialResponse
     *
     * @param VerifyCredentialRequest $request
     *
     * @return VerifyCredentialResponse
     */
    public function verifyCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyCredentialWithOptions($request, $runtime);
    }
}
