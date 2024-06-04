<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Ecd\V20201002\Models\EncryptPasswordRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\EncryptPasswordResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetCloudDriveServiceMountTokenRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetCloudDriveServiceMountTokenResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenRequest;
use AlibabaCloud\SDK\Ecd\V20201002\Models\GetLoginTokenResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ecd extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 允许桌面FOTA升级
     *  *
     * @param ApproveFotaUpdateRequest $request ApproveFotaUpdateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ApproveFotaUpdateResponse ApproveFotaUpdateResponse
     */
    public function approveFotaUpdateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApproveFotaUpdate',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApproveFotaUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 允许桌面FOTA升级
     *  *
     * @param ApproveFotaUpdateRequest $request ApproveFotaUpdateRequest
     *
     * @return ApproveFotaUpdateResponse ApproveFotaUpdateResponse
     */
    public function approveFotaUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveFotaUpdateWithOptions($request, $runtime);
    }

    /**
     * @param ChangePasswordRequest $request ChangePasswordRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangePasswordResponse ChangePasswordResponse
     */
    public function changePasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->newPassword)) {
            $query['NewPassword'] = $request->newPassword;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->oldPassword)) {
            $query['OldPassword'] = $request->oldPassword;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangePassword',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangePasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangePasswordRequest $request ChangePasswordRequest
     *
     * @return ChangePasswordResponse ChangePasswordResponse
     */
    public function changePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changePasswordWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFingerPrintTemplateRequest $request DeleteFingerPrintTemplateRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFingerPrintTemplateResponse DeleteFingerPrintTemplateResponse
     */
    public function deleteFingerPrintTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->index)) {
            $query['Index'] = $request->index;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFingerPrintTemplate',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFingerPrintTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFingerPrintTemplateRequest $request DeleteFingerPrintTemplateRequest
     *
     * @return DeleteFingerPrintTemplateResponse DeleteFingerPrintTemplateResponse
     */
    public function deleteFingerPrintTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFingerPrintTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDirectoriesRequest $request DescribeDirectoriesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDirectoriesResponse DescribeDirectoriesResponse
     */
    public function describeDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDirectories',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDirectoriesRequest $request DescribeDirectoriesRequest
     *
     * @return DescribeDirectoriesResponse DescribeDirectoriesResponse
     */
    public function describeDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFingerPrintTemplatesRequest $request DescribeFingerPrintTemplatesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFingerPrintTemplatesResponse DescribeFingerPrintTemplatesResponse
     */
    public function describeFingerPrintTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFingerPrintTemplates',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFingerPrintTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFingerPrintTemplatesRequest $request DescribeFingerPrintTemplatesRequest
     *
     * @return DescribeFingerPrintTemplatesResponse DescribeFingerPrintTemplatesResponse
     */
    public function describeFingerPrintTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFingerPrintTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGlobalDesktopsRequest $request DescribeGlobalDesktopsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGlobalDesktopsResponse DescribeGlobalDesktopsResponse
     */
    public function describeGlobalDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->desktopAccessType)) {
            $query['DesktopAccessType'] = $request->desktopAccessType;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->desktopName)) {
            $query['DesktopName'] = $request->desktopName;
        }
        if (!Utils::isUnset($request->desktopStatus)) {
            $query['DesktopStatus'] = $request->desktopStatus;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->loginRegionId)) {
            $query['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->queryFotaUpdate)) {
            $query['QueryFotaUpdate'] = $request->queryFotaUpdate;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->searchRegionId)) {
            $query['SearchRegionId'] = $request->searchRegionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->withoutLatency)) {
            $query['WithoutLatency'] = $request->withoutLatency;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGlobalDesktops',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGlobalDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGlobalDesktopsRequest $request DescribeGlobalDesktopsRequest
     *
     * @return DescribeGlobalDesktopsResponse DescribeGlobalDesktopsResponse
     */
    public function describeGlobalDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOfficeSitesRequest $request DescribeOfficeSitesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOfficeSitesResponse DescribeOfficeSitesResponse
     */
    public function describeOfficeSitesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOfficeSites',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOfficeSitesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOfficeSitesRequest $request DescribeOfficeSitesRequest
     *
     * @return DescribeOfficeSitesResponse DescribeOfficeSitesResponse
     */
    public function describeOfficeSites($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOfficeSitesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary 列举快照
     *  *
     * @param DescribeSnapshotsRequest $request DescribeSnapshotsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSnapshotsResponse DescribeSnapshotsResponse
     */
    public function describeSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSnapshots',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举快照
     *  *
     * @param DescribeSnapshotsRequest $request DescribeSnapshotsRequest
     *
     * @return DescribeSnapshotsResponse DescribeSnapshotsResponse
     */
    public function describeSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @param EncryptPasswordRequest $request EncryptPasswordRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return EncryptPasswordResponse EncryptPasswordResponse
     */
    public function encryptPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EncryptPassword',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EncryptPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EncryptPasswordRequest $request EncryptPasswordRequest
     *
     * @return EncryptPasswordResponse EncryptPasswordResponse
     */
    public function encryptPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encryptPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary 获取无影云盘的免密token
     *  *
     * @param GetCloudDriveServiceMountTokenRequest $request GetCloudDriveServiceMountTokenRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCloudDriveServiceMountTokenResponse GetCloudDriveServiceMountTokenResponse
     */
    public function getCloudDriveServiceMountTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCloudDriveServiceMountToken',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCloudDriveServiceMountTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取无影云盘的免密token
     *  *
     * @param GetCloudDriveServiceMountTokenRequest $request GetCloudDriveServiceMountTokenRequest
     *
     * @return GetCloudDriveServiceMountTokenResponse GetCloudDriveServiceMountTokenResponse
     */
    public function getCloudDriveServiceMountToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudDriveServiceMountTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetConnectionTicketRequest $request GetConnectionTicketRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConnectionTicketResponse GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $query['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->commandContent)) {
            $query['CommandContent'] = $request->commandContent;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConnectionTicket',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConnectionTicketRequest $request GetConnectionTicketRequest
     *
     * @return GetConnectionTicketResponse GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains logon credentials.
     *  *
     * @param GetLoginTokenRequest $request GetLoginTokenRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLoginTokenResponse GetLoginTokenResponse
     */
    public function getLoginTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authenticationCode)) {
            $query['AuthenticationCode'] = $request->authenticationCode;
        }
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $query['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->currentStage)) {
            $query['CurrentStage'] = $request->currentStage;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->keepAlive)) {
            $query['KeepAlive'] = $request->keepAlive;
        }
        if (!Utils::isUnset($request->keepAliveToken)) {
            $query['KeepAliveToken'] = $request->keepAliveToken;
        }
        if (!Utils::isUnset($request->newPassword)) {
            $query['NewPassword'] = $request->newPassword;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->oldPassword)) {
            $query['OldPassword'] = $request->oldPassword;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->tokenCode)) {
            $query['TokenCode'] = $request->tokenCode;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLoginToken',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLoginTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains logon credentials.
     *  *
     * @param GetLoginTokenRequest $request GetLoginTokenRequest
     *
     * @return GetLoginTokenResponse GetLoginTokenResponse
     */
    public function getLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 是否保持登录判断接口
     *  *
     * @param IsKeepAliveRequest $request IsKeepAliveRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return IsKeepAliveResponse IsKeepAliveResponse
     */
    public function isKeepAliveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IsKeepAlive',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IsKeepAliveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 是否保持登录判断接口
     *  *
     * @param IsKeepAliveRequest $request IsKeepAliveRequest
     *
     * @return IsKeepAliveResponse IsKeepAliveResponse
     */
    public function isKeepAlive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->isKeepAliveWithOptions($request, $runtime);
    }

    /**
     * @summary 查询Agent需要上报的配置信息
     *  *
     * @param QueryEdsAgentReportConfigRequest $request QueryEdsAgentReportConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryEdsAgentReportConfigResponse QueryEdsAgentReportConfigResponse
     */
    public function queryEdsAgentReportConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->ecsInstanceId)) {
            $query['EcsInstanceId'] = $request->ecsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEdsAgentReportConfig',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEdsAgentReportConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询Agent需要上报的配置信息
     *  *
     * @param QueryEdsAgentReportConfigRequest $request QueryEdsAgentReportConfigRequest
     *
     * @return QueryEdsAgentReportConfigResponse QueryEdsAgentReportConfigResponse
     */
    public function queryEdsAgentReportConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEdsAgentReportConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Restart cloud computers.
     *  *
     * @param RebootDesktopsRequest $request RebootDesktopsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RebootDesktopsResponse RebootDesktopsResponse
     */
    public function rebootDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $query['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->sessionToken)) {
            $query['SessionToken'] = $request->sessionToken;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootDesktops',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restart cloud computers.
     *  *
     * @param RebootDesktopsRequest $request RebootDesktopsRequest
     *
     * @return RebootDesktopsResponse RebootDesktopsResponse
     */
    public function rebootDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param RefreshLoginTokenRequest $request RefreshLoginTokenRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshLoginTokenResponse RefreshLoginTokenResponse
     */
    public function refreshLoginTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshLoginToken',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshLoginTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshLoginTokenRequest $request RefreshLoginTokenRequest
     *
     * @return RefreshLoginTokenResponse RefreshLoginTokenResponse
     */
    public function refreshLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshLoginTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 上报edsAgent的信息
     *  *
     * @param ReportEdsAgentInfoRequest $request ReportEdsAgentInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ReportEdsAgentInfoResponse ReportEdsAgentInfoResponse
     */
    public function reportEdsAgentInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->ecsInstanceId)) {
            $query['EcsInstanceId'] = $request->ecsInstanceId;
        }
        if (!Utils::isUnset($request->edsAgentInfo)) {
            $query['EdsAgentInfo'] = $request->edsAgentInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportEdsAgentInfo',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportEdsAgentInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上报edsAgent的信息
     *  *
     * @param ReportEdsAgentInfoRequest $request ReportEdsAgentInfoRequest
     *
     * @return ReportEdsAgentInfoResponse ReportEdsAgentInfoResponse
     */
    public function reportEdsAgentInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportEdsAgentInfoWithOptions($request, $runtime);
    }

    /**
     * @param ReportSessionStatusRequest $request ReportSessionStatusRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ReportSessionStatusResponse ReportSessionStatusResponse
     */
    public function reportSessionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionChangeTime)) {
            $query['SessionChangeTime'] = $request->sessionChangeTime;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->sessionStatus)) {
            $query['SessionStatus'] = $request->sessionStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportSessionStatus',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportSessionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportSessionStatusRequest $request ReportSessionStatusRequest
     *
     * @return ReportSessionStatusResponse ReportSessionStatusResponse
     */
    public function reportSessionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportSessionStatusWithOptions($request, $runtime);
    }

    /**
     * @param ResetPasswordRequest $request ResetPasswordRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetPasswordResponse ResetPasswordResponse
     */
    public function resetPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['phone'] = $request->phone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetPassword',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetPasswordRequest $request ResetPasswordRequest
     *
     * @return ResetPasswordResponse ResetPasswordResponse
     */
    public function resetPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary 还原快照
     *  *
     * @param ResetSnapshotRequest $request ResetSnapshotRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetSnapshotResponse ResetSnapshotResponse
     */
    public function resetSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetSnapshot',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 还原快照
     *  *
     * @param ResetSnapshotRequest $request ResetSnapshotRequest
     *
     * @return ResetSnapshotResponse ResetSnapshotResponse
     */
    public function resetSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param SendTokenCodeRequest $request SendTokenCodeRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SendTokenCodeResponse SendTokenCodeResponse
     */
    public function sendTokenCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $query['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->tokenCode)) {
            $query['TokenCode'] = $request->tokenCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendTokenCode',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendTokenCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendTokenCodeRequest $request SendTokenCodeRequest
     *
     * @return SendTokenCodeResponse SendTokenCodeResponse
     */
    public function sendTokenCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendTokenCodeWithOptions($request, $runtime);
    }

    /**
     * @param SetFingerPrintTemplateRequest $request SetFingerPrintTemplateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SetFingerPrintTemplateResponse SetFingerPrintTemplateResponse
     */
    public function setFingerPrintTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encryptedFingerPrintTemplate)) {
            $query['EncryptedFingerPrintTemplate'] = $request->encryptedFingerPrintTemplate;
        }
        if (!Utils::isUnset($request->encryptedKey)) {
            $query['EncryptedKey'] = $request->encryptedKey;
        }
        if (!Utils::isUnset($request->fingerPrintTemplate)) {
            $query['FingerPrintTemplate'] = $request->fingerPrintTemplate;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetFingerPrintTemplate',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetFingerPrintTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetFingerPrintTemplateRequest $request SetFingerPrintTemplateRequest
     *
     * @return SetFingerPrintTemplateResponse SetFingerPrintTemplateResponse
     */
    public function setFingerPrintTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFingerPrintTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SetFingerPrintTemplateDescriptionRequest $request SetFingerPrintTemplateDescriptionRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return SetFingerPrintTemplateDescriptionResponse SetFingerPrintTemplateDescriptionResponse
     */
    public function setFingerPrintTemplateDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->index)) {
            $query['Index'] = $request->index;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetFingerPrintTemplateDescription',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetFingerPrintTemplateDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetFingerPrintTemplateDescriptionRequest $request SetFingerPrintTemplateDescriptionRequest
     *
     * @return SetFingerPrintTemplateDescriptionResponse SetFingerPrintTemplateDescriptionResponse
     */
    public function setFingerPrintTemplateDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFingerPrintTemplateDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Start cloud computers.
     *  *
     * @description The cloud computers that you want to start must be in the Stopped state. After you call this operation, the cloud computers enter the Running state.
     *  *
     * @param StartDesktopsRequest $request StartDesktopsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDesktopsResponse StartDesktopsResponse
     */
    public function startDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $query['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDesktops',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Start cloud computers.
     *  *
     * @description The cloud computers that you want to start must be in the Stopped state. After you call this operation, the cloud computers enter the Running state.
     *  *
     * @param StartDesktopsRequest $request StartDesktopsRequest
     *
     * @return StartDesktopsResponse StartDesktopsResponse
     */
    public function startDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param StartRecordContentRequest $request StartRecordContentRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StartRecordContentResponse StartRecordContentResponse
     */
    public function startRecordContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $query['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartRecordContent',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartRecordContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartRecordContentRequest $request StartRecordContentRequest
     *
     * @return StartRecordContentResponse StartRecordContentResponse
     */
    public function startRecordContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRecordContentWithOptions($request, $runtime);
    }

    /**
     * @summary Stops cloud computers.
     *  *
     * @description The cloud computers that you want to stop must be in the Running state. After you call this operation, the cloud computers enter the Stopped state.
     *  *
     * @param StopDesktopsRequest $request StopDesktopsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDesktopsResponse StopDesktopsResponse
     */
    public function stopDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $query['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->sessionToken)) {
            $query['SessionToken'] = $request->sessionToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDesktops',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops cloud computers.
     *  *
     * @description The cloud computers that you want to stop must be in the Running state. After you call this operation, the cloud computers enter the Stopped state.
     *  *
     * @param StopDesktopsRequest $request StopDesktopsRequest
     *
     * @return StopDesktopsResponse StopDesktopsResponse
     */
    public function stopDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param StopRecordContentRequest $request StopRecordContentRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return StopRecordContentResponse StopRecordContentResponse
     */
    public function stopRecordContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $query['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopRecordContent',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopRecordContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopRecordContentRequest $request StopRecordContentRequest
     *
     * @return StopRecordContentResponse StopRecordContentResponse
     */
    public function stopRecordContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRecordContentWithOptions($request, $runtime);
    }

    /**
     * @summary 解绑用户桌面
     *  *
     * @param UnbindUserDesktopRequest $request UnbindUserDesktopRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindUserDesktopResponse UnbindUserDesktopResponse
     */
    public function unbindUserDesktopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->userDesktopId)) {
            $query['UserDesktopId'] = $request->userDesktopId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindUserDesktop',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindUserDesktopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解绑用户桌面
     *  *
     * @param UnbindUserDesktopRequest $request UnbindUserDesktopRequest
     *
     * @return UnbindUserDesktopResponse UnbindUserDesktopResponse
     */
    public function unbindUserDesktop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindUserDesktopWithOptions($request, $runtime);
    }

    /**
     * @param VerifyCredentialRequest $request VerifyCredentialRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyCredentialResponse VerifyCredentialResponse
     */
    public function verifyCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->credential)) {
            $query['Credential'] = $request->credential;
        }
        if (!Utils::isUnset($request->credentialType)) {
            $query['CredentialType'] = $request->credentialType;
        }
        if (!Utils::isUnset($request->encryptedKey)) {
            $query['EncryptedKey'] = $request->encryptedKey;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyCredential',
            'version'     => '2020-10-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyCredentialRequest $request VerifyCredentialRequest
     *
     * @return VerifyCredentialResponse VerifyCredentialResponse
     */
    public function verifyCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyCredentialWithOptions($request, $runtime);
    }
}
