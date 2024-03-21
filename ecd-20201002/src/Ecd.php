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
     * @param ApproveFotaUpdateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ApproveFotaUpdateResponse
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
     * @param ChangePasswordRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ChangePasswordResponse
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
     * @param DeleteFingerPrintTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteFingerPrintTemplateResponse
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
     * @param DescribeDirectoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDirectoriesResponse
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
     * @param DescribeFingerPrintTemplatesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeFingerPrintTemplatesResponse
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
     * @param DescribeGlobalDesktopsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeGlobalDesktopsResponse
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
     * @param DescribeOfficeSitesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOfficeSitesResponse
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
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
     * @param DescribeSnapshotsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSnapshotsResponse
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
     * @param EncryptPasswordRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EncryptPasswordResponse
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
     * @param GetCloudDriveServiceMountTokenRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetCloudDriveServiceMountTokenResponse
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
     * @param GetConnectionTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConnectionTicketResponse
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
     * @param GetLoginTokenRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetLoginTokenResponse
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
     * @param IsKeepAliveRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return IsKeepAliveResponse
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
     * @param QueryEdsAgentReportConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryEdsAgentReportConfigResponse
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
     * @param RebootDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootDesktopsResponse
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
     * @param RefreshLoginTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RefreshLoginTokenResponse
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
     * @param ReportEdsAgentInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReportEdsAgentInfoResponse
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
     * @param ReportSessionStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReportSessionStatusResponse
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
     * @param ResetPasswordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResetPasswordResponse
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
     * @param ResetSnapshotRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResetSnapshotResponse
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
     * @param SendTokenCodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SendTokenCodeResponse
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
     * @param SetFingerPrintTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetFingerPrintTemplateResponse
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
     * @param SetFingerPrintTemplateDescriptionRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SetFingerPrintTemplateDescriptionResponse
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
     * The ID of the client.
     *   *
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
     * The ID of the client.
     *   *
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
     * @param StartRecordContentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartRecordContentResponse
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
     * The cloud desktops that you want to stop by calling this operation must be in the Running state. If the call is successful, the cloud desktops enter the Stopped state.
     *   *
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
     * The cloud desktops that you want to stop by calling this operation must be in the Running state. If the call is successful, the cloud desktops enter the Stopped state.
     *   *
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
     * @param StopRecordContentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StopRecordContentResponse
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
     * @param UnbindUserDesktopRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnbindUserDesktopResponse
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
     * @param VerifyCredentialRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return VerifyCredentialResponse
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
