<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddNetworkInterfaceToInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddNetworkInterfaceToInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AllocateEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AllocateEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachEnsInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachEnsInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsServiceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsServiceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEPInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEPInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateImageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateImageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateKeyPairRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateKeyPairResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateVSwitchRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateVSwitchResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteKeyPairsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteKeyPairsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteVSwitchRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteVSwitchResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationResourceSummaryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationResourceSummaryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeBandwitdhByInternetChargeTypeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeBandwitdhByInternetChargeTypeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeBandWithdChargeTypeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeBandWithdChargeTypeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCreatePrePaidInstanceResultRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCreatePrePaidInstanceResultResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEipAddressesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEipAddressesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetDistrictRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetDistrictResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdIpv6InfoRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdIpv6InfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandWidthDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandWidthDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandwitdhByInternetChargeTypeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandwitdhByInternetChargeTypeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageInfoRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageStatusRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageStatusResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageSharePermissionRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageSharePermissionResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceTypesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceTypesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeKeyPairsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeKeyPairsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePrePaidInstanceStockRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePrePaidInstanceStockResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportBillDetailDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportBillDetailDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportImageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportImageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportMeasurementDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportMeasurementDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ImportKeyPairRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ImportKeyPairResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinPublicIpsToEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinPublicIpsToEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinVSwitchesToEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinVSwitchesToEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\LeaveSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\LeaveSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageSharePermissionRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageSharePermissionResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\PreCreateEnsServiceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PreCreateEnsServiceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReInitDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReInitDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePostPaidInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePostPaidInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePrePaidInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePrePaidInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemovePublicIpsFromEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemovePublicIpsFromEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveVSwitchesFromEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveVSwitchesFromEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RollbackApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RollbackApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeApplicationResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Ens extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ens', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DescribeEpnBandwitdhByInternetChargeTypeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeEpnBandwitdhByInternetChargeTypeResponse
     */
    public function describeEpnBandwitdhByInternetChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEpnBandwitdhByInternetChargeTypeResponse::fromMap($this->doRequest('DescribeEpnBandwitdhByInternetChargeType', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEpnBandwitdhByInternetChargeTypeRequest $request
     *
     * @return DescribeEpnBandwitdhByInternetChargeTypeResponse
     */
    public function describeEpnBandwitdhByInternetChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnBandwitdhByInternetChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEpnBandWidthDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEpnBandWidthDataResponse
     */
    public function describeEpnBandWidthDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEpnBandWidthDataResponse::fromMap($this->doRequest('DescribeEpnBandWidthData', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEpnBandWidthDataRequest $request
     *
     * @return DescribeEpnBandWidthDataResponse
     */
    public function describeEpnBandWidthData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnBandWidthDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEpnMeasurementDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEpnMeasurementDataResponse
     */
    public function describeEpnMeasurementDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEpnMeasurementDataResponse::fromMap($this->doRequest('DescribeEpnMeasurementData', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEpnMeasurementDataRequest $request
     *
     * @return DescribeEpnMeasurementDataResponse
     */
    public function describeEpnMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkInterfacesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNetworkInterfacesResponse
     */
    public function describeNetworkInterfacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeNetworkInterfacesResponse::fromMap($this->doRequest('DescribeNetworkInterfaces', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeNetworkInterfacesRequest $request
     *
     * @return DescribeNetworkInterfacesResponse
     */
    public function describeNetworkInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInterfacesWithOptions($request, $runtime);
    }

    /**
     * @param CreateEPInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEPInstanceResponse
     */
    public function createEPInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateEPInstanceResponse::fromMap($this->doRequest('CreateEPInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param CreateEPInstanceRequest $request
     *
     * @return CreateEPInstanceResponse
     */
    public function createEPInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEPInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyImageSharePermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyImageSharePermissionResponse
     */
    public function modifyImageSharePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyImageSharePermissionResponse::fromMap($this->doRequest('ModifyImageSharePermission', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ModifyImageSharePermissionRequest $request
     *
     * @return ModifyImageSharePermissionResponse
     */
    public function modifyImageSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageSharePermissionWithOptions($request, $runtime);
    }

    /**
     * @param AddNetworkInterfaceToInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddNetworkInterfaceToInstanceResponse
     */
    public function addNetworkInterfaceToInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddNetworkInterfaceToInstanceResponse::fromMap($this->doRequest('AddNetworkInterfaceToInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param AddNetworkInterfaceToInstanceRequest $request
     *
     * @return AddNetworkInterfaceToInstanceResponse
     */
    public function addNetworkInterfaceToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addNetworkInterfaceToInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageSharePermissionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeImageSharePermissionResponse
     */
    public function describeImageSharePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeImageSharePermissionResponse::fromMap($this->doRequest('DescribeImageSharePermission', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeImageSharePermissionRequest $request
     *
     * @return DescribeImageSharePermissionResponse
     */
    public function describeImageSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageSharePermissionWithOptions($request, $runtime);
    }

    /**
     * @param RemoveVSwitchesFromEpnInstanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemoveVSwitchesFromEpnInstanceResponse
     */
    public function removeVSwitchesFromEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveVSwitchesFromEpnInstanceResponse::fromMap($this->doRequest('RemoveVSwitchesFromEpnInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param RemoveVSwitchesFromEpnInstanceRequest $request
     *
     * @return RemoveVSwitchesFromEpnInstanceResponse
     */
    public function removeVSwitchesFromEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVSwitchesFromEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DistApplicationDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DistApplicationDataResponse
     */
    public function distApplicationDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DistApplicationDataResponse::fromMap($this->doRequest('DistApplicationData', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DistApplicationDataRequest $request
     *
     * @return DistApplicationDataResponse
     */
    public function distApplicationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->distApplicationDataWithOptions($request, $runtime);
    }

    /**
     * @param JoinVSwitchesToEpnInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return JoinVSwitchesToEpnInstanceResponse
     */
    public function joinVSwitchesToEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return JoinVSwitchesToEpnInstanceResponse::fromMap($this->doRequest('JoinVSwitchesToEpnInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param JoinVSwitchesToEpnInstanceRequest $request
     *
     * @return JoinVSwitchesToEpnInstanceResponse
     */
    public function joinVSwitchesToEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinVSwitchesToEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeApplicationResponse
     */
    public function describeApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeApplicationResponse::fromMap($this->doRequest('DescribeApplication', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeApplicationRequest $request
     *
     * @return DescribeApplicationResponse
     */
    public function describeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataPushResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDataPushResultResponse
     */
    public function describeDataPushResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDataPushResultResponse::fromMap($this->doRequest('DescribeDataPushResult', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeDataPushResultRequest $request
     *
     * @return DescribeDataPushResultResponse
     */
    public function describeDataPushResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataPushResultWithOptions($request, $runtime);
    }

    /**
     * @param PushApplicationDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PushApplicationDataResponse
     */
    public function pushApplicationDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PushApplicationDataResponse::fromMap($this->doRequest('PushApplicationData', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param PushApplicationDataRequest $request
     *
     * @return PushApplicationDataResponse
     */
    public function pushApplicationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushApplicationDataWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpgradeApplicationResponse
     */
    public function upgradeApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpgradeApplicationResponse::fromMap($this->doRequest('UpgradeApplication', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param UpgradeApplicationRequest $request
     *
     * @return UpgradeApplicationResponse
     */
    public function upgradeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeApplicationWithOptions($request, $runtime);
    }

    /**
     * @param RescaleApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RescaleApplicationResponse
     */
    public function rescaleApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RescaleApplicationResponse::fromMap($this->doRequest('RescaleApplication', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param RescaleApplicationRequest $request
     *
     * @return RescaleApplicationResponse
     */
    public function rescaleApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rescaleApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEpnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteEpnInstanceResponse
     */
    public function deleteEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteEpnInstanceResponse::fromMap($this->doRequest('DeleteEpnInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DeleteEpnInstanceRequest $request
     *
     * @return DeleteEpnInstanceResponse
     */
    public function deleteEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListApplicationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListApplicationsResponse::fromMap($this->doRequest('ListApplications', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ListApplicationsRequest $request
     *
     * @return ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServcieScheduleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeServcieScheduleResponse
     */
    public function describeServcieScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeServcieScheduleResponse::fromMap($this->doRequest('DescribeServcieSchedule', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeServcieScheduleRequest $request
     *
     * @return DescribeServcieScheduleResponse
     */
    public function describeServcieSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServcieScheduleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteApplicationResponse::fromMap($this->doRequest('DeleteApplication', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DeleteApplicationRequest $request
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEpnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyEpnInstanceResponse
     */
    public function modifyEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyEpnInstanceResponse::fromMap($this->doRequest('ModifyEpnInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ModifyEpnInstanceRequest $request
     *
     * @return ModifyEpnInstanceResponse
     */
    public function modifyEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RollbackApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RollbackApplicationResponse
     */
    public function rollbackApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RollbackApplicationResponse::fromMap($this->doRequest('RollbackApplication', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param RollbackApplicationRequest $request
     *
     * @return RollbackApplicationResponse
     */
    public function rollbackApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEpnInstanceAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeEpnInstanceAttributeResponse
     */
    public function describeEpnInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEpnInstanceAttributeResponse::fromMap($this->doRequest('DescribeEpnInstanceAttribute', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEpnInstanceAttributeRequest $request
     *
     * @return DescribeEpnInstanceAttributeResponse
     */
    public function describeEpnInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param RunServiceScheduleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunServiceScheduleResponse
     */
    public function runServiceScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RunServiceScheduleResponse::fromMap($this->doRequest('RunServiceSchedule', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param RunServiceScheduleRequest $request
     *
     * @return RunServiceScheduleResponse
     */
    public function runServiceSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runServiceScheduleWithOptions($request, $runtime);
    }

    /**
     * @param CreateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateApplicationResponse::fromMap($this->doRequest('CreateApplication', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * @param CreateEpnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEpnInstanceResponse
     */
    public function createEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateEpnInstanceResponse::fromMap($this->doRequest('CreateEpnInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param CreateEpnInstanceRequest $request
     *
     * @return CreateEpnInstanceResponse
     */
    public function createEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StopEpnInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopEpnInstanceResponse
     */
    public function stopEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopEpnInstanceResponse::fromMap($this->doRequest('StopEpnInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param StopEpnInstanceRequest $request
     *
     * @return StopEpnInstanceResponse
     */
    public function stopEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataDistResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDataDistResultResponse
     */
    public function describeDataDistResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDataDistResultResponse::fromMap($this->doRequest('DescribeDataDistResult', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeDataDistResultRequest $request
     *
     * @return DescribeDataDistResultResponse
     */
    public function describeDataDistResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataDistResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEpnInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEpnInstancesResponse
     */
    public function describeEpnInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEpnInstancesResponse::fromMap($this->doRequest('DescribeEpnInstances', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEpnInstancesRequest $request
     *
     * @return DescribeEpnInstancesResponse
     */
    public function describeEpnInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnInstancesWithOptions($request, $runtime);
    }

    /**
     * @param RemovePublicIpsFromEpnInstanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemovePublicIpsFromEpnInstanceResponse
     */
    public function removePublicIpsFromEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemovePublicIpsFromEpnInstanceResponse::fromMap($this->doRequest('RemovePublicIpsFromEpnInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param RemovePublicIpsFromEpnInstanceRequest $request
     *
     * @return RemovePublicIpsFromEpnInstanceResponse
     */
    public function removePublicIpsFromEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePublicIpsFromEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param JoinPublicIpsToEpnInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return JoinPublicIpsToEpnInstanceResponse
     */
    public function joinPublicIpsToEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return JoinPublicIpsToEpnInstanceResponse::fromMap($this->doRequest('JoinPublicIpsToEpnInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param JoinPublicIpsToEpnInstanceRequest $request
     *
     * @return JoinPublicIpsToEpnInstanceResponse
     */
    public function joinPublicIpsToEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinPublicIpsToEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApplicationResourceSummaryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeApplicationResourceSummaryResponse
     */
    public function describeApplicationResourceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeApplicationResourceSummaryResponse::fromMap($this->doRequest('DescribeApplicationResourceSummary', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeApplicationResourceSummaryRequest $request
     *
     * @return DescribeApplicationResourceSummaryResponse
     */
    public function describeApplicationResourceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationResourceSummaryWithOptions($request, $runtime);
    }

    /**
     * @param StartEpnInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartEpnInstanceResponse
     */
    public function startEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartEpnInstanceResponse::fromMap($this->doRequest('StartEpnInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param StartEpnInstanceRequest $request
     *
     * @return StartEpnInstanceResponse
     */
    public function startEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExportImageInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeExportImageInfoResponse
     */
    public function describeExportImageInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeExportImageInfoResponse::fromMap($this->doRequest('DescribeExportImageInfo', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeExportImageInfoRequest $request
     *
     * @return DescribeExportImageInfoResponse
     */
    public function describeExportImageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportImageInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVSwitchesResponse::fromMap($this->doRequest('DescribeVSwitches', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeVSwitchesRequest $request
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVSwitchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteVSwitchResponse
     */
    public function deleteVSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteVSwitchResponse::fromMap($this->doRequest('DeleteVSwitch', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DeleteVSwitchRequest $request
     *
     * @return DeleteVSwitchResponse
     */
    public function deleteVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVSwitchWithOptions($request, $runtime);
    }

    /**
     * @param CreateVSwitchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateVSwitchResponse
     */
    public function createVSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVSwitchResponse::fromMap($this->doRequest('CreateVSwitch', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param CreateVSwitchRequest $request
     *
     * @return CreateVSwitchResponse
     */
    public function createVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVSwitchWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExportImageStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeExportImageStatusResponse
     */
    public function describeExportImageStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeExportImageStatusResponse::fromMap($this->doRequest('DescribeExportImageStatus', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeExportImageStatusRequest $request
     *
     * @return DescribeExportImageStatusResponse
     */
    public function describeExportImageStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportImageStatusWithOptions($request, $runtime);
    }

    /**
     * @param ExportImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExportImageResponse
     */
    public function exportImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ExportImageResponse::fromMap($this->doRequest('ExportImage', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ExportImageRequest $request
     *
     * @return ExportImageResponse
     */
    public function exportImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportImageWithOptions($request, $runtime);
    }

    /**
     * @param ImportKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ImportKeyPairResponse::fromMap($this->doRequest('ImportKeyPair', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ImportKeyPairRequest $request
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importKeyPairWithOptions($request, $runtime);
    }

    /**
     * @param DescribeKeyPairsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeKeyPairsResponse
     */
    public function describeKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeKeyPairsResponse::fromMap($this->doRequest('DescribeKeyPairs', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeKeyPairsRequest $request
     *
     * @return DescribeKeyPairsResponse
     */
    public function describeKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteKeyPairsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteKeyPairsResponse::fromMap($this->doRequest('DeleteKeyPairs', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DeleteKeyPairsRequest $request
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @param CreateKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateKeyPairResponse::fromMap($this->doRequest('CreateKeyPair', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param CreateKeyPairRequest $request
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyPairWithOptions($request, $runtime);
    }

    /**
     * @param ExportBillDetailDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ExportBillDetailDataResponse
     */
    public function exportBillDetailDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ExportBillDetailDataResponse::fromMap($this->doRequest('ExportBillDetailData', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ExportBillDetailDataRequest $request
     *
     * @return ExportBillDetailDataResponse
     */
    public function exportBillDetailData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportBillDetailDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsRegionIdResourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEnsRegionIdResourceResponse
     */
    public function describeEnsRegionIdResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEnsRegionIdResourceResponse::fromMap($this->doRequest('DescribeEnsRegionIdResource', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEnsRegionIdResourceRequest $request
     *
     * @return DescribeEnsRegionIdResourceResponse
     */
    public function describeEnsRegionIdResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionIdResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBandwitdhByInternetChargeTypeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeBandwitdhByInternetChargeTypeResponse
     */
    public function describeBandwitdhByInternetChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBandwitdhByInternetChargeTypeResponse::fromMap($this->doRequest('DescribeBandwitdhByInternetChargeType', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeBandwitdhByInternetChargeTypeRequest $request
     *
     * @return DescribeBandwitdhByInternetChargeTypeResponse
     */
    public function describeBandwitdhByInternetChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwitdhByInternetChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @param AuthorizeSecurityGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AuthorizeSecurityGroupResponse::fromMap($this->doRequest('AuthorizeSecurityGroup', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param AuthorizeSecurityGroupRequest $request
     *
     * @return AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param RevokeSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RevokeSecurityGroupResponse
     */
    public function revokeSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RevokeSecurityGroupResponse::fromMap($this->doRequest('RevokeSecurityGroup', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param RevokeSecurityGroupRequest $request
     *
     * @return RevokeSecurityGroupResponse
     */
    public function revokeSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSecurityGroupResponse::fromMap($this->doRequest('DeleteSecurityGroup', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DeleteSecurityGroupRequest $request
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityGroupAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSecurityGroupAttributeResponse::fromMap($this->doRequest('DescribeSecurityGroupAttribute', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeSecurityGroupAttributeRequest $request
     *
     * @return DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param LeaveSecurityGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return LeaveSecurityGroupResponse
     */
    public function leaveSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return LeaveSecurityGroupResponse::fromMap($this->doRequest('LeaveSecurityGroup', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param LeaveSecurityGroupRequest $request
     *
     * @return LeaveSecurityGroupResponse
     */
    public function leaveSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->leaveSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param JoinSecurityGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return JoinSecurityGroupResponse
     */
    public function joinSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return JoinSecurityGroupResponse::fromMap($this->doRequest('JoinSecurityGroup', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param JoinSecurityGroupRequest $request
     *
     * @return JoinSecurityGroupResponse
     */
    public function joinSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param AuthorizeSecurityGroupEgressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AuthorizeSecurityGroupEgressResponse::fromMap($this->doRequest('AuthorizeSecurityGroupEgress', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param AuthorizeSecurityGroupEgressRequest $request
     *
     * @return AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeSecurityGroupEgressWithOptions($request, $runtime);
    }

    /**
     * @param RevokeSecurityGroupEgressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RevokeSecurityGroupEgressResponse::fromMap($this->doRequest('RevokeSecurityGroupEgress', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param RevokeSecurityGroupEgressRequest $request
     *
     * @return RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSecurityGroupEgressWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSecurityGroupsResponse::fromMap($this->doRequest('DescribeSecurityGroups', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeSecurityGroupsRequest $request
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @param CreateSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSecurityGroupResponse
     */
    public function createSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSecurityGroupResponse::fromMap($this->doRequest('CreateSecurityGroup', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param CreateSecurityGroupRequest $request
     *
     * @return CreateSecurityGroupResponse
     */
    public function createSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsRegionIdIpv6InfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEnsRegionIdIpv6InfoResponse
     */
    public function describeEnsRegionIdIpv6InfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEnsRegionIdIpv6InfoResponse::fromMap($this->doRequest('DescribeEnsRegionIdIpv6Info', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEnsRegionIdIpv6InfoRequest $request
     *
     * @return DescribeEnsRegionIdIpv6InfoResponse
     */
    public function describeEnsRegionIdIpv6Info($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionIdIpv6InfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCreatePrePaidInstanceResultRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCreatePrePaidInstanceResultResponse
     */
    public function describeCreatePrePaidInstanceResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCreatePrePaidInstanceResultResponse::fromMap($this->doRequest('DescribeCreatePrePaidInstanceResult', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeCreatePrePaidInstanceResultRequest $request
     *
     * @return DescribeCreatePrePaidInstanceResultResponse
     */
    public function describeCreatePrePaidInstanceResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCreatePrePaidInstanceResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePriceResponse::fromMap($this->doRequest('DescribePrice', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribePriceRequest $request
     *
     * @return DescribePriceResponse
     */
    public function describePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
    }

    /**
     * @param ExportMeasurementDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExportMeasurementDataResponse
     */
    public function exportMeasurementDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ExportMeasurementDataResponse::fromMap($this->doRequest('ExportMeasurementData', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ExportMeasurementDataRequest $request
     *
     * @return ExportMeasurementDataResponse
     */
    public function exportMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeasurementDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeMeasurementDataResponse
     */
    public function describeMeasurementDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeMeasurementDataResponse::fromMap($this->doRequest('DescribeMeasurementData', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeMeasurementDataRequest $request
     *
     * @return DescribeMeasurementDataResponse
     */
    public function describeMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableResourceInfoRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAvailableResourceInfoResponse
     */
    public function describeAvailableResourceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAvailableResourceInfoResponse::fromMap($this->doRequest('DescribeAvailableResourceInfo', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeAvailableResourceInfoRequest $request
     *
     * @return DescribeAvailableResourceInfoResponse
     */
    public function describeAvailableResourceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribePrePaidInstanceStockRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePrePaidInstanceStockResponse
     */
    public function describePrePaidInstanceStockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePrePaidInstanceStockResponse::fromMap($this->doRequest('DescribePrePaidInstanceStock', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribePrePaidInstanceStockRequest $request
     *
     * @return DescribePrePaidInstanceStockResponse
     */
    public function describePrePaidInstanceStock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrePaidInstanceStockWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateEipAddressRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnassociateEipAddressResponse
     */
    public function unassociateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnassociateEipAddressResponse::fromMap($this->doRequest('UnassociateEipAddress', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param UnassociateEipAddressRequest $request
     *
     * @return UnassociateEipAddressResponse
     */
    public function unassociateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseEipAddressRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReleaseEipAddressResponse
     */
    public function releaseEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReleaseEipAddressResponse::fromMap($this->doRequest('ReleaseEipAddress', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ReleaseEipAddressRequest $request
     *
     * @return ReleaseEipAddressResponse
     */
    public function releaseEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEipAddressesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEipAddressesResponse
     */
    public function describeEipAddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEipAddressesResponse::fromMap($this->doRequest('DescribeEipAddresses', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEipAddressesRequest $request
     *
     * @return DescribeEipAddressesResponse
     */
    public function describeEipAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipAddressesWithOptions($request, $runtime);
    }

    /**
     * @param AssociateEipAddressRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AssociateEipAddressResponse
     */
    public function associateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AssociateEipAddressResponse::fromMap($this->doRequest('AssociateEipAddress', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param AssociateEipAddressRequest $request
     *
     * @return AssociateEipAddressResponse
     */
    public function associateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param AllocateEipAddressRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AllocateEipAddressResponse
     */
    public function allocateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AllocateEipAddressResponse::fromMap($this->doRequest('AllocateEipAddress', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param AllocateEipAddressRequest $request
     *
     * @return AllocateEipAddressResponse
     */
    public function allocateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param ReleasePostPaidInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReleasePostPaidInstanceResponse
     */
    public function releasePostPaidInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReleasePostPaidInstanceResponse::fromMap($this->doRequest('ReleasePostPaidInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ReleasePostPaidInstanceRequest $request
     *
     * @return ReleasePostPaidInstanceResponse
     */
    public function releasePostPaidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePostPaidInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ReleasePrePaidInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReleasePrePaidInstanceResponse
     */
    public function releasePrePaidInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReleasePrePaidInstanceResponse::fromMap($this->doRequest('ReleasePrePaidInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ReleasePrePaidInstanceRequest $request
     *
     * @return ReleasePrePaidInstanceResponse
     */
    public function releasePrePaidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePrePaidInstanceWithOptions($request, $runtime);
    }

    /**
     * @param AttachEnsInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachEnsInstancesResponse
     */
    public function attachEnsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AttachEnsInstancesResponse::fromMap($this->doRequest('AttachEnsInstances', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param AttachEnsInstancesRequest $request
     *
     * @return AttachEnsInstancesResponse
     */
    public function attachEnsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEnsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReservedResourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeReservedResourceResponse
     */
    public function describeReservedResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeReservedResourceResponse::fromMap($this->doRequest('DescribeReservedResource', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeReservedResourceRequest $request
     *
     * @return DescribeReservedResourceResponse
     */
    public function describeReservedResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservedResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceTypesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceTypesResponse::fromMap($this->doRequest('DescribeInstanceTypes', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeInstanceTypesRequest $request
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * @param CreateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateImageResponse
     */
    public function createImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateImageResponse::fromMap($this->doRequest('CreateImage', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param CreateImageRequest $request
     *
     * @return CreateImageResponse
     */
    public function createImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsNetSaleDistrictRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEnsNetSaleDistrictResponse
     */
    public function describeEnsNetSaleDistrictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEnsNetSaleDistrictResponse::fromMap($this->doRequest('DescribeEnsNetSaleDistrict', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEnsNetSaleDistrictRequest $request
     *
     * @return DescribeEnsNetSaleDistrictResponse
     */
    public function describeEnsNetSaleDistrict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetSaleDistrictWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsNetDistrictRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEnsNetDistrictResponse
     */
    public function describeEnsNetDistrictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEnsNetDistrictResponse::fromMap($this->doRequest('DescribeEnsNetDistrict', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEnsNetDistrictRequest $request
     *
     * @return DescribeEnsNetDistrictResponse
     */
    public function describeEnsNetDistrict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetDistrictWithOptions($request, $runtime);
    }

    /**
     * @param PreCreateEnsServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PreCreateEnsServiceResponse
     */
    public function preCreateEnsServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PreCreateEnsServiceResponse::fromMap($this->doRequest('PreCreateEnsService', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param PreCreateEnsServiceRequest $request
     *
     * @return PreCreateEnsServiceResponse
     */
    public function preCreateEnsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preCreateEnsServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBandWithdChargeTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeBandWithdChargeTypeResponse
     */
    public function describeBandWithdChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBandWithdChargeTypeResponse::fromMap($this->doRequest('DescribeBandWithdChargeType', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeBandWithdChargeTypeRequest $request
     *
     * @return DescribeBandWithdChargeTypeResponse
     */
    public function describeBandWithdChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandWithdChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyImageAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyImageAttributeResponse
     */
    public function modifyImageAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyImageAttributeResponse::fromMap($this->doRequest('ModifyImageAttribute', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ModifyImageAttributeRequest $request
     *
     * @return ModifyImageAttributeResponse
     */
    public function modifyImageAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageAttributeWithOptions($request, $runtime);
    }

    /**
     * @param CreateEnsServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEnsServiceResponse
     */
    public function createEnsServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateEnsServiceResponse::fromMap($this->doRequest('CreateEnsService', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param CreateEnsServiceRequest $request
     *
     * @return CreateEnsServiceResponse
     */
    public function createEnsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnsServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsNetLevelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeEnsNetLevelResponse
     */
    public function describeEnsNetLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEnsNetLevelResponse::fromMap($this->doRequest('DescribeEnsNetLevel', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEnsNetLevelRequest $request
     *
     * @return DescribeEnsNetLevelResponse
     */
    public function describeEnsNetLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetLevelWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSpecRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceSpecResponse
     */
    public function describeInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceSpecResponse::fromMap($this->doRequest('DescribeInstanceSpec', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeInstanceSpecRequest $request
     *
     * @return DescribeInstanceSpecResponse
     */
    public function describeInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAutoRenewAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceAutoRenewAttributeResponse::fromMap($this->doRequest('DescribeInstanceAutoRenewAttribute', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeInstanceAutoRenewAttributeRequest $request
     *
     * @return DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAvailableResourceResponse::fromMap($this->doRequest('DescribeAvailableResource', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeAvailableResourceRequest $request
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateInstanceResponse::fromMap($this->doRequest('CreateInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ReInitDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ReInitDiskResponse
     */
    public function reInitDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReInitDiskResponse::fromMap($this->doRequest('ReInitDisk', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ReInitDiskRequest $request
     *
     * @return ReInitDiskResponse
     */
    public function reInitDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reInitDiskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeImageInfosResponse
     */
    public function describeImageInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeImageInfosResponse::fromMap($this->doRequest('DescribeImageInfos', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeImageInfosRequest $request
     *
     * @return DescribeImageInfosResponse
     */
    public function describeImageInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageInfosWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserBandWidthDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserBandWidthDataResponse
     */
    public function describeUserBandWidthDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeUserBandWidthDataResponse::fromMap($this->doRequest('DescribeUserBandWidthData', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeUserBandWidthDataRequest $request
     *
     * @return DescribeUserBandWidthDataResponse
     */
    public function describeUserBandWidthData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBandWidthDataWithOptions($request, $runtime);
    }

    /**
     * @param RebootInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RebootInstanceResponse::fromMap($this->doRequest('RebootInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param RebootInstanceRequest $request
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsRegionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEnsRegionsResponse
     */
    public function describeEnsRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEnsRegionsResponse::fromMap($this->doRequest('DescribeEnsRegions', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeEnsRegionsRequest $request
     *
     * @return DescribeEnsRegionsResponse
     */
    public function describeEnsRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionsWithOptions($request, $runtime);
    }

    /**
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartInstanceResponse::fromMap($this->doRequest('StartInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
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
     * @param DescribeInstanceMonitorDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceMonitorDataResponse
     */
    public function describeInstanceMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceMonitorDataResponse::fromMap($this->doRequest('DescribeInstanceMonitorData', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeInstanceMonitorDataRequest $request
     *
     * @return DescribeInstanceMonitorDataResponse
     */
    public function describeInstanceMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstancesResponse::fromMap($this->doRequest('DescribeInstances', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImagesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeImagesResponse
     */
    public function describeImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeImagesResponse::fromMap($this->doRequest('DescribeImages', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param DescribeImagesRequest $request
     *
     * @return DescribeImagesResponse
     */
    public function describeImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagesWithOptions($request, $runtime);
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

        return StopInstanceResponse::fromMap($this->doRequest('StopInstance', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
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
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceAttributeResponse::fromMap($this->doRequest('ModifyInstanceAttribute', 'HTTPS', 'POST', '2017-11-10', 'AK', null, $request->toMap(), $runtime));
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
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
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap['regionId'])) {
            return @$endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
