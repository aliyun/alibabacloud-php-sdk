<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateAliasRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateAliasResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateDeviceBindedEndUserRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateDeviceBindedEndUserResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateLabelRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateLabelResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateTerminalPolicyRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateTerminalPolicyResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Wyota extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 设备激活
     *  *
     * @param ActivateDeviceRequest $request ActivateDeviceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ActivateDeviceResponse ActivateDeviceResponse
     */
    public function activateDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ActivateDevice',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设备激活
     *  *
     * @param ActivateDeviceRequest $request ActivateDeviceRequest
     *
     * @return ActivateDeviceResponse ActivateDeviceResponse
     */
    public function activateDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateDeviceWithOptions($request, $runtime);
    }

    /**
     * @summary 通过序列号添加设备
     *  *
     * @param AddDeviceFromSNRequest $request AddDeviceFromSNRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDeviceFromSNResponse AddDeviceFromSNResponse
     */
    public function addDeviceFromSNWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alias)) {
            $body['Alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->customProperty)) {
            $body['CustomProperty'] = $request->customProperty;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->labelContents)) {
            $body['LabelContents'] = $request->labelContents;
        }
        if (!Utils::isUnset($request->secureNetworkType)) {
            $body['SecureNetworkType'] = $request->secureNetworkType;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDeviceFromSN',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDeviceFromSNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过序列号添加设备
     *  *
     * @param AddDeviceFromSNRequest $request AddDeviceFromSNRequest
     *
     * @return AddDeviceFromSNResponse AddDeviceFromSNResponse
     */
    public function addDeviceFromSN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceFromSNWithOptions($request, $runtime);
    }

    /**
     * @summary 新增设备座位和标签
     *  *
     * @param AddDeviceSeatsAndLabelsRequest $request AddDeviceSeatsAndLabelsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDeviceSeatsAndLabelsResponse AddDeviceSeatsAndLabelsResponse
     */
    public function addDeviceSeatsAndLabelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->isUnique)) {
            $body['IsUnique'] = $request->isUnique;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->labelList)) {
            $body['LabelList'] = $request->labelList;
        }
        if (!Utils::isUnset($request->seatName)) {
            $body['SeatName'] = $request->seatName;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDeviceSeatsAndLabels',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDeviceSeatsAndLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增设备座位和标签
     *  *
     * @param AddDeviceSeatsAndLabelsRequest $request AddDeviceSeatsAndLabelsRequest
     *
     * @return AddDeviceSeatsAndLabelsResponse AddDeviceSeatsAndLabelsResponse
     */
    public function addDeviceSeatsAndLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceSeatsAndLabelsWithOptions($request, $runtime);
    }

    /**
     * @summary 通过CSV文件添加设备
     *  *
     * @param AddDevicesFromCSVRequest $request AddDevicesFromCSVRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDevicesFromCSVResponse AddDevicesFromCSVResponse
     */
    public function addDevicesFromCSVWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileType)) {
            $body['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->seatCol)) {
            $body['SeatCol'] = $request->seatCol;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteName)) {
            $body['SiteName'] = $request->siteName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDevicesFromCSV',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDevicesFromCSVResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过CSV文件添加设备
     *  *
     * @param AddDevicesFromCSVRequest $request AddDevicesFromCSVRequest
     *
     * @return AddDevicesFromCSVResponse AddDevicesFromCSVResponse
     */
    public function addDevicesFromCSV($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDevicesFromCSVWithOptions($request, $runtime);
    }

    /**
     * @summary 添加标签
     *  *
     * @param AddLabelsRequest $request AddLabelsRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddLabelsResponse AddLabelsResponse
     */
    public function addLabelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelContents)) {
            $body['LabelContents'] = $request->labelContents;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddLabels',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加标签
     *  *
     * @param AddLabelsRequest $request AddLabelsRequest
     *
     * @return AddLabelsResponse AddLabelsResponse
     */
    public function addLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLabelsWithOptions($request, $runtime);
    }

    /**
     * @summary 新增或更新设备工位
     *  *
     * @param AddOrUpdateDeviceSeatsRequest $request AddOrUpdateDeviceSeatsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AddOrUpdateDeviceSeatsResponse AddOrUpdateDeviceSeatsResponse
     */
    public function addOrUpdateDeviceSeatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->userCustomId)) {
            $body['UserCustomId'] = $request->userCustomId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddOrUpdateDeviceSeats',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddOrUpdateDeviceSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增或更新设备工位
     *  *
     * @param AddOrUpdateDeviceSeatsRequest $request AddOrUpdateDeviceSeatsRequest
     *
     * @return AddOrUpdateDeviceSeatsResponse AddOrUpdateDeviceSeatsResponse
     */
    public function addOrUpdateDeviceSeats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addOrUpdateDeviceSeatsWithOptions($request, $runtime);
    }

    /**
     * @summary 添加终端
     *  *
     * @param AddTerminalRequest $request AddTerminalRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTerminalResponse AddTerminalResponse
     */
    public function addTerminalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alias)) {
            $body['Alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $body['SerialNumber'] = $request->serialNumber;
        }
        if (!Utils::isUnset($request->terminalGroupId)) {
            $body['TerminalGroupId'] = $request->terminalGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddTerminal',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加终端
     *  *
     * @param AddTerminalRequest $request AddTerminalRequest
     *
     * @return AddTerminalResponse AddTerminalResponse
     */
    public function addTerminal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTerminalWithOptions($request, $runtime);
    }

    /**
     * @summary 设备绑定终端用户
     *  *
     * @param AttachEndUsersRequest $request AttachEndUsersRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachEndUsersResponse AttachEndUsersResponse
     */
    public function attachEndUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endUserIds)) {
            $body['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachEndUsers',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachEndUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设备绑定终端用户
     *  *
     * @param AttachEndUsersRequest $request AttachEndUsersRequest
     *
     * @return AttachEndUsersResponse AttachEndUsersResponse
     */
    public function attachEndUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEndUsersWithOptions($request, $runtime);
    }

    /**
     * @summary 设备绑定标签
     *  *
     * @param AttachLabelRequest $request AttachLabelRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachLabelResponse AttachLabelResponse
     */
    public function attachLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelContent)) {
            $body['LabelContent'] = $request->labelContent;
        }
        if (!Utils::isUnset($request->labelId)) {
            $body['LabelId'] = $request->labelId;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachLabel',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设备绑定标签
     *  *
     * @param AttachLabelRequest $request AttachLabelRequest
     *
     * @return AttachLabelResponse AttachLabelResponse
     */
    public function attachLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachLabelWithOptions($request, $runtime);
    }

    /**
     * @summary 批量绑定标签
     *  *
     * @param AttachLabelsRequest $request AttachLabelsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachLabelsResponse AttachLabelsResponse
     */
    public function attachLabelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelIds)) {
            $body['LabelIds'] = $request->labelIds;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->serialNoList)) {
            $body['SerialNoList'] = $request->serialNoList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachLabels',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量绑定标签
     *  *
     * @param AttachLabelsRequest $request AttachLabelsRequest
     *
     * @return AttachLabelsResponse AttachLabelsResponse
     */
    public function attachLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachLabelsWithOptions($request, $runtime);
    }

    /**
     * @summary 绑定免账号登录用户
     *  *
     * @param BindAccountLessLoginUserRequest $request BindAccountLessLoginUserRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return BindAccountLessLoginUserResponse BindAccountLessLoginUserResponse
     */
    public function bindAccountLessLoginUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $body['SerialNumber'] = $request->serialNumber;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BindAccountLessLoginUser',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindAccountLessLoginUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 绑定免账号登录用户
     *  *
     * @param BindAccountLessLoginUserRequest $request BindAccountLessLoginUserRequest
     *
     * @return BindAccountLessLoginUserResponse BindAccountLessLoginUserResponse
     */
    public function bindAccountLessLoginUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAccountLessLoginUserWithOptions($request, $runtime);
    }

    /**
     * @summary 绑定免账号登录用户
     *  *
     * @param BindPasswordFreeLoginUserRequest $request BindPasswordFreeLoginUserRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return BindPasswordFreeLoginUserResponse BindPasswordFreeLoginUserResponse
     */
    public function bindPasswordFreeLoginUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $body['SerialNumber'] = $request->serialNumber;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BindPasswordFreeLoginUser',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindPasswordFreeLoginUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 绑定免账号登录用户
     *  *
     * @param BindPasswordFreeLoginUserRequest $request BindPasswordFreeLoginUserRequest
     *
     * @return BindPasswordFreeLoginUserResponse BindPasswordFreeLoginUserResponse
     */
    public function bindPasswordFreeLoginUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindPasswordFreeLoginUserWithOptions($request, $runtime);
    }

    /**
     * @summary 检查uuid有效性
     *  *
     * @param CheckUuidValidRequest $request CheckUuidValidRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckUuidValidResponse CheckUuidValidResponse
     */
    public function checkUuidValidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bluetooth)) {
            $body['Bluetooth'] = $request->bluetooth;
        }
        if (!Utils::isUnset($request->buildId)) {
            $body['BuildId'] = $request->buildId;
        }
        if (!Utils::isUnset($request->chipId)) {
            $body['ChipId'] = $request->chipId;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->customId)) {
            $body['CustomId'] = $request->customId;
        }
        if (!Utils::isUnset($request->etherMac)) {
            $body['EtherMac'] = $request->etherMac;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->wlan)) {
            $body['Wlan'] = $request->wlan;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckUuidValid',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckUuidValidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查uuid有效性
     *  *
     * @param CheckUuidValidRequest $request CheckUuidValidRequest
     *
     * @return CheckUuidValidResponse CheckUuidValidResponse
     */
    public function checkUuidValid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUuidValidWithOptions($request, $runtime);
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateAppOtaTaskRequest $request CreateAppOtaTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppOtaTaskResponse CreateAppOtaTaskResponse
     */
    public function createAppOtaTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersionUid)) {
            $query['AppVersionUid'] = $request->appVersionUid;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->clientIdList)) {
            $query['ClientIdList'] = $request->clientIdList;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->creator)) {
            $query['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->forceUpgrade)) {
            $query['ForceUpgrade'] = $request->forceUpgrade;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppOtaTask',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateAppOtaTaskRequest $request CreateAppOtaTaskRequest
     *
     * @return CreateAppOtaTaskResponse CreateAppOtaTaskResponse
     */
    public function createAppOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppOtaTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建版本
     *  *
     * @param CreateAppOtaVersionRequest $request CreateAppOtaVersionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppOtaVersionResponse CreateAppOtaVersionResponse
     */
    public function createAppOtaVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->arch)) {
            $query['Arch'] = $request->arch;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->creator)) {
            $query['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->downloadUrl)) {
            $query['DownloadUrl'] = $request->downloadUrl;
        }
        if (!Utils::isUnset($request->md5)) {
            $query['Md5'] = $request->md5;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->otaType)) {
            $query['OtaType'] = $request->otaType;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->releaseNote)) {
            $query['ReleaseNote'] = $request->releaseNote;
        }
        if (!Utils::isUnset($request->releaseNoteEn)) {
            $query['ReleaseNoteEn'] = $request->releaseNoteEn;
        }
        if (!Utils::isUnset($request->releaseNoteJp)) {
            $query['ReleaseNoteJp'] = $request->releaseNoteJp;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->snapshotRegionId)) {
            $query['SnapshotRegionId'] = $request->snapshotRegionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->versionType)) {
            $query['VersionType'] = $request->versionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppOtaVersion',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppOtaVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建版本
     *  *
     * @param CreateAppOtaVersionRequest $request CreateAppOtaVersionRequest
     *
     * @return CreateAppOtaVersionResponse CreateAppOtaVersionResponse
     */
    public function createAppOtaVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppOtaVersionWithOptions($request, $runtime);
    }

    /**
     * @summary 删除版本
     *  *
     * @param DeleteAppOtaVersionsRequest $request DeleteAppOtaVersionsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppOtaVersionsResponse DeleteAppOtaVersionsResponse
     */
    public function deleteAppOtaVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->versionUidList)) {
            $query['VersionUidList'] = $request->versionUidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppOtaVersions',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppOtaVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除版本
     *  *
     * @param DeleteAppOtaVersionsRequest $request DeleteAppOtaVersionsRequest
     *
     * @return DeleteAppOtaVersionsResponse DeleteAppOtaVersionsResponse
     */
    public function deleteAppOtaVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppOtaVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary 删除设备
     *  *
     * @param DeleteDevicesRequest $request DeleteDevicesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDevicesResponse DeleteDevicesResponse
     */
    public function deleteDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $body = [];
        if (!Utils::isUnset($request->force)) {
            $body['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->serialNos)) {
            $body['SerialNos'] = $request->serialNos;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDevices',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除设备
     *  *
     * @param DeleteDevicesRequest $request DeleteDevicesRequest
     *
     * @return DeleteDevicesResponse DeleteDevicesResponse
     */
    public function deleteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevicesWithOptions($request, $runtime);
    }

    /**
     * @summary 删除标签
     *  *
     * @param DeleteLabelRequest $request DeleteLabelRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLabelResponse DeleteLabelResponse
     */
    public function deleteLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->force)) {
            $body['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->labelContent)) {
            $body['LabelContent'] = $request->labelContent;
        }
        if (!Utils::isUnset($request->labelId)) {
            $body['LabelId'] = $request->labelId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLabel',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除标签
     *  *
     * @param DeleteLabelRequest $request DeleteLabelRequest
     *
     * @return DeleteLabelResponse DeleteLabelResponse
     */
    public function deleteLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLabelWithOptions($request, $runtime);
    }

    /**
     * @summary 查询版本
     *  *
     * @param DescribeAppOtaVersionRequest $request DescribeAppOtaVersionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppOtaVersionResponse DescribeAppOtaVersionResponse
     */
    public function describeAppOtaVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->creator)) {
            $query['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->versionUid)) {
            $query['VersionUid'] = $request->versionUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppOtaVersion',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppOtaVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询版本
     *  *
     * @param DescribeAppOtaVersionRequest $request DescribeAppOtaVersionRequest
     *
     * @return DescribeAppOtaVersionResponse DescribeAppOtaVersionResponse
     */
    public function describeAppOtaVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppOtaVersionWithOptions($request, $runtime);
    }

    /**
     * @summary 查询设备座位
     *  *
     * @param DescribeDeviceSeatsRequest $request DescribeDeviceSeatsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeviceSeatsResponse DescribeDeviceSeatsResponse
     */
    public function describeDeviceSeatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->serialNoList)) {
            $body['SerialNoList'] = $request->serialNoList;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeviceSeats',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeviceSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询设备座位
     *  *
     * @param DescribeDeviceSeatsRequest $request DescribeDeviceSeatsRequest
     *
     * @return DescribeDeviceSeatsResponse DescribeDeviceSeatsResponse
     */
    public function describeDeviceSeats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceSeatsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询版本信息
     *  *
     * @param DescribeDeviceVersionDetailRequest $request DescribeDeviceVersionDetailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeviceVersionDetailResponse DescribeDeviceVersionDetailResponse
     */
    public function describeDeviceVersionDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->networkType)) {
            $body['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->versionName)) {
            $body['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeviceVersionDetail',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeviceVersionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询版本信息
     *  *
     * @param DescribeDeviceVersionDetailRequest $request DescribeDeviceVersionDetailRequest
     *
     * @return DescribeDeviceVersionDetailResponse DescribeDeviceVersionDetailResponse
     */
    public function describeDeviceVersionDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceVersionDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查询设备标签数量
     *  *
     * @param DescribeSnLabelCountsRequest $request DescribeSnLabelCountsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSnLabelCountsResponse DescribeSnLabelCountsResponse
     */
    public function describeSnLabelCountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelList)) {
            $body['LabelList'] = $request->labelList;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->zoneName)) {
            $body['ZoneName'] = $request->zoneName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSnLabelCounts',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSnLabelCountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询设备标签数量
     *  *
     * @param DescribeSnLabelCountsRequest $request DescribeSnLabelCountsRequest
     *
     * @return DescribeSnLabelCountsResponse DescribeSnLabelCountsResponse
     */
    public function describeSnLabelCounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnLabelCountsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询工作区域
     *  *
     * @param DescribeWorkZonesRequest $request DescribeWorkZonesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWorkZonesResponse DescribeWorkZonesResponse
     */
    public function describeWorkZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->zoneIdList)) {
            $body['ZoneIdList'] = $request->zoneIdList;
        }
        if (!Utils::isUnset($request->zoneNameList)) {
            $body['ZoneNameList'] = $request->zoneNameList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeWorkZones',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWorkZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询工作区域
     *  *
     * @param DescribeWorkZonesRequest $request DescribeWorkZonesRequest
     *
     * @return DescribeWorkZonesResponse DescribeWorkZonesResponse
     */
    public function describeWorkZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWorkZonesWithOptions($request, $runtime);
    }

    /**
     * @summary 设备解绑终端用户
     *  *
     * @param DetachEndUsersRequest $request DetachEndUsersRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachEndUsersResponse DetachEndUsersResponse
     */
    public function detachEndUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endUserIds)) {
            $body['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetachEndUsers',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachEndUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设备解绑终端用户
     *  *
     * @param DetachEndUsersRequest $request DetachEndUsersRequest
     *
     * @return DetachEndUsersResponse DetachEndUsersResponse
     */
    public function detachEndUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachEndUsersWithOptions($request, $runtime);
    }

    /**
     * @summary 设备绑定标签
     *  *
     * @param DetachLabelRequest $request DetachLabelRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachLabelResponse DetachLabelResponse
     */
    public function detachLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelContent)) {
            $body['LabelContent'] = $request->labelContent;
        }
        if (!Utils::isUnset($request->labelId)) {
            $body['LabelId'] = $request->labelId;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetachLabel',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设备绑定标签
     *  *
     * @param DetachLabelRequest $request DetachLabelRequest
     *
     * @return DetachLabelResponse DetachLabelResponse
     */
    public function detachLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachLabelWithOptions($request, $runtime);
    }

    /**
     * @summary 批量解绑标签
     *  *
     * @param DetachLabelsRequest $request DetachLabelsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachLabelsResponse DetachLabelsResponse
     */
    public function detachLabelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelIds)) {
            $body['LabelIds'] = $request->labelIds;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->serialNoList)) {
            $body['SerialNoList'] = $request->serialNoList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetachLabels',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量解绑标签
     *  *
     * @param DetachLabelsRequest $request DetachLabelsRequest
     *
     * @return DetachLabelsResponse DetachLabelsResponse
     */
    public function detachLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachLabelsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用户上传的文件
     *  *
     * @param GenerateOssUrlRequest $request GenerateOssUrlRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateOssUrlResponse GenerateOssUrlResponse
     */
    public function generateOssUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->objectNameList)) {
            $body['ObjectNameList'] = $request->objectNameList;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateOssUrl',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateOssUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户上传的文件
     *  *
     * @param GenerateOssUrlRequest $request GenerateOssUrlRequest
     *
     * @return GenerateOssUrlResponse GenerateOssUrlResponse
     */
    public function generateOssUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateOssUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 获取应用最新版本
     *  *
     * @param GetAppOtaLatestVersionRequest $request GetAppOtaLatestVersionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppOtaLatestVersionResponse GetAppOtaLatestVersionResponse
     */
    public function getAppOtaLatestVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseVersion)) {
            $query['BaseVersion'] = $request->baseVersion;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->clientUid)) {
            $query['ClientUid'] = $request->clientUid;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppOtaLatestVersion',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppOtaLatestVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取应用最新版本
     *  *
     * @param GetAppOtaLatestVersionRequest $request GetAppOtaLatestVersionRequest
     *
     * @return GetAppOtaLatestVersionResponse GetAppOtaLatestVersionResponse
     */
    public function getAppOtaLatestVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppOtaLatestVersionWithOptions($request, $runtime);
    }

    /**
     * @summary 获取设备配置
     *  *
     * @param GetDeviceConfigsRequest $request GetDeviceConfigsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeviceConfigsResponse GetDeviceConfigsResponse
     */
    public function getDeviceConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->networkType)) {
            $body['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->urclVersion)) {
            $body['UrclVersion'] = $request->urclVersion;
        }
        if (!Utils::isUnset($request->userCustomId)) {
            $body['UserCustomId'] = $request->userCustomId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceConfigs',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取设备配置
     *  *
     * @param GetDeviceConfigsRequest $request GetDeviceConfigsRequest
     *
     * @return GetDeviceConfigsResponse GetDeviceConfigsResponse
     */
    public function getDeviceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取是否开启自动升级状态
     *  *
     * @param GetDeviceOtaAutoStatusRequest $request GetDeviceOtaAutoStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeviceOtaAutoStatusResponse GetDeviceOtaAutoStatusResponse
     */
    public function getDeviceOtaAutoStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientType)) {
            $body['ClientType'] = $request->clientType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceOtaAutoStatus',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceOtaAutoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取是否开启自动升级状态
     *  *
     * @param GetDeviceOtaAutoStatusRequest $request GetDeviceOtaAutoStatusRequest
     *
     * @return GetDeviceOtaAutoStatusResponse GetDeviceOtaAutoStatusResponse
     */
    public function getDeviceOtaAutoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceOtaAutoStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 获取设备升级信息
     *  *
     * @param GetDeviceOtaInfoRequest $request GetDeviceOtaInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeviceOtaInfoResponse GetDeviceOtaInfoResponse
     */
    public function getDeviceOtaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baseVersion)) {
            $body['BaseVersion'] = $request->baseVersion;
        }
        if (!Utils::isUnset($request->channel)) {
            $body['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->networkType)) {
            $body['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->osVersion)) {
            $body['OsVersion'] = $request->osVersion;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->targetVersionType)) {
            $body['TargetVersionType'] = $request->targetVersionType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceOtaInfo',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceOtaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取设备升级信息
     *  *
     * @param GetDeviceOtaInfoRequest $request GetDeviceOtaInfoRequest
     *
     * @return GetDeviceOtaInfoResponse GetDeviceOtaInfoResponse
     */
    public function getDeviceOtaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceOtaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取设备升级信息
     *  *
     * @param GetDeviceOtaInfoTestRequest $request GetDeviceOtaInfoTestRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeviceOtaInfoTestResponse GetDeviceOtaInfoTestResponse
     */
    public function getDeviceOtaInfoTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baseVersion)) {
            $body['BaseVersion'] = $request->baseVersion;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceOtaInfoTest',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceOtaInfoTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取设备升级信息
     *  *
     * @param GetDeviceOtaInfoTestRequest $request GetDeviceOtaInfoTestRequest
     *
     * @return GetDeviceOtaInfoTestResponse GetDeviceOtaInfoTestResponse
     */
    public function getDeviceOtaInfoTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceOtaInfoTestWithOptions($request, $runtime);
    }

    /**
     * @summary 获取租户任务版本信息
     *  *
     * @param GetDeviceOtaTaskVersionInfoRequest $request GetDeviceOtaTaskVersionInfoRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeviceOtaTaskVersionInfoResponse GetDeviceOtaTaskVersionInfoResponse
     */
    public function getDeviceOtaTaskVersionInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceOtaTaskVersionInfo',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceOtaTaskVersionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取租户任务版本信息
     *  *
     * @param GetDeviceOtaTaskVersionInfoRequest $request GetDeviceOtaTaskVersionInfoRequest
     *
     * @return GetDeviceOtaTaskVersionInfoResponse GetDeviceOtaTaskVersionInfoResponse
     */
    public function getDeviceOtaTaskVersionInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceOtaTaskVersionInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获得设备升级详情
     *  *
     * @param GetDeviceUpgradeStatusRequest $request GetDeviceUpgradeStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeviceUpgradeStatusResponse GetDeviceUpgradeStatusResponse
     */
    public function getDeviceUpgradeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->clientUid)) {
            $query['ClientUid'] = $request->clientUid;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->taskUid)) {
            $query['TaskUid'] = $request->taskUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceUpgradeStatus',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得设备升级详情
     *  *
     * @param GetDeviceUpgradeStatusRequest $request GetDeviceUpgradeStatusRequest
     *
     * @return GetDeviceUpgradeStatusResponse GetDeviceUpgradeStatusResponse
     */
    public function getDeviceUpgradeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceUpgradeStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 导出设备工位列表
     *  *
     * @param GetExportDeviceInfoOssUrlRequest $request GetExportDeviceInfoOssUrlRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExportDeviceInfoOssUrlResponse GetExportDeviceInfoOssUrlResponse
     */
    public function getExportDeviceInfoOssUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->zoneName)) {
            $body['ZoneName'] = $request->zoneName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetExportDeviceInfoOssUrl',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExportDeviceInfoOssUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出设备工位列表
     *  *
     * @param GetExportDeviceInfoOssUrlRequest $request GetExportDeviceInfoOssUrlRequest
     *
     * @return GetExportDeviceInfoOssUrlResponse GetExportDeviceInfoOssUrlResponse
     */
    public function getExportDeviceInfoOssUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExportDeviceInfoOssUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 查询OSS配置信息
     *  *
     * @param GetFbOssConfigRequest $request GetFbOssConfigRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFbOssConfigResponse GetFbOssConfigResponse
     */
    public function getFbOssConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dirPrefix)) {
            $body['DirPrefix'] = $request->dirPrefix;
        }
        if (!Utils::isUnset($request->isDedicatedLine)) {
            $body['IsDedicatedLine'] = $request->isDedicatedLine;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFbOssConfig',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFbOssConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询OSS配置信息
     *  *
     * @param GetFbOssConfigRequest $request GetFbOssConfigRequest
     *
     * @return GetFbOssConfigResponse GetFbOssConfigResponse
     */
    public function getFbOssConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFbOssConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 获取OSS配置
     *  *
     * @param GetOssConfigRequest $request GetOssConfigRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssConfigResponse GetOssConfigResponse
     */
    public function getOssConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssConfig',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取OSS配置
     *  *
     * @param GetOssConfigRequest $request GetOssConfigRequest
     *
     * @return GetOssConfigResponse GetOssConfigResponse
     */
    public function getOssConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 获取版本下载地址
     *  *
     * @param GetVersionDownloadUrlRequest $request GetVersionDownloadUrlRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVersionDownloadUrlResponse GetVersionDownloadUrlResponse
     */
    public function getVersionDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVersionDownloadUrl',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVersionDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取版本下载地址
     *  *
     * @param GetVersionDownloadUrlRequest $request GetVersionDownloadUrlRequest
     *
     * @return GetVersionDownloadUrlResponse GetVersionDownloadUrlResponse
     */
    public function getVersionDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVersionDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 获取租户ota任务
     *  *
     * @param ListDeviceOtaTaskByTenantRequest $request ListDeviceOtaTaskByTenantRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeviceOtaTaskByTenantResponse ListDeviceOtaTaskByTenantResponse
     */
    public function listDeviceOtaTaskByTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDeviceOtaTaskByTenant',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeviceOtaTaskByTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取租户ota任务
     *  *
     * @param ListDeviceOtaTaskByTenantRequest $request ListDeviceOtaTaskByTenantRequest
     *
     * @return ListDeviceOtaTaskByTenantResponse ListDeviceOtaTaskByTenantResponse
     */
    public function listDeviceOtaTaskByTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceOtaTaskByTenantWithOptions($request, $runtime);
    }

    /**
     * @summary 查询设备座位列表
     *  *
     * @param ListDeviceSeatsRequest $request ListDeviceSeatsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeviceSeatsResponse ListDeviceSeatsResponse
     */
    public function listDeviceSeatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->seatNo)) {
            $body['SeatNo'] = $request->seatNo;
        }
        if (!Utils::isUnset($request->serialNoList)) {
            $body['SerialNoList'] = $request->serialNoList;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDeviceSeats',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeviceSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询设备座位列表
     *  *
     * @param ListDeviceSeatsRequest $request ListDeviceSeatsRequest
     *
     * @return ListDeviceSeatsResponse ListDeviceSeatsResponse
     */
    public function listDeviceSeats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceSeatsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取设备列表
     *  *
     * @param ListDevicesRequest $request ListDevicesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDevicesResponse ListDevicesResponse
     */
    public function listDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->deviceIpV4)) {
            $query['DeviceIpV4'] = $request->deviceIpV4;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->deviceOS)) {
            $query['DeviceOS'] = $request->deviceOS;
        }
        if (!Utils::isUnset($request->devicePlatform)) {
            $query['DevicePlatform'] = $request->devicePlatform;
        }
        if (!Utils::isUnset($request->locationInfo)) {
            $query['LocationInfo'] = $request->locationInfo;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $body = [];
        if (!Utils::isUnset($request->alias)) {
            $body['Alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->buildId)) {
            $body['BuildId'] = $request->buildId;
        }
        if (!Utils::isUnset($request->deviceGroupId)) {
            $body['DeviceGroupId'] = $request->deviceGroupId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->labelContent)) {
            $body['LabelContent'] = $request->labelContent;
        }
        if (!Utils::isUnset($request->labelId)) {
            $body['LabelId'] = $request->labelId;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDevices',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取设备列表
     *  *
     * @param ListDevicesRequest $request ListDevicesRequest
     *
     * @return ListDevicesResponse ListDevicesResponse
     */
    public function listDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevicesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用户问题标签
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFbIssueLabelsResponse ListFbIssueLabelsResponse
     */
    public function listFbIssueLabelsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListFbIssueLabels',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFbIssueLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户问题标签
     *  *
     * @return ListFbIssueLabelsResponse ListFbIssueLabelsResponse
     */
    public function listFbIssueLabels()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFbIssueLabelsWithOptions($runtime);
    }

    /**
     * @summary 根据语言类型和调用方查询标签列表
     *  *
     * @param ListFbIssueLabelsByLCRequest $request ListFbIssueLabelsByLCRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFbIssueLabelsByLCResponse ListFbIssueLabelsByLCResponse
     */
    public function listFbIssueLabelsByLCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->caller)) {
            $body['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->languageType)) {
            $body['LanguageType'] = $request->languageType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFbIssueLabelsByLC',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFbIssueLabelsByLCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据语言类型和调用方查询标签列表
     *  *
     * @param ListFbIssueLabelsByLCRequest $request ListFbIssueLabelsByLCRequest
     *
     * @return ListFbIssueLabelsByLCResponse ListFbIssueLabelsByLCResponse
     */
    public function listFbIssueLabelsByLC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFbIssueLabelsByLCWithOptions($request, $runtime);
    }

    /**
     * @summary 获取标签列表
     *  *
     * @param ListLabelsRequest $request ListLabelsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLabelsResponse ListLabelsResponse
     */
    public function listLabelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelContent)) {
            $body['LabelContent'] = $request->labelContent;
        }
        if (!Utils::isUnset($request->labelId)) {
            $body['LabelId'] = $request->labelId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListLabels',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取标签列表
     *  *
     * @param ListLabelsRequest $request ListLabelsRequest
     *
     * @return ListLabelsResponse ListLabelsResponse
     */
    public function listLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLabelsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取租户升级设备信息
     *  *
     * @param ListTenantDeviceOtaInfoRequest $request ListTenantDeviceOtaInfoRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTenantDeviceOtaInfoResponse ListTenantDeviceOtaInfoResponse
     */
    public function listTenantDeviceOtaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTenantDeviceOtaInfo',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTenantDeviceOtaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取租户升级设备信息
     *  *
     * @param ListTenantDeviceOtaInfoRequest $request ListTenantDeviceOtaInfoRequest
     *
     * @return ListTenantDeviceOtaInfoResponse ListTenantDeviceOtaInfoResponse
     */
    public function listTenantDeviceOtaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTenantDeviceOtaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询终端列表
     *  *
     * @param ListTerminalRequest $request ListTerminalRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTerminalResponse ListTerminalResponse
     */
    public function listTerminalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alias)) {
            $body['Alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->buildId)) {
            $body['BuildId'] = $request->buildId;
        }
        if (!Utils::isUnset($request->clientType)) {
            $body['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->inManage)) {
            $body['InManage'] = $request->inManage;
        }
        if (!Utils::isUnset($request->ipv4)) {
            $body['Ipv4'] = $request->ipv4;
        }
        if (!Utils::isUnset($request->locationInfo)) {
            $body['LocationInfo'] = $request->locationInfo;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->searchKeyword)) {
            $body['SearchKeyword'] = $request->searchKeyword;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $body['SerialNumber'] = $request->serialNumber;
        }
        if (!Utils::isUnset($request->terminalGroupId)) {
            $body['TerminalGroupId'] = $request->terminalGroupId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTerminal',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询终端列表
     *  *
     * @param ListTerminalRequest $request ListTerminalRequest
     *
     * @return ListTerminalResponse ListTerminalResponse
     */
    public function listTerminal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTerminalWithOptions($request, $runtime);
    }

    /**
     * @summary 批量查询终端基本信息
     *  *
     * @param ListTerminalsRequest $request ListTerminalsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTerminalsResponse ListTerminalsResponse
     */
    public function listTerminalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serialNumbers)) {
            $query['SerialNumbers'] = $request->serialNumbers;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->searchKeyword)) {
            $body['SearchKeyword'] = $request->searchKeyword;
        }
        if (!Utils::isUnset($request->terminalGroupId)) {
            $body['TerminalGroupId'] = $request->terminalGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTerminals',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTerminalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询终端基本信息
     *  *
     * @param ListTerminalsRequest $request ListTerminalsRequest
     *
     * @return ListTerminalsResponse ListTerminalsResponse
     */
    public function listTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTerminalsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询可信设备列表
     *  *
     * @param ListTrustDevicesRequest $request ListTrustDevicesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTrustDevicesResponse ListTrustDevicesResponse
     */
    public function listTrustDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelContent)) {
            $body['LabelContent'] = $request->labelContent;
        }
        if (!Utils::isUnset($request->labelId)) {
            $body['LabelId'] = $request->labelId;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->userCustomId)) {
            $body['UserCustomId'] = $request->userCustomId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTrustDevices',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTrustDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询可信设备列表
     *  *
     * @param ListTrustDevicesRequest $request ListTrustDevicesRequest
     *
     * @return ListTrustDevicesResponse ListTrustDevicesResponse
     */
    public function listTrustDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrustDevicesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询问题反馈列表
     *  *
     * @param ListUserFbAcIssuesRequest $request ListUserFbAcIssuesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserFbAcIssuesResponse ListUserFbAcIssuesResponse
     */
    public function listUserFbAcIssuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $body['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->errorMessage)) {
            $body['ErrorMessage'] = $request->errorMessage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->issueId)) {
            $body['IssueId'] = $request->issueId;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->reservedA)) {
            $body['ReservedA'] = $request->reservedA;
        }
        if (!Utils::isUnset($request->reservedB)) {
            $body['ReservedB'] = $request->reservedB;
        }
        if (!Utils::isUnset($request->userEmail)) {
            $body['UserEmail'] = $request->userEmail;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListUserFbAcIssues',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserFbAcIssuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询问题反馈列表
     *  *
     * @param ListUserFbAcIssuesRequest $request ListUserFbAcIssuesRequest
     *
     * @return ListUserFbAcIssuesResponse ListUserFbAcIssuesResponse
     */
    public function listUserFbAcIssues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserFbAcIssuesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用户反馈问题列表
     *  *
     * @param ListUserFbIssuesRequest $request ListUserFbIssuesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserFbIssuesResponse ListUserFbIssuesResponse
     */
    public function listUserFbIssuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientModel)) {
            $body['ClientModel'] = $request->clientModel;
        }
        if (!Utils::isUnset($request->clientSn)) {
            $body['ClientSn'] = $request->clientSn;
        }
        if (!Utils::isUnset($request->customerId)) {
            $body['CustomerId'] = $request->customerId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $body['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->errorCode)) {
            $body['ErrorCode'] = $request->errorCode;
        }
        if (!Utils::isUnset($request->errorMsg)) {
            $body['ErrorMsg'] = $request->errorMsg;
        }
        if (!Utils::isUnset($request->fbType)) {
            $body['FbType'] = $request->fbType;
        }
        if (!Utils::isUnset($request->issueId)) {
            $body['IssueId'] = $request->issueId;
        }
        if (!Utils::isUnset($request->issueLabel)) {
            $body['IssueLabel'] = $request->issueLabel;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userEmail)) {
            $body['UserEmail'] = $request->userEmail;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->wasRead)) {
            $body['WasRead'] = $request->wasRead;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListUserFbIssues',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserFbIssuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户反馈问题列表
     *  *
     * @param ListUserFbIssuesRequest $request ListUserFbIssuesRequest
     *
     * @return ListUserFbIssuesResponse ListUserFbIssuesResponse
     */
    public function listUserFbIssues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserFbIssuesWithOptions($request, $runtime);
    }

    /**
     * @summary 修改设备安全入网类型
     *  *
     * @param ModifyDevicesSecureNetworkTypeRequest $request ModifyDevicesSecureNetworkTypeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDevicesSecureNetworkTypeResponse ModifyDevicesSecureNetworkTypeResponse
     */
    public function modifyDevicesSecureNetworkTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->allDevices)) {
            $body['AllDevices'] = $request->allDevices;
        }
        if (!Utils::isUnset($request->secureNetworkType)) {
            $body['SecureNetworkType'] = $request->secureNetworkType;
        }
        if (!Utils::isUnset($request->serialNos)) {
            $body['SerialNos'] = $request->serialNos;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDevicesSecureNetworkType',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDevicesSecureNetworkTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改设备安全入网类型
     *  *
     * @param ModifyDevicesSecureNetworkTypeRequest $request ModifyDevicesSecureNetworkTypeRequest
     *
     * @return ModifyDevicesSecureNetworkTypeResponse ModifyDevicesSecureNetworkTypeResponse
     */
    public function modifyDevicesSecureNetworkType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDevicesSecureNetworkTypeWithOptions($request, $runtime);
    }

    /**
     * @summary 匿名api修改安全入网配置
     *  *
     * @param ModifySecureNetworkTypeRequest $request ModifySecureNetworkTypeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySecureNetworkTypeResponse ModifySecureNetworkTypeResponse
     */
    public function modifySecureNetworkTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->secureNetworkType)) {
            $body['SecureNetworkType'] = $request->secureNetworkType;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifySecureNetworkType',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecureNetworkTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 匿名api修改安全入网配置
     *  *
     * @param ModifySecureNetworkTypeRequest $request ModifySecureNetworkTypeRequest
     *
     * @return ModifySecureNetworkTypeResponse ModifySecureNetworkTypeResponse
     */
    public function modifySecureNetworkType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecureNetworkTypeWithOptions($request, $runtime);
    }

    /**
     * @summary 设备注册
     *  *
     * @param RegisterDeviceRequest $request RegisterDeviceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterDeviceResponse RegisterDeviceResponse
     */
    public function registerDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bluetooth)) {
            $body['Bluetooth'] = $request->bluetooth;
        }
        if (!Utils::isUnset($request->buildId)) {
            $body['BuildId'] = $request->buildId;
        }
        if (!Utils::isUnset($request->chipId)) {
            $body['ChipId'] = $request->chipId;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientType)) {
            $body['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->cpu)) {
            $body['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->customId)) {
            $body['CustomId'] = $request->customId;
        }
        if (!Utils::isUnset($request->etherMac)) {
            $body['EtherMac'] = $request->etherMac;
        }
        if (!Utils::isUnset($request->memory)) {
            $body['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->storage)) {
            $body['Storage'] = $request->storage;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->wlan)) {
            $body['Wlan'] = $request->wlan;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RegisterDevice',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设备注册
     *  *
     * @param RegisterDeviceRequest $request RegisterDeviceRequest
     *
     * @return RegisterDeviceResponse RegisterDeviceResponse
     */
    public function registerDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDeviceWithOptions($request, $runtime);
    }

    /**
     * @summary 上报升级信息
     *  *
     * @param ReportAppOtaInfoRequest $request ReportAppOtaInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ReportAppOtaInfoResponse ReportAppOtaInfoResponse
     */
    public function reportAppOtaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseVersion)) {
            $query['BaseVersion'] = $request->baseVersion;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->clientUid)) {
            $query['ClientUid'] = $request->clientUid;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->targetVersion)) {
            $query['TargetVersion'] = $request->targetVersion;
        }
        if (!Utils::isUnset($request->taskUid)) {
            $query['TaskUid'] = $request->taskUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportAppOtaInfo',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportAppOtaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上报升级信息
     *  *
     * @param ReportAppOtaInfoRequest $request ReportAppOtaInfoRequest
     *
     * @return ReportAppOtaInfoResponse ReportAppOtaInfoResponse
     */
    public function reportAppOtaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportAppOtaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 升级信息上报
     *  *
     * @param ReportDeviceOtaInfoRequest $request ReportDeviceOtaInfoRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ReportDeviceOtaInfoResponse ReportDeviceOtaInfoResponse
     */
    public function reportDeviceOtaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->baseVersion)) {
            $body['BaseVersion'] = $request->baseVersion;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->note)) {
            $body['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->targetVersion)) {
            $body['TargetVersion'] = $request->targetVersion;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReportDeviceOtaInfo',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportDeviceOtaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 升级信息上报
     *  *
     * @param ReportDeviceOtaInfoRequest $request ReportDeviceOtaInfoRequest
     *
     * @return ReportDeviceOtaInfoResponse ReportDeviceOtaInfoResponse
     */
    public function reportDeviceOtaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportDeviceOtaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 应用中心用户问题反馈
     *  *
     * @param ReportUserFbAcIssueRequest $tmpReq  ReportUserFbAcIssueRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ReportUserFbAcIssueResponse ReportUserFbAcIssueResponse
     */
    public function reportUserFbAcIssueWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReportUserFbAcIssueShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->fileList)) {
            $request->fileListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fileList, 'FileList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $body['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->errorMsg)) {
            $body['ErrorMsg'] = $request->errorMsg;
        }
        if (!Utils::isUnset($request->fileListShrink)) {
            $body['FileList'] = $request->fileListShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->reservedA)) {
            $body['ReservedA'] = $request->reservedA;
        }
        if (!Utils::isUnset($request->reservedB)) {
            $body['ReservedB'] = $request->reservedB;
        }
        if (!Utils::isUnset($request->userEmail)) {
            $body['UserEmail'] = $request->userEmail;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReportUserFbAcIssue',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportUserFbAcIssueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用中心用户问题反馈
     *  *
     * @param ReportUserFbAcIssueRequest $request ReportUserFbAcIssueRequest
     *
     * @return ReportUserFbAcIssueResponse ReportUserFbAcIssueResponse
     */
    public function reportUserFbAcIssue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportUserFbAcIssueWithOptions($request, $runtime);
    }

    /**
     * @summary 上报用户反馈问题
     *  *
     * @param ReportUserFbIssueRequest $tmpReq  ReportUserFbIssueRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ReportUserFbIssueResponse ReportUserFbIssueResponse
     */
    public function reportUserFbIssueWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReportUserFbIssueShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->fileList)) {
            $request->fileListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fileList, 'FileList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientModel)) {
            $body['ClientModel'] = $request->clientModel;
        }
        if (!Utils::isUnset($request->clientOsName)) {
            $body['ClientOsName'] = $request->clientOsName;
        }
        if (!Utils::isUnset($request->clientSn)) {
            $body['ClientSn'] = $request->clientSn;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $body['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->customerId)) {
            $body['CustomerId'] = $request->customerId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $body['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->desktopType)) {
            $body['DesktopType'] = $request->desktopType;
        }
        if (!Utils::isUnset($request->errorCode)) {
            $body['ErrorCode'] = $request->errorCode;
        }
        if (!Utils::isUnset($request->errorMsg)) {
            $body['ErrorMsg'] = $request->errorMsg;
        }
        if (!Utils::isUnset($request->fbType)) {
            $body['FbType'] = $request->fbType;
        }
        if (!Utils::isUnset($request->fileListShrink)) {
            $body['FileList'] = $request->fileListShrink;
        }
        if (!Utils::isUnset($request->issueLabel)) {
            $body['IssueLabel'] = $request->issueLabel;
        }
        if (!Utils::isUnset($request->occurTime)) {
            $body['OccurTime'] = $request->occurTime;
        }
        if (!Utils::isUnset($request->reservedA)) {
            $body['ReservedA'] = $request->reservedA;
        }
        if (!Utils::isUnset($request->reservedB)) {
            $body['ReservedB'] = $request->reservedB;
        }
        if (!Utils::isUnset($request->telNo)) {
            $body['TelNo'] = $request->telNo;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userEmail)) {
            $body['UserEmail'] = $request->userEmail;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        if (!Utils::isUnset($request->wyId)) {
            $body['WyId'] = $request->wyId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReportUserFbIssue',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportUserFbIssueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上报用户反馈问题
     *  *
     * @param ReportUserFbIssueRequest $request ReportUserFbIssueRequest
     *
     * @return ReportUserFbIssueResponse ReportUserFbIssueResponse
     */
    public function reportUserFbIssue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportUserFbIssueWithOptions($request, $runtime);
    }

    /**
     * @summary 向终端发送运维命令
     *  *
     * @param SendOpsMessageToTerminalsRequest $request SendOpsMessageToTerminalsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SendOpsMessageToTerminalsResponse SendOpsMessageToTerminalsResponse
     */
    public function sendOpsMessageToTerminalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->delay)) {
            $query['Delay'] = $request->delay;
        }
        $body = [];
        if (!Utils::isUnset($request->msg)) {
            $body['Msg'] = $request->msg;
        }
        if (!Utils::isUnset($request->opsAction)) {
            $body['OpsAction'] = $request->opsAction;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->uuids)) {
            $bodyFlat['Uuids'] = $request->uuids;
        }
        if (!Utils::isUnset($request->waitForAck)) {
            $body['WaitForAck'] = $request->waitForAck;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendOpsMessageToTerminals',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendOpsMessageToTerminalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 向终端发送运维命令
     *  *
     * @param SendOpsMessageToTerminalsRequest $request SendOpsMessageToTerminalsRequest
     *
     * @return SendOpsMessageToTerminalsResponse SendOpsMessageToTerminalsResponse
     */
    public function sendOpsMessageToTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendOpsMessageToTerminalsWithOptions($request, $runtime);
    }

    /**
     * @summary 设置租户ota自动开启/关闭
     *  *
     * @param SetDeviceOtaAutoStatusRequest $request SetDeviceOtaAutoStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDeviceOtaAutoStatusResponse SetDeviceOtaAutoStatusResponse
     */
    public function setDeviceOtaAutoStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoUpdate)) {
            $body['AutoUpdate'] = $request->autoUpdate;
        }
        if (!Utils::isUnset($request->autoUpdateTimeSchedule)) {
            $body['AutoUpdateTimeSchedule'] = $request->autoUpdateTimeSchedule;
        }
        if (!Utils::isUnset($request->clientType)) {
            $body['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->forceUpgrade)) {
            $body['ForceUpgrade'] = $request->forceUpgrade;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetDeviceOtaAutoStatus',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDeviceOtaAutoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置租户ota自动开启/关闭
     *  *
     * @param SetDeviceOtaAutoStatusRequest $request SetDeviceOtaAutoStatusRequest
     *
     * @return SetDeviceOtaAutoStatusResponse SetDeviceOtaAutoStatusResponse
     */
    public function setDeviceOtaAutoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeviceOtaAutoStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 租户设置设备ota任务的状态
     *  *
     * @param SetDeviceOtaTaskStatusRequest $request SetDeviceOtaTaskStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDeviceOtaTaskStatusResponse SetDeviceOtaTaskStatusResponse
     */
    public function setDeviceOtaTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operationStatus)) {
            $body['OperationStatus'] = $request->operationStatus;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetDeviceOtaTaskStatus',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDeviceOtaTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 租户设置设备ota任务的状态
     *  *
     * @param SetDeviceOtaTaskStatusRequest $request SetDeviceOtaTaskStatusRequest
     *
     * @return SetDeviceOtaTaskStatusResponse SetDeviceOtaTaskStatusResponse
     */
    public function setDeviceOtaTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeviceOtaTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 解绑免账号登录用户
     *  *
     * @param UnbindAccountLessLoginUserRequest $request UnbindAccountLessLoginUserRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindAccountLessLoginUserResponse UnbindAccountLessLoginUserResponse
     */
    public function unbindAccountLessLoginUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serialNumber)) {
            $body['SerialNumber'] = $request->serialNumber;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnbindAccountLessLoginUser',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindAccountLessLoginUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解绑免账号登录用户
     *  *
     * @param UnbindAccountLessLoginUserRequest $request UnbindAccountLessLoginUserRequest
     *
     * @return UnbindAccountLessLoginUserResponse UnbindAccountLessLoginUserResponse
     */
    public function unbindAccountLessLoginUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAccountLessLoginUserWithOptions($request, $runtime);
    }

    /**
     * @summary 解绑设备座位
     *  *
     * @param UnbindDeviceSeatsRequest $tmpReq  UnbindDeviceSeatsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindDeviceSeatsResponse UnbindDeviceSeatsResponse
     */
    public function unbindDeviceSeatsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UnbindDeviceSeatsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->serialNoList)) {
            $request->serialNoListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serialNoList, 'SerialNoList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->serialNoListShrink)) {
            $body['SerialNoList'] = $request->serialNoListShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnbindDeviceSeats',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindDeviceSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解绑设备座位
     *  *
     * @param UnbindDeviceSeatsRequest $request UnbindDeviceSeatsRequest
     *
     * @return UnbindDeviceSeatsResponse UnbindDeviceSeatsResponse
     */
    public function unbindDeviceSeats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDeviceSeatsWithOptions($request, $runtime);
    }

    /**
     * @summary 更新设备别名
     *  *
     * @param UpdateAliasRequest $request UpdateAliasRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAliasResponse UpdateAliasResponse
     */
    public function updateAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alias)) {
            $body['Alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlias',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新设备别名
     *  *
     * @param UpdateAliasRequest $request UpdateAliasRequest
     *
     * @return UpdateAliasResponse UpdateAliasResponse
     */
    public function updateAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAliasWithOptions($request, $runtime);
    }

    /**
     * @summary 批量更新设备绑定的终端用户
     *  *
     * @param UpdateDeviceBindedEndUserRequest $request UpdateDeviceBindedEndUserRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDeviceBindedEndUserResponse UpdateDeviceBindedEndUserResponse
     */
    public function updateDeviceBindedEndUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serialNo)) {
            $body['SerialNo'] = $request->serialNo;
        }
        if (!Utils::isUnset($request->sourceAdEndUsers)) {
            $body['SourceAdEndUsers'] = $request->sourceAdEndUsers;
        }
        if (!Utils::isUnset($request->sourceEndUserIds)) {
            $body['SourceEndUserIds'] = $request->sourceEndUserIds;
        }
        if (!Utils::isUnset($request->targetAdEndUsers)) {
            $body['TargetAdEndUsers'] = $request->targetAdEndUsers;
        }
        if (!Utils::isUnset($request->targetEndUserIds)) {
            $body['TargetEndUserIds'] = $request->targetEndUserIds;
        }
        if (!Utils::isUnset($request->userType)) {
            $body['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDeviceBindedEndUser',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDeviceBindedEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量更新设备绑定的终端用户
     *  *
     * @param UpdateDeviceBindedEndUserRequest $request UpdateDeviceBindedEndUserRequest
     *
     * @return UpdateDeviceBindedEndUserResponse UpdateDeviceBindedEndUserResponse
     */
    public function updateDeviceBindedEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceBindedEndUserWithOptions($request, $runtime);
    }

    /**
     * @summary 修改标签
     *  *
     * @param UpdateLabelRequest $request UpdateLabelRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLabelResponse UpdateLabelResponse
     */
    public function updateLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelContent)) {
            $body['LabelContent'] = $request->labelContent;
        }
        if (!Utils::isUnset($request->labelId)) {
            $body['LabelId'] = $request->labelId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLabel',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改标签
     *  *
     * @param UpdateLabelRequest $request UpdateLabelRequest
     *
     * @return UpdateLabelResponse UpdateLabelResponse
     */
    public function updateLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLabelWithOptions($request, $runtime);
    }

    /**
     * @summary 修改终端策略
     *  *
     * @param UpdateTerminalPolicyRequest $request UpdateTerminalPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTerminalPolicyResponse UpdateTerminalPolicyResponse
     */
    public function updateTerminalPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backgroundModeTitle)) {
            $body['BackgroundModeTitle'] = $request->backgroundModeTitle;
        }
        if (!Utils::isUnset($request->displayLayout)) {
            $body['DisplayLayout'] = $request->displayLayout;
        }
        if (!Utils::isUnset($request->displayResolution)) {
            $body['DisplayResolution'] = $request->displayResolution;
        }
        if (!Utils::isUnset($request->displayScaleRatio)) {
            $body['DisplayScaleRatio'] = $request->displayScaleRatio;
        }
        if (!Utils::isUnset($request->enableAutoLockScreen)) {
            $body['EnableAutoLockScreen'] = $request->enableAutoLockScreen;
        }
        if (!Utils::isUnset($request->enableAutoLogin)) {
            $body['EnableAutoLogin'] = $request->enableAutoLogin;
        }
        if (!Utils::isUnset($request->enableBackgroundMode)) {
            $body['EnableBackgroundMode'] = $request->enableBackgroundMode;
        }
        if (!Utils::isUnset($request->enableBluetooth)) {
            $body['EnableBluetooth'] = $request->enableBluetooth;
        }
        if (!Utils::isUnset($request->enableModifyPassword)) {
            $body['EnableModifyPassword'] = $request->enableModifyPassword;
        }
        if (!Utils::isUnset($request->enableScheduledReboot)) {
            $body['EnableScheduledReboot'] = $request->enableScheduledReboot;
        }
        if (!Utils::isUnset($request->enableScheduledShutdown)) {
            $body['EnableScheduledShutdown'] = $request->enableScheduledShutdown;
        }
        if (!Utils::isUnset($request->enableSwitchPersonal)) {
            $body['EnableSwitchPersonal'] = $request->enableSwitchPersonal;
        }
        if (!Utils::isUnset($request->enableWlan)) {
            $body['EnableWlan'] = $request->enableWlan;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $body['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->idleTimeoutAction)) {
            $body['IdleTimeoutAction'] = $request->idleTimeoutAction;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->powerButtonDefine)) {
            $body['PowerButtonDefine'] = $request->powerButtonDefine;
        }
        if (!Utils::isUnset($request->powerButtonDefineForAs)) {
            $body['PowerButtonDefineForAs'] = $request->powerButtonDefineForAs;
        }
        if (!Utils::isUnset($request->powerButtonDefineForNs)) {
            $body['PowerButtonDefineForNs'] = $request->powerButtonDefineForNs;
        }
        if (!Utils::isUnset($request->powerOnBehavior)) {
            $body['PowerOnBehavior'] = $request->powerOnBehavior;
        }
        if (!Utils::isUnset($request->scheduledReboot)) {
            $body['ScheduledReboot'] = $request->scheduledReboot;
        }
        if (!Utils::isUnset($request->scheduledShutdown)) {
            $body['ScheduledShutdown'] = $request->scheduledShutdown;
        }
        if (!Utils::isUnset($request->settingLock)) {
            $body['SettingLock'] = $request->settingLock;
        }
        if (!Utils::isUnset($request->terminalPolicyId)) {
            $body['TerminalPolicyId'] = $request->terminalPolicyId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTerminalPolicy',
            'version'     => '2021-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTerminalPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改终端策略
     *  *
     * @param UpdateTerminalPolicyRequest $request UpdateTerminalPolicyRequest
     *
     * @return UpdateTerminalPolicyResponse UpdateTerminalPolicyResponse
     */
    public function updateTerminalPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTerminalPolicyWithOptions($request, $runtime);
    }
}
