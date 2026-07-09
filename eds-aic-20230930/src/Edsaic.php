<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ActivateEdgeMobileAgentRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ActivateEdgeMobileAgentResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AttachKeyPairRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AttachKeyPairResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AuthorizeAndroidInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AuthorizeAndroidInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupAndroidInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupAndroidInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BatchGetAcpConnectionTicketRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BatchGetAcpConnectionTicketResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CancelAgentTaskRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CancelAgentTaskResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ChangeCloudPhoneNodeRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ChangeCloudPhoneNodeResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CheckResourceStockRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CheckResourceStockResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAppShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCreditPackageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCreditPackageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCustomImageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCustomImageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateEdgeMobileAgentPackageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateEdgeMobileAgentPackageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateKeyPairRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateKeyPairResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateMobileAgentPackageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateMobileAgentPackageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreatePolicyGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreatePolicyGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreatePolicyGroupShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateScreenshotRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateScreenshotResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateSystemPropertyTemplateRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateSystemPropertyTemplateResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateSystemPropertyTemplateShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteAndroidInstanceGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteAndroidInstanceGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteAppsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteAppsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteBackupFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteBackupFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteCloudPhoneNodesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteCloudPhoneNodesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteImagesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteImagesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteImagesShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteKeyPairsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteKeyPairsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteMobileAgentPackageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteMobileAgentPackageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeletePolicyGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeletePolicyGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteSystemPropertyTemplatesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteSystemPropertyTemplatesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAgentTaskRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAgentTaskResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAppsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBackupFilesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBackupFilesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBucketsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBucketsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCreditDetailRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCreditDetailResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCreditPackageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCreditPackageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeDisplayConfigRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeDisplayConfigResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeEdgeMobileAgentPackagesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeEdgeMobileAgentPackagesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeImageListRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeImageListResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeInvocationsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeInvocationsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeJVSInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeJVSInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeKeyPairsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeKeyPairsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricListRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricListResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricTopRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricTopResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMobileAgentPackageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMobileAgentPackageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSpecRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSpecResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSystemPropertyTemplatesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSystemPropertyTemplatesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DetachKeyPairRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DetachKeyPairResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DisconnectAndroidInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DisconnectAndroidInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DistributeImageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DistributeImageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DowngradeAndroidInstanceGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DowngradeAndroidInstanceGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\EndCoordinationRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\EndCoordinationResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ExpandDataVolumeRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ExpandDataVolumeResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ExpandPhoneDataVolumeRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ExpandPhoneDataVolumeResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\FetchFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\FetchFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GenerateCoordinationCodeRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GenerateCoordinationCodeResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetInstancePropertiesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetInstancePropertiesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetNetworkBlacklistRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetNetworkBlacklistResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ImportImageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ImportImageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ImportKeyPairRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ImportKeyPairResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\InstallAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\InstallAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\InstallMonitorAgentRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\InstallMonitorAgentResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\InstanceHealerRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\InstanceHealerResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListInstanceAdbAttributesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListInstanceAdbAttributesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyAndroidInstanceGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyAndroidInstanceGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyAndroidInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyAndroidInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyCloudPhoneNodeRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyCloudPhoneNodeResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyDisplayConfigRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyDisplayConfigResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyDisplayConfigShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyInstanceChargeTypeRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyInstanceChargeTypeResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyJVSInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyJVSInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyKeyPairNameRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyKeyPairNameResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyPolicyGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyPolicyGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyPolicyGroupShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifySystemPropertyTemplateRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifySystemPropertyTemplateResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifySystemPropertyTemplateShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\OperateAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\OperateAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\PauseAgentTaskRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\PauseAgentTaskResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RebootAndroidInstancesInGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RebootAndroidInstancesInGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoverAndroidInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoverAndroidInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoverAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoverAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoveryFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoveryFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RefreshAuthTokensRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RefreshAuthTokensResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewAndroidInstanceGroupsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewAndroidInstanceGroupsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewCloudPhoneNodesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewCloudPhoneNodesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewMobileAgentPackageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewMobileAgentPackageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ResetAndroidInstancesInGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ResetAndroidInstancesInGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ResumeAgentTaskRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ResumeAgentTaskResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RunAgentTaskRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RunAgentTaskResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RunCommandRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RunCommandResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RunSyncCommandRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RunSyncCommandResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SendFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SendFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SendSystemPropertyTemplateRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SendSystemPropertyTemplateResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SetAdbSecureRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SetAdbSecureResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SetNetworkBlacklistRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SetNetworkBlacklistResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StartAndroidInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StartAndroidInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StartInstanceAdbRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StartInstanceAdbResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StopAndroidInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StopAndroidInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StopInstanceAdbRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StopInstanceAdbResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UninstallAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UninstallAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UninstallMonitorAgentRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UninstallMonitorAgentResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateCustomImageNameRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateCustomImageNameResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateInstanceGroupImageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateInstanceGroupImageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateInstanceImageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateInstanceImageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpgradeAndroidInstanceGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpgradeAndroidInstanceGroupResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Edsaic extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-shanghai' => 'eds-aic.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'eds-aic.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eds-aic', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Activates an edge agent device.
     *
     * @param request - ActivateEdgeMobileAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateEdgeMobileAgentResponse
     *
     * @param ActivateEdgeMobileAgentRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ActivateEdgeMobileAgentResponse
     */
    public function activateEdgeMobileAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceClass) {
            @$query['DeviceClass'] = $request->deviceClass;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->deviceMeta) {
            @$query['DeviceMeta'] = $request->deviceMeta;
        }

        if (null !== $request->licenseKey) {
            @$query['LicenseKey'] = $request->licenseKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ActivateEdgeMobileAgent',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActivateEdgeMobileAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates an edge agent device.
     *
     * @param request - ActivateEdgeMobileAgentRequest
     *
     * @returns ActivateEdgeMobileAgentResponse
     *
     * @param ActivateEdgeMobileAgentRequest $request
     *
     * @return ActivateEdgeMobileAgentResponse
     */
    public function activateEdgeMobileAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateEdgeMobileAgentWithOptions($request, $runtime);
    }

    /**
     * Attaches an Android Debug Bridge (ADB) key pair to one or more cloud phone instances.
     *
     * @remarks
     * - You can attach to an ADB key pair only to cloud phone instances in the Running state.
     * - After you attach an ADB key pair, make sure the private key of the ADB key pair is copied to the \\~/.android directory (macOS or Linux operating systems) or the C:\\Users\\Username.android directory (Windows operating systems). In addition, you must run the adb kill-server command to restart the ADB process to ensure correct ADB connection. Otherwise, ADB connection may fail due to authentication exceptions.
     *
     * @param request - AttachKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachKeyPairResponse
     *
     * @param AttachKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AttachKeyPairResponse
     */
    public function attachKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->keyPairId) {
            @$query['KeyPairId'] = $request->keyPairId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachKeyPair',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches an Android Debug Bridge (ADB) key pair to one or more cloud phone instances.
     *
     * @remarks
     * - You can attach to an ADB key pair only to cloud phone instances in the Running state.
     * - After you attach an ADB key pair, make sure the private key of the ADB key pair is copied to the \\~/.android directory (macOS or Linux operating systems) or the C:\\Users\\Username.android directory (Windows operating systems). In addition, you must run the adb kill-server command to restart the ADB process to ensure correct ADB connection. Otherwise, ADB connection may fail due to authentication exceptions.
     *
     * @param request - AttachKeyPairRequest
     *
     * @returns AttachKeyPairResponse
     *
     * @param AttachKeyPairRequest $request
     *
     * @return AttachKeyPairResponse
     */
    public function attachKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachKeyPairWithOptions($request, $runtime);
    }

    /**
     * Authorize/unauthorize Android instances for users.
     *
     * @remarks
     * Instance states that support user assignment: Available, Shutting Down, Stopped, Starting, Backing Up, Restoring, Backup Failed, Restore Failed.
     * Instance states that support unassignment: Available, Shutting Down, Stopped, Starting, Backing Up, Restoring, Backup Failed, Restore Failed, Expired, Overdue, Deleted.
     *
     * @param request - AuthorizeAndroidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeAndroidInstanceResponse
     *
     * @param AuthorizeAndroidInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AuthorizeAndroidInstanceResponse
     */
    public function authorizeAndroidInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIds) {
            @$query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->authorizeUserId) {
            @$query['AuthorizeUserId'] = $request->authorizeUserId;
        }

        if (null !== $request->unAuthorizeUserId) {
            @$query['UnAuthorizeUserId'] = $request->unAuthorizeUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeAndroidInstance',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Authorize/unauthorize Android instances for users.
     *
     * @remarks
     * Instance states that support user assignment: Available, Shutting Down, Stopped, Starting, Backing Up, Restoring, Backup Failed, Restore Failed.
     * Instance states that support unassignment: Available, Shutting Down, Stopped, Starting, Backing Up, Restoring, Backup Failed, Restore Failed, Expired, Overdue, Deleted.
     *
     * @param request - AuthorizeAndroidInstanceRequest
     *
     * @returns AuthorizeAndroidInstanceResponse
     *
     * @param AuthorizeAndroidInstanceRequest $request
     *
     * @return AuthorizeAndroidInstanceResponse
     */
    public function authorizeAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a full backup of a Cloud Phone instance. The backup includes installed applications and properties.
     *
     * @remarks
     * 1. To ensure that the backup is successful, shut down the instance before you start the data backup. The operation may fail if the cloud phone instance is used during the backup process.
     * 2. You should test the backup file to ensure that you can restore the instance from it. After the restoration is complete, verify that your data is complete and that all features function correctly. Do not delete the original backup file or reset the source instance until this verification is complete. Otherwise, you may lose your data.
     * 3. You cannot back up and restore data between different image versions, between custom images and public images, or across different architectures, such as cpm.gx7.10xlarge and cpm.gx8.16xlarge.
     *
     * @param request - BackupAndroidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BackupAndroidInstanceResponse
     *
     * @param BackupAndroidInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BackupAndroidInstanceResponse
     */
    public function backupAndroidInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIdList) {
            @$query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }

        if (null !== $request->backupFileName) {
            @$query['BackupFileName'] = $request->backupFileName;
        }

        if (null !== $request->backupFilePath) {
            @$query['BackupFilePath'] = $request->backupFilePath;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->uploadEndpoint) {
            @$query['UploadEndpoint'] = $request->uploadEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BackupAndroidInstance',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BackupAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a full backup of a Cloud Phone instance. The backup includes installed applications and properties.
     *
     * @remarks
     * 1. To ensure that the backup is successful, shut down the instance before you start the data backup. The operation may fail if the cloud phone instance is used during the backup process.
     * 2. You should test the backup file to ensure that you can restore the instance from it. After the restoration is complete, verify that your data is complete and that all features function correctly. Do not delete the original backup file or reset the source instance until this verification is complete. Otherwise, you may lose your data.
     * 3. You cannot back up and restore data between different image versions, between custom images and public images, or across different architectures, such as cpm.gx7.10xlarge and cpm.gx8.16xlarge.
     *
     * @param request - BackupAndroidInstanceRequest
     *
     * @returns BackupAndroidInstanceResponse
     *
     * @param BackupAndroidInstanceRequest $request
     *
     * @return BackupAndroidInstanceResponse
     */
    public function backupAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->backupAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * Backs up specified applications on a cloud phone instance. The backup includes the application and its cache.
     *
     * @remarks
     * 1. Shut down the cloud phone instance before you back up data to ensure that the operation succeeds. Using the cloud phone during a backup may cause the operation to fail.
     * 2. Ensure that the backup file can be used to restore the instance successfully. After you restore from a backup, verify that your data is complete and that all features are working correctly. Do not delete the original backup file or reset the source instance until you complete this verification. Failure to do so may result in data loss.
     * 3. Backup and restore operations are not suppported across different image versions, between custom images and public images, or across different architectures, such as cpm.gx7.10xlarge and cpm.gx8.16xlarge.
     *
     * @param request - BackupAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BackupAppResponse
     *
     * @param BackupAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return BackupAppResponse
     */
    public function backupAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIdList) {
            @$query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }

        if (null !== $request->backupFileName) {
            @$query['BackupFileName'] = $request->backupFileName;
        }

        if (null !== $request->backupFilePath) {
            @$query['BackupFilePath'] = $request->backupFilePath;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->sourceAppList) {
            @$query['SourceAppList'] = $request->sourceAppList;
        }

        if (null !== $request->uploadEndpoint) {
            @$query['UploadEndpoint'] = $request->uploadEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BackupApp',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BackupAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Backs up specified applications on a cloud phone instance. The backup includes the application and its cache.
     *
     * @remarks
     * 1. Shut down the cloud phone instance before you back up data to ensure that the operation succeeds. Using the cloud phone during a backup may cause the operation to fail.
     * 2. Ensure that the backup file can be used to restore the instance successfully. After you restore from a backup, verify that your data is complete and that all features are working correctly. Do not delete the original backup file or reset the source instance until you complete this verification. Failure to do so may result in data loss.
     * 3. Backup and restore operations are not suppported across different image versions, between custom images and public images, or across different architectures, such as cpm.gx7.10xlarge and cpm.gx8.16xlarge.
     *
     * @param request - BackupAppRequest
     *
     * @returns BackupAppResponse
     *
     * @param BackupAppRequest $request
     *
     * @return BackupAppResponse
     */
    public function backupApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->backupAppWithOptions($request, $runtime);
    }

    /**
     * Generates a backup file and uploads it to remote storage. You can use this operation for regular data backups. You can also back up files from one instance and restore them to multiple instances, a process similar to data replication or migration.
     *
     * @remarks
     * You can save backup files generated by cloud phones only to Object Storage Service (OSS).
     *
     * @param request - BackupFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BackupFileResponse
     *
     * @param BackupFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return BackupFileResponse
     */
    public function backupFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIdList) {
            @$query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }

        if (null !== $request->backupAll) {
            @$query['BackupAll'] = $request->backupAll;
        }

        if (null !== $request->backupFileName) {
            @$query['BackupFileName'] = $request->backupFileName;
        }

        if (null !== $request->backupFilePath) {
            @$query['BackupFilePath'] = $request->backupFilePath;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->excludeSourceFilePathList) {
            @$query['ExcludeSourceFilePathList'] = $request->excludeSourceFilePathList;
        }

        if (null !== $request->sourceAppList) {
            @$query['SourceAppList'] = $request->sourceAppList;
        }

        if (null !== $request->sourceFilePathList) {
            @$query['SourceFilePathList'] = $request->sourceFilePathList;
        }

        if (null !== $request->uploadEndpoint) {
            @$query['UploadEndpoint'] = $request->uploadEndpoint;
        }

        if (null !== $request->uploadType) {
            @$query['UploadType'] = $request->uploadType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BackupFile',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a backup file and uploads it to remote storage. You can use this operation for regular data backups. You can also back up files from one instance and restore them to multiple instances, a process similar to data replication or migration.
     *
     * @remarks
     * You can save backup files generated by cloud phones only to Object Storage Service (OSS).
     *
     * @param request - BackupFileRequest
     *
     * @returns BackupFileResponse
     *
     * @param BackupFileRequest $request
     *
     * @return BackupFileResponse
     */
    public function backupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->backupFileWithOptions($request, $runtime);
    }

    /**
     * Retrieves connection tickets in batch. This operation generates connection tickets asynchronously. In most cases, the tickets are returned directly in the response of the first call. However, in some situations, the initial response will contain a `TaskId`. You must then poll this endpoint with the `TaskId` until the generation is complete and the tickets are returned.
     *
     * @remarks
     * <props="china">
     * 本接口的作用因云手机产品版本和实例串流模式而异：
     * - 云手机实例版或云手机矩阵版（抢占模式）：只能通过同一个`EnduserId`获取`Ticket`。
     * - 云手机矩阵版（协同模式）：可通过传入不同的`EnduserId`来为不同的用户（至多 5 个）同时获取`Ticket`并串流。每次只能传入 1 个`EnduserId`。
     * > 实例串流模式可通过 [ModifyCloudPhoneNode](https://help.aliyun.com/document_detail/2878539.html) 接口的`StreamMode`参数来定义。
     *
     * @param request - BatchGetAcpConnectionTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetAcpConnectionTicketResponse
     *
     * @param BatchGetAcpConnectionTicketRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return BatchGetAcpConnectionTicketResponse
     */
    public function batchGetAcpConnectionTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionMode) {
            @$query['ConnectionMode'] = $request->connectionMode;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->instanceGroupId) {
            @$query['InstanceGroupId'] = $request->instanceGroupId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->instanceTasks) {
            @$query['InstanceTasks'] = $request->instanceTasks;
        }

        if (null !== $request->ports) {
            @$query['Ports'] = $request->ports;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetAcpConnectionTicket',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetAcpConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves connection tickets in batch. This operation generates connection tickets asynchronously. In most cases, the tickets are returned directly in the response of the first call. However, in some situations, the initial response will contain a `TaskId`. You must then poll this endpoint with the `TaskId` until the generation is complete and the tickets are returned.
     *
     * @remarks
     * <props="china">
     * 本接口的作用因云手机产品版本和实例串流模式而异：
     * - 云手机实例版或云手机矩阵版（抢占模式）：只能通过同一个`EnduserId`获取`Ticket`。
     * - 云手机矩阵版（协同模式）：可通过传入不同的`EnduserId`来为不同的用户（至多 5 个）同时获取`Ticket`并串流。每次只能传入 1 个`EnduserId`。
     * > 实例串流模式可通过 [ModifyCloudPhoneNode](https://help.aliyun.com/document_detail/2878539.html) 接口的`StreamMode`参数来定义。
     *
     * @param request - BatchGetAcpConnectionTicketRequest
     *
     * @returns BatchGetAcpConnectionTicketResponse
     *
     * @param BatchGetAcpConnectionTicketRequest $request
     *
     * @return BatchGetAcpConnectionTicketResponse
     */
    public function batchGetAcpConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetAcpConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * Cancels running agent tasks on a mobile node.
     *
     * @param request - CancelAgentTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAgentTaskResponse
     *
     * @param CancelAgentTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelAgentTaskResponse
     */
    public function cancelAgentTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelAgentTask',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAgentTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels running agent tasks on a mobile node.
     *
     * @param request - CancelAgentTaskRequest
     *
     * @returns CancelAgentTaskResponse
     *
     * @param CancelAgentTaskRequest $request
     *
     * @return CancelAgentTaskResponse
     */
    public function cancelAgentTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAgentTaskWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of a cloud phone matrix, including the instance type and the number of cloud phone instances.
     *
     * @param request - ChangeCloudPhoneNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeCloudPhoneNodeResponse
     *
     * @param ChangeCloudPhoneNodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ChangeCloudPhoneNodeResponse
     */
    public function changeCloudPhoneNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->displayConfig) {
            @$query['DisplayConfig'] = $request->displayConfig;
        }

        if (null !== $request->downBandwidthLimit) {
            @$query['DownBandwidthLimit'] = $request->downBandwidthLimit;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->phoneCount) {
            @$query['PhoneCount'] = $request->phoneCount;
        }

        if (null !== $request->phoneDataVolume) {
            @$query['PhoneDataVolume'] = $request->phoneDataVolume;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->shareDataVolume) {
            @$query['ShareDataVolume'] = $request->shareDataVolume;
        }

        if (null !== $request->swapSize) {
            @$query['SwapSize'] = $request->swapSize;
        }

        if (null !== $request->upBandwidthLimit) {
            @$query['UpBandwidthLimit'] = $request->upBandwidthLimit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeCloudPhoneNode',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeCloudPhoneNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a cloud phone matrix, including the instance type and the number of cloud phone instances.
     *
     * @param request - ChangeCloudPhoneNodeRequest
     *
     * @returns ChangeCloudPhoneNodeResponse
     *
     * @param ChangeCloudPhoneNodeRequest $request
     *
     * @return ChangeCloudPhoneNodeResponse
     */
    public function changeCloudPhoneNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeCloudPhoneNodeWithOptions($request, $runtime);
    }

    /**
     * Checks the inventory of Cloud Phone resources. Before you create an instance, call this operation to check whether resources are available in the target region. Create the instance only after you confirm that resources are available.
     *
     * @param request - CheckResourceStockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckResourceStockResponse
     *
     * @param CheckResourceStockRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckResourceStockResponse
     */
    public function checkResourceStockWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acpSpecId) {
            @$query['AcpSpecId'] = $request->acpSpecId;
        }

        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->gpuAcceleration) {
            @$query['GpuAcceleration'] = $request->gpuAcceleration;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckResourceStock',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckResourceStockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the inventory of Cloud Phone resources. Before you create an instance, call this operation to check whether resources are available in the target region. Create the instance only after you confirm that resources are available.
     *
     * @param request - CheckResourceStockRequest
     *
     * @returns CheckResourceStockResponse
     *
     * @param CheckResourceStockRequest $request
     *
     * @return CheckResourceStockResponse
     */
    public function checkResourceStock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkResourceStockWithOptions($request, $runtime);
    }

    /**
     * Create pay-as-you-go or subscription cloud phone instance groups. An instance group can manage multiple instances. You can group instances with similar functions into an instance group to manage them as a single unit.
     *
     * @remarks
     * <props="china">
     * Before you create a cloud phone instance group, you must complete identity verification. For more information, see [Individual identity verification](https://help.aliyun.com/document_detail/48263.html).
     * Note that creating a cloud phone instance group incurs charges. Before you proceed, make sure that you understand the [billing method](https://help.aliyun.com/document_detail/2807121.html).
     * - If the billing method for the instance group is subscription (PrePaid), AutoPay is set to false by default. After you call the API, go to <props="china">[Alibaba Cloud Expenses and Costs](https://usercenter2.aliyun.com/order/list)<props="intl">[Alibaba Cloud Expenses and Costs](https://usercenter2-intl.aliyun.com/order/list) to manually pay for the order.
     * - To enable automatic payments, set AutoPay to true.
     *
     * @param tmpReq - CreateAndroidInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAndroidInstanceGroupResponse
     *
     * @param CreateAndroidInstanceGroupRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAndroidInstanceGroupResponse
     */
    public function createAndroidInstanceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAndroidInstanceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->networkInfo) {
            $request->networkInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->networkInfo, 'NetworkInfo', 'json');
        }

        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bandwidthPackageId) {
            @$query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }

        if (null !== $request->bandwidthPackageType) {
            @$query['BandwidthPackageType'] = $request->bandwidthPackageType;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableIpv6) {
            @$query['EnableIpv6'] = $request->enableIpv6;
        }

        if (null !== $request->gpuAcceleration) {
            @$query['GpuAcceleration'] = $request->gpuAcceleration;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceGroupName) {
            @$query['InstanceGroupName'] = $request->instanceGroupName;
        }

        if (null !== $request->instanceGroupSpec) {
            @$query['InstanceGroupSpec'] = $request->instanceGroupSpec;
        }

        if (null !== $request->instanceVersion) {
            @$query['InstanceVersion'] = $request->instanceVersion;
        }

        if (null !== $request->ipv6Bandwidth) {
            @$query['Ipv6Bandwidth'] = $request->ipv6Bandwidth;
        }

        if (null !== $request->keyPairId) {
            @$query['KeyPairId'] = $request->keyPairId;
        }

        if (null !== $request->networkInfoShrink) {
            @$query['NetworkInfo'] = $request->networkInfoShrink;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->numberOfInstances) {
            @$query['NumberOfInstances'] = $request->numberOfInstances;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->paidCallBackUrl) {
            @$query['PaidCallBackUrl'] = $request->paidCallBackUrl;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->saleMode) {
            @$query['SaleMode'] = $request->saleMode;
        }

        if (null !== $request->streamMode) {
            @$query['StreamMode'] = $request->streamMode;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAndroidInstanceGroup',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create pay-as-you-go or subscription cloud phone instance groups. An instance group can manage multiple instances. You can group instances with similar functions into an instance group to manage them as a single unit.
     *
     * @remarks
     * <props="china">
     * Before you create a cloud phone instance group, you must complete identity verification. For more information, see [Individual identity verification](https://help.aliyun.com/document_detail/48263.html).
     * Note that creating a cloud phone instance group incurs charges. Before you proceed, make sure that you understand the [billing method](https://help.aliyun.com/document_detail/2807121.html).
     * - If the billing method for the instance group is subscription (PrePaid), AutoPay is set to false by default. After you call the API, go to <props="china">[Alibaba Cloud Expenses and Costs](https://usercenter2.aliyun.com/order/list)<props="intl">[Alibaba Cloud Expenses and Costs](https://usercenter2-intl.aliyun.com/order/list) to manually pay for the order.
     * - To enable automatic payments, set AutoPay to true.
     *
     * @param request - CreateAndroidInstanceGroupRequest
     *
     * @returns CreateAndroidInstanceGroupResponse
     *
     * @param CreateAndroidInstanceGroupRequest $request
     *
     * @return CreateAndroidInstanceGroupResponse
     */
    public function createAndroidInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAndroidInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates an Android application. Before you can install an application, you must use this API operation to create it. The application is not downloaded when it is created. It is downloaded only during installation. Ensure that the cloud phone can access the download URL.
     *
     * @remarks
     * When you create an application, you can pass the application information in one of the following two ways:
     * - Method 1: Pass an application from the WUYING Workspace app center.
     *   - Supported methods:
     *     - Method 1: Pass `FileName` and `FilePath`. Both parameters are required.
     *     - Method 2: Pass `OssAppUrl`.
     *   - Rule: If you pass an application from the WUYING Workspace app center, you must use at least one of the two methods. If you use both, Method 1 takes precedence.
     *   - Prerequisite: Log on to the [Elastic Desktop Service Enterprise console](https://eds.console.aliyun.com/osshelp). Follow the on-screen instructions to upload your application file to the WUYING Workspace app center. You can then obtain the required request parameters for this operation: `FileName` and `FilePath`, or `OssAppUrl`.
     * - Method 2: Pass a custom application.
     *   - Supported method: Pass `CustomAppInfo`.
     *   - Rule: If you pass `CustomAppInfo`, all six fields in this object parameter are required.
     * > If you use both Method 1 and Method 2, the information passed in Method 2 takes precedence.
     *
     * @param tmpReq - CreateAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppResponse
     *
     * @param CreateAppRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAppShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customAppInfo) {
            $request->customAppInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customAppInfo, 'CustomAppInfo', 'json');
        }

        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->customAppInfoShrink) {
            @$query['CustomAppInfo'] = $request->customAppInfoShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->iconUrl) {
            @$query['IconUrl'] = $request->iconUrl;
        }

        if (null !== $request->installParam) {
            @$query['InstallParam'] = $request->installParam;
        }

        if (null !== $request->ossAppUrl) {
            @$query['OssAppUrl'] = $request->ossAppUrl;
        }

        if (null !== $request->signApk) {
            @$query['SignApk'] = $request->signApk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApp',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Android application. Before you can install an application, you must use this API operation to create it. The application is not downloaded when it is created. It is downloaded only during installation. Ensure that the cloud phone can access the download URL.
     *
     * @remarks
     * When you create an application, you can pass the application information in one of the following two ways:
     * - Method 1: Pass an application from the WUYING Workspace app center.
     *   - Supported methods:
     *     - Method 1: Pass `FileName` and `FilePath`. Both parameters are required.
     *     - Method 2: Pass `OssAppUrl`.
     *   - Rule: If you pass an application from the WUYING Workspace app center, you must use at least one of the two methods. If you use both, Method 1 takes precedence.
     *   - Prerequisite: Log on to the [Elastic Desktop Service Enterprise console](https://eds.console.aliyun.com/osshelp). Follow the on-screen instructions to upload your application file to the WUYING Workspace app center. You can then obtain the required request parameters for this operation: `FileName` and `FilePath`, or `OssAppUrl`.
     * - Method 2: Pass a custom application.
     *   - Supported method: Pass `CustomAppInfo`.
     *   - Rule: If you pass `CustomAppInfo`, all six fields in this object parameter are required.
     * > If you use both Method 1 and Method 2, the information passed in Method 2 takes precedence.
     *
     * @param request - CreateAppRequest
     *
     * @returns CreateAppResponse
     *
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
     * In Cloud Phone, a matrix is a logical resource management unit that represents a physical server instance. Creating a matrix provisions a physical server, which you can then partition into multiple independent Cloud Phone instances. These instances share the compute, storage, and network resources of the matrix. The matrix configuration determines how many instances you can create.
     *
     * @param tmpReq - CreateCloudPhoneNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudPhoneNodeResponse
     *
     * @param CreateCloudPhoneNodeRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCloudPhoneNodeResponse
     */
    public function createCloudPhoneNodeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCloudPhoneNodeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->displayConfig) {
            $request->displayConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->displayConfig, 'DisplayConfig', 'json');
        }

        if (null !== $tmpReq->networkInfo) {
            $request->networkInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->networkInfo, 'NetworkInfo', 'json');
        }

        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bandwidthPackageId) {
            @$query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }

        if (null !== $request->bandwidthPackageType) {
            @$query['BandwidthPackageType'] = $request->bandwidthPackageType;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

        if (null !== $request->downBandwidthLimit) {
            @$query['DownBandwidthLimit'] = $request->downBandwidthLimit;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->isSingleImgDisk) {
            @$query['IsSingleImgDisk'] = $request->isSingleImgDisk;
        }

        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        if (null !== $request->networkInfoShrink) {
            @$query['NetworkInfo'] = $request->networkInfoShrink;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->nodeName) {
            @$query['NodeName'] = $request->nodeName;
        }

        if (null !== $request->paidCallBackUrl) {
            @$query['PaidCallBackUrl'] = $request->paidCallBackUrl;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->phoneCount) {
            @$query['PhoneCount'] = $request->phoneCount;
        }

        if (null !== $request->phoneDataVolume) {
            @$query['PhoneDataVolume'] = $request->phoneDataVolume;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->resolutionHeight) {
            @$query['ResolutionHeight'] = $request->resolutionHeight;
        }

        if (null !== $request->resolutionWidth) {
            @$query['ResolutionWidth'] = $request->resolutionWidth;
        }

        if (null !== $request->serverShareDataVolume) {
            @$query['ServerShareDataVolume'] = $request->serverShareDataVolume;
        }

        if (null !== $request->serverType) {
            @$query['ServerType'] = $request->serverType;
        }

        if (null !== $request->streamMode) {
            @$query['StreamMode'] = $request->streamMode;
        }

        if (null !== $request->swapSize) {
            @$query['SwapSize'] = $request->swapSize;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->upBandwidthLimit) {
            @$query['UpBandwidthLimit'] = $request->upBandwidthLimit;
        }

        if (null !== $request->useTemplate) {
            @$query['UseTemplate'] = $request->useTemplate;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $body = [];
        if (null !== $request->displayConfigShrink) {
            @$body['DisplayConfig'] = $request->displayConfigShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCloudPhoneNode',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudPhoneNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In Cloud Phone, a matrix is a logical resource management unit that represents a physical server instance. Creating a matrix provisions a physical server, which you can then partition into multiple independent Cloud Phone instances. These instances share the compute, storage, and network resources of the matrix. The matrix configuration determines how many instances you can create.
     *
     * @param request - CreateCloudPhoneNodeRequest
     *
     * @returns CreateCloudPhoneNodeResponse
     *
     * @param CreateCloudPhoneNodeRequest $request
     *
     * @return CreateCloudPhoneNodeResponse
     */
    public function createCloudPhoneNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudPhoneNodeWithOptions($request, $runtime);
    }

    /**
     * Creates an order for a credit package.
     *
     * @remarks
     * This is a billable operation. Before calling this operation, ensure that you understand the [billing methods and pricing](https://help.aliyun.com/zh/ecp/jvs-mobile-billing-instructions?spm=a2c4g.11186623.help-menu-254658.d_0_1_1.78bc5732j49PWP) of Wuying Cloud Phone.
     *
     * @param request - CreateCreditPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCreditPackageResponse
     *
     * @param CreateCreditPackageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateCreditPackageResponse
     */
    public function createCreditPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->creditAmount) {
            @$query['CreditAmount'] = $request->creditAmount;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCreditPackage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCreditPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an order for a credit package.
     *
     * @remarks
     * This is a billable operation. Before calling this operation, ensure that you understand the [billing methods and pricing](https://help.aliyun.com/zh/ecp/jvs-mobile-billing-instructions?spm=a2c4g.11186623.help-menu-254658.d_0_1_1.78bc5732j49PWP) of Wuying Cloud Phone.
     *
     * @param request - CreateCreditPackageRequest
     *
     * @returns CreateCreditPackageResponse
     *
     * @param CreateCreditPackageRequest $request
     *
     * @return CreateCreditPackageResponse
     */
    public function createCreditPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCreditPackageWithOptions($request, $runtime);
    }

    /**
     * Creates a custom image from a cloud phone instance. Then, you can use the image to create more cloud phones with the same configuration.
     *
     * @param request - CreateCustomImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomImageResponse
     *
     * @param CreateCustomImageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCustomImageResponse
     */
    public function createCustomImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->imageName) {
            @$body['ImageName'] = $request->imageName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCustomImage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom image from a cloud phone instance. Then, you can use the image to create more cloud phones with the same configuration.
     *
     * @param request - CreateCustomImageRequest
     *
     * @returns CreateCustomImageResponse
     *
     * @param CreateCustomImageRequest $request
     *
     * @return CreateCustomImageResponse
     */
    public function createCustomImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomImageWithOptions($request, $runtime);
    }

    /**
     * Places an order to purchase an edge smart gateway agent package.
     *
     * @remarks
     * This operation involves billing. Before you call this operation, make sure that you fully understand the [billing methods and pricing](https://www.alibabacloud.com/help/en/ecp/jvs-mobile-billing-instructions) of the Cloud Phone product.
     *
     * @param request - CreateEdgeMobileAgentPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEdgeMobileAgentPackageResponse
     *
     * @param CreateEdgeMobileAgentPackageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateEdgeMobileAgentPackageResponse
     */
    public function createEdgeMobileAgentPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deviceClass) {
            @$query['DeviceClass'] = $request->deviceClass;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEdgeMobileAgentPackage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEdgeMobileAgentPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Places an order to purchase an edge smart gateway agent package.
     *
     * @remarks
     * This operation involves billing. Before you call this operation, make sure that you fully understand the [billing methods and pricing](https://www.alibabacloud.com/help/en/ecp/jvs-mobile-billing-instructions) of the Cloud Phone product.
     *
     * @param request - CreateEdgeMobileAgentPackageRequest
     *
     * @returns CreateEdgeMobileAgentPackageResponse
     *
     * @param CreateEdgeMobileAgentPackageRequest $request
     *
     * @return CreateEdgeMobileAgentPackageResponse
     */
    public function createEdgeMobileAgentPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeMobileAgentPackageWithOptions($request, $runtime);
    }

    /**
     * You can connect to Cloud Phones using the Android Debug Bridge (ADB). ADB lets you manage devices and applications, and transfer files. These operations require high permissions. Because Cloud Phones do not have physical interfaces, you cannot use a USB connection to trigger an authorization dialog box on the device. Therefore, you must configure a key pair before you connect to a Cloud Phone with ADB over a network. This key pair ensures that the device trusts the client and that all operations are secure. You can call the CreateKeyPair operation to create an ADB key pair. The system stores the public key and returns the private key. The private key is in PEM-encoded PKCS#8 format and complies with ADB connection standards. You must securely store the private key.
     *
     * @remarks
     * You can also use the Android Debug Bridge (ADB) tool to create a key pair and then upload it to the Cloud Phone console by calling the [](t2729840.xdita#)operation. This key pair can be used in the same way as a key pair created by the system.
     * Each tenant can have a maximum of 500 key pairs.
     *
     * @param request - CreateKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKeyPairResponse
     *
     * @param CreateKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateKeyPair',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can connect to Cloud Phones using the Android Debug Bridge (ADB). ADB lets you manage devices and applications, and transfer files. These operations require high permissions. Because Cloud Phones do not have physical interfaces, you cannot use a USB connection to trigger an authorization dialog box on the device. Therefore, you must configure a key pair before you connect to a Cloud Phone with ADB over a network. This key pair ensures that the device trusts the client and that all operations are secure. You can call the CreateKeyPair operation to create an ADB key pair. The system stores the public key and returns the private key. The private key is in PEM-encoded PKCS#8 format and complies with ADB connection standards. You must securely store the private key.
     *
     * @remarks
     * You can also use the Android Debug Bridge (ADB) tool to create a key pair and then upload it to the Cloud Phone console by calling the [](t2729840.xdita#)operation. This key pair can be used in the same way as a key pair created by the system.
     * Each tenant can have a maximum of 500 key pairs.
     *
     * @param request - CreateKeyPairRequest
     *
     * @returns CreateKeyPairResponse
     *
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
     * Places an order for a package.
     *
     * @remarks
     * This is a billable operation. Before you call this operation, review the [billing methods and pricing](https://help.aliyun.com/zh/ecp/jvs-mobile-billing-instructions?spm=a2c4g.11174283.help-menu-254658.d_0_1_1.23695732Cpmwbs) of Wuying Cloud Phone.
     *
     * @param request - CreateMobileAgentPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMobileAgentPackageResponse
     *
     * @param CreateMobileAgentPackageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateMobileAgentPackageResponse
     */
    public function createMobileAgentPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->creditAmount) {
            @$query['CreditAmount'] = $request->creditAmount;
        }

        if (null !== $request->creditConfig) {
            @$query['CreditConfig'] = $request->creditConfig;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->mobileAgentPackageSpec) {
            @$query['MobileAgentPackageSpec'] = $request->mobileAgentPackageSpec;
        }

        if (null !== $request->packageSpecId) {
            @$query['PackageSpecId'] = $request->packageSpecId;
        }

        if (null !== $request->paidCallbackUrl) {
            @$query['PaidCallbackUrl'] = $request->paidCallbackUrl;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMobileAgentPackage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMobileAgentPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Places an order for a package.
     *
     * @remarks
     * This is a billable operation. Before you call this operation, review the [billing methods and pricing](https://help.aliyun.com/zh/ecp/jvs-mobile-billing-instructions?spm=a2c4g.11174283.help-menu-254658.d_0_1_1.23695732Cpmwbs) of Wuying Cloud Phone.
     *
     * @param request - CreateMobileAgentPackageRequest
     *
     * @returns CreateMobileAgentPackageResponse
     *
     * @param CreateMobileAgentPackageRequest $request
     *
     * @return CreateMobileAgentPackageResponse
     */
    public function createMobileAgentPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMobileAgentPackageWithOptions($request, $runtime);
    }

    /**
     * Creates a policy that applies unified settings to cloud phones. These settings include features such as network redirection, watermarks, resolution, and the clipboard.
     *
     * @param tmpReq - CreatePolicyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyGroupResponse
     *
     * @param CreatePolicyGroupRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePolicyGroupResponse
     */
    public function createPolicyGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePolicyGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->netRedirectPolicy) {
            $request->netRedirectPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->netRedirectPolicy, 'NetRedirectPolicy', 'json');
        }

        if (null !== $tmpReq->watermark) {
            $request->watermarkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->watermark, 'Watermark', 'json');
        }

        $body = [];
        if (null !== $request->cameraRedirect) {
            @$body['CameraRedirect'] = $request->cameraRedirect;
        }

        if (null !== $request->clipboard) {
            @$body['Clipboard'] = $request->clipboard;
        }

        if (null !== $request->html5FileTransfer) {
            @$body['Html5FileTransfer'] = $request->html5FileTransfer;
        }

        if (null !== $request->localDrive) {
            @$body['LocalDrive'] = $request->localDrive;
        }

        if (null !== $request->lockResolution) {
            @$body['LockResolution'] = $request->lockResolution;
        }

        if (null !== $request->netRedirectPolicyShrink) {
            @$body['NetRedirectPolicy'] = $request->netRedirectPolicyShrink;
        }

        if (null !== $request->policyGroupName) {
            @$body['PolicyGroupName'] = $request->policyGroupName;
        }

        if (null !== $request->policyType) {
            @$body['PolicyType'] = $request->policyType;
        }

        if (null !== $request->resolutionHeight) {
            @$body['ResolutionHeight'] = $request->resolutionHeight;
        }

        if (null !== $request->resolutionWidth) {
            @$body['ResolutionWidth'] = $request->resolutionWidth;
        }

        if (null !== $request->watermarkShrink) {
            @$body['Watermark'] = $request->watermarkShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePolicyGroup',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a policy that applies unified settings to cloud phones. These settings include features such as network redirection, watermarks, resolution, and the clipboard.
     *
     * @param request - CreatePolicyGroupRequest
     *
     * @returns CreatePolicyGroupResponse
     *
     * @param CreatePolicyGroupRequest $request
     *
     * @return CreatePolicyGroupResponse
     */
    public function createPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * This asynchronous API operation generates a screenshot of a cloud phone.
     *
     * @remarks
     * This operation creates a screenshot of a cloud phone and uploads it to the default Object Storage Service (OSS) bucket. The operation returns a task ID. You can then call the DescribeTasks operation to retrieve the download link for the screenshot.
     *
     * @param request - CreateScreenshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScreenshotResponse
     *
     * @param CreateScreenshotRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateScreenshotResponse
     */
    public function createScreenshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIdList) {
            @$query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }

        if (null !== $request->ossBucketName) {
            @$query['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->screenshotId) {
            @$query['ScreenshotId'] = $request->screenshotId;
        }

        if (null !== $request->skipCheckPolicyConfig) {
            @$query['SkipCheckPolicyConfig'] = $request->skipCheckPolicyConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScreenshot',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScreenshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This asynchronous API operation generates a screenshot of a cloud phone.
     *
     * @remarks
     * This operation creates a screenshot of a cloud phone and uploads it to the default Object Storage Service (OSS) bucket. The operation returns a task ID. You can then call the DescribeTasks operation to retrieve the download link for the screenshot.
     *
     * @param request - CreateScreenshotRequest
     *
     * @returns CreateScreenshotResponse
     *
     * @param CreateScreenshotRequest $request
     *
     * @return CreateScreenshotResponse
     */
    public function createScreenshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScreenshotWithOptions($request, $runtime);
    }

    /**
     * Creates a system property template. The key-value pairs defined in the template are sent to cloud phones and set as properties in their Android systems using the setprop command. APKs or related programs can then read these property values.
     *
     * @param tmpReq - CreateSystemPropertyTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSystemPropertyTemplateResponse
     *
     * @param CreateSystemPropertyTemplateRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateSystemPropertyTemplateResponse
     */
    public function createSystemPropertyTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSystemPropertyTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->systemPropertyInfo) {
            $request->systemPropertyInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->systemPropertyInfo, 'SystemPropertyInfo', 'json');
        }

        $query = [];
        if (null !== $request->enableAuto) {
            @$query['EnableAuto'] = $request->enableAuto;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->systemPropertyInfoShrink) {
            @$query['SystemPropertyInfo'] = $request->systemPropertyInfoShrink;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSystemPropertyTemplate',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSystemPropertyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a system property template. The key-value pairs defined in the template are sent to cloud phones and set as properties in their Android systems using the setprop command. APKs or related programs can then read these property values.
     *
     * @param request - CreateSystemPropertyTemplateRequest
     *
     * @returns CreateSystemPropertyTemplateResponse
     *
     * @param CreateSystemPropertyTemplateRequest $request
     *
     * @return CreateSystemPropertyTemplateResponse
     */
    public function createSystemPropertyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSystemPropertyTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes an Android instance group. All instances in the group are also deleted. This operation cannot be undone. Proceed with caution.
     *
     * @remarks
     * Pay-as-you-go instance groups can be deleted at any time.
     * Subscription instance groups can be deleted only after they expire.
     *
     * @param request - DeleteAndroidInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAndroidInstanceGroupResponse
     *
     * @param DeleteAndroidInstanceGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteAndroidInstanceGroupResponse
     */
    public function deleteAndroidInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceGroupIds) {
            @$query['InstanceGroupIds'] = $request->instanceGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAndroidInstanceGroup',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Android instance group. All instances in the group are also deleted. This operation cannot be undone. Proceed with caution.
     *
     * @remarks
     * Pay-as-you-go instance groups can be deleted at any time.
     * Subscription instance groups can be deleted only after they expire.
     *
     * @param request - DeleteAndroidInstanceGroupRequest
     *
     * @returns DeleteAndroidInstanceGroupResponse
     *
     * @param DeleteAndroidInstanceGroupRequest $request
     *
     * @return DeleteAndroidInstanceGroupResponse
     */
    public function deleteAndroidInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAndroidInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes an application. Before you delete an application, make sure that the application is not installed on any instances.
     *
     * @param request - DeleteAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppsResponse
     *
     * @param DeleteAppsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteAppsResponse
     */
    public function deleteAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIdList) {
            @$query['AppIdList'] = $request->appIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApps',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application. Before you delete an application, make sure that the application is not installed on any instances.
     *
     * @param request - DeleteAppsRequest
     *
     * @returns DeleteAppsResponse
     *
     * @param DeleteAppsRequest $request
     *
     * @return DeleteAppsResponse
     */
    public function deleteApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppsWithOptions($request, $runtime);
    }

    /**
     * Deletes a batch of backup files.
     *
     * @param request - DeleteBackupFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupFileResponse
     *
     * @param DeleteBackupFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteBackupFileResponse
     */
    public function deleteBackupFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupFileIdList) {
            @$query['BackupFileIdList'] = $request->backupFileIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackupFile',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a batch of backup files.
     *
     * @param request - DeleteBackupFileRequest
     *
     * @returns DeleteBackupFileResponse
     *
     * @param DeleteBackupFileRequest $request
     *
     * @return DeleteBackupFileResponse
     */
    public function deleteBackupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupFileWithOptions($request, $runtime);
    }

    /**
     * Deletes a cloud phone matrix.
     *
     * @remarks
     * Before you proceed, make sure that the cloud phone matrix that you want to delete expired.
     *
     * @param request - DeleteCloudPhoneNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudPhoneNodesResponse
     *
     * @param DeleteCloudPhoneNodesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCloudPhoneNodesResponse
     */
    public function deleteCloudPhoneNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->nodeIds) {
            @$body['NodeIds'] = $request->nodeIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudPhoneNodes',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudPhoneNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a cloud phone matrix.
     *
     * @remarks
     * Before you proceed, make sure that the cloud phone matrix that you want to delete expired.
     *
     * @param request - DeleteCloudPhoneNodesRequest
     *
     * @returns DeleteCloudPhoneNodesResponse
     *
     * @param DeleteCloudPhoneNodesRequest $request
     *
     * @return DeleteCloudPhoneNodesResponse
     */
    public function deleteCloudPhoneNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudPhoneNodesWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom image.
     *
     * @remarks
     * You cannot delete an image that is currently in use by an instance group.
     *
     * @param tmpReq - DeleteImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImagesResponse
     *
     * @param DeleteImagesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteImagesResponse
     */
    public function deleteImagesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteImagesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->imageIds) {
            $request->imageIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->imageIds, 'ImageIds', 'json');
        }

        $body = [];
        if (null !== $request->imageIdsShrink) {
            @$body['ImageIds'] = $request->imageIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteImages',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom image.
     *
     * @remarks
     * You cannot delete an image that is currently in use by an instance group.
     *
     * @param request - DeleteImagesRequest
     *
     * @returns DeleteImagesResponse
     *
     * @param DeleteImagesRequest $request
     *
     * @return DeleteImagesResponse
     */
    public function deleteImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImagesWithOptions($request, $runtime);
    }

    /**
     * Deletes Android Debug Bridge (ADB) key pairs.
     *
     * @remarks
     *   If a cloud phone instance is currently associated with the ADB key pair you intend to delete, the ADB key pair cannot be deleted.
     * *   Once an ADB key pair is deleted, it cannot be retrieved or queried by using the DescribeKeyPairs operation.
     *
     * @param request - DeleteKeyPairsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKeyPairsResponse
     *
     * @param DeleteKeyPairsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyPairIds) {
            @$query['KeyPairIds'] = $request->keyPairIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteKeyPairs',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes Android Debug Bridge (ADB) key pairs.
     *
     * @remarks
     *   If a cloud phone instance is currently associated with the ADB key pair you intend to delete, the ADB key pair cannot be deleted.
     * *   Once an ADB key pair is deleted, it cannot be retrieved or queried by using the DescribeKeyPairs operation.
     *
     * @param request - DeleteKeyPairsRequest
     *
     * @returns DeleteKeyPairsResponse
     *
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
     * Deletes a node package.
     *
     * @param request - DeleteMobileAgentPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMobileAgentPackageResponse
     *
     * @param DeleteMobileAgentPackageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteMobileAgentPackageResponse
     */
    public function deleteMobileAgentPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->packageIds) {
            @$query['PackageIds'] = $request->packageIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMobileAgentPackage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMobileAgentPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a node package.
     *
     * @param request - DeleteMobileAgentPackageRequest
     *
     * @returns DeleteMobileAgentPackageResponse
     *
     * @param DeleteMobileAgentPackageRequest $request
     *
     * @return DeleteMobileAgentPackageResponse
     */
    public function deleteMobileAgentPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMobileAgentPackageWithOptions($request, $runtime);
    }

    /**
     * Deletes one or more policy groups.
     *
     * @remarks
     * A policy group cannot be deleted if it is associated with an instance group.
     *
     * @param request - DeletePolicyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyGroupResponse
     *
     * @param DeletePolicyGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeletePolicyGroupResponse
     */
    public function deletePolicyGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyGroupIds) {
            @$query['PolicyGroupIds'] = $request->policyGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicyGroup',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more policy groups.
     *
     * @remarks
     * A policy group cannot be deleted if it is associated with an instance group.
     *
     * @param request - DeletePolicyGroupRequest
     *
     * @returns DeletePolicyGroupResponse
     *
     * @param DeletePolicyGroupRequest $request
     *
     * @return DeletePolicyGroupResponse
     */
    public function deletePolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes system property templates.
     *
     * @remarks
     * Deleting property templates does not affect instances for which you have already called the [](t3010125.xdita#)operation to send templates.
     *
     * @param request - DeleteSystemPropertyTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSystemPropertyTemplatesResponse
     *
     * @param DeleteSystemPropertyTemplatesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteSystemPropertyTemplatesResponse
     */
    public function deleteSystemPropertyTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateIds) {
            @$query['TemplateIds'] = $request->templateIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSystemPropertyTemplates',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSystemPropertyTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes system property templates.
     *
     * @remarks
     * Deleting property templates does not affect instances for which you have already called the [](t3010125.xdita#)operation to send templates.
     *
     * @param request - DeleteSystemPropertyTemplatesRequest
     *
     * @returns DeleteSystemPropertyTemplatesResponse
     *
     * @param DeleteSystemPropertyTemplatesRequest $request
     *
     * @return DeleteSystemPropertyTemplatesResponse
     */
    public function deleteSystemPropertyTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSystemPropertyTemplatesWithOptions($request, $runtime);
    }

    /**
     * Retrieves details of specified Agent Tasks.
     *
     * @param request - DescribeAgentTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAgentTaskResponse
     *
     * @param DescribeAgentTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAgentTaskResponse
     */
    public function describeAgentTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAgentTask',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAgentTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves details of specified Agent Tasks.
     *
     * @param request - DescribeAgentTaskRequest
     *
     * @returns DescribeAgentTaskResponse
     *
     * @param DescribeAgentTaskRequest $request
     *
     * @return DescribeAgentTaskResponse
     */
    public function describeAgentTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgentTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a cloud phone instance group.
     *
     * @param request - DescribeAndroidInstanceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAndroidInstanceGroupsResponse
     *
     * @param DescribeAndroidInstanceGroupsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAndroidInstanceGroupsResponse
     */
    public function describeAndroidInstanceGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->instanceGroupIds) {
            @$query['InstanceGroupIds'] = $request->instanceGroupIds;
        }

        if (null !== $request->instanceGroupName) {
            @$query['InstanceGroupName'] = $request->instanceGroupName;
        }

        if (null !== $request->instanceVersion) {
            @$query['InstanceVersion'] = $request->instanceVersion;
        }

        if (null !== $request->keyPairId) {
            @$query['KeyPairId'] = $request->keyPairId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->saleMode) {
            @$query['SaleMode'] = $request->saleMode;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAndroidInstanceGroups',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAndroidInstanceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a cloud phone instance group.
     *
     * @param request - DescribeAndroidInstanceGroupsRequest
     *
     * @returns DescribeAndroidInstanceGroupsResponse
     *
     * @param DescribeAndroidInstanceGroupsRequest $request
     *
     * @return DescribeAndroidInstanceGroupsResponse
     */
    public function describeAndroidInstanceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAndroidInstanceGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of cloud phone instances.
     *
     * @param request - DescribeAndroidInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAndroidInstancesResponse
     *
     * @param DescribeAndroidInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAndroidInstancesResponse
     */
    public function describeAndroidInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIds) {
            @$query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->androidInstanceName) {
            @$query['AndroidInstanceName'] = $request->androidInstanceName;
        }

        if (null !== $request->appManagePolicyId) {
            @$query['AppManagePolicyId'] = $request->appManagePolicyId;
        }

        if (null !== $request->authorizedUserId) {
            @$query['AuthorizedUserId'] = $request->authorizedUserId;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->instanceGroupId) {
            @$query['InstanceGroupId'] = $request->instanceGroupId;
        }

        if (null !== $request->instanceGroupIds) {
            @$query['InstanceGroupIds'] = $request->instanceGroupIds;
        }

        if (null !== $request->instanceGroupName) {
            @$query['InstanceGroupName'] = $request->instanceGroupName;
        }

        if (null !== $request->instanceVersion) {
            @$query['InstanceVersion'] = $request->instanceVersion;
        }

        if (null !== $request->keyPairId) {
            @$query['KeyPairId'] = $request->keyPairId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->nodeName) {
            @$query['NodeName'] = $request->nodeName;
        }

        if (null !== $request->officeSiteIds) {
            @$query['OfficeSiteIds'] = $request->officeSiteIds;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->qosRuleIds) {
            @$query['QosRuleIds'] = $request->qosRuleIds;
        }

        if (null !== $request->saleMode) {
            @$query['SaleMode'] = $request->saleMode;
        }

        if (null !== $request->sortKey) {
            @$query['SortKey'] = $request->sortKey;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAndroidInstances',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAndroidInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of cloud phone instances.
     *
     * @param request - DescribeAndroidInstancesRequest
     *
     * @returns DescribeAndroidInstancesResponse
     *
     * @param DescribeAndroidInstancesRequest $request
     *
     * @return DescribeAndroidInstancesResponse
     */
    public function describeAndroidInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAndroidInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries applications.
     *
     * @param request - DescribeAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppsResponse
     *
     * @param DescribeAppsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeAppsResponse
     */
    public function describeAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIdList) {
            @$query['AppIdList'] = $request->appIdList;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->installationStatus) {
            @$query['InstallationStatus'] = $request->installationStatus;
        }

        if (null !== $request->MD5) {
            @$query['MD5'] = $request->MD5;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApps',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries applications.
     *
     * @param request - DescribeAppsRequest
     *
     * @returns DescribeAppsResponse
     *
     * @param DescribeAppsRequest $request
     *
     * @return DescribeAppsResponse
     */
    public function describeApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of backup files.
     *
     * @remarks
     * Currently, only backup files generated by cloud phones can be stored in Object Storage Service (OSS).
     *
     * @param request - DescribeBackupFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupFilesResponse
     *
     * @param DescribeBackupFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupFilesResponse
     */
    public function describeBackupFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceId) {
            @$query['AndroidInstanceId'] = $request->androidInstanceId;
        }

        if (null !== $request->androidInstanceName) {
            @$query['AndroidInstanceName'] = $request->androidInstanceName;
        }

        if (null !== $request->backupAll) {
            @$query['BackupAll'] = $request->backupAll;
        }

        if (null !== $request->backupFileId) {
            @$query['BackupFileId'] = $request->backupFileId;
        }

        if (null !== $request->backupFileName) {
            @$query['BackupFileName'] = $request->backupFileName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->instanceGroupId) {
            @$query['InstanceGroupId'] = $request->instanceGroupId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->saleMode) {
            @$query['SaleMode'] = $request->saleMode;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->statusList) {
            @$query['StatusList'] = $request->statusList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupFiles',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of backup files.
     *
     * @remarks
     * Currently, only backup files generated by cloud phones can be stored in Object Storage Service (OSS).
     *
     * @param request - DescribeBackupFilesRequest
     *
     * @returns DescribeBackupFilesResponse
     *
     * @param DescribeBackupFilesRequest $request
     *
     * @return DescribeBackupFilesResponse
     */
    public function describeBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupFilesWithOptions($request, $runtime);
    }

    /**
     * Queries information about buckets. This operation returns only the buckets whose names start with `cloudphone-saved-bucket-`.
     *
     * @remarks
     * Currently, you can save backup files generated by Cloud Phone only to Object Storage Service (OSS).
     *
     * @param request - DescribeBucketsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBucketsResponse
     *
     * @param DescribeBucketsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBucketsResponse
     */
    public function describeBucketsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBuckets',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBucketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about buckets. This operation returns only the buckets whose names start with `cloudphone-saved-bucket-`.
     *
     * @remarks
     * Currently, you can save backup files generated by Cloud Phone only to Object Storage Service (OSS).
     *
     * @param request - DescribeBucketsRequest
     *
     * @returns DescribeBucketsResponse
     *
     * @param DescribeBucketsRequest $request
     *
     * @return DescribeBucketsResponse
     */
    public function describeBuckets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBucketsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of Cloud Phone matrices.
     * In the Cloud Phone service, a matrix (Cloud Phone Server) is a logical resource management unit that represents a physical server instance. This physical server can be partitioned into multiple independent Cloud Phone instances that share the underlying computing, storage, and network resources of the matrix. Creating a matrix is equivalent to provisioning a physical server on which you can create Cloud Phone instances. The number of instances that you can create varies depending on the configuration.
     *
     * @param request - DescribeCloudPhoneNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudPhoneNodesResponse
     *
     * @param DescribeCloudPhoneNodesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCloudPhoneNodesResponse
     */
    public function describeCloudPhoneNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidthPackageId) {
            @$query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeIds) {
            @$query['NodeIds'] = $request->nodeIds;
        }

        if (null !== $request->nodeName) {
            @$query['NodeName'] = $request->nodeName;
        }

        if (null !== $request->nodeNameList) {
            @$query['NodeNameList'] = $request->nodeNameList;
        }

        if (null !== $request->serverType) {
            @$query['ServerType'] = $request->serverType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudPhoneNodes',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudPhoneNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of Cloud Phone matrices.
     * In the Cloud Phone service, a matrix (Cloud Phone Server) is a logical resource management unit that represents a physical server instance. This physical server can be partitioned into multiple independent Cloud Phone instances that share the underlying computing, storage, and network resources of the matrix. Creating a matrix is equivalent to provisioning a physical server on which you can create Cloud Phone instances. The number of instances that you can create varies depending on the configuration.
     *
     * @param request - DescribeCloudPhoneNodesRequest
     *
     * @returns DescribeCloudPhoneNodesResponse
     *
     * @param DescribeCloudPhoneNodesRequest $request
     *
     * @return DescribeCloudPhoneNodesResponse
     */
    public function describeCloudPhoneNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudPhoneNodesWithOptions($request, $runtime);
    }

    /**
     * Queries all change records of credits.
     *
     * @param request - DescribeCreditDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCreditDetailResponse
     *
     * @param DescribeCreditDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCreditDetailResponse
     */
    public function describeCreditDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->packageIds) {
            @$query['PackageIds'] = $request->packageIds;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCreditDetail',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCreditDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all change records of credits.
     *
     * @param request - DescribeCreditDetailRequest
     *
     * @returns DescribeCreditDetailResponse
     *
     * @param DescribeCreditDetailRequest $request
     *
     * @return DescribeCreditDetailResponse
     */
    public function describeCreditDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCreditDetailWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of one or more credit packages.
     *
     * @param request - DescribeCreditPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCreditPackageResponse
     *
     * @param DescribeCreditPackageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCreditPackageResponse
     */
    public function describeCreditPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creditPackageId) {
            @$query['CreditPackageId'] = $request->creditPackageId;
        }

        if (null !== $request->creditPackageStatus) {
            @$query['CreditPackageStatus'] = $request->creditPackageStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCreditPackage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCreditPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of one or more credit packages.
     *
     * @param request - DescribeCreditPackageRequest
     *
     * @returns DescribeCreditPackageResponse
     *
     * @param DescribeCreditPackageRequest $request
     *
     * @return DescribeCreditPackageResponse
     */
    public function describeCreditPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCreditPackageWithOptions($request, $runtime);
    }

    /**
     * Queries the display settings.
     *
     * @param request - DescribeDisplayConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDisplayConfigResponse
     *
     * @param DescribeDisplayConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDisplayConfigResponse
     */
    public function describeDisplayConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->androidInstanceIds) {
            @$body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDisplayConfig',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDisplayConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the display settings.
     *
     * @param request - DescribeDisplayConfigRequest
     *
     * @returns DescribeDisplayConfigResponse
     *
     * @param DescribeDisplayConfigRequest $request
     *
     * @return DescribeDisplayConfigResponse
     */
    public function describeDisplayConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisplayConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the details of edge agent packages.
     *
     * @param request - DescribeEdgeMobileAgentPackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEdgeMobileAgentPackagesResponse
     *
     * @param DescribeEdgeMobileAgentPackagesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeEdgeMobileAgentPackagesResponse
     */
    public function describeEdgeMobileAgentPackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceClass) {
            @$query['DeviceClass'] = $request->deviceClass;
        }

        if (null !== $request->licenseKeys) {
            @$query['LicenseKeys'] = $request->licenseKeys;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->packageIds) {
            @$query['PackageIds'] = $request->packageIds;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEdgeMobileAgentPackages',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEdgeMobileAgentPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of edge agent packages.
     *
     * @param request - DescribeEdgeMobileAgentPackagesRequest
     *
     * @returns DescribeEdgeMobileAgentPackagesResponse
     *
     * @param DescribeEdgeMobileAgentPackagesRequest $request
     *
     * @return DescribeEdgeMobileAgentPackagesResponse
     */
    public function describeEdgeMobileAgentPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEdgeMobileAgentPackagesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of available images.
     *
     * @param request - DescribeImageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImageListResponse
     *
     * @param DescribeImageListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeImageListResponse
     */
    public function describeImageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageBizTags) {
            @$query['ImageBizTags'] = $request->imageBizTags;
        }

        if (null !== $request->imagePackageType) {
            @$query['ImagePackageType'] = $request->imagePackageType;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->systemType) {
            @$query['SystemType'] = $request->systemType;
        }

        $body = [];
        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$body['ImageName'] = $request->imageName;
        }

        if (null !== $request->imageType) {
            @$body['ImageType'] = $request->imageType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeImageList',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of available images.
     *
     * @param request - DescribeImageListRequest
     *
     * @returns DescribeImageListResponse
     *
     * @param DescribeImageListRequest $request
     *
     * @return DescribeImageListResponse
     */
    public function describeImageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageListWithOptions($request, $runtime);
    }

    /**
     * Queries the execution results of a command run by calling the RunCommand operation.
     *
     * @remarks
     * This operation is being deprecated. Use the [](t2740507.xdita#)operation to query the progress and results of a command execution.
     *
     * @param request - DescribeInvocationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInvocationsResponse
     *
     * @param DescribeInvocationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInvocationsResponse
     */
    public function describeInvocationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->invocationId) {
            @$query['InvocationId'] = $request->invocationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInvocations',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInvocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution results of a command run by calling the RunCommand operation.
     *
     * @remarks
     * This operation is being deprecated. Use the [](t2740507.xdita#)operation to query the progress and results of a command execution.
     *
     * @param request - DescribeInvocationsRequest
     *
     * @returns DescribeInvocationsResponse
     *
     * @param DescribeInvocationsRequest $request
     *
     * @return DescribeInvocationsResponse
     */
    public function describeInvocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationsWithOptions($request, $runtime);
    }

    /**
     * Retrieves details of JVS instances.
     *
     * @param request - DescribeJVSInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJVSInstanceResponse
     *
     * @param DescribeJVSInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeJVSInstanceResponse
     */
    public function describeJVSInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJVSInstance',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJVSInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves details of JVS instances.
     *
     * @param request - DescribeJVSInstanceRequest
     *
     * @returns DescribeJVSInstanceResponse
     *
     * @param DescribeJVSInstanceRequest $request
     *
     * @return DescribeJVSInstanceResponse
     */
    public function describeJVSInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJVSInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries one or more key pairs.
     *
     * @param request - DescribeKeyPairsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKeyPairsResponse
     *
     * @param DescribeKeyPairsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeKeyPairsResponse
     */
    public function describeKeyPairsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyPairIds) {
            @$query['KeyPairIds'] = $request->keyPairIds;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeKeyPairs',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more key pairs.
     *
     * @param request - DescribeKeyPairsRequest
     *
     * @returns DescribeKeyPairsResponse
     *
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
     * Queries the latest monitoring data for an instance or a matrix. You can query metrics such as CPU, memory, disk, and network.
     *
     * @param request - DescribeMetricLastRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricLastResponse
     *
     * @param DescribeMetricLastRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricLastResponse
     */
    public function describeMetricLastWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $body = [];
        if (null !== $request->androidInstanceIds) {
            @$body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->length) {
            @$body['Length'] = $request->length;
        }

        if (null !== $request->metricNames) {
            @$body['MetricNames'] = $request->metricNames;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricLast',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricLastResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the latest monitoring data for an instance or a matrix. You can query metrics such as CPU, memory, disk, and network.
     *
     * @param request - DescribeMetricLastRequest
     *
     * @returns DescribeMetricLastResponse
     *
     * @param DescribeMetricLastRequest $request
     *
     * @return DescribeMetricLastResponse
     */
    public function describeMetricLast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricLastWithOptions($request, $runtime);
    }

    /**
     * Queries monitoring data for specified metrics, such as network bandwidth.
     *
     * @param request - DescribeMetricListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricListResponse
     *
     * @param DescribeMetricListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricListResponse
     */
    public function describeMetricListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->androidInstanceIds) {
            @$body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$body['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->length) {
            @$body['Length'] = $request->length;
        }

        if (null !== $request->metricNames) {
            @$body['MetricNames'] = $request->metricNames;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->processInfos) {
            @$body['ProcessInfos'] = $request->processInfos;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricList',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries monitoring data for specified metrics, such as network bandwidth.
     *
     * @param request - DescribeMetricListRequest
     *
     * @returns DescribeMetricListResponse
     *
     * @param DescribeMetricListRequest $request
     *
     * @return DescribeMetricListResponse
     */
    public function describeMetricList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricListWithOptions($request, $runtime);
    }

    /**
     * Queries the latest monitoring data for metrics such as instance network bandwidth and returns the results in a sorted list.
     *
     * @param request - DescribeMetricTopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricTopResponse
     *
     * @param DescribeMetricTopRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeMetricTopResponse
     */
    public function describeMetricTopWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->androidInstanceIds) {
            @$body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$body['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->length) {
            @$body['Length'] = $request->length;
        }

        if (null !== $request->metricNames) {
            @$body['MetricNames'] = $request->metricNames;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricTop',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricTopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the latest monitoring data for metrics such as instance network bandwidth and returns the results in a sorted list.
     *
     * @param request - DescribeMetricTopRequest
     *
     * @returns DescribeMetricTopResponse
     *
     * @param DescribeMetricTopRequest $request
     *
     * @return DescribeMetricTopResponse
     */
    public function describeMetricTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricTopWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of one or more node packages.
     *
     * @param request - DescribeMobileAgentPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMobileAgentPackageResponse
     *
     * @param DescribeMobileAgentPackageRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMobileAgentPackageResponse
     */
    public function describeMobileAgentPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->packageIds) {
            @$query['PackageIds'] = $request->packageIds;
        }

        if (null !== $request->packageSpec) {
            @$query['PackageSpec'] = $request->packageSpec;
        }

        if (null !== $request->packageStatus) {
            @$query['PackageStatus'] = $request->packageStatus;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMobileAgentPackage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMobileAgentPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of one or more node packages.
     *
     * @param request - DescribeMobileAgentPackageRequest
     *
     * @returns DescribeMobileAgentPackageResponse
     *
     * @param DescribeMobileAgentPackageRequest $request
     *
     * @return DescribeMobileAgentPackageResponse
     */
    public function describeMobileAgentPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMobileAgentPackageWithOptions($request, $runtime);
    }

    /**
     * Query available regions.
     *
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
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->saleMode) {
            @$query['SaleMode'] = $request->saleMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query available regions.
     *
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
     * Queries the available specifications for cloud phones. This information is required to create an instance. For the cloud phone matrix mode, this operation also returns the minimum and maximum number of instances allowed per matrix.
     *
     * @param request - DescribeSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSpecResponse
     *
     * @param DescribeSpecRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeSpecResponse
     */
    public function describeSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->matrixSpec) {
            @$query['MatrixSpec'] = $request->matrixSpec;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->saleMode) {
            @$query['SaleMode'] = $request->saleMode;
        }

        if (null !== $request->specIds) {
            @$query['SpecIds'] = $request->specIds;
        }

        if (null !== $request->specStatus) {
            @$query['SpecStatus'] = $request->specStatus;
        }

        if (null !== $request->specType) {
            @$query['SpecType'] = $request->specType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSpec',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available specifications for cloud phones. This information is required to create an instance. For the cloud phone matrix mode, this operation also returns the minimum and maximum number of instances allowed per matrix.
     *
     * @param request - DescribeSpecRequest
     *
     * @returns DescribeSpecResponse
     *
     * @param DescribeSpecRequest $request
     *
     * @return DescribeSpecResponse
     */
    public function describeSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSpecWithOptions($request, $runtime);
    }

    /**
     * Describes system property templates.
     *
     * @param request - DescribeSystemPropertyTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSystemPropertyTemplatesResponse
     *
     * @param DescribeSystemPropertyTemplatesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSystemPropertyTemplatesResponse
     */
    public function describeSystemPropertyTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->templateIds) {
            @$query['TemplateIds'] = $request->templateIds;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSystemPropertyTemplates',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSystemPropertyTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Describes system property templates.
     *
     * @param request - DescribeSystemPropertyTemplatesRequest
     *
     * @returns DescribeSystemPropertyTemplatesResponse
     *
     * @param DescribeSystemPropertyTemplatesRequest $request
     *
     * @return DescribeSystemPropertyTemplatesResponse
     */
    public function describeSystemPropertyTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemPropertyTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries tasks created for a cloud phone instance. Many operations on cloud phones—such as creating, starting, or stopping them—are asynchronous. When you initiate an operation, the system returns a `Task ID` that you can use to track its progress and final result. You can call this API to retrieve a list of all tasks and their execution statuses.
     *
     * @remarks
     * - You can call the DescribeTasks operation to query the tasks created for one or more cloud phone instances.
     * - The system currently supports various tasks, including starting, stopping, restarting, and resetting cloud phone instances; backing up and restoring data; installing apps; and executing remote commands.
     * - You can use the Level field to specify the type of task. If Level is set to 1, it represents a batch task. If Level is set to 2, it represents an instance-level task.
     * **Example**
     * Assume you restart two cloud phone instances with the instance IDs acp-25nt4kk9whhok\\*\\*\\*\\* and acp-j2taq887orj8l\\*\\*\\*\\*, and the returned request ID is B8ED2BA9-0C6A-5643-818F-B5D60A64\\*\\*\\*\\*. If you want to check the operation outcomes of the two cloud phone instances, you can call the DescribeTasks operation. You need to set the InvokeId request parameter to B8ED2BA9-0C6A-5643-818F-B5D60A64\\*\\*\\*\\*. If you only want to check the cloud phone instance with the ID acp-25nt4kk9whhok\\*\\*\\*\\*, you must set the ParentTaskId request parameter to the ID of the batch task and the AndroidInstanceId request parameter to acp-25nt4kk9whhok\\*\\*\\*\\* when calling the DescribeTasks operation.
     *
     * @param request - DescribeTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTasksResponse
     *
     * @param DescribeTasksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->invokeId) {
            @$query['InvokeId'] = $request->invokeId;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->param) {
            @$query['Param'] = $request->param;
        }

        if (null !== $request->parentTaskId) {
            @$query['ParentTaskId'] = $request->parentTaskId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        if (null !== $request->taskStatus) {
            @$query['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->taskStatuses) {
            @$query['TaskStatuses'] = $request->taskStatuses;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->taskTypes) {
            @$query['TaskTypes'] = $request->taskTypes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTasks',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tasks created for a cloud phone instance. Many operations on cloud phones—such as creating, starting, or stopping them—are asynchronous. When you initiate an operation, the system returns a `Task ID` that you can use to track its progress and final result. You can call this API to retrieve a list of all tasks and their execution statuses.
     *
     * @remarks
     * - You can call the DescribeTasks operation to query the tasks created for one or more cloud phone instances.
     * - The system currently supports various tasks, including starting, stopping, restarting, and resetting cloud phone instances; backing up and restoring data; installing apps; and executing remote commands.
     * - You can use the Level field to specify the type of task. If Level is set to 1, it represents a batch task. If Level is set to 2, it represents an instance-level task.
     * **Example**
     * Assume you restart two cloud phone instances with the instance IDs acp-25nt4kk9whhok\\*\\*\\*\\* and acp-j2taq887orj8l\\*\\*\\*\\*, and the returned request ID is B8ED2BA9-0C6A-5643-818F-B5D60A64\\*\\*\\*\\*. If you want to check the operation outcomes of the two cloud phone instances, you can call the DescribeTasks operation. You need to set the InvokeId request parameter to B8ED2BA9-0C6A-5643-818F-B5D60A64\\*\\*\\*\\*. If you only want to check the cloud phone instance with the ID acp-25nt4kk9whhok\\*\\*\\*\\*, you must set the ParentTaskId request parameter to the ID of the batch task and the AndroidInstanceId request parameter to acp-25nt4kk9whhok\\*\\*\\*\\* when calling the DescribeTasks operation.
     *
     * @param request - DescribeTasksRequest
     *
     * @returns DescribeTasksResponse
     *
     * @param DescribeTasksRequest $request
     *
     * @return DescribeTasksResponse
     */
    public function describeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($request, $runtime);
    }

    /**
     * Detaches an Android Debug Bridge (ADB) key pair from one or more cloud phone instances.
     *
     * @remarks
     * - After a key pair is detached, the cloud phone no longer stores a valid ADB public key. As a result, ADB connections may fail to authenticate.
     *
     * @param request - DetachKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachKeyPairResponse
     *
     * @param DetachKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetachKeyPairResponse
     */
    public function detachKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->keyPairId) {
            @$query['KeyPairId'] = $request->keyPairId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachKeyPair',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches an Android Debug Bridge (ADB) key pair from one or more cloud phone instances.
     *
     * @remarks
     * - After a key pair is detached, the cloud phone no longer stores a valid ADB public key. As a result, ADB connections may fail to authenticate.
     *
     * @param request - DetachKeyPairRequest
     *
     * @returns DetachKeyPairResponse
     *
     * @param DetachKeyPairRequest $request
     *
     * @return DetachKeyPairResponse
     */
    public function detachKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachKeyPairWithOptions($request, $runtime);
    }

    /**
     * Disconnects a connected instance or disassociates an instance that is associated with another user.
     *
     * @remarks
     * Connections to instances are established using the [](t2848888.xdita#). After a connection is closed with `session.stop()`, the system maintains the user-instance association for 5 minutes. During this time, other users cannot connect. The `DisconnectAndroidInstance` operation lets you disassociate the instance immediately.
     * <props="china">If you use the Cloud Phone Matrix Edition and the instance stream pattern is collaborative mode, you can specify `EndUserId` to disconnect a specific user and invalidate the corresponding ticket.
     *
     * @param request - DisconnectAndroidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisconnectAndroidInstanceResponse
     *
     * @param DisconnectAndroidInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisconnectAndroidInstanceResponse
     */
    public function disconnectAndroidInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisconnectAndroidInstance',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisconnectAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disconnects a connected instance or disassociates an instance that is associated with another user.
     *
     * @remarks
     * Connections to instances are established using the [](t2848888.xdita#). After a connection is closed with `session.stop()`, the system maintains the user-instance association for 5 minutes. During this time, other users cannot connect. The `DisconnectAndroidInstance` operation lets you disassociate the instance immediately.
     * <props="china">If you use the Cloud Phone Matrix Edition and the instance stream pattern is collaborative mode, you can specify `EndUserId` to disconnect a specific user and invalidate the corresponding ticket.
     *
     * @param request - DisconnectAndroidInstanceRequest
     *
     * @returns DisconnectAndroidInstanceResponse
     *
     * @param DisconnectAndroidInstanceRequest $request
     *
     * @return DisconnectAndroidInstanceResponse
     */
    public function disconnectAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disconnectAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * Distributes an image to one or more regions. This lets you use the image to create cloud phones in regions other than its source region.
     *
     * @remarks
     * You cannot cancel the distribution of an image to a region after the image is distributed.
     *
     * @param request - DistributeImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DistributeImageResponse
     *
     * @param DistributeImageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DistributeImageResponse
     */
    public function distributeImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->distributeRegionList) {
            @$body['DistributeRegionList'] = $request->distributeRegionList;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DistributeImage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DistributeImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Distributes an image to one or more regions. This lets you use the image to create cloud phones in regions other than its source region.
     *
     * @remarks
     * You cannot cancel the distribution of an image to a region after the image is distributed.
     *
     * @param request - DistributeImageRequest
     *
     * @returns DistributeImageResponse
     *
     * @param DistributeImageRequest $request
     *
     * @return DistributeImageResponse
     */
    public function distributeImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->distributeImageWithOptions($request, $runtime);
    }

    /**
     * Downgrades an instance group. Currently, this operation allows you to only delete specific cloud phone instances from an instance group.
     *
     * @remarks
     * This operation only allows you to scale down an instance group.
     *
     * @param request - DowngradeAndroidInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DowngradeAndroidInstanceGroupResponse
     *
     * @param DowngradeAndroidInstanceGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DowngradeAndroidInstanceGroupResponse
     */
    public function downgradeAndroidInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIds) {
            @$query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->instanceGroupId) {
            @$query['InstanceGroupId'] = $request->instanceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DowngradeAndroidInstanceGroup',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DowngradeAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Downgrades an instance group. Currently, this operation allows you to only delete specific cloud phone instances from an instance group.
     *
     * @remarks
     * This operation only allows you to scale down an instance group.
     *
     * @param request - DowngradeAndroidInstanceGroupRequest
     *
     * @returns DowngradeAndroidInstanceGroupResponse
     *
     * @param DowngradeAndroidInstanceGroupRequest $request
     *
     * @return DowngradeAndroidInstanceGroupResponse
     */
    public function downgradeAndroidInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downgradeAndroidInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Ends all coordination tasks for a cloud phone instance and invalidates the coordination code.
     *
     * @param request - EndCoordinationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EndCoordinationResponse
     *
     * @param EndCoordinationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EndCoordinationResponse
     */
    public function endCoordinationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coordinatorUserId) {
            @$query['CoordinatorUserId'] = $request->coordinatorUserId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerUserId) {
            @$query['OwnerUserId'] = $request->ownerUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EndCoordination',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EndCoordinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Ends all coordination tasks for a cloud phone instance and invalidates the coordination code.
     *
     * @param request - EndCoordinationRequest
     *
     * @returns EndCoordinationResponse
     *
     * @param EndCoordinationRequest $request
     *
     * @return EndCoordinationResponse
     */
    public function endCoordination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->endCoordinationWithOptions($request, $runtime);
    }

    /**
     * Expands the storage of a cloud phone matrix. You can expand shared storage for matrix-level files such as images, and instance storage. Expanding the storage incurs new fees, and the API response returns an order ID.
     *
     * @remarks
     * This operation is only available on the china site (aliyun.com).
     *
     * @param request - ExpandDataVolumeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExpandDataVolumeResponse
     *
     * @param ExpandDataVolumeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExpandDataVolumeResponse
     */
    public function expandDataVolumeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->nodeIds) {
            @$query['NodeIds'] = $request->nodeIds;
        }

        if (null !== $request->paidCallBackUrl) {
            @$query['PaidCallBackUrl'] = $request->paidCallBackUrl;
        }

        if (null !== $request->phoneDataVolume) {
            @$query['PhoneDataVolume'] = $request->phoneDataVolume;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->shareDataVolume) {
            @$query['ShareDataVolume'] = $request->shareDataVolume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExpandDataVolume',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExpandDataVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Expands the storage of a cloud phone matrix. You can expand shared storage for matrix-level files such as images, and instance storage. Expanding the storage incurs new fees, and the API response returns an order ID.
     *
     * @remarks
     * This operation is only available on the china site (aliyun.com).
     *
     * @param request - ExpandDataVolumeRequest
     *
     * @returns ExpandDataVolumeResponse
     *
     * @param ExpandDataVolumeRequest $request
     *
     * @return ExpandDataVolumeResponse
     */
    public function expandDataVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->expandDataVolumeWithOptions($request, $runtime);
    }

    /**
     * Expands the phone storage for one or more matrix instances.
     *
     * @param request - ExpandPhoneDataVolumeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExpandPhoneDataVolumeResponse
     *
     * @param ExpandPhoneDataVolumeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExpandPhoneDataVolumeResponse
     */
    public function expandPhoneDataVolumeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->paidCallBackUrl) {
            @$query['PaidCallBackUrl'] = $request->paidCallBackUrl;
        }

        if (null !== $request->phoneDataVolume) {
            @$query['PhoneDataVolume'] = $request->phoneDataVolume;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExpandPhoneDataVolume',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExpandPhoneDataVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Expands the phone storage for one or more matrix instances.
     *
     * @param request - ExpandPhoneDataVolumeRequest
     *
     * @returns ExpandPhoneDataVolumeResponse
     *
     * @param ExpandPhoneDataVolumeRequest $request
     *
     * @return ExpandPhoneDataVolumeResponse
     */
    public function expandPhoneDataVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->expandPhoneDataVolumeWithOptions($request, $runtime);
    }

    /**
     * Fetches files from a cloud phone to Object Storage Service (OSS).
     *
     * @remarks
     * This operation fetches only files or folders from a cloud phone to Object Storage Service.
     *
     * @param request - FetchFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FetchFileResponse
     *
     * @param FetchFileRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return FetchFileResponse
     */
    public function fetchFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIdList) {
            @$query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->sourceFilePath) {
            @$query['SourceFilePath'] = $request->sourceFilePath;
        }

        if (null !== $request->uploadEndpoint) {
            @$query['UploadEndpoint'] = $request->uploadEndpoint;
        }

        if (null !== $request->uploadType) {
            @$query['UploadType'] = $request->uploadType;
        }

        if (null !== $request->uploadUrl) {
            @$query['UploadUrl'] = $request->uploadUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FetchFile',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FetchFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Fetches files from a cloud phone to Object Storage Service (OSS).
     *
     * @remarks
     * This operation fetches only files or folders from a cloud phone to Object Storage Service.
     *
     * @param request - FetchFileRequest
     *
     * @returns FetchFileResponse
     *
     * @param FetchFileRequest $request
     *
     * @return FetchFileResponse
     */
    public function fetchFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchFileWithOptions($request, $runtime);
    }

    /**
     * By default, you can only use the BatchGetAcpConnectionTicket operation to get the ticket for a connection to a cloud phone, and a cloud phone supports only one connected user at a time. To allow multiple users to connect to a cloud phone at the same time, connect to the cloud phone with a convenience account, use this operation to generate a collaboration code by using the current account, and share this code with other convenience accounts to allow them to access the same cloud phone.
     *
     * @remarks
     * You can call this operation to generate a collaboration code for a cloud phone accessed by your current account and share this code with other convenience users to allow them to access the same cloud phone over the desktop, mobile, or web client.
     *
     * @param request - GenerateCoordinationCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateCoordinationCodeResponse
     *
     * @param GenerateCoordinationCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateCoordinationCodeResponse
     */
    public function generateCoordinationCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerUserId) {
            @$query['OwnerUserId'] = $request->ownerUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateCoordinationCode',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateCoordinationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * By default, you can only use the BatchGetAcpConnectionTicket operation to get the ticket for a connection to a cloud phone, and a cloud phone supports only one connected user at a time. To allow multiple users to connect to a cloud phone at the same time, connect to the cloud phone with a convenience account, use this operation to generate a collaboration code by using the current account, and share this code with other convenience accounts to allow them to access the same cloud phone.
     *
     * @remarks
     * You can call this operation to generate a collaboration code for a cloud phone accessed by your current account and share this code with other convenience users to allow them to access the same cloud phone over the desktop, mobile, or web client.
     *
     * @param request - GenerateCoordinationCodeRequest
     *
     * @returns GenerateCoordinationCodeResponse
     *
     * @param GenerateCoordinationCodeRequest $request
     *
     * @return GenerateCoordinationCodeResponse
     */
    public function generateCoordinationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCoordinationCodeWithOptions($request, $runtime);
    }

    /**
     * Retrieves the properties of an instance. This operation runs the android getprop command to retrieve all properties of the cloud phone.
     *
     * @param request - GetInstancePropertiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstancePropertiesResponse
     *
     * @param GetInstancePropertiesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetInstancePropertiesResponse
     */
    public function getInstancePropertiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceProperties',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstancePropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the properties of an instance. This operation runs the android getprop command to retrieve all properties of the cloud phone.
     *
     * @param request - GetInstancePropertiesRequest
     *
     * @returns GetInstancePropertiesResponse
     *
     * @param GetInstancePropertiesRequest $request
     *
     * @return GetInstancePropertiesResponse
     */
    public function getInstanceProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstancePropertiesWithOptions($request, $runtime);
    }

    /**
     * Queries the network access blacklist for IP addresses and domain names.
     *
     * @remarks
     * - This operation requires image version 26.01 or later.
     * - This operation queries the network access blacklist for your account. The blacklist includes IP addresses and domain names.
     *
     * @param request - GetNetworkBlacklistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNetworkBlacklistResponse
     *
     * @param GetNetworkBlacklistRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetNetworkBlacklistResponse
     */
    public function getNetworkBlacklistWithOptions($request, $runtime)
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
            'action' => 'GetNetworkBlacklist',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNetworkBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the network access blacklist for IP addresses and domain names.
     *
     * @remarks
     * - This operation requires image version 26.01 or later.
     * - This operation queries the network access blacklist for your account. The blacklist includes IP addresses and domain names.
     *
     * @param request - GetNetworkBlacklistRequest
     *
     * @returns GetNetworkBlacklistResponse
     *
     * @param GetNetworkBlacklistRequest $request
     *
     * @return GetNetworkBlacklistResponse
     */
    public function getNetworkBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkBlacklistWithOptions($request, $runtime);
    }

    /**
     * Imports a custom image.
     *
     * @remarks
     * 1. You can import a custom image to develop custom features or services.
     * 2. First, obtain the required Android Open Source Project (AOSP) image baseline from the platform. Then, create a custom build. After the build is complete, import the image to the platform. For detailed instructions, contact Wuying technical support.
     * 3. Ensure the image tar package is smaller than 2 GB. Otherwise, image parsing may fail.
     * 4. Ensure the Object Storage Service (OSS) address is in mainland China. If the address is outside mainland China or in the Hong Kong region, the image file download may time out.
     *
     * @param request - ImportImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportImageResponse
     *
     * @param ImportImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ImportImageResponse
     */
    public function importImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageDescription) {
            @$query['ImageDescription'] = $request->imageDescription;
        }

        if (null !== $request->imageFileURL) {
            @$query['ImageFileURL'] = $request->imageFileURL;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportImage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports a custom image.
     *
     * @remarks
     * 1. You can import a custom image to develop custom features or services.
     * 2. First, obtain the required Android Open Source Project (AOSP) image baseline from the platform. Then, create a custom build. After the build is complete, import the image to the platform. For detailed instructions, contact Wuying technical support.
     * 3. Ensure the image tar package is smaller than 2 GB. Otherwise, image parsing may fail.
     * 4. Ensure the Object Storage Service (OSS) address is in mainland China. If the address is outside mainland China or in the Hong Kong region, the image file download may time out.
     *
     * @param request - ImportImageRequest
     *
     * @returns ImportImageResponse
     *
     * @param ImportImageRequest $request
     *
     * @return ImportImageResponse
     */
    public function importImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importImageWithOptions($request, $runtime);
    }

    /**
     * Imports the public key of an Android Debug Bridge (ADB) key pair.
     *
     * @remarks
     * To avoid authorization errors that could cause ADB connection failures, you must import the public key of an ADB key pair.
     *
     * @param request - ImportKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportKeyPairResponse
     *
     * @param ImportKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->publicKeyBody) {
            @$query['PublicKeyBody'] = $request->publicKeyBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportKeyPair',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports the public key of an Android Debug Bridge (ADB) key pair.
     *
     * @remarks
     * To avoid authorization errors that could cause ADB connection failures, you must import the public key of an ADB key pair.
     *
     * @param request - ImportKeyPairRequest
     *
     * @returns ImportKeyPairResponse
     *
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
     * Installs applications in batches on Cloud Phone instances.
     *
     * @remarks
     * Before you can install an application, you must create it by calling the [CreateApp](https://help.aliyun.com/document_detail/2807330.html) operation. This is an asynchronous operation. You can call the [DescribeTasks](~~DescribeTasks~~) operation to query the task status.
     *
     * @param request - InstallAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallAppResponse
     *
     * @param InstallAppRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return InstallAppResponse
     */
    public function installAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIdList) {
            @$query['AppIdList'] = $request->appIdList;
        }

        if (null !== $request->instanceGroupIdList) {
            @$query['InstanceGroupIdList'] = $request->instanceGroupIdList;
        }

        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InstallApp',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstallAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs applications in batches on Cloud Phone instances.
     *
     * @remarks
     * Before you can install an application, you must create it by calling the [CreateApp](https://help.aliyun.com/document_detail/2807330.html) operation. This is an asynchronous operation. You can call the [DescribeTasks](~~DescribeTasks~~) operation to query the task status.
     *
     * @param request - InstallAppRequest
     *
     * @returns InstallAppResponse
     *
     * @param InstallAppRequest $request
     *
     * @return InstallAppResponse
     */
    public function installApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installAppWithOptions($request, $runtime);
    }

    /**
     * Installs the monitoring plugin in a single step. An instance can generate monitoring data only after the plugin is installed.
     *
     * @param request - InstallMonitorAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallMonitorAgentResponse
     *
     * @param InstallMonitorAgentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return InstallMonitorAgentResponse
     */
    public function installMonitorAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->androidInstanceIds) {
            @$body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->saleMode) {
            @$body['SaleMode'] = $request->saleMode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InstallMonitorAgent',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstallMonitorAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs the monitoring plugin in a single step. An instance can generate monitoring data only after the plugin is installed.
     *
     * @param request - InstallMonitorAgentRequest
     *
     * @returns InstallMonitorAgentResponse
     *
     * @param InstallMonitorAgentRequest $request
     *
     * @return InstallMonitorAgentResponse
     */
    public function installMonitorAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installMonitorAgentWithOptions($request, $runtime);
    }

    /**
     * Diagnoses and recovers cloud phone matrix instances. This operation clears the system log files of an instance to prevent the instance from becoming unrecoverable due to a full disk.
     *
     * @param request - InstanceHealerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstanceHealerResponse
     *
     * @param InstanceHealerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InstanceHealerResponse
     */
    public function instanceHealerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->strategy) {
            @$query['Strategy'] = $request->strategy;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InstanceHealer',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstanceHealerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Diagnoses and recovers cloud phone matrix instances. This operation clears the system log files of an instance to prevent the instance from becoming unrecoverable due to a full disk.
     *
     * @param request - InstanceHealerRequest
     *
     * @returns InstanceHealerResponse
     *
     * @param InstanceHealerRequest $request
     *
     * @return InstanceHealerResponse
     */
    public function instanceHealer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->instanceHealerWithOptions($request, $runtime);
    }

    /**
     * Queries the Android Debug Bridge (ADB) connection information for instances. This operation is available only to standard networks.
     *
     * @param request - ListInstanceAdbAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceAdbAttributesResponse
     *
     * @param ListInstanceAdbAttributesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListInstanceAdbAttributesResponse
     */
    public function listInstanceAdbAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->externalIp) {
            @$query['ExternalIp'] = $request->externalIp;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->internalIp) {
            @$query['InternalIp'] = $request->internalIp;
        }

        if (null !== $request->internalPort) {
            @$query['InternalPort'] = $request->internalPort;
        }

        if (null !== $request->ipProtocol) {
            @$query['IpProtocol'] = $request->ipProtocol;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceAdbAttributes',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceAdbAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Android Debug Bridge (ADB) connection information for instances. This operation is available only to standard networks.
     *
     * @param request - ListInstanceAdbAttributesRequest
     *
     * @returns ListInstanceAdbAttributesResponse
     *
     * @param ListInstanceAdbAttributesRequest $request
     *
     * @return ListInstanceAdbAttributesResponse
     */
    public function listInstanceAdbAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceAdbAttributesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a policy.
     *
     * @param request - ListPolicyGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicyGroupsResponse
     *
     * @param ListPolicyGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListPolicyGroupsResponse
     */
    public function listPolicyGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->policyGroupIds) {
            @$body['PolicyGroupIds'] = $request->policyGroupIds;
        }

        if (null !== $request->policyGroupName) {
            @$body['PolicyGroupName'] = $request->policyGroupName;
        }

        if (null !== $request->policyType) {
            @$body['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListPolicyGroups',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicyGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a policy.
     *
     * @param request - ListPolicyGroupsRequest
     *
     * @returns ListPolicyGroupsResponse
     *
     * @param ListPolicyGroupsRequest $request
     *
     * @return ListPolicyGroupsResponse
     */
    public function listPolicyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are associated with Cloud Phone instances.
     *
     * @remarks
     * Specify at least one of the following parameters in the request to determine the queried object: `ResourceId.N`, `Tag.N.Key`, or `Tag.N.Value`.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags that are associated with Cloud Phone instances.
     *
     * @remarks
     * Specify at least one of the following parameters in the request to determine the queried object: `ResourceId.N`, `Tag.N.Key`, or `Tag.N.Value`.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Modifies the information of an Android instance. Currently, this operation can be used to modify only the instance name and the upstream and downstream bandwidth limits.
     *
     * @param request - ModifyAndroidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAndroidInstanceResponse
     *
     * @param ModifyAndroidInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAndroidInstanceResponse
     */
    public function modifyAndroidInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceId) {
            @$query['AndroidInstanceId'] = $request->androidInstanceId;
        }

        if (null !== $request->downBandwidthLimit) {
            @$query['DownBandwidthLimit'] = $request->downBandwidthLimit;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->newAndroidInstanceName) {
            @$query['NewAndroidInstanceName'] = $request->newAndroidInstanceName;
        }

        if (null !== $request->upBandwidthLimit) {
            @$query['UpBandwidthLimit'] = $request->upBandwidthLimit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAndroidInstance',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information of an Android instance. Currently, this operation can be used to modify only the instance name and the upstream and downstream bandwidth limits.
     *
     * @param request - ModifyAndroidInstanceRequest
     *
     * @returns ModifyAndroidInstanceResponse
     *
     * @param ModifyAndroidInstanceRequest $request
     *
     * @return ModifyAndroidInstanceResponse
     */
    public function modifyAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * Modifies attributes of an instance group.
     *
     * @param request - ModifyAndroidInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAndroidInstanceGroupResponse
     *
     * @param ModifyAndroidInstanceGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyAndroidInstanceGroupResponse
     */
    public function modifyAndroidInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceGroupId) {
            @$query['InstanceGroupId'] = $request->instanceGroupId;
        }

        if (null !== $request->newInstanceGroupName) {
            @$query['NewInstanceGroupName'] = $request->newInstanceGroupName;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->streamMode) {
            @$query['StreamMode'] = $request->streamMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAndroidInstanceGroup',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies attributes of an instance group.
     *
     * @param request - ModifyAndroidInstanceGroupRequest
     *
     * @returns ModifyAndroidInstanceGroupResponse
     *
     * @param ModifyAndroidInstanceGroupRequest $request
     *
     * @return ModifyAndroidInstanceGroupResponse
     */
    public function modifyAndroidInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAndroidInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * Modify attributes of an application.
     *
     * @param request - ModifyAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppResponse
     *
     * @param ModifyAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->iconUrl) {
            @$query['IconUrl'] = $request->iconUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApp',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify attributes of an application.
     *
     * @param request - ModifyAppRequest
     *
     * @returns ModifyAppResponse
     *
     * @param ModifyAppRequest $request
     *
     * @return ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * Modifies a cloud phone matrix. Currently, you can only modify the name of a cloud phone matrix. Note: In the Cloud Phone system, a Matrix (Cloud Phone Server) is a logical resource management unit that represents a single physical server instance. This physical server can be partitioned into multiple, independently running cloud phone instances. These instances share the Matrix\\"s underlying compute, storage, and network resources. Creating a Matrix is equivalent to leasing a dedicated physical server. On this server, you can then create your cloud phone instances. The number of instances you can create depends on their configuration.
     *
     * @remarks
     * Changing the streaming mode is an asynchronous operation. Please do not perform this action frequently.
     *
     * @param request - ModifyCloudPhoneNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCloudPhoneNodeResponse
     *
     * @param ModifyCloudPhoneNodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyCloudPhoneNodeResponse
     */
    public function modifyCloudPhoneNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newNodeName) {
            @$query['NewNodeName'] = $request->newNodeName;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->streamMode) {
            @$query['StreamMode'] = $request->streamMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCloudPhoneNode',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCloudPhoneNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a cloud phone matrix. Currently, you can only modify the name of a cloud phone matrix. Note: In the Cloud Phone system, a Matrix (Cloud Phone Server) is a logical resource management unit that represents a single physical server instance. This physical server can be partitioned into multiple, independently running cloud phone instances. These instances share the Matrix\\"s underlying compute, storage, and network resources. Creating a Matrix is equivalent to leasing a dedicated physical server. On this server, you can then create your cloud phone instances. The number of instances you can create depends on their configuration.
     *
     * @remarks
     * Changing the streaming mode is an asynchronous operation. Please do not perform this action frequently.
     *
     * @param request - ModifyCloudPhoneNodeRequest
     *
     * @returns ModifyCloudPhoneNodeResponse
     *
     * @param ModifyCloudPhoneNodeRequest $request
     *
     * @return ModifyCloudPhoneNodeResponse
     */
    public function modifyCloudPhoneNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudPhoneNodeWithOptions($request, $runtime);
    }

    /**
     * Modifies display settings.
     *
     * @param tmpReq - ModifyDisplayConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDisplayConfigResponse
     *
     * @param ModifyDisplayConfigRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDisplayConfigResponse
     */
    public function modifyDisplayConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyDisplayConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->displayConfig) {
            $request->displayConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->displayConfig, 'DisplayConfig', 'json');
        }

        $body = [];
        if (null !== $request->androidInstanceIds) {
            @$body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->displayConfigShrink) {
            @$body['DisplayConfig'] = $request->displayConfigShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDisplayConfig',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDisplayConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies display settings.
     *
     * @param request - ModifyDisplayConfigRequest
     *
     * @returns ModifyDisplayConfigResponse
     *
     * @param ModifyDisplayConfigRequest $request
     *
     * @return ModifyDisplayConfigResponse
     */
    public function modifyDisplayConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDisplayConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the billing method. Currently, this operation only allows you to change the billing method from pay-as-you-go to subscription.
     *
     * @param request - ModifyInstanceChargeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceChargeTypeResponse
     *
     * @param ModifyInstanceChargeTypeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->instanceGroupIds) {
            @$query['InstanceGroupIds'] = $request->instanceGroupIds;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceChargeType',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the billing method. Currently, this operation only allows you to change the billing method from pay-as-you-go to subscription.
     *
     * @param request - ModifyInstanceChargeTypeRequest
     *
     * @returns ModifyInstanceChargeTypeResponse
     *
     * @param ModifyInstanceChargeTypeRequest $request
     *
     * @return ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceChargeTypeWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of a JVS instance.
     *
     * @param request - ModifyJVSInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyJVSInstanceResponse
     *
     * @param ModifyJVSInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyJVSInstanceResponse
     */
    public function modifyJVSInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyToAll) {
            @$query['ApplyToAll'] = $request->applyToAll;
        }

        if (null !== $request->creditConfig) {
            @$query['CreditConfig'] = $request->creditConfig;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyJVSInstance',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyJVSInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a JVS instance.
     *
     * @param request - ModifyJVSInstanceRequest
     *
     * @returns ModifyJVSInstanceResponse
     *
     * @param ModifyJVSInstanceRequest $request
     *
     * @return ModifyJVSInstanceResponse
     */
    public function modifyJVSInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyJVSInstanceWithOptions($request, $runtime);
    }

    /**
     * Modifies Android Debug Bridge (ADB) key pairs.
     *
     * @param request - ModifyKeyPairNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyKeyPairNameResponse
     *
     * @param ModifyKeyPairNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyKeyPairNameResponse
     */
    public function modifyKeyPairNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyPairId) {
            @$query['KeyPairId'] = $request->keyPairId;
        }

        if (null !== $request->newKeyPairName) {
            @$query['NewKeyPairName'] = $request->newKeyPairName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyKeyPairName',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyKeyPairNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies Android Debug Bridge (ADB) key pairs.
     *
     * @param request - ModifyKeyPairNameRequest
     *
     * @returns ModifyKeyPairNameResponse
     *
     * @param ModifyKeyPairNameRequest $request
     *
     * @return ModifyKeyPairNameResponse
     */
    public function modifyKeyPairName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyKeyPairNameWithOptions($request, $runtime);
    }

    /**
     * Modifies the information of a policy group.
     *
     * @param tmpReq - ModifyPolicyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPolicyGroupResponse
     *
     * @param ModifyPolicyGroupRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyPolicyGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->netRedirectPolicy) {
            $request->netRedirectPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->netRedirectPolicy, 'NetRedirectPolicy', 'json');
        }

        if (null !== $tmpReq->watermark) {
            $request->watermarkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->watermark, 'Watermark', 'json');
        }

        $body = [];
        if (null !== $request->cameraRedirect) {
            @$body['CameraRedirect'] = $request->cameraRedirect;
        }

        if (null !== $request->clipboard) {
            @$body['Clipboard'] = $request->clipboard;
        }

        if (null !== $request->html5FileTransfer) {
            @$body['Html5FileTransfer'] = $request->html5FileTransfer;
        }

        if (null !== $request->localDrive) {
            @$body['LocalDrive'] = $request->localDrive;
        }

        if (null !== $request->lockResolution) {
            @$body['LockResolution'] = $request->lockResolution;
        }

        if (null !== $request->netRedirectPolicyShrink) {
            @$body['NetRedirectPolicy'] = $request->netRedirectPolicyShrink;
        }

        if (null !== $request->policyGroupId) {
            @$body['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->policyGroupName) {
            @$body['PolicyGroupName'] = $request->policyGroupName;
        }

        if (null !== $request->resolutionHeight) {
            @$body['ResolutionHeight'] = $request->resolutionHeight;
        }

        if (null !== $request->resolutionWidth) {
            @$body['ResolutionWidth'] = $request->resolutionWidth;
        }

        if (null !== $request->watermarkShrink) {
            @$body['Watermark'] = $request->watermarkShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPolicyGroup',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information of a policy group.
     *
     * @param request - ModifyPolicyGroupRequest
     *
     * @returns ModifyPolicyGroupResponse
     *
     * @param ModifyPolicyGroupRequest $request
     *
     * @return ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies a property template.
     *
     * @remarks
     * When you modify a property template, the [](t3010125.xdita#)operation is not triggered. To apply the changes to cloud phones, you must call the [](t3010125.xdita#)operation separately.
     *
     * @param tmpReq - ModifySystemPropertyTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySystemPropertyTemplateResponse
     *
     * @param ModifySystemPropertyTemplateRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifySystemPropertyTemplateResponse
     */
    public function modifySystemPropertyTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifySystemPropertyTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->systemPropertyInfo) {
            $request->systemPropertyInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->systemPropertyInfo, 'SystemPropertyInfo', 'json');
        }

        $query = [];
        if (null !== $request->enableAuto) {
            @$query['EnableAuto'] = $request->enableAuto;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->systemPropertyInfoShrink) {
            @$query['SystemPropertyInfo'] = $request->systemPropertyInfoShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySystemPropertyTemplate',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySystemPropertyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a property template.
     *
     * @remarks
     * When you modify a property template, the [](t3010125.xdita#)operation is not triggered. To apply the changes to cloud phones, you must call the [](t3010125.xdita#)operation separately.
     *
     * @param request - ModifySystemPropertyTemplateRequest
     *
     * @returns ModifySystemPropertyTemplateResponse
     *
     * @param ModifySystemPropertyTemplateRequest $request
     *
     * @return ModifySystemPropertyTemplateResponse
     */
    public function modifySystemPropertyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySystemPropertyTemplateWithOptions($request, $runtime);
    }

    /**
     * Operates apps in a cloud phone, such as opening, closing, and reopening apps.
     *
     * @remarks
     * This operation runs asynchronously. To check the operation result, visit the Task Center. To retrieve task details, call the [](t2740507.xdita#)operation.
     *
     * @param request - OperateAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateAppResponse
     *
     * @param OperateAppRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return OperateAppResponse
     */
    public function operateAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateApp',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Operates apps in a cloud phone, such as opening, closing, and reopening apps.
     *
     * @remarks
     * This operation runs asynchronously. To check the operation result, visit the Task Center. To retrieve task details, call the [](t2740507.xdita#)operation.
     *
     * @param request - OperateAppRequest
     *
     * @returns OperateAppResponse
     *
     * @param OperateAppRequest $request
     *
     * @return OperateAppResponse
     */
    public function operateApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAppWithOptions($request, $runtime);
    }

    /**
     * Pauses running agent tasks on Mobile nodes.
     *
     * @param request - PauseAgentTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseAgentTaskResponse
     *
     * @param PauseAgentTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PauseAgentTaskResponse
     */
    public function pauseAgentTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PauseAgentTask',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PauseAgentTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses running agent tasks on Mobile nodes.
     *
     * @param request - PauseAgentTaskRequest
     *
     * @returns PauseAgentTaskResponse
     *
     * @param PauseAgentTaskRequest $request
     *
     * @return PauseAgentTaskResponse
     */
    public function pauseAgentTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseAgentTaskWithOptions($request, $runtime);
    }

    /**
     * Reboots (shuts down and then starts) Cloud Phone instances.
     *
     * @remarks
     * You can reboot an instance only if its status is Active, Abnormal, Backup failed, or **Recover failed**.
     *
     * @param request - RebootAndroidInstancesInGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootAndroidInstancesInGroupResponse
     *
     * @param RebootAndroidInstancesInGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RebootAndroidInstancesInGroupResponse
     */
    public function rebootAndroidInstancesInGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIds) {
            @$query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->forceStop) {
            @$query['ForceStop'] = $request->forceStop;
        }

        if (null !== $request->ignoreParamValidation) {
            @$query['IgnoreParamValidation'] = $request->ignoreParamValidation;
        }

        if (null !== $request->saleMode) {
            @$query['SaleMode'] = $request->saleMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebootAndroidInstancesInGroup',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebootAndroidInstancesInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reboots (shuts down and then starts) Cloud Phone instances.
     *
     * @remarks
     * You can reboot an instance only if its status is Active, Abnormal, Backup failed, or **Recover failed**.
     *
     * @param request - RebootAndroidInstancesInGroupRequest
     *
     * @returns RebootAndroidInstancesInGroupResponse
     *
     * @param RebootAndroidInstancesInGroupRequest $request
     *
     * @return RebootAndroidInstancesInGroupResponse
     */
    public function rebootAndroidInstancesInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootAndroidInstancesInGroupWithOptions($request, $runtime);
    }

    /**
     * Restores a full instance backup to another cloud phone instance.
     *
     * @remarks
     * 1. When you restore a full instance, the system restarts the instance to ensure a successful restoration. A restart is not required if you restore only applications and data. Make sure the instance is in an active state. Do not perform any operations on the instance during the restoration process. Otherwise, the restoration may fail.
     * 2. Ensure that the backup file can be used to restore the instance properly. After a restoration is complete, check that all your data is complete and all features are working properly. Do not delete the original backup file or reset the source instance until you have verified the restored data. Otherwise, you may lose your data.
     *
     * @param request - RecoverAndroidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecoverAndroidInstanceResponse
     *
     * @param RecoverAndroidInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecoverAndroidInstanceResponse
     */
    public function recoverAndroidInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIdList) {
            @$query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }

        if (null !== $request->backupFileId) {
            @$query['BackupFileId'] = $request->backupFileId;
        }

        if (null !== $request->backupFilePath) {
            @$query['BackupFilePath'] = $request->backupFilePath;
        }

        if (null !== $request->uploadEndpoint) {
            @$query['UploadEndpoint'] = $request->uploadEndpoint;
        }

        if (null !== $request->uploadType) {
            @$query['UploadType'] = $request->uploadType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecoverAndroidInstance',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecoverAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores a full instance backup to another cloud phone instance.
     *
     * @remarks
     * 1. When you restore a full instance, the system restarts the instance to ensure a successful restoration. A restart is not required if you restore only applications and data. Make sure the instance is in an active state. Do not perform any operations on the instance during the restoration process. Otherwise, the restoration may fail.
     * 2. Ensure that the backup file can be used to restore the instance properly. After a restoration is complete, check that all your data is complete and all features are working properly. Do not delete the original backup file or reset the source instance until you have verified the restored data. Otherwise, you may lose your data.
     *
     * @param request - RecoverAndroidInstanceRequest
     *
     * @returns RecoverAndroidInstanceResponse
     *
     * @param RecoverAndroidInstanceRequest $request
     *
     * @return RecoverAndroidInstanceResponse
     */
    public function recoverAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * Recovers an application from a backup file to another cloud phone instance.
     *
     * @remarks
     * 1. A full instance recovery restarts the cloud phone. An application and data recovery does not require a restart. To ensure a successful recovery, make sure your cloud phone is in the active state. Do not perform any operations on the cloud phone during the recovery process. Otherwise, the recovery operation may fail.
     * 2. If the application being recovered already exists on the target cloud phone, the existing application is uninstalled before the backup version is installed. This prevents version conflicts.
     * 3. Ensure that your backup file can be used to recover the instance or application properly. After a recovery is complete, verify that your data is complete and all features work correctly. Do not delete the original backup file or reset the source instance until you have verified that the recovery was successful. Otherwise, there is risks that you lose some data.
     *
     * @param request - RecoverAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecoverAppResponse
     *
     * @param RecoverAppRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RecoverAppResponse
     */
    public function recoverAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIdList) {
            @$query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }

        if (null !== $request->backupFileId) {
            @$query['BackupFileId'] = $request->backupFileId;
        }

        if (null !== $request->backupFilePath) {
            @$query['BackupFilePath'] = $request->backupFilePath;
        }

        if (null !== $request->uploadEndpoint) {
            @$query['UploadEndpoint'] = $request->uploadEndpoint;
        }

        if (null !== $request->uploadType) {
            @$query['UploadType'] = $request->uploadType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecoverApp',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecoverAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Recovers an application from a backup file to another cloud phone instance.
     *
     * @remarks
     * 1. A full instance recovery restarts the cloud phone. An application and data recovery does not require a restart. To ensure a successful recovery, make sure your cloud phone is in the active state. Do not perform any operations on the cloud phone during the recovery process. Otherwise, the recovery operation may fail.
     * 2. If the application being recovered already exists on the target cloud phone, the existing application is uninstalled before the backup version is installed. This prevents version conflicts.
     * 3. Ensure that your backup file can be used to recover the instance or application properly. After a recovery is complete, verify that your data is complete and all features work correctly. Do not delete the original backup file or reset the source instance until you have verified that the recovery was successful. Otherwise, there is risks that you lose some data.
     *
     * @param request - RecoverAppRequest
     *
     * @returns RecoverAppResponse
     *
     * @param RecoverAppRequest $request
     *
     * @return RecoverAppResponse
     */
    public function recoverApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverAppWithOptions($request, $runtime);
    }

    /**
     * Restores backup files.
     *
     * @remarks
     * Currently, this operation allows you to restore only backup files generated by cloud phones that are stored in Object Storage Service (OSS) buckets.
     *
     * @param request - RecoveryFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecoveryFileResponse
     *
     * @param RecoveryFileRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RecoveryFileResponse
     */
    public function recoveryFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIdList) {
            @$query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }

        if (null !== $request->backupAll) {
            @$query['BackupAll'] = $request->backupAll;
        }

        if (null !== $request->backupFileId) {
            @$query['BackupFileId'] = $request->backupFileId;
        }

        if (null !== $request->backupFilePath) {
            @$query['BackupFilePath'] = $request->backupFilePath;
        }

        if (null !== $request->uploadEndpoint) {
            @$query['UploadEndpoint'] = $request->uploadEndpoint;
        }

        if (null !== $request->uploadType) {
            @$query['UploadType'] = $request->uploadType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecoveryFile',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecoveryFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores backup files.
     *
     * @remarks
     * Currently, this operation allows you to restore only backup files generated by cloud phones that are stored in Object Storage Service (OSS) buckets.
     *
     * @param request - RecoveryFileRequest
     *
     * @returns RecoveryFileResponse
     *
     * @param RecoveryFileRequest $request
     *
     * @return RecoveryFileResponse
     */
    public function recoveryFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoveryFileWithOptions($request, $runtime);
    }

    /**
     * Refreshes model authentication tokens.
     *
     * @param request - RefreshAuthTokensRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshAuthTokensResponse
     *
     * @param RefreshAuthTokensRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RefreshAuthTokensResponse
     */
    public function refreshAuthTokensWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expireSeconds) {
            @$query['ExpireSeconds'] = $request->expireSeconds;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->licenseKeys) {
            @$query['LicenseKeys'] = $request->licenseKeys;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshAuthTokens',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshAuthTokensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refreshes model authentication tokens.
     *
     * @param request - RefreshAuthTokensRequest
     *
     * @returns RefreshAuthTokensResponse
     *
     * @param RefreshAuthTokensRequest $request
     *
     * @return RefreshAuthTokensResponse
     */
    public function refreshAuthTokens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshAuthTokensWithOptions($request, $runtime);
    }

    /**
     * Renews subscription Cloud Phone instance groups. If a subscription instance group expires, the system automatically deletes the instance group and its instances after 15 days. You cannot recover deleted resources. Renew your instance groups promptly to prevent resource loss.
     *
     * @param request - RenewAndroidInstanceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewAndroidInstanceGroupsResponse
     *
     * @param RenewAndroidInstanceGroupsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RenewAndroidInstanceGroupsResponse
     */
    public function renewAndroidInstanceGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->instanceGroupIds) {
            @$query['InstanceGroupIds'] = $request->instanceGroupIds;
        }

        if (null !== $request->paidCallBackUrl) {
            @$query['PaidCallBackUrl'] = $request->paidCallBackUrl;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewAndroidInstanceGroups',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewAndroidInstanceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews subscription Cloud Phone instance groups. If a subscription instance group expires, the system automatically deletes the instance group and its instances after 15 days. You cannot recover deleted resources. Renew your instance groups promptly to prevent resource loss.
     *
     * @param request - RenewAndroidInstanceGroupsRequest
     *
     * @returns RenewAndroidInstanceGroupsResponse
     *
     * @param RenewAndroidInstanceGroupsRequest $request
     *
     * @return RenewAndroidInstanceGroupsResponse
     */
    public function renewAndroidInstanceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewAndroidInstanceGroupsWithOptions($request, $runtime);
    }

    /**
     * Renews the specified cloud phone matrices.
     *
     * @param request - RenewCloudPhoneNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewCloudPhoneNodesResponse
     *
     * @param RenewCloudPhoneNodesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RenewCloudPhoneNodesResponse
     */
    public function renewCloudPhoneNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->paidCallBackUrl) {
            @$query['PaidCallBackUrl'] = $request->paidCallBackUrl;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        $body = [];
        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->nodeIds) {
            @$body['NodeIds'] = $request->nodeIds;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['PeriodUnit'] = $request->periodUnit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RenewCloudPhoneNodes',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewCloudPhoneNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews the specified cloud phone matrices.
     *
     * @param request - RenewCloudPhoneNodesRequest
     *
     * @returns RenewCloudPhoneNodesResponse
     *
     * @param RenewCloudPhoneNodesRequest $request
     *
     * @return RenewCloudPhoneNodesResponse
     */
    public function renewCloudPhoneNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewCloudPhoneNodesWithOptions($request, $runtime);
    }

    /**
     * Renews a mobile agent package.
     *
     * @param request - RenewMobileAgentPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewMobileAgentPackageResponse
     *
     * @param RenewMobileAgentPackageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RenewMobileAgentPackageResponse
     */
    public function renewMobileAgentPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->mobileAgentPackageIds) {
            @$query['MobileAgentPackageIds'] = $request->mobileAgentPackageIds;
        }

        if (null !== $request->paidCallbackUrl) {
            @$query['PaidCallbackUrl'] = $request->paidCallbackUrl;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewMobileAgentPackage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewMobileAgentPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a mobile agent package.
     *
     * @param request - RenewMobileAgentPackageRequest
     *
     * @returns RenewMobileAgentPackageResponse
     *
     * @param RenewMobileAgentPackageRequest $request
     *
     * @return RenewMobileAgentPackageResponse
     */
    public function renewMobileAgentPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewMobileAgentPackageWithOptions($request, $runtime);
    }

    /**
     * Resets the instance by reinstalling the operating system using its original image. Note: The reset operation will fail if the image that was used to create the Cloud Phone has since been deleted.
     *
     * @remarks
     * You can reset an instance (initialize its system) only when the instance is Active, Stopped, Abnormal, Backup Failed, or **Recover Failed**.
     *
     * @param request - ResetAndroidInstancesInGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAndroidInstancesInGroupResponse
     *
     * @param ResetAndroidInstancesInGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ResetAndroidInstancesInGroupResponse
     */
    public function resetAndroidInstancesInGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIds) {
            @$query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->ignoreParamValidation) {
            @$query['IgnoreParamValidation'] = $request->ignoreParamValidation;
        }

        if (null !== $request->saleMode) {
            @$query['SaleMode'] = $request->saleMode;
        }

        if (null !== $request->settingResetType) {
            @$query['SettingResetType'] = $request->settingResetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetAndroidInstancesInGroup',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetAndroidInstancesInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the instance by reinstalling the operating system using its original image. Note: The reset operation will fail if the image that was used to create the Cloud Phone has since been deleted.
     *
     * @remarks
     * You can reset an instance (initialize its system) only when the instance is Active, Stopped, Abnormal, Backup Failed, or **Recover Failed**.
     *
     * @param request - ResetAndroidInstancesInGroupRequest
     *
     * @returns ResetAndroidInstancesInGroupResponse
     *
     * @param ResetAndroidInstancesInGroupRequest $request
     *
     * @return ResetAndroidInstancesInGroupResponse
     */
    public function resetAndroidInstancesInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAndroidInstancesInGroupWithOptions($request, $runtime);
    }

    /**
     * Resumes paused agent automation tasks on a mobile instance.
     *
     * @param request - ResumeAgentTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeAgentTaskResponse
     *
     * @param ResumeAgentTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResumeAgentTaskResponse
     */
    public function resumeAgentTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->additionalPrompt) {
            @$query['AdditionalPrompt'] = $request->additionalPrompt;
        }

        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeAgentTask',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeAgentTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes paused agent automation tasks on a mobile instance.
     *
     * @param request - ResumeAgentTaskRequest
     *
     * @returns ResumeAgentTaskResponse
     *
     * @param ResumeAgentTaskRequest $request
     *
     * @return ResumeAgentTaskResponse
     */
    public function resumeAgentTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeAgentTaskWithOptions($request, $runtime);
    }

    /**
     * Triggers an Agent to execute an AI automation task on Mobile nodes.
     *
     * @param request - RunAgentTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunAgentTaskResponse
     *
     * @param RunAgentTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RunAgentTaskResponse
     */
    public function runAgentTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->maxSteps) {
            @$query['MaxSteps'] = $request->maxSteps;
        }

        if (null !== $request->scheduleId) {
            @$query['ScheduleId'] = $request->scheduleId;
        }

        if (null !== $request->targets) {
            @$query['Targets'] = $request->targets;
        }

        if (null !== $request->taskConfigId) {
            @$query['TaskConfigId'] = $request->taskConfigId;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->userPrompt) {
            @$query['UserPrompt'] = $request->userPrompt;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunAgentTask',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunAgentTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Triggers an Agent to execute an AI automation task on Mobile nodes.
     *
     * @param request - RunAgentTaskRequest
     *
     * @returns RunAgentTaskResponse
     *
     * @param RunAgentTaskRequest $request
     *
     * @return RunAgentTaskResponse
     */
    public function runAgentTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runAgentTaskWithOptions($request, $runtime);
    }

    /**
     * Runs a command on one or more cloud phone instances.
     *
     * @param request - RunCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunCommandResponse
     *
     * @param RunCommandRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RunCommandResponse
     */
    public function runCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->commandContent) {
            @$query['CommandContent'] = $request->commandContent;
        }

        if (null !== $request->contentEncoding) {
            @$query['ContentEncoding'] = $request->contentEncoding;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunCommand',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs a command on one or more cloud phone instances.
     *
     * @param request - RunCommandRequest
     *
     * @returns RunCommandResponse
     *
     * @param RunCommandRequest $request
     *
     * @return RunCommandResponse
     */
    public function runCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommandWithOptions($request, $runtime);
    }

    /**
     * Runs a synchronous command on one or more Cloud Phone instances and returns the execution result.
     *
     * @remarks
     * The `RunSyncCommand` operation is designed for commands that return a result quickly, typically within milliseconds. For longer-running commands that may take several seconds, we recommend using the asynchronous [](t2729835.xdita#)operation.
     *
     * @param request - RunSyncCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunSyncCommandResponse
     *
     * @param RunSyncCommandRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RunSyncCommandResponse
     */
    public function runSyncCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commandContent) {
            @$query['CommandContent'] = $request->commandContent;
        }

        if (null !== $request->contentEncoding) {
            @$query['ContentEncoding'] = $request->contentEncoding;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->waitTime) {
            @$query['WaitTime'] = $request->waitTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunSyncCommand',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunSyncCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs a synchronous command on one or more Cloud Phone instances and returns the execution result.
     *
     * @remarks
     * The `RunSyncCommand` operation is designed for commands that return a result quickly, typically within milliseconds. For longer-running commands that may take several seconds, we recommend using the asynchronous [](t2729835.xdita#)operation.
     *
     * @param request - RunSyncCommandRequest
     *
     * @returns RunSyncCommandResponse
     *
     * @param RunSyncCommandRequest $request
     *
     * @return RunSyncCommandResponse
     */
    public function runSyncCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runSyncCommandWithOptions($request, $runtime);
    }

    /**
     * Pushes files from Object Storage Service (OSS) or a public download link to one or more cloud phones.
     *
     * @remarks
     * Use this operation to send files or folders from Object Storage Service (OSS) to cloud phones.
     *
     * @param request - SendFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendFileResponse
     *
     * @param SendFileRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SendFileResponse
     */
    public function sendFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIdList) {
            @$query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }

        if (null !== $request->autoInstall) {
            @$query['AutoInstall'] = $request->autoInstall;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->fileMd5) {
            @$query['FileMd5'] = $request->fileMd5;
        }

        if (null !== $request->sourceFilePath) {
            @$query['SourceFilePath'] = $request->sourceFilePath;
        }

        if (null !== $request->targetFileName) {
            @$query['TargetFileName'] = $request->targetFileName;
        }

        if (null !== $request->uploadEndpoint) {
            @$query['UploadEndpoint'] = $request->uploadEndpoint;
        }

        if (null !== $request->uploadType) {
            @$query['UploadType'] = $request->uploadType;
        }

        if (null !== $request->uploadUrl) {
            @$query['UploadUrl'] = $request->uploadUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendFile',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pushes files from Object Storage Service (OSS) or a public download link to one or more cloud phones.
     *
     * @remarks
     * Use this operation to send files or folders from Object Storage Service (OSS) to cloud phones.
     *
     * @param request - SendFileRequest
     *
     * @returns SendFileResponse
     *
     * @param SendFileRequest $request
     *
     * @return SendFileResponse
     */
    public function sendFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendFileWithOptions($request, $runtime);
    }

    /**
     * Sends a property template to cloud phone instances and, based on the template, sets properties in the Android system using the setprop command. An APK or a related program can read these property values. If you specify multiple template IDs, the property templates are randomly sent to the cloud phone instances.
     *
     * @param request - SendSystemPropertyTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendSystemPropertyTemplateResponse
     *
     * @param SendSystemPropertyTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SendSystemPropertyTemplateResponse
     */
    public function sendSystemPropertyTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateIds) {
            @$query['TemplateIds'] = $request->templateIds;
        }

        $body = [];
        if (null !== $request->androidInstanceIds) {
            @$body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendSystemPropertyTemplate',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendSystemPropertyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a property template to cloud phone instances and, based on the template, sets properties in the Android system using the setprop command. An APK or a related program can read these property values. If you specify multiple template IDs, the property templates are randomly sent to the cloud phone instances.
     *
     * @param request - SendSystemPropertyTemplateRequest
     *
     * @returns SendSystemPropertyTemplateResponse
     *
     * @param SendSystemPropertyTemplateRequest $request
     *
     * @return SendSystemPropertyTemplateResponse
     */
    public function sendSystemPropertyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSystemPropertyTemplateWithOptions($request, $runtime);
    }

    /**
     * Sets the authentication status for cloud phone instances. If you enable Android Debug Bridge (ADB) authentication for cloud phone instances, the system will verify the validity of the ADB key pairs provided by end users when they connect to the instances over ADB. To ensure successful authentication and a proper connection, we recommend that you attach ADB key pairs to cloud phone instances. If you disable ADB authentication for cloud phone instances, the system will no longer verify the validity of any ADB key pairs. As a result, end users can connect to the cloud phone instances over ADB without authentication, provided the network connection is functioning properly.
     *
     * @remarks
     * Before you call this operation, make sure that the desired cloud phone instance is in the Running state.
     *
     * @param request - SetAdbSecureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAdbSecureResponse
     *
     * @param SetAdbSecureRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetAdbSecureResponse
     */
    public function setAdbSecureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAdbSecure',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAdbSecureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the authentication status for cloud phone instances. If you enable Android Debug Bridge (ADB) authentication for cloud phone instances, the system will verify the validity of the ADB key pairs provided by end users when they connect to the instances over ADB. To ensure successful authentication and a proper connection, we recommend that you attach ADB key pairs to cloud phone instances. If you disable ADB authentication for cloud phone instances, the system will no longer verify the validity of any ADB key pairs. As a result, end users can connect to the cloud phone instances over ADB without authentication, provided the network connection is functioning properly.
     *
     * @remarks
     * Before you call this operation, make sure that the desired cloud phone instance is in the Running state.
     *
     * @param request - SetAdbSecureRequest
     *
     * @returns SetAdbSecureResponse
     *
     * @param SetAdbSecureRequest $request
     *
     * @return SetAdbSecureResponse
     */
    public function setAdbSecure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAdbSecureWithOptions($request, $runtime);
    }

    /**
     * Adds or purges IP addresses and domain names from the network access blacklist.
     *
     * @remarks
     * - This operation requires image version 26.01 or later.
     * - This API call synchronously updates the IP address blacklist and the domain name blacklist.
     * - The IP address blacklist supports individual IP addresses and IP address segments. The update overwrites the existing configuration. If you pass an empty string (""), all configured IP blacklist entries are purged.
     * - The domain name blacklist supports only exact matches and does not support regular expressions. If you pass an empty string (""), all configured domain name blacklist entries are purged.
     * - After you change the configuration, restart the cloud phone to apply the new blacklist rules. Note that these rules may not take effect if you use an agent.
     *
     * @param request - SetNetworkBlacklistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetNetworkBlacklistResponse
     *
     * @param SetNetworkBlacklistRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetNetworkBlacklistResponse
     */
    public function setNetworkBlacklistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainBlacklist) {
            @$query['DomainBlacklist'] = $request->domainBlacklist;
        }

        if (null !== $request->ipBlacklist) {
            @$query['IpBlacklist'] = $request->ipBlacklist;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetNetworkBlacklist',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetNetworkBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or purges IP addresses and domain names from the network access blacklist.
     *
     * @remarks
     * - This operation requires image version 26.01 or later.
     * - This API call synchronously updates the IP address blacklist and the domain name blacklist.
     * - The IP address blacklist supports individual IP addresses and IP address segments. The update overwrites the existing configuration. If you pass an empty string (""), all configured IP blacklist entries are purged.
     * - The domain name blacklist supports only exact matches and does not support regular expressions. If you pass an empty string (""), all configured domain name blacklist entries are purged.
     * - After you change the configuration, restart the cloud phone to apply the new blacklist rules. Note that these rules may not take effect if you use an agent.
     *
     * @param request - SetNetworkBlacklistRequest
     *
     * @returns SetNetworkBlacklistResponse
     *
     * @param SetNetworkBlacklistRequest $request
     *
     * @return SetNetworkBlacklistResponse
     */
    public function setNetworkBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setNetworkBlacklistWithOptions($request, $runtime);
    }

    /**
     * Start cloud phone instances.
     *
     * @remarks
     * Only supports starting when the instance is in the **Stopped, Backup Failed, or Recovery Failed** state.
     *
     * @param request - StartAndroidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartAndroidInstanceResponse
     *
     * @param StartAndroidInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartAndroidInstanceResponse
     */
    public function startAndroidInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIds) {
            @$query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->saleMode) {
            @$query['SaleMode'] = $request->saleMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartAndroidInstance',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Start cloud phone instances.
     *
     * @remarks
     * Only supports starting when the instance is in the **Stopped, Backup Failed, or Recovery Failed** state.
     *
     * @param request - StartAndroidInstanceRequest
     *
     * @returns StartAndroidInstanceResponse
     *
     * @param StartAndroidInstanceRequest $request
     *
     * @return StartAndroidInstanceResponse
     */
    public function startAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * Enables the Android Debug Bridge (ADB) connection for an instance and creates an Internet mapping rule for its ADB port. This feature is available only for standard networks.
     *
     * @remarks
     * This feature can be enabled when the instance is not in the **UNAVAILABLE** state and has a **private IP address** assigned.
     *
     * @param request - StartInstanceAdbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartInstanceAdbResponse
     *
     * @param StartInstanceAdbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartInstanceAdbResponse
     */
    public function startInstanceAdbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartInstanceAdb',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartInstanceAdbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the Android Debug Bridge (ADB) connection for an instance and creates an Internet mapping rule for its ADB port. This feature is available only for standard networks.
     *
     * @remarks
     * This feature can be enabled when the instance is not in the **UNAVAILABLE** state and has a **private IP address** assigned.
     *
     * @param request - StartInstanceAdbRequest
     *
     * @returns StartInstanceAdbResponse
     *
     * @param StartInstanceAdbRequest $request
     *
     * @return StartInstanceAdbResponse
     */
    public function startInstanceAdb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceAdbWithOptions($request, $runtime);
    }

    /**
     * Stops (shuts down) an Android instance.
     *
     * @remarks
     * An instance can be stopped only if it is in the Active, Backup Failed, or **Recover Failed** status.
     *
     * @param request - StopAndroidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopAndroidInstanceResponse
     *
     * @param StopAndroidInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopAndroidInstanceResponse
     */
    public function stopAndroidInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->androidInstanceIds) {
            @$query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->forceStop) {
            @$query['ForceStop'] = $request->forceStop;
        }

        if (null !== $request->saleMode) {
            @$query['SaleMode'] = $request->saleMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopAndroidInstance',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops (shuts down) an Android instance.
     *
     * @remarks
     * An instance can be stopped only if it is in the Active, Backup Failed, or **Recover Failed** status.
     *
     * @param request - StopAndroidInstanceRequest
     *
     * @returns StopAndroidInstanceResponse
     *
     * @param StopAndroidInstanceRequest $request
     *
     * @return StopAndroidInstanceResponse
     */
    public function stopAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * Disables the ADB connection for an Android instance and deletes its ADB port forwarding rules. This operation applies only to standard networks.
     *
     * @param request - StopInstanceAdbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInstanceAdbResponse
     *
     * @param StopInstanceAdbRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopInstanceAdbResponse
     */
    public function stopInstanceAdbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopInstanceAdb',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopInstanceAdbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the ADB connection for an Android instance and deletes its ADB port forwarding rules. This operation applies only to standard networks.
     *
     * @param request - StopInstanceAdbRequest
     *
     * @returns StopInstanceAdbResponse
     *
     * @param StopInstanceAdbRequest $request
     *
     * @return StopInstanceAdbResponse
     */
    public function stopInstanceAdb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceAdbWithOptions($request, $runtime);
    }

    /**
     * Adds tags to one or more cloud phones.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to one or more cloud phones.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Uninstalls applications from one or more Cloud Phone instances.
     *
     * @remarks
     * This is an asynchronous operation. You can query the task status in the Task Hub by calling [DescribeTasks](~~DescribeTasks~~).
     *
     * @param request - UninstallAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallAppResponse
     *
     * @param UninstallAppRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UninstallAppResponse
     */
    public function uninstallAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIdList) {
            @$query['AppIdList'] = $request->appIdList;
        }

        if (null !== $request->instanceGroupIdList) {
            @$query['InstanceGroupIdList'] = $request->instanceGroupIdList;
        }

        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UninstallApp',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UninstallAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls applications from one or more Cloud Phone instances.
     *
     * @remarks
     * This is an asynchronous operation. You can query the task status in the Task Hub by calling [DescribeTasks](~~DescribeTasks~~).
     *
     * @param request - UninstallAppRequest
     *
     * @returns UninstallAppResponse
     *
     * @param UninstallAppRequest $request
     *
     * @return UninstallAppResponse
     */
    public function uninstallApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallAppWithOptions($request, $runtime);
    }

    /**
     * Uninstalls the monitoring plugin.
     *
     * @param request - UninstallMonitorAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallMonitorAgentResponse
     *
     * @param UninstallMonitorAgentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UninstallMonitorAgentResponse
     */
    public function uninstallMonitorAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->androidInstanceIds) {
            @$body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }

        if (null !== $request->saleMode) {
            @$body['SaleMode'] = $request->saleMode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UninstallMonitorAgent',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UninstallMonitorAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls the monitoring plugin.
     *
     * @param request - UninstallMonitorAgentRequest
     *
     * @returns UninstallMonitorAgentResponse
     *
     * @param UninstallMonitorAgentRequest $request
     *
     * @return UninstallMonitorAgentResponse
     */
    public function uninstallMonitorAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallMonitorAgentWithOptions($request, $runtime);
    }

    /**
     * Removes tags from cloud phones. If a tag is no longer associated with any cloud phone after it is removed, the tag is automatically deleted.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from cloud phones. If a tag is no longer associated with any cloud phone after it is removed, the tag is automatically deleted.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates the name of a custom image.
     *
     * @param request - UpdateCustomImageNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomImageNameResponse
     *
     * @param UpdateCustomImageNameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateCustomImageNameResponse
     */
    public function updateCustomImageNameWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$body['ImageName'] = $request->imageName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomImageName',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCustomImageNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the name of a custom image.
     *
     * @param request - UpdateCustomImageNameRequest
     *
     * @returns UpdateCustomImageNameResponse
     *
     * @param UpdateCustomImageNameRequest $request
     *
     * @return UpdateCustomImageNameResponse
     */
    public function updateCustomImageName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomImageNameWithOptions($request, $runtime);
    }

    /**
     * Updates the image of an instance group. This update affects all instances in the group.
     *
     * @remarks
     * The image and the instance group must be in the active state. The image must be available in the same region as the instance group.
     *
     * @param request - UpdateInstanceGroupImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceGroupImageResponse
     *
     * @param UpdateInstanceGroupImageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateInstanceGroupImageResponse
     */
    public function updateInstanceGroupImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceGroupIds) {
            @$body['InstanceGroupIds'] = $request->instanceGroupIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceGroupImage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceGroupImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the image of an instance group. This update affects all instances in the group.
     *
     * @remarks
     * The image and the instance group must be in the active state. The image must be available in the same region as the instance group.
     *
     * @param request - UpdateInstanceGroupImageRequest
     *
     * @returns UpdateInstanceGroupImageResponse
     *
     * @param UpdateInstanceGroupImageRequest $request
     *
     * @return UpdateInstanceGroupImageResponse
     */
    public function updateInstanceGroupImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceGroupImageWithOptions($request, $runtime);
    }

    /**
     * Changes the image of an instance in a cloud phone matrix. You can change the image for an instance only when the instance is in the Running, Stopped, or Failed to change the image state. The GPU vendor of the target image must match the GPU vendor of the server where the instance runs. If you change the image across major versions, such as from Android 10 to Android 12, the system clears all data. This operation is equivalent to changing the image and then resetting the instance.
     *
     * @remarks
     * <props="china">You can change images only for cloud phone matrix instances. Other instance types are not supported.<props="intl">This feature is not available on the Alibaba Cloud international site (www\\.alibabacloud.com).
     *
     * @param request - UpdateInstanceImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceImageResponse
     *
     * @param UpdateInstanceImageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateInstanceImageResponse
     */
    public function updateInstanceImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ignoreParamValidation) {
            @$query['IgnoreParamValidation'] = $request->ignoreParamValidation;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->reset) {
            @$query['Reset'] = $request->reset;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceImage',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the image of an instance in a cloud phone matrix. You can change the image for an instance only when the instance is in the Running, Stopped, or Failed to change the image state. The GPU vendor of the target image must match the GPU vendor of the server where the instance runs. If you change the image across major versions, such as from Android 10 to Android 12, the system clears all data. This operation is equivalent to changing the image and then resetting the instance.
     *
     * @remarks
     * <props="china">You can change images only for cloud phone matrix instances. Other instance types are not supported.<props="intl">This feature is not available on the Alibaba Cloud international site (www\\.alibabacloud.com).
     *
     * @param request - UpdateInstanceImageRequest
     *
     * @returns UpdateInstanceImageResponse
     *
     * @param UpdateInstanceImageRequest $request
     *
     * @return UpdateInstanceImageResponse
     */
    public function updateInstanceImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceImageWithOptions($request, $runtime);
    }

    /**
     * Upgrades an instance group. This operation only supports scaling out an instance group, which increases the number of instances.
     *
     * @param request - UpgradeAndroidInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeAndroidInstanceGroupResponse
     *
     * @param UpgradeAndroidInstanceGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpgradeAndroidInstanceGroupResponse
     */
    public function upgradeAndroidInstanceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->increaseNumberOfInstance) {
            @$query['IncreaseNumberOfInstance'] = $request->increaseNumberOfInstance;
        }

        if (null !== $request->instanceGroupId) {
            @$query['InstanceGroupId'] = $request->instanceGroupId;
        }

        if (null !== $request->paidCallBackUrl) {
            @$query['PaidCallBackUrl'] = $request->paidCallBackUrl;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeAndroidInstanceGroup',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades an instance group. This operation only supports scaling out an instance group, which increases the number of instances.
     *
     * @param request - UpgradeAndroidInstanceGroupRequest
     *
     * @returns UpgradeAndroidInstanceGroupResponse
     *
     * @param UpgradeAndroidInstanceGroupRequest $request
     *
     * @return UpgradeAndroidInstanceGroupResponse
     */
    public function upgradeAndroidInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeAndroidInstanceGroupWithOptions($request, $runtime);
    }
}
