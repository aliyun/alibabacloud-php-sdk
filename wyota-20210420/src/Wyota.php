<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ActivateDeviceRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ActivateDeviceResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddDeviceFromSNRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddDeviceFromSNResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddDeviceSeatsAndLabelsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddDeviceSeatsAndLabelsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddDevicesFromCSVRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddDevicesFromCSVResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddLabelsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddLabelsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddOrUpdateDeviceSeatsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddOrUpdateDeviceSeatsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddTerminalRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddTerminalResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddTerminalsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddTerminalsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AttachEndUsersRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AttachEndUsersResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AttachLabelRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AttachLabelResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AttachLabelsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AttachLabelsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\BindAccountLessLoginUserRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\BindAccountLessLoginUserResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\BindPasswordFreeLoginUserRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\BindPasswordFreeLoginUserResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\CheckUuidValidRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\CheckUuidValidResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\CreateAppOtaTaskRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\CreateAppOtaTaskResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\CreateAppOtaVersionRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\CreateAppOtaVersionResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DeleteAppOtaVersionsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DeleteAppOtaVersionsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DeleteDevicesRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DeleteDevicesResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DeleteLabelRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DeleteLabelResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeAppOtaVersionRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeAppOtaVersionResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeDeviceSeatsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeDeviceSeatsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeDeviceVersionDetailRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeDeviceVersionDetailResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeSnLabelCountsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeSnLabelCountsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeWorkZonesRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeWorkZonesResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DetachEndUsersRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DetachEndUsersResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DetachLabelRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DetachLabelResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DetachLabelsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DetachLabelsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GenerateOssUrlRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GenerateOssUrlResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetAppOtaLatestVersionRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetAppOtaLatestVersionResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceConfigsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceConfigsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaAutoStatusRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaAutoStatusResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaInfoRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaInfoResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaInfoTestRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaInfoTestResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaTaskVersionInfoRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaTaskVersionInfoResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceUpgradeStatusRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceUpgradeStatusResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetExportDeviceInfoOssUrlRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetExportDeviceInfoOssUrlResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetFbOssConfigRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetFbOssConfigResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetOssConfigRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetOssConfigResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetVersionDownloadUrlRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetVersionDownloadUrlResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListBoundDevicesRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListBoundDevicesResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceOtaTaskByTenantRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceOtaTaskByTenantResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceSeatsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceSeatsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListFbIssueLabelsByLCRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListFbIssueLabelsByLCResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListFbIssueLabelsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListLabelsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListLabelsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTenantDeviceOtaInfoRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTenantDeviceOtaInfoResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTerminalRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTerminalResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTerminalsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTerminalsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTrustDevicesRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTrustDevicesResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListUnbindDevicesRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListUnbindDevicesResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbAcIssuesRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbAcIssuesResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbIssuesRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbIssuesResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ModifyDevicesSecureNetworkTypeRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ModifyDevicesSecureNetworkTypeResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ModifySecureNetworkTypeRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ModifySecureNetworkTypeResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\RegisterDeviceRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\RegisterDeviceResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportAppOtaInfoRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportAppOtaInfoResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportDeviceOtaInfoRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportDeviceOtaInfoResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportUserFbAcIssueRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportUserFbAcIssueResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportUserFbAcIssueShrinkRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportUserFbIssueRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportUserFbIssueResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ReportUserFbIssueShrinkRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\SendOpsMessageToTerminalsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\SendOpsMessageToTerminalsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\SetDeviceOtaAutoStatusRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\SetDeviceOtaAutoStatusResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\SetDeviceOtaTaskStatusRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\SetDeviceOtaTaskStatusResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindAccountLessLoginUserRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindAccountLessLoginUserResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindDeviceSeatsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindDeviceSeatsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindDeviceSeatsShrinkRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindPasswordFreeLoginUserRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindPasswordFreeLoginUserResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateAliasRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateAliasResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateDeviceBindedEndUserRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateDeviceBindedEndUserResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateLabelRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateLabelResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateTerminalPolicyRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateTerminalPolicyResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Wyota extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('wyota', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 设备激活.
     *
     * @param request - ActivateDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateDeviceResponse
     *
     * @param ActivateDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ActivateDeviceResponse
     */
    public function activateDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ActivateDevice',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActivateDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设备激活.
     *
     * @param request - ActivateDeviceRequest
     *
     * @returns ActivateDeviceResponse
     *
     * @param ActivateDeviceRequest $request
     *
     * @return ActivateDeviceResponse
     */
    public function activateDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateDeviceWithOptions($request, $runtime);
    }

    /**
     * 通过序列号添加设备.
     *
     * @param request - AddDeviceFromSNRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDeviceFromSNResponse
     *
     * @param AddDeviceFromSNRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddDeviceFromSNResponse
     */
    public function addDeviceFromSNWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['Alias'] = $request->alias;
        }

        if (null !== $request->customProperty) {
            @$body['CustomProperty'] = $request->customProperty;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->labelContents) {
            @$body['LabelContents'] = $request->labelContents;
        }

        if (null !== $request->secureNetworkType) {
            @$body['SecureNetworkType'] = $request->secureNetworkType;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDeviceFromSN',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDeviceFromSNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过序列号添加设备.
     *
     * @param request - AddDeviceFromSNRequest
     *
     * @returns AddDeviceFromSNResponse
     *
     * @param AddDeviceFromSNRequest $request
     *
     * @return AddDeviceFromSNResponse
     */
    public function addDeviceFromSN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceFromSNWithOptions($request, $runtime);
    }

    /**
     * 新增设备座位和标签.
     *
     * @param request - AddDeviceSeatsAndLabelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDeviceSeatsAndLabelsResponse
     *
     * @param AddDeviceSeatsAndLabelsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddDeviceSeatsAndLabelsResponse
     */
    public function addDeviceSeatsAndLabelsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isUnique) {
            @$body['IsUnique'] = $request->isUnique;
        }

        if (null !== $request->label) {
            @$body['Label'] = $request->label;
        }

        if (null !== $request->labelList) {
            @$body['LabelList'] = $request->labelList;
        }

        if (null !== $request->seatName) {
            @$body['SeatName'] = $request->seatName;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDeviceSeatsAndLabels',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDeviceSeatsAndLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增设备座位和标签.
     *
     * @param request - AddDeviceSeatsAndLabelsRequest
     *
     * @returns AddDeviceSeatsAndLabelsResponse
     *
     * @param AddDeviceSeatsAndLabelsRequest $request
     *
     * @return AddDeviceSeatsAndLabelsResponse
     */
    public function addDeviceSeatsAndLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceSeatsAndLabelsWithOptions($request, $runtime);
    }

    /**
     * 通过CSV文件添加设备.
     *
     * @param request - AddDevicesFromCSVRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDevicesFromCSVResponse
     *
     * @param AddDevicesFromCSVRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddDevicesFromCSVResponse
     */
    public function addDevicesFromCSVWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->fileType) {
            @$body['FileType'] = $request->fileType;
        }

        if (null !== $request->seatCol) {
            @$body['SeatCol'] = $request->seatCol;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteName) {
            @$body['SiteName'] = $request->siteName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDevicesFromCSV',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDevicesFromCSVResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过CSV文件添加设备.
     *
     * @param request - AddDevicesFromCSVRequest
     *
     * @returns AddDevicesFromCSVResponse
     *
     * @param AddDevicesFromCSVRequest $request
     *
     * @return AddDevicesFromCSVResponse
     */
    public function addDevicesFromCSV($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDevicesFromCSVWithOptions($request, $runtime);
    }

    /**
     * 添加标签.
     *
     * @param request - AddLabelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddLabelsResponse
     *
     * @param AddLabelsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddLabelsResponse
     */
    public function addLabelsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labelContents) {
            @$body['LabelContents'] = $request->labelContents;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddLabels',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加标签.
     *
     * @param request - AddLabelsRequest
     *
     * @returns AddLabelsResponse
     *
     * @param AddLabelsRequest $request
     *
     * @return AddLabelsResponse
     */
    public function addLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLabelsWithOptions($request, $runtime);
    }

    /**
     * 新增或更新设备工位.
     *
     * @param request - AddOrUpdateDeviceSeatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddOrUpdateDeviceSeatsResponse
     *
     * @param AddOrUpdateDeviceSeatsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddOrUpdateDeviceSeatsResponse
     */
    public function addOrUpdateDeviceSeatsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->userCustomId) {
            @$body['UserCustomId'] = $request->userCustomId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddOrUpdateDeviceSeats',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddOrUpdateDeviceSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增或更新设备工位.
     *
     * @param request - AddOrUpdateDeviceSeatsRequest
     *
     * @returns AddOrUpdateDeviceSeatsResponse
     *
     * @param AddOrUpdateDeviceSeatsRequest $request
     *
     * @return AddOrUpdateDeviceSeatsResponse
     */
    public function addOrUpdateDeviceSeats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addOrUpdateDeviceSeatsWithOptions($request, $runtime);
    }

    /**
     * 添加终端.
     *
     * @param request - AddTerminalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTerminalResponse
     *
     * @param AddTerminalRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddTerminalResponse
     */
    public function addTerminalWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['Alias'] = $request->alias;
        }

        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        if (null !== $request->mainBizType) {
            @$body['MainBizType'] = $request->mainBizType;
        }

        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->terminalGroupId) {
            @$body['TerminalGroupId'] = $request->terminalGroupId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddTerminal',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加终端.
     *
     * @param request - AddTerminalRequest
     *
     * @returns AddTerminalResponse
     *
     * @param AddTerminalRequest $request
     *
     * @return AddTerminalResponse
     */
    public function addTerminal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTerminalWithOptions($request, $runtime);
    }

    /**
     * 添加终端.
     *
     * @param request - AddTerminalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTerminalsResponse
     *
     * @param AddTerminalsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddTerminalsResponse
     */
    public function addTerminalsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->addTerminalParams) {
            @$bodyFlat['AddTerminalParams'] = $request->addTerminalParams;
        }

        if (null !== $request->mainBizType) {
            @$body['MainBizType'] = $request->mainBizType;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddTerminals',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTerminalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加终端.
     *
     * @param request - AddTerminalsRequest
     *
     * @returns AddTerminalsResponse
     *
     * @param AddTerminalsRequest $request
     *
     * @return AddTerminalsResponse
     */
    public function addTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTerminalsWithOptions($request, $runtime);
    }

    /**
     * 设备绑定终端用户.
     *
     * @param request - AttachEndUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachEndUsersResponse
     *
     * @param AttachEndUsersRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AttachEndUsersResponse
     */
    public function attachEndUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endUserIds) {
            @$body['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachEndUsers',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachEndUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设备绑定终端用户.
     *
     * @param request - AttachEndUsersRequest
     *
     * @returns AttachEndUsersResponse
     *
     * @param AttachEndUsersRequest $request
     *
     * @return AttachEndUsersResponse
     */
    public function attachEndUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEndUsersWithOptions($request, $runtime);
    }

    /**
     * 设备绑定标签.
     *
     * @param request - AttachLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachLabelResponse
     *
     * @param AttachLabelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AttachLabelResponse
     */
    public function attachLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labelContent) {
            @$body['LabelContent'] = $request->labelContent;
        }

        if (null !== $request->labelId) {
            @$body['LabelId'] = $request->labelId;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachLabel',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设备绑定标签.
     *
     * @param request - AttachLabelRequest
     *
     * @returns AttachLabelResponse
     *
     * @param AttachLabelRequest $request
     *
     * @return AttachLabelResponse
     */
    public function attachLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachLabelWithOptions($request, $runtime);
    }

    /**
     * 批量绑定标签.
     *
     * @param request - AttachLabelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachLabelsResponse
     *
     * @param AttachLabelsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AttachLabelsResponse
     */
    public function attachLabelsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labelIds) {
            @$body['LabelIds'] = $request->labelIds;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->serialNoList) {
            @$body['SerialNoList'] = $request->serialNoList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachLabels',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量绑定标签.
     *
     * @param request - AttachLabelsRequest
     *
     * @returns AttachLabelsResponse
     *
     * @param AttachLabelsRequest $request
     *
     * @return AttachLabelsResponse
     */
    public function attachLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachLabelsWithOptions($request, $runtime);
    }

    /**
     * 绑定免账号登录用户.
     *
     * @param request - BindAccountLessLoginUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAccountLessLoginUserResponse
     *
     * @param BindAccountLessLoginUserRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BindAccountLessLoginUserResponse
     */
    public function bindAccountLessLoginUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BindAccountLessLoginUser',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAccountLessLoginUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定免账号登录用户.
     *
     * @param request - BindAccountLessLoginUserRequest
     *
     * @returns BindAccountLessLoginUserResponse
     *
     * @param BindAccountLessLoginUserRequest $request
     *
     * @return BindAccountLessLoginUserResponse
     */
    public function bindAccountLessLoginUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAccountLessLoginUserWithOptions($request, $runtime);
    }

    /**
     * 绑定免账号登录用户.
     *
     * @param request - BindPasswordFreeLoginUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindPasswordFreeLoginUserResponse
     *
     * @param BindPasswordFreeLoginUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BindPasswordFreeLoginUserResponse
     */
    public function bindPasswordFreeLoginUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->mainBizType) {
            @$body['MainBizType'] = $request->mainBizType;
        }

        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BindPasswordFreeLoginUser',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindPasswordFreeLoginUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定免账号登录用户.
     *
     * @param request - BindPasswordFreeLoginUserRequest
     *
     * @returns BindPasswordFreeLoginUserResponse
     *
     * @param BindPasswordFreeLoginUserRequest $request
     *
     * @return BindPasswordFreeLoginUserResponse
     */
    public function bindPasswordFreeLoginUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindPasswordFreeLoginUserWithOptions($request, $runtime);
    }

    /**
     * 检查uuid有效性.
     *
     * @param request - CheckUuidValidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckUuidValidResponse
     *
     * @param CheckUuidValidRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CheckUuidValidResponse
     */
    public function checkUuidValidWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bluetooth) {
            @$body['Bluetooth'] = $request->bluetooth;
        }

        if (null !== $request->buildId) {
            @$body['BuildId'] = $request->buildId;
        }

        if (null !== $request->chipId) {
            @$body['ChipId'] = $request->chipId;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->customId) {
            @$body['CustomId'] = $request->customId;
        }

        if (null !== $request->etherMac) {
            @$body['EtherMac'] = $request->etherMac;
        }

        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        if (null !== $request->wlan) {
            @$body['Wlan'] = $request->wlan;
        }

        if (null !== $request->wosAppVersion) {
            @$body['WosAppVersion'] = $request->wosAppVersion;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckUuidValid',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckUuidValidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查uuid有效性.
     *
     * @param request - CheckUuidValidRequest
     *
     * @returns CheckUuidValidResponse
     *
     * @param CheckUuidValidRequest $request
     *
     * @return CheckUuidValidResponse
     */
    public function checkUuidValid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUuidValidWithOptions($request, $runtime);
    }

    /**
     * 创建任务
     *
     * @param request - CreateAppOtaTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppOtaTaskResponse
     *
     * @param CreateAppOtaTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAppOtaTaskResponse
     */
    public function createAppOtaTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersionUid) {
            @$query['AppVersionUid'] = $request->appVersionUid;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->clientIdList) {
            @$query['ClientIdList'] = $request->clientIdList;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->forceUpgrade) {
            @$query['ForceUpgrade'] = $request->forceUpgrade;
        }

        if (null !== $request->label) {
            @$query['Label'] = $request->label;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        if (null !== $request->regions) {
            @$query['Regions'] = $request->regions;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->tenantId) {
            @$query['TenantId'] = $request->tenantId;
        }

        if (null !== $request->tenantIdList) {
            @$query['TenantIdList'] = $request->tenantIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppOtaTask',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建任务
     *
     * @param request - CreateAppOtaTaskRequest
     *
     * @returns CreateAppOtaTaskResponse
     *
     * @param CreateAppOtaTaskRequest $request
     *
     * @return CreateAppOtaTaskResponse
     */
    public function createAppOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppOtaTaskWithOptions($request, $runtime);
    }

    /**
     * 创建版本.
     *
     * @param request - CreateAppOtaVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppOtaVersionResponse
     *
     * @param CreateAppOtaVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAppOtaVersionResponse
     */
    public function createAppOtaVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->arch) {
            @$query['Arch'] = $request->arch;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->downloadUrl) {
            @$query['DownloadUrl'] = $request->downloadUrl;
        }

        if (null !== $request->md5) {
            @$query['Md5'] = $request->md5;
        }

        if (null !== $request->os) {
            @$query['Os'] = $request->os;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->otaType) {
            @$query['OtaType'] = $request->otaType;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        if (null !== $request->relationVersionUids) {
            @$query['RelationVersionUids'] = $request->relationVersionUids;
        }

        if (null !== $request->releaseNote) {
            @$query['ReleaseNote'] = $request->releaseNote;
        }

        if (null !== $request->releaseNoteEn) {
            @$query['ReleaseNoteEn'] = $request->releaseNoteEn;
        }

        if (null !== $request->releaseNoteJp) {
            @$query['ReleaseNoteJp'] = $request->releaseNoteJp;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->snapshotRegionId) {
            @$query['SnapshotRegionId'] = $request->snapshotRegionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->versionType) {
            @$query['VersionType'] = $request->versionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppOtaVersion',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppOtaVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建版本.
     *
     * @param request - CreateAppOtaVersionRequest
     *
     * @returns CreateAppOtaVersionResponse
     *
     * @param CreateAppOtaVersionRequest $request
     *
     * @return CreateAppOtaVersionResponse
     */
    public function createAppOtaVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppOtaVersionWithOptions($request, $runtime);
    }

    /**
     * 删除版本.
     *
     * @param request - DeleteAppOtaVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppOtaVersionsResponse
     *
     * @param DeleteAppOtaVersionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteAppOtaVersionsResponse
     */
    public function deleteAppOtaVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->versionUidList) {
            @$query['VersionUidList'] = $request->versionUidList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppOtaVersions',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppOtaVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除版本.
     *
     * @param request - DeleteAppOtaVersionsRequest
     *
     * @returns DeleteAppOtaVersionsResponse
     *
     * @param DeleteAppOtaVersionsRequest $request
     *
     * @return DeleteAppOtaVersionsResponse
     */
    public function deleteAppOtaVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppOtaVersionsWithOptions($request, $runtime);
    }

    /**
     * 删除设备.
     *
     * @param request - DeleteDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDevicesResponse
     *
     * @param DeleteDevicesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDevicesResponse
     */
    public function deleteDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->uuids) {
            @$query['Uuids'] = $request->uuids;
        }

        $body = [];
        if (null !== $request->force) {
            @$body['Force'] = $request->force;
        }

        if (null !== $request->serialNos) {
            @$body['SerialNos'] = $request->serialNos;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDevices',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除设备.
     *
     * @param request - DeleteDevicesRequest
     *
     * @returns DeleteDevicesResponse
     *
     * @param DeleteDevicesRequest $request
     *
     * @return DeleteDevicesResponse
     */
    public function deleteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevicesWithOptions($request, $runtime);
    }

    /**
     * 删除标签.
     *
     * @param request - DeleteLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLabelResponse
     *
     * @param DeleteLabelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteLabelResponse
     */
    public function deleteLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->force) {
            @$body['Force'] = $request->force;
        }

        if (null !== $request->labelContent) {
            @$body['LabelContent'] = $request->labelContent;
        }

        if (null !== $request->labelId) {
            @$body['LabelId'] = $request->labelId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteLabel',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除标签.
     *
     * @param request - DeleteLabelRequest
     *
     * @returns DeleteLabelResponse
     *
     * @param DeleteLabelRequest $request
     *
     * @return DeleteLabelResponse
     */
    public function deleteLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLabelWithOptions($request, $runtime);
    }

    /**
     * 查询版本.
     *
     * @param request - DescribeAppOtaVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppOtaVersionResponse
     *
     * @param DescribeAppOtaVersionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAppOtaVersionResponse
     */
    public function describeAppOtaVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->nullChannel) {
            @$query['NullChannel'] = $request->nullChannel;
        }

        if (null !== $request->otaType) {
            @$query['OtaType'] = $request->otaType;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->versionUid) {
            @$query['VersionUid'] = $request->versionUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppOtaVersion',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppOtaVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询版本.
     *
     * @param request - DescribeAppOtaVersionRequest
     *
     * @returns DescribeAppOtaVersionResponse
     *
     * @param DescribeAppOtaVersionRequest $request
     *
     * @return DescribeAppOtaVersionResponse
     */
    public function describeAppOtaVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppOtaVersionWithOptions($request, $runtime);
    }

    /**
     * 查询设备座位.
     *
     * @param request - DescribeDeviceSeatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeviceSeatsResponse
     *
     * @param DescribeDeviceSeatsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDeviceSeatsResponse
     */
    public function describeDeviceSeatsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->serialNoList) {
            @$body['SerialNoList'] = $request->serialNoList;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDeviceSeats',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeviceSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询设备座位.
     *
     * @param request - DescribeDeviceSeatsRequest
     *
     * @returns DescribeDeviceSeatsResponse
     *
     * @param DescribeDeviceSeatsRequest $request
     *
     * @return DescribeDeviceSeatsResponse
     */
    public function describeDeviceSeats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceSeatsWithOptions($request, $runtime);
    }

    /**
     * 查询版本信息.
     *
     * @param request - DescribeDeviceVersionDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeviceVersionDetailResponse
     *
     * @param DescribeDeviceVersionDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDeviceVersionDetailResponse
     */
    public function describeDeviceVersionDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->networkType) {
            @$body['NetworkType'] = $request->networkType;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->versionName) {
            @$body['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDeviceVersionDetail',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeviceVersionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询版本信息.
     *
     * @param request - DescribeDeviceVersionDetailRequest
     *
     * @returns DescribeDeviceVersionDetailResponse
     *
     * @param DescribeDeviceVersionDetailRequest $request
     *
     * @return DescribeDeviceVersionDetailResponse
     */
    public function describeDeviceVersionDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceVersionDetailWithOptions($request, $runtime);
    }

    /**
     * 查询设备标签数量.
     *
     * @param request - DescribeSnLabelCountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSnLabelCountsResponse
     *
     * @param DescribeSnLabelCountsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSnLabelCountsResponse
     */
    public function describeSnLabelCountsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labelList) {
            @$body['LabelList'] = $request->labelList;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        if (null !== $request->zoneName) {
            @$body['ZoneName'] = $request->zoneName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSnLabelCounts',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSnLabelCountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询设备标签数量.
     *
     * @param request - DescribeSnLabelCountsRequest
     *
     * @returns DescribeSnLabelCountsResponse
     *
     * @param DescribeSnLabelCountsRequest $request
     *
     * @return DescribeSnLabelCountsResponse
     */
    public function describeSnLabelCounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnLabelCountsWithOptions($request, $runtime);
    }

    /**
     * 查询工作区域
     *
     * @param request - DescribeWorkZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWorkZonesResponse
     *
     * @param DescribeWorkZonesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeWorkZonesResponse
     */
    public function describeWorkZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->zoneIdList) {
            @$body['ZoneIdList'] = $request->zoneIdList;
        }

        if (null !== $request->zoneNameList) {
            @$body['ZoneNameList'] = $request->zoneNameList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeWorkZones',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWorkZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询工作区域
     *
     * @param request - DescribeWorkZonesRequest
     *
     * @returns DescribeWorkZonesResponse
     *
     * @param DescribeWorkZonesRequest $request
     *
     * @return DescribeWorkZonesResponse
     */
    public function describeWorkZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWorkZonesWithOptions($request, $runtime);
    }

    /**
     * 设备解绑终端用户.
     *
     * @param request - DetachEndUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachEndUsersResponse
     *
     * @param DetachEndUsersRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DetachEndUsersResponse
     */
    public function detachEndUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endUserIds) {
            @$body['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetachEndUsers',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachEndUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设备解绑终端用户.
     *
     * @param request - DetachEndUsersRequest
     *
     * @returns DetachEndUsersResponse
     *
     * @param DetachEndUsersRequest $request
     *
     * @return DetachEndUsersResponse
     */
    public function detachEndUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachEndUsersWithOptions($request, $runtime);
    }

    /**
     * 设备绑定标签.
     *
     * @param request - DetachLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachLabelResponse
     *
     * @param DetachLabelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DetachLabelResponse
     */
    public function detachLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labelContent) {
            @$body['LabelContent'] = $request->labelContent;
        }

        if (null !== $request->labelId) {
            @$body['LabelId'] = $request->labelId;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetachLabel',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设备绑定标签.
     *
     * @param request - DetachLabelRequest
     *
     * @returns DetachLabelResponse
     *
     * @param DetachLabelRequest $request
     *
     * @return DetachLabelResponse
     */
    public function detachLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachLabelWithOptions($request, $runtime);
    }

    /**
     * 批量解绑标签.
     *
     * @param request - DetachLabelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachLabelsResponse
     *
     * @param DetachLabelsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetachLabelsResponse
     */
    public function detachLabelsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labelIds) {
            @$body['LabelIds'] = $request->labelIds;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->serialNoList) {
            @$body['SerialNoList'] = $request->serialNoList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetachLabels',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量解绑标签.
     *
     * @param request - DetachLabelsRequest
     *
     * @returns DetachLabelsResponse
     *
     * @param DetachLabelsRequest $request
     *
     * @return DetachLabelsResponse
     */
    public function detachLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachLabelsWithOptions($request, $runtime);
    }

    /**
     * 查询用户上传的文件.
     *
     * @param request - GenerateOssUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateOssUrlResponse
     *
     * @param GenerateOssUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GenerateOssUrlResponse
     */
    public function generateOssUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->objectNameList) {
            @$body['ObjectNameList'] = $request->objectNameList;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateOssUrl',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateOssUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户上传的文件.
     *
     * @param request - GenerateOssUrlRequest
     *
     * @returns GenerateOssUrlResponse
     *
     * @param GenerateOssUrlRequest $request
     *
     * @return GenerateOssUrlResponse
     */
    public function generateOssUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateOssUrlWithOptions($request, $runtime);
    }

    /**
     * 获取应用最新版本.
     *
     * @param request - GetAppOtaLatestVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppOtaLatestVersionResponse
     *
     * @param GetAppOtaLatestVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAppOtaLatestVersionResponse
     */
    public function getAppOtaLatestVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseVersion) {
            @$query['BaseVersion'] = $request->baseVersion;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clientUid) {
            @$query['ClientUid'] = $request->clientUid;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppOtaLatestVersion',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppOtaLatestVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取应用最新版本.
     *
     * @param request - GetAppOtaLatestVersionRequest
     *
     * @returns GetAppOtaLatestVersionResponse
     *
     * @param GetAppOtaLatestVersionRequest $request
     *
     * @return GetAppOtaLatestVersionResponse
     */
    public function getAppOtaLatestVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppOtaLatestVersionWithOptions($request, $runtime);
    }

    /**
     * 获取设备配置.
     *
     * @param request - GetDeviceConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceConfigsResponse
     *
     * @param GetDeviceConfigsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDeviceConfigsResponse
     */
    public function getDeviceConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceId) {
            @$body['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->networkType) {
            @$body['NetworkType'] = $request->networkType;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->urclVersion) {
            @$body['UrclVersion'] = $request->urclVersion;
        }

        if (null !== $request->userCustomId) {
            @$body['UserCustomId'] = $request->userCustomId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDeviceConfigs',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeviceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取设备配置.
     *
     * @param request - GetDeviceConfigsRequest
     *
     * @returns GetDeviceConfigsResponse
     *
     * @param GetDeviceConfigsRequest $request
     *
     * @return GetDeviceConfigsResponse
     */
    public function getDeviceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceConfigsWithOptions($request, $runtime);
    }

    /**
     * 获取是否开启自动升级状态
     *
     * @param request - GetDeviceOtaAutoStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceOtaAutoStatusResponse
     *
     * @param GetDeviceOtaAutoStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDeviceOtaAutoStatusResponse
     */
    public function getDeviceOtaAutoStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDeviceOtaAutoStatus',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeviceOtaAutoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取是否开启自动升级状态
     *
     * @param request - GetDeviceOtaAutoStatusRequest
     *
     * @returns GetDeviceOtaAutoStatusResponse
     *
     * @param GetDeviceOtaAutoStatusRequest $request
     *
     * @return GetDeviceOtaAutoStatusResponse
     */
    public function getDeviceOtaAutoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceOtaAutoStatusWithOptions($request, $runtime);
    }

    /**
     * 获取设备升级信息.
     *
     * @param request - GetDeviceOtaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceOtaInfoResponse
     *
     * @param GetDeviceOtaInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDeviceOtaInfoResponse
     */
    public function getDeviceOtaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->baseVersion) {
            @$body['BaseVersion'] = $request->baseVersion;
        }

        if (null !== $request->channel) {
            @$body['Channel'] = $request->channel;
        }

        if (null !== $request->deviceId) {
            @$body['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->networkType) {
            @$body['NetworkType'] = $request->networkType;
        }

        if (null !== $request->osVersion) {
            @$body['OsVersion'] = $request->osVersion;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->targetVersionType) {
            @$body['TargetVersionType'] = $request->targetVersionType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDeviceOtaInfo',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeviceOtaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取设备升级信息.
     *
     * @param request - GetDeviceOtaInfoRequest
     *
     * @returns GetDeviceOtaInfoResponse
     *
     * @param GetDeviceOtaInfoRequest $request
     *
     * @return GetDeviceOtaInfoResponse
     */
    public function getDeviceOtaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceOtaInfoWithOptions($request, $runtime);
    }

    /**
     * 获取设备升级信息.
     *
     * @param request - GetDeviceOtaInfoTestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceOtaInfoTestResponse
     *
     * @param GetDeviceOtaInfoTestRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDeviceOtaInfoTestResponse
     */
    public function getDeviceOtaInfoTestWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->baseVersion) {
            @$body['BaseVersion'] = $request->baseVersion;
        }

        if (null !== $request->deviceId) {
            @$body['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDeviceOtaInfoTest',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeviceOtaInfoTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取设备升级信息.
     *
     * @param request - GetDeviceOtaInfoTestRequest
     *
     * @returns GetDeviceOtaInfoTestResponse
     *
     * @param GetDeviceOtaInfoTestRequest $request
     *
     * @return GetDeviceOtaInfoTestResponse
     */
    public function getDeviceOtaInfoTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceOtaInfoTestWithOptions($request, $runtime);
    }

    /**
     * 获取租户任务版本信息.
     *
     * @param request - GetDeviceOtaTaskVersionInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceOtaTaskVersionInfoResponse
     *
     * @param GetDeviceOtaTaskVersionInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetDeviceOtaTaskVersionInfoResponse
     */
    public function getDeviceOtaTaskVersionInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDeviceOtaTaskVersionInfo',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeviceOtaTaskVersionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取租户任务版本信息.
     *
     * @param request - GetDeviceOtaTaskVersionInfoRequest
     *
     * @returns GetDeviceOtaTaskVersionInfoResponse
     *
     * @param GetDeviceOtaTaskVersionInfoRequest $request
     *
     * @return GetDeviceOtaTaskVersionInfoResponse
     */
    public function getDeviceOtaTaskVersionInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceOtaTaskVersionInfoWithOptions($request, $runtime);
    }

    /**
     * 获得设备升级详情.
     *
     * @param request - GetDeviceUpgradeStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceUpgradeStatusResponse
     *
     * @param GetDeviceUpgradeStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDeviceUpgradeStatusResponse
     */
    public function getDeviceUpgradeStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->clientUid) {
            @$query['ClientUid'] = $request->clientUid;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        if (null !== $request->taskUid) {
            @$query['TaskUid'] = $request->taskUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeviceUpgradeStatus',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeviceUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得设备升级详情.
     *
     * @param request - GetDeviceUpgradeStatusRequest
     *
     * @returns GetDeviceUpgradeStatusResponse
     *
     * @param GetDeviceUpgradeStatusRequest $request
     *
     * @return GetDeviceUpgradeStatusResponse
     */
    public function getDeviceUpgradeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceUpgradeStatusWithOptions($request, $runtime);
    }

    /**
     * 导出设备工位列表.
     *
     * @param request - GetExportDeviceInfoOssUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExportDeviceInfoOssUrlResponse
     *
     * @param GetExportDeviceInfoOssUrlRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetExportDeviceInfoOssUrlResponse
     */
    public function getExportDeviceInfoOssUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        if (null !== $request->zoneName) {
            @$body['ZoneName'] = $request->zoneName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetExportDeviceInfoOssUrl',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExportDeviceInfoOssUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出设备工位列表.
     *
     * @param request - GetExportDeviceInfoOssUrlRequest
     *
     * @returns GetExportDeviceInfoOssUrlResponse
     *
     * @param GetExportDeviceInfoOssUrlRequest $request
     *
     * @return GetExportDeviceInfoOssUrlResponse
     */
    public function getExportDeviceInfoOssUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExportDeviceInfoOssUrlWithOptions($request, $runtime);
    }

    /**
     * 查询OSS配置信息.
     *
     * @param request - GetFbOssConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFbOssConfigResponse
     *
     * @param GetFbOssConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetFbOssConfigResponse
     */
    public function getFbOssConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dirPrefix) {
            @$body['DirPrefix'] = $request->dirPrefix;
        }

        if (null !== $request->isDedicatedLine) {
            @$body['IsDedicatedLine'] = $request->isDedicatedLine;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFbOssConfig',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFbOssConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询OSS配置信息.
     *
     * @param request - GetFbOssConfigRequest
     *
     * @returns GetFbOssConfigResponse
     *
     * @param GetFbOssConfigRequest $request
     *
     * @return GetFbOssConfigResponse
     */
    public function getFbOssConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFbOssConfigWithOptions($request, $runtime);
    }

    /**
     * 获取OSS配置.
     *
     * @param request - GetOssConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssConfigResponse
     *
     * @param GetOssConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetOssConfigResponse
     */
    public function getOssConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssConfig',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取OSS配置.
     *
     * @param request - GetOssConfigRequest
     *
     * @returns GetOssConfigResponse
     *
     * @param GetOssConfigRequest $request
     *
     * @return GetOssConfigResponse
     */
    public function getOssConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssConfigWithOptions($request, $runtime);
    }

    /**
     * 获取版本下载地址
     *
     * @param request - GetVersionDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVersionDownloadUrlResponse
     *
     * @param GetVersionDownloadUrlRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetVersionDownloadUrlResponse
     */
    public function getVersionDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVersionDownloadUrl',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVersionDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取版本下载地址
     *
     * @param request - GetVersionDownloadUrlRequest
     *
     * @returns GetVersionDownloadUrlResponse
     *
     * @param GetVersionDownloadUrlRequest $request
     *
     * @return GetVersionDownloadUrlResponse
     */
    public function getVersionDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVersionDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * 获取用户已绑定的可信设备列表.
     *
     * @param request - ListBoundDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBoundDevicesResponse
     *
     * @param ListBoundDevicesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListBoundDevicesResponse
     */
    public function listBoundDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->adDomain) {
            @$body['AdDomain'] = $request->adDomain;
        }

        if (null !== $request->alias) {
            @$body['Alias'] = $request->alias;
        }

        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        if (null !== $request->directoryId) {
            @$body['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->inManage) {
            @$body['InManage'] = $request->inManage;
        }

        if (null !== $request->lastLoginUser) {
            @$body['LastLoginUser'] = $request->lastLoginUser;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->userType) {
            @$body['UserType'] = $request->userType;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListBoundDevices',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBoundDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户已绑定的可信设备列表.
     *
     * @param request - ListBoundDevicesRequest
     *
     * @returns ListBoundDevicesResponse
     *
     * @param ListBoundDevicesRequest $request
     *
     * @return ListBoundDevicesResponse
     */
    public function listBoundDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBoundDevicesWithOptions($request, $runtime);
    }

    /**
     * 获取租户ota任务
     *
     * @param request - ListDeviceOtaTaskByTenantRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeviceOtaTaskByTenantResponse
     *
     * @param ListDeviceOtaTaskByTenantRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDeviceOtaTaskByTenantResponse
     */
    public function listDeviceOtaTaskByTenantWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDeviceOtaTaskByTenant',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeviceOtaTaskByTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取租户ota任务
     *
     * @param request - ListDeviceOtaTaskByTenantRequest
     *
     * @returns ListDeviceOtaTaskByTenantResponse
     *
     * @param ListDeviceOtaTaskByTenantRequest $request
     *
     * @return ListDeviceOtaTaskByTenantResponse
     */
    public function listDeviceOtaTaskByTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceOtaTaskByTenantWithOptions($request, $runtime);
    }

    /**
     * 查询设备座位列表.
     *
     * @param request - ListDeviceSeatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeviceSeatsResponse
     *
     * @param ListDeviceSeatsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeviceSeatsResponse
     */
    public function listDeviceSeatsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->label) {
            @$body['Label'] = $request->label;
        }

        if (null !== $request->seatNo) {
            @$body['SeatNo'] = $request->seatNo;
        }

        if (null !== $request->serialNoList) {
            @$body['SerialNoList'] = $request->serialNoList;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDeviceSeats',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeviceSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询设备座位列表.
     *
     * @param request - ListDeviceSeatsRequest
     *
     * @returns ListDeviceSeatsResponse
     *
     * @param ListDeviceSeatsRequest $request
     *
     * @return ListDeviceSeatsResponse
     */
    public function listDeviceSeats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceSeatsWithOptions($request, $runtime);
    }

    /**
     * 获取设备列表.
     *
     * @param request - ListDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDevicesResponse
     *
     * @param ListDevicesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListDevicesResponse
     */
    public function listDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->deviceIpV4) {
            @$query['DeviceIpV4'] = $request->deviceIpV4;
        }

        if (null !== $request->deviceName) {
            @$query['DeviceName'] = $request->deviceName;
        }

        if (null !== $request->deviceOS) {
            @$query['DeviceOS'] = $request->deviceOS;
        }

        if (null !== $request->devicePlatform) {
            @$query['DevicePlatform'] = $request->devicePlatform;
        }

        if (null !== $request->lastLoginUser) {
            @$query['LastLoginUser'] = $request->lastLoginUser;
        }

        if (null !== $request->locationInfo) {
            @$query['LocationInfo'] = $request->locationInfo;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $body = [];
        if (null !== $request->alias) {
            @$body['Alias'] = $request->alias;
        }

        if (null !== $request->buildId) {
            @$body['BuildId'] = $request->buildId;
        }

        if (null !== $request->deviceGroupId) {
            @$body['DeviceGroupId'] = $request->deviceGroupId;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->labelContent) {
            @$body['LabelContent'] = $request->labelContent;
        }

        if (null !== $request->labelId) {
            @$body['LabelId'] = $request->labelId;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDevices',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取设备列表.
     *
     * @param request - ListDevicesRequest
     *
     * @returns ListDevicesResponse
     *
     * @param ListDevicesRequest $request
     *
     * @return ListDevicesResponse
     */
    public function listDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevicesWithOptions($request, $runtime);
    }

    /**
     * 查询用户问题标签.
     *
     * @param request - ListFbIssueLabelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFbIssueLabelsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListFbIssueLabelsResponse
     */
    public function listFbIssueLabelsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListFbIssueLabels',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFbIssueLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户问题标签.
     *
     * @returns ListFbIssueLabelsResponse
     *
     * @return ListFbIssueLabelsResponse
     */
    public function listFbIssueLabels()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFbIssueLabelsWithOptions($runtime);
    }

    /**
     * 根据语言类型和调用方查询标签列表.
     *
     * @param request - ListFbIssueLabelsByLCRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFbIssueLabelsByLCResponse
     *
     * @param ListFbIssueLabelsByLCRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListFbIssueLabelsByLCResponse
     */
    public function listFbIssueLabelsByLCWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->caller) {
            @$body['Caller'] = $request->caller;
        }

        if (null !== $request->languageType) {
            @$body['LanguageType'] = $request->languageType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFbIssueLabelsByLC',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFbIssueLabelsByLCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据语言类型和调用方查询标签列表.
     *
     * @param request - ListFbIssueLabelsByLCRequest
     *
     * @returns ListFbIssueLabelsByLCResponse
     *
     * @param ListFbIssueLabelsByLCRequest $request
     *
     * @return ListFbIssueLabelsByLCResponse
     */
    public function listFbIssueLabelsByLC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFbIssueLabelsByLCWithOptions($request, $runtime);
    }

    /**
     * 获取标签列表.
     *
     * @param request - ListLabelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLabelsResponse
     *
     * @param ListLabelsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListLabelsResponse
     */
    public function listLabelsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labelContent) {
            @$body['LabelContent'] = $request->labelContent;
        }

        if (null !== $request->labelId) {
            @$body['LabelId'] = $request->labelId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListLabels',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标签列表.
     *
     * @param request - ListLabelsRequest
     *
     * @returns ListLabelsResponse
     *
     * @param ListLabelsRequest $request
     *
     * @return ListLabelsResponse
     */
    public function listLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLabelsWithOptions($request, $runtime);
    }

    /**
     * 获取租户升级设备信息.
     *
     * @param request - ListTenantDeviceOtaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTenantDeviceOtaInfoResponse
     *
     * @param ListTenantDeviceOtaInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListTenantDeviceOtaInfoResponse
     */
    public function listTenantDeviceOtaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTenantDeviceOtaInfo',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTenantDeviceOtaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取租户升级设备信息.
     *
     * @param request - ListTenantDeviceOtaInfoRequest
     *
     * @returns ListTenantDeviceOtaInfoResponse
     *
     * @param ListTenantDeviceOtaInfoRequest $request
     *
     * @return ListTenantDeviceOtaInfoResponse
     */
    public function listTenantDeviceOtaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTenantDeviceOtaInfoWithOptions($request, $runtime);
    }

    /**
     * 查询终端列表.
     *
     * @param request - ListTerminalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTerminalResponse
     *
     * @param ListTerminalRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListTerminalResponse
     */
    public function listTerminalWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['Alias'] = $request->alias;
        }

        if (null !== $request->buildId) {
            @$body['BuildId'] = $request->buildId;
        }

        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        if (null !== $request->inManage) {
            @$body['InManage'] = $request->inManage;
        }

        if (null !== $request->ipv4) {
            @$body['Ipv4'] = $request->ipv4;
        }

        if (null !== $request->locationInfo) {
            @$body['LocationInfo'] = $request->locationInfo;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->searchKeyword) {
            @$body['SearchKeyword'] = $request->searchKeyword;
        }

        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->terminalGroupId) {
            @$body['TerminalGroupId'] = $request->terminalGroupId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTerminal',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询终端列表.
     *
     * @param request - ListTerminalRequest
     *
     * @returns ListTerminalResponse
     *
     * @param ListTerminalRequest $request
     *
     * @return ListTerminalResponse
     */
    public function listTerminal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTerminalWithOptions($request, $runtime);
    }

    /**
     * 批量查询终端基本信息.
     *
     * @param request - ListTerminalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTerminalsResponse
     *
     * @param ListTerminalsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTerminalsResponse
     */
    public function listTerminalsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->inManage) {
            @$body['InManage'] = $request->inManage;
        }

        if (null !== $request->mainBizType) {
            @$body['MainBizType'] = $request->mainBizType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->passwordFreeLoginUser) {
            @$body['PasswordFreeLoginUser'] = $request->passwordFreeLoginUser;
        }

        if (null !== $request->searchKeyword) {
            @$body['SearchKeyword'] = $request->searchKeyword;
        }

        $bodyFlat = [];
        if (null !== $request->serialNumbers) {
            @$bodyFlat['SerialNumbers'] = $request->serialNumbers;
        }

        if (null !== $request->terminalGroupId) {
            @$body['TerminalGroupId'] = $request->terminalGroupId;
        }

        if (null !== $request->uuids) {
            @$bodyFlat['Uuids'] = $request->uuids;
        }

        if (null !== $request->withBindUser) {
            @$body['WithBindUser'] = $request->withBindUser;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTerminals',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTerminalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询终端基本信息.
     *
     * @param request - ListTerminalsRequest
     *
     * @returns ListTerminalsResponse
     *
     * @param ListTerminalsRequest $request
     *
     * @return ListTerminalsResponse
     */
    public function listTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTerminalsWithOptions($request, $runtime);
    }

    /**
     * 查询可信设备列表.
     *
     * @param request - ListTrustDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrustDevicesResponse
     *
     * @param ListTrustDevicesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTrustDevicesResponse
     */
    public function listTrustDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labelContent) {
            @$body['LabelContent'] = $request->labelContent;
        }

        if (null !== $request->labelId) {
            @$body['LabelId'] = $request->labelId;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->userCustomId) {
            @$body['UserCustomId'] = $request->userCustomId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTrustDevices',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTrustDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询可信设备列表.
     *
     * @param request - ListTrustDevicesRequest
     *
     * @returns ListTrustDevicesResponse
     *
     * @param ListTrustDevicesRequest $request
     *
     * @return ListTrustDevicesResponse
     */
    public function listTrustDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrustDevicesWithOptions($request, $runtime);
    }

    /**
     * 获取用户未绑定的可信设备列表.
     *
     * @param request - ListUnbindDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUnbindDevicesResponse
     *
     * @param ListUnbindDevicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListUnbindDevicesResponse
     */
    public function listUnbindDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->adDomain) {
            @$body['AdDomain'] = $request->adDomain;
        }

        if (null !== $request->alias) {
            @$body['Alias'] = $request->alias;
        }

        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        if (null !== $request->directoryId) {
            @$body['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->inManage) {
            @$body['InManage'] = $request->inManage;
        }

        if (null !== $request->lastLoginUser) {
            @$body['LastLoginUser'] = $request->lastLoginUser;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->userType) {
            @$body['UserType'] = $request->userType;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUnbindDevices',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUnbindDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户未绑定的可信设备列表.
     *
     * @param request - ListUnbindDevicesRequest
     *
     * @returns ListUnbindDevicesResponse
     *
     * @param ListUnbindDevicesRequest $request
     *
     * @return ListUnbindDevicesResponse
     */
    public function listUnbindDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUnbindDevicesWithOptions($request, $runtime);
    }

    /**
     * 查询问题反馈列表.
     *
     * @param request - ListUserFbAcIssuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserFbAcIssuesResponse
     *
     * @param ListUserFbAcIssuesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUserFbAcIssuesResponse
     */
    public function listUserFbAcIssuesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->account) {
            @$body['Account'] = $request->account;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->errorMessage) {
            @$body['ErrorMessage'] = $request->errorMessage;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->issueId) {
            @$body['IssueId'] = $request->issueId;
        }

        if (null !== $request->label) {
            @$body['Label'] = $request->label;
        }

        if (null !== $request->reservedA) {
            @$body['ReservedA'] = $request->reservedA;
        }

        if (null !== $request->reservedB) {
            @$body['ReservedB'] = $request->reservedB;
        }

        if (null !== $request->userEmail) {
            @$body['UserEmail'] = $request->userEmail;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUserFbAcIssues',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserFbAcIssuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询问题反馈列表.
     *
     * @param request - ListUserFbAcIssuesRequest
     *
     * @returns ListUserFbAcIssuesResponse
     *
     * @param ListUserFbAcIssuesRequest $request
     *
     * @return ListUserFbAcIssuesResponse
     */
    public function listUserFbAcIssues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserFbAcIssuesWithOptions($request, $runtime);
    }

    /**
     * 查询用户反馈问题列表.
     *
     * @param request - ListUserFbIssuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserFbIssuesResponse
     *
     * @param ListUserFbIssuesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListUserFbIssuesResponse
     */
    public function listUserFbIssuesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientModel) {
            @$body['ClientModel'] = $request->clientModel;
        }

        if (null !== $request->clientSn) {
            @$body['ClientSn'] = $request->clientSn;
        }

        if (null !== $request->customerId) {
            @$body['CustomerId'] = $request->customerId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->desktopId) {
            @$body['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->errorCode) {
            @$body['ErrorCode'] = $request->errorCode;
        }

        if (null !== $request->errorMsg) {
            @$body['ErrorMsg'] = $request->errorMsg;
        }

        if (null !== $request->fbType) {
            @$body['FbType'] = $request->fbType;
        }

        if (null !== $request->issueId) {
            @$body['IssueId'] = $request->issueId;
        }

        if (null !== $request->issueLabel) {
            @$body['IssueLabel'] = $request->issueLabel;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->userEmail) {
            @$body['UserEmail'] = $request->userEmail;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->wasRead) {
            @$body['WasRead'] = $request->wasRead;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUserFbIssues',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserFbIssuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户反馈问题列表.
     *
     * @param request - ListUserFbIssuesRequest
     *
     * @returns ListUserFbIssuesResponse
     *
     * @param ListUserFbIssuesRequest $request
     *
     * @return ListUserFbIssuesResponse
     */
    public function listUserFbIssues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserFbIssuesWithOptions($request, $runtime);
    }

    /**
     * 修改设备安全入网类型.
     *
     * @param request - ModifyDevicesSecureNetworkTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDevicesSecureNetworkTypeResponse
     *
     * @param ModifyDevicesSecureNetworkTypeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDevicesSecureNetworkTypeResponse
     */
    public function modifyDevicesSecureNetworkTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allDevices) {
            @$body['AllDevices'] = $request->allDevices;
        }

        if (null !== $request->secureNetworkType) {
            @$body['SecureNetworkType'] = $request->secureNetworkType;
        }

        if (null !== $request->serialNos) {
            @$body['SerialNos'] = $request->serialNos;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDevicesSecureNetworkType',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDevicesSecureNetworkTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改设备安全入网类型.
     *
     * @param request - ModifyDevicesSecureNetworkTypeRequest
     *
     * @returns ModifyDevicesSecureNetworkTypeResponse
     *
     * @param ModifyDevicesSecureNetworkTypeRequest $request
     *
     * @return ModifyDevicesSecureNetworkTypeResponse
     */
    public function modifyDevicesSecureNetworkType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDevicesSecureNetworkTypeWithOptions($request, $runtime);
    }

    /**
     * 匿名api修改安全入网配置.
     *
     * @param request - ModifySecureNetworkTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySecureNetworkTypeResponse
     *
     * @param ModifySecureNetworkTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifySecureNetworkTypeResponse
     */
    public function modifySecureNetworkTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->secureNetworkType) {
            @$body['SecureNetworkType'] = $request->secureNetworkType;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifySecureNetworkType',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySecureNetworkTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 匿名api修改安全入网配置.
     *
     * @param request - ModifySecureNetworkTypeRequest
     *
     * @returns ModifySecureNetworkTypeResponse
     *
     * @param ModifySecureNetworkTypeRequest $request
     *
     * @return ModifySecureNetworkTypeResponse
     */
    public function modifySecureNetworkType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecureNetworkTypeWithOptions($request, $runtime);
    }

    /**
     * 设备注册.
     *
     * @param request - RegisterDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterDeviceResponse
     *
     * @param RegisterDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RegisterDeviceResponse
     */
    public function registerDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bluetooth) {
            @$body['Bluetooth'] = $request->bluetooth;
        }

        if (null !== $request->buildId) {
            @$body['BuildId'] = $request->buildId;
        }

        if (null !== $request->chipId) {
            @$body['ChipId'] = $request->chipId;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        if (null !== $request->cpu) {
            @$body['Cpu'] = $request->cpu;
        }

        if (null !== $request->customId) {
            @$body['CustomId'] = $request->customId;
        }

        if (null !== $request->etherMac) {
            @$body['EtherMac'] = $request->etherMac;
        }

        if (null !== $request->memory) {
            @$body['Memory'] = $request->memory;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->storage) {
            @$body['Storage'] = $request->storage;
        }

        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        if (null !== $request->wlan) {
            @$body['Wlan'] = $request->wlan;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RegisterDevice',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设备注册.
     *
     * @param request - RegisterDeviceRequest
     *
     * @returns RegisterDeviceResponse
     *
     * @param RegisterDeviceRequest $request
     *
     * @return RegisterDeviceResponse
     */
    public function registerDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDeviceWithOptions($request, $runtime);
    }

    /**
     * 上报升级信息.
     *
     * @param request - ReportAppOtaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReportAppOtaInfoResponse
     *
     * @param ReportAppOtaInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReportAppOtaInfoResponse
     */
    public function reportAppOtaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseVersion) {
            @$query['BaseVersion'] = $request->baseVersion;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clientUid) {
            @$query['ClientUid'] = $request->clientUid;
        }

        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->targetVersion) {
            @$query['TargetVersion'] = $request->targetVersion;
        }

        if (null !== $request->taskUid) {
            @$query['TaskUid'] = $request->taskUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReportAppOtaInfo',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReportAppOtaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上报升级信息.
     *
     * @param request - ReportAppOtaInfoRequest
     *
     * @returns ReportAppOtaInfoResponse
     *
     * @param ReportAppOtaInfoRequest $request
     *
     * @return ReportAppOtaInfoResponse
     */
    public function reportAppOtaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportAppOtaInfoWithOptions($request, $runtime);
    }

    /**
     * 升级信息上报.
     *
     * @param request - ReportDeviceOtaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReportDeviceOtaInfoResponse
     *
     * @param ReportDeviceOtaInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReportDeviceOtaInfoResponse
     */
    public function reportDeviceOtaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->baseVersion) {
            @$body['BaseVersion'] = $request->baseVersion;
        }

        if (null !== $request->deviceId) {
            @$body['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->note) {
            @$body['Note'] = $request->note;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->targetVersion) {
            @$body['TargetVersion'] = $request->targetVersion;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReportDeviceOtaInfo',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReportDeviceOtaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 升级信息上报.
     *
     * @param request - ReportDeviceOtaInfoRequest
     *
     * @returns ReportDeviceOtaInfoResponse
     *
     * @param ReportDeviceOtaInfoRequest $request
     *
     * @return ReportDeviceOtaInfoResponse
     */
    public function reportDeviceOtaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportDeviceOtaInfoWithOptions($request, $runtime);
    }

    /**
     * 应用中心用户问题反馈.
     *
     * @param tmpReq - ReportUserFbAcIssueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReportUserFbAcIssueResponse
     *
     * @param ReportUserFbAcIssueRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ReportUserFbAcIssueResponse
     */
    public function reportUserFbAcIssueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReportUserFbAcIssueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileList) {
            $request->fileListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileList, 'FileList', 'json');
        }

        $body = [];
        if (null !== $request->account) {
            @$body['Account'] = $request->account;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->errorMsg) {
            @$body['ErrorMsg'] = $request->errorMsg;
        }

        if (null !== $request->fileListShrink) {
            @$body['FileList'] = $request->fileListShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->reservedA) {
            @$body['ReservedA'] = $request->reservedA;
        }

        if (null !== $request->reservedB) {
            @$body['ReservedB'] = $request->reservedB;
        }

        if (null !== $request->userEmail) {
            @$body['UserEmail'] = $request->userEmail;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReportUserFbAcIssue',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReportUserFbAcIssueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 应用中心用户问题反馈.
     *
     * @param request - ReportUserFbAcIssueRequest
     *
     * @returns ReportUserFbAcIssueResponse
     *
     * @param ReportUserFbAcIssueRequest $request
     *
     * @return ReportUserFbAcIssueResponse
     */
    public function reportUserFbAcIssue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportUserFbAcIssueWithOptions($request, $runtime);
    }

    /**
     * 上报用户反馈问题.
     *
     * @param tmpReq - ReportUserFbIssueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReportUserFbIssueResponse
     *
     * @param ReportUserFbIssueRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ReportUserFbIssueResponse
     */
    public function reportUserFbIssueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReportUserFbIssueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileList) {
            $request->fileListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileList, 'FileList', 'json');
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->clientAppVersion) {
            @$body['ClientAppVersion'] = $request->clientAppVersion;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientModel) {
            @$body['ClientModel'] = $request->clientModel;
        }

        if (null !== $request->clientOsName) {
            @$body['ClientOsName'] = $request->clientOsName;
        }

        if (null !== $request->clientSn) {
            @$body['ClientSn'] = $request->clientSn;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->customerId) {
            @$body['CustomerId'] = $request->customerId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->desktopId) {
            @$body['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopType) {
            @$body['DesktopType'] = $request->desktopType;
        }

        if (null !== $request->errorCode) {
            @$body['ErrorCode'] = $request->errorCode;
        }

        if (null !== $request->errorMsg) {
            @$body['ErrorMsg'] = $request->errorMsg;
        }

        if (null !== $request->fbType) {
            @$body['FbType'] = $request->fbType;
        }

        if (null !== $request->fileListShrink) {
            @$body['FileList'] = $request->fileListShrink;
        }

        if (null !== $request->issueLabel) {
            @$body['IssueLabel'] = $request->issueLabel;
        }

        if (null !== $request->occurTime) {
            @$body['OccurTime'] = $request->occurTime;
        }

        if (null !== $request->reservedA) {
            @$body['ReservedA'] = $request->reservedA;
        }

        if (null !== $request->reservedB) {
            @$body['ReservedB'] = $request->reservedB;
        }

        if (null !== $request->telNo) {
            @$body['TelNo'] = $request->telNo;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->userEmail) {
            @$body['UserEmail'] = $request->userEmail;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        if (null !== $request->wyId) {
            @$body['WyId'] = $request->wyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReportUserFbIssue',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReportUserFbIssueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上报用户反馈问题.
     *
     * @param request - ReportUserFbIssueRequest
     *
     * @returns ReportUserFbIssueResponse
     *
     * @param ReportUserFbIssueRequest $request
     *
     * @return ReportUserFbIssueResponse
     */
    public function reportUserFbIssue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportUserFbIssueWithOptions($request, $runtime);
    }

    /**
     * 向终端发送运维命令.
     *
     * @param request - SendOpsMessageToTerminalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendOpsMessageToTerminalsResponse
     *
     * @param SendOpsMessageToTerminalsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SendOpsMessageToTerminalsResponse
     */
    public function sendOpsMessageToTerminalsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->delay) {
            @$query['Delay'] = $request->delay;
        }

        $body = [];
        if (null !== $request->msg) {
            @$body['Msg'] = $request->msg;
        }

        if (null !== $request->opsAction) {
            @$body['OpsAction'] = $request->opsAction;
        }

        $bodyFlat = [];
        if (null !== $request->uuids) {
            @$bodyFlat['Uuids'] = $request->uuids;
        }

        if (null !== $request->waitForAck) {
            @$body['WaitForAck'] = $request->waitForAck;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendOpsMessageToTerminals',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendOpsMessageToTerminalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 向终端发送运维命令.
     *
     * @param request - SendOpsMessageToTerminalsRequest
     *
     * @returns SendOpsMessageToTerminalsResponse
     *
     * @param SendOpsMessageToTerminalsRequest $request
     *
     * @return SendOpsMessageToTerminalsResponse
     */
    public function sendOpsMessageToTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendOpsMessageToTerminalsWithOptions($request, $runtime);
    }

    /**
     * 设置租户ota自动开启/关闭.
     *
     * @param request - SetDeviceOtaAutoStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDeviceOtaAutoStatusResponse
     *
     * @param SetDeviceOtaAutoStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetDeviceOtaAutoStatusResponse
     */
    public function setDeviceOtaAutoStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoUpdate) {
            @$body['AutoUpdate'] = $request->autoUpdate;
        }

        if (null !== $request->autoUpdateTimeSchedule) {
            @$body['AutoUpdateTimeSchedule'] = $request->autoUpdateTimeSchedule;
        }

        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        if (null !== $request->forceUpgrade) {
            @$body['ForceUpgrade'] = $request->forceUpgrade;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetDeviceOtaAutoStatus',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDeviceOtaAutoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置租户ota自动开启/关闭.
     *
     * @param request - SetDeviceOtaAutoStatusRequest
     *
     * @returns SetDeviceOtaAutoStatusResponse
     *
     * @param SetDeviceOtaAutoStatusRequest $request
     *
     * @return SetDeviceOtaAutoStatusResponse
     */
    public function setDeviceOtaAutoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeviceOtaAutoStatusWithOptions($request, $runtime);
    }

    /**
     * 租户设置设备ota任务的状态
     *
     * @param request - SetDeviceOtaTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDeviceOtaTaskStatusResponse
     *
     * @param SetDeviceOtaTaskStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetDeviceOtaTaskStatusResponse
     */
    public function setDeviceOtaTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operationStatus) {
            @$body['OperationStatus'] = $request->operationStatus;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetDeviceOtaTaskStatus',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDeviceOtaTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 租户设置设备ota任务的状态
     *
     * @param request - SetDeviceOtaTaskStatusRequest
     *
     * @returns SetDeviceOtaTaskStatusResponse
     *
     * @param SetDeviceOtaTaskStatusRequest $request
     *
     * @return SetDeviceOtaTaskStatusResponse
     */
    public function setDeviceOtaTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeviceOtaTaskStatusWithOptions($request, $runtime);
    }

    /**
     * 解绑免账号登录用户.
     *
     * @param request - UnbindAccountLessLoginUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindAccountLessLoginUserResponse
     *
     * @param UnbindAccountLessLoginUserRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UnbindAccountLessLoginUserResponse
     */
    public function unbindAccountLessLoginUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnbindAccountLessLoginUser',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindAccountLessLoginUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑免账号登录用户.
     *
     * @param request - UnbindAccountLessLoginUserRequest
     *
     * @returns UnbindAccountLessLoginUserResponse
     *
     * @param UnbindAccountLessLoginUserRequest $request
     *
     * @return UnbindAccountLessLoginUserResponse
     */
    public function unbindAccountLessLoginUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAccountLessLoginUserWithOptions($request, $runtime);
    }

    /**
     * 解绑设备座位.
     *
     * @param tmpReq - UnbindDeviceSeatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindDeviceSeatsResponse
     *
     * @param UnbindDeviceSeatsRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UnbindDeviceSeatsResponse
     */
    public function unbindDeviceSeatsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UnbindDeviceSeatsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->serialNoList) {
            $request->serialNoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serialNoList, 'SerialNoList', 'json');
        }

        $body = [];
        if (null !== $request->serialNoListShrink) {
            @$body['SerialNoList'] = $request->serialNoListShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnbindDeviceSeats',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindDeviceSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑设备座位.
     *
     * @param request - UnbindDeviceSeatsRequest
     *
     * @returns UnbindDeviceSeatsResponse
     *
     * @param UnbindDeviceSeatsRequest $request
     *
     * @return UnbindDeviceSeatsResponse
     */
    public function unbindDeviceSeats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDeviceSeatsWithOptions($request, $runtime);
    }

    /**
     * 解绑免密登录用户.
     *
     * @param request - UnbindPasswordFreeLoginUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindPasswordFreeLoginUserResponse
     *
     * @param UnbindPasswordFreeLoginUserRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UnbindPasswordFreeLoginUserResponse
     */
    public function unbindPasswordFreeLoginUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mainBizType) {
            @$body['MainBizType'] = $request->mainBizType;
        }

        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnbindPasswordFreeLoginUser',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindPasswordFreeLoginUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑免密登录用户.
     *
     * @param request - UnbindPasswordFreeLoginUserRequest
     *
     * @returns UnbindPasswordFreeLoginUserResponse
     *
     * @param UnbindPasswordFreeLoginUserRequest $request
     *
     * @return UnbindPasswordFreeLoginUserResponse
     */
    public function unbindPasswordFreeLoginUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindPasswordFreeLoginUserWithOptions($request, $runtime);
    }

    /**
     * 更新设备别名.
     *
     * @param request - UpdateAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAliasResponse
     *
     * @param UpdateAliasRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAliasResponse
     */
    public function updateAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['Alias'] = $request->alias;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlias',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新设备别名.
     *
     * @param request - UpdateAliasRequest
     *
     * @returns UpdateAliasResponse
     *
     * @param UpdateAliasRequest $request
     *
     * @return UpdateAliasResponse
     */
    public function updateAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAliasWithOptions($request, $runtime);
    }

    /**
     * 批量更新设备绑定的终端用户.
     *
     * @param request - UpdateDeviceBindedEndUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeviceBindedEndUserResponse
     *
     * @param UpdateDeviceBindedEndUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateDeviceBindedEndUserResponse
     */
    public function updateDeviceBindedEndUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->sourceAdEndUsers) {
            @$body['SourceAdEndUsers'] = $request->sourceAdEndUsers;
        }

        if (null !== $request->sourceEndUserIds) {
            @$body['SourceEndUserIds'] = $request->sourceEndUserIds;
        }

        if (null !== $request->targetAdEndUsers) {
            @$body['TargetAdEndUsers'] = $request->targetAdEndUsers;
        }

        if (null !== $request->targetEndUserIds) {
            @$body['TargetEndUserIds'] = $request->targetEndUserIds;
        }

        if (null !== $request->userType) {
            @$body['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeviceBindedEndUser',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDeviceBindedEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量更新设备绑定的终端用户.
     *
     * @param request - UpdateDeviceBindedEndUserRequest
     *
     * @returns UpdateDeviceBindedEndUserResponse
     *
     * @param UpdateDeviceBindedEndUserRequest $request
     *
     * @return UpdateDeviceBindedEndUserResponse
     */
    public function updateDeviceBindedEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceBindedEndUserWithOptions($request, $runtime);
    }

    /**
     * 修改标签.
     *
     * @param request - UpdateLabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLabelResponse
     *
     * @param UpdateLabelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateLabelResponse
     */
    public function updateLabelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labelContent) {
            @$body['LabelContent'] = $request->labelContent;
        }

        if (null !== $request->labelId) {
            @$body['LabelId'] = $request->labelId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLabel',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改标签.
     *
     * @param request - UpdateLabelRequest
     *
     * @returns UpdateLabelResponse
     *
     * @param UpdateLabelRequest $request
     *
     * @return UpdateLabelResponse
     */
    public function updateLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLabelWithOptions($request, $runtime);
    }

    /**
     * 修改终端策略.
     *
     * @param request - UpdateTerminalPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTerminalPolicyResponse
     *
     * @param UpdateTerminalPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateTerminalPolicyResponse
     */
    public function updateTerminalPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allowManualLockScreen) {
            @$body['AllowManualLockScreen'] = $request->allowManualLockScreen;
        }

        if (null !== $request->backgroundModeTitle) {
            @$body['BackgroundModeTitle'] = $request->backgroundModeTitle;
        }

        if (null !== $request->customScreenCastRes) {
            @$body['CustomScreenCastRes'] = $request->customScreenCastRes;
        }

        if (null !== $request->displayLayout) {
            @$body['DisplayLayout'] = $request->displayLayout;
        }

        if (null !== $request->displayResolution) {
            @$body['DisplayResolution'] = $request->displayResolution;
        }

        if (null !== $request->displayScaleRatio) {
            @$body['DisplayScaleRatio'] = $request->displayScaleRatio;
        }

        if (null !== $request->enableAutoLockScreen) {
            @$body['EnableAutoLockScreen'] = $request->enableAutoLockScreen;
        }

        if (null !== $request->enableAutoLogin) {
            @$body['EnableAutoLogin'] = $request->enableAutoLogin;
        }

        if (null !== $request->enableBackgroundMode) {
            @$body['EnableBackgroundMode'] = $request->enableBackgroundMode;
        }

        if (null !== $request->enableBluetooth) {
            @$body['EnableBluetooth'] = $request->enableBluetooth;
        }

        if (null !== $request->enableControlPanel) {
            @$body['EnableControlPanel'] = $request->enableControlPanel;
        }

        if (null !== $request->enableImmersiveMode) {
            @$body['EnableImmersiveMode'] = $request->enableImmersiveMode;
        }

        if (null !== $request->enableLockScreenHotKey) {
            @$body['EnableLockScreenHotKey'] = $request->enableLockScreenHotKey;
        }

        if (null !== $request->enableModifyPassword) {
            @$body['EnableModifyPassword'] = $request->enableModifyPassword;
        }

        if (null !== $request->enableScanLogin) {
            @$body['EnableScanLogin'] = $request->enableScanLogin;
        }

        if (null !== $request->enableScheduledReboot) {
            @$body['EnableScheduledReboot'] = $request->enableScheduledReboot;
        }

        if (null !== $request->enableScheduledShutdown) {
            @$body['EnableScheduledShutdown'] = $request->enableScheduledShutdown;
        }

        if (null !== $request->enableSmsLogin) {
            @$body['EnableSmsLogin'] = $request->enableSmsLogin;
        }

        if (null !== $request->enableSwitchPersonal) {
            @$body['EnableSwitchPersonal'] = $request->enableSwitchPersonal;
        }

        if (null !== $request->enableWlan) {
            @$body['EnableWlan'] = $request->enableWlan;
        }

        if (null !== $request->followCloudReboot) {
            @$body['FollowCloudReboot'] = $request->followCloudReboot;
        }

        if (null !== $request->followCloudShutdown) {
            @$body['FollowCloudShutdown'] = $request->followCloudShutdown;
        }

        if (null !== $request->followTerminalReboot) {
            @$body['FollowTerminalReboot'] = $request->followTerminalReboot;
        }

        if (null !== $request->followTerminalShutdown) {
            @$body['FollowTerminalShutdown'] = $request->followTerminalShutdown;
        }

        if (null !== $request->forceSetPinCode) {
            @$body['ForceSetPinCode'] = $request->forceSetPinCode;
        }

        if (null !== $request->idleTimeout) {
            @$body['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->idleTimeoutAction) {
            @$body['IdleTimeoutAction'] = $request->idleTimeoutAction;
        }

        if (null !== $request->lockScreenPasswordRequired) {
            @$body['LockScreenPasswordRequired'] = $request->lockScreenPasswordRequired;
        }

        if (null !== $request->lockScreenTimeout) {
            @$body['LockScreenTimeout'] = $request->lockScreenTimeout;
        }

        if (null !== $request->mainBizType) {
            @$body['MainBizType'] = $request->mainBizType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->powerButtonDefine) {
            @$body['PowerButtonDefine'] = $request->powerButtonDefine;
        }

        if (null !== $request->powerButtonDefineForAs) {
            @$body['PowerButtonDefineForAs'] = $request->powerButtonDefineForAs;
        }

        if (null !== $request->powerButtonDefineForNs) {
            @$body['PowerButtonDefineForNs'] = $request->powerButtonDefineForNs;
        }

        if (null !== $request->powerOnBehavior) {
            @$body['PowerOnBehavior'] = $request->powerOnBehavior;
        }

        if (null !== $request->runningMode) {
            @$body['RunningMode'] = $request->runningMode;
        }

        if (null !== $request->scheduledReboot) {
            @$body['ScheduledReboot'] = $request->scheduledReboot;
        }

        if (null !== $request->scheduledShutdown) {
            @$body['ScheduledShutdown'] = $request->scheduledShutdown;
        }

        $bodyFlat = [];
        if (null !== $request->screenCastResPaths) {
            @$bodyFlat['ScreenCastResPaths'] = $request->screenCastResPaths;
        }

        if (null !== $request->settingLock) {
            @$body['SettingLock'] = $request->settingLock;
        }

        if (null !== $request->terminalPolicyId) {
            @$body['TerminalPolicyId'] = $request->terminalPolicyId;
        }

        if (null !== $request->unlockMethod) {
            @$body['UnlockMethod'] = $request->unlockMethod;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTerminalPolicy',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTerminalPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改终端策略.
     *
     * @param request - UpdateTerminalPolicyRequest
     *
     * @returns UpdateTerminalPolicyResponse
     *
     * @param UpdateTerminalPolicyRequest $request
     *
     * @return UpdateTerminalPolicyResponse
     */
    public function updateTerminalPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTerminalPolicyWithOptions($request, $runtime);
    }
}
