<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AttachKeyPairRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AttachKeyPairResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AuthorizeAndroidInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AuthorizeAndroidInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BatchGetAcpConnectionTicketRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BatchGetAcpConnectionTicketResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ChangeCloudPhoneNodeRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ChangeCloudPhoneNodeResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CheckResourceStockRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CheckResourceStockResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAppShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCustomImageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCustomImageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateKeyPairRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateKeyPairResponse;
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
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeletePolicyGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeletePolicyGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteSystemPropertyTemplatesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteSystemPropertyTemplatesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAppsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBackupFilesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBackupFilesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeDisplayConfigRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeDisplayConfigResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeImageListRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeImageListResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeInvocationsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeInvocationsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeKeyPairsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeKeyPairsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponse;
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
use AlibabaCloud\SDK\Edsaic\V20230930\Models\FetchFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\FetchFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GenerateCoordinationCodeRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GenerateCoordinationCodeResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetInstancePropertiesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetInstancePropertiesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ImportKeyPairRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ImportKeyPairResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\InstallAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\InstallAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponse;
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
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RebootAndroidInstancesInGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RebootAndroidInstancesInGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoveryFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoveryFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewAndroidInstanceGroupsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewAndroidInstanceGroupsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewCloudPhoneNodesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewCloudPhoneNodesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ResetAndroidInstancesInGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ResetAndroidInstancesInGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RunCommandRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RunCommandResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SendFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SendFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SendSystemPropertyTemplateRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SendSystemPropertyTemplateResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SetAdbSecureRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SetAdbSecureResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StartAndroidInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StartAndroidInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StopAndroidInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\StopAndroidInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UninstallAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UninstallAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateCustomImageNameRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateCustomImageNameResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateInstanceGroupImageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateInstanceGroupImageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateInstanceImageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpdateInstanceImageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpgradeAndroidInstanceGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\UpgradeAndroidInstanceGroupResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Edsaic extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule = '';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Attaches an Android Debug Bridge (ADB) key pair to one or more cloud phone instances.
     *  *
     * @description *   You can attach to an ADB key pair only to cloud phone instances in the Running state.
     * *   After you attach an ADB key pair, make sure the private key of the ADB key pair is copied to the ~/.android directory (macOS or Linux operating systems) or the C:\\Users\\Username.android directory (Windows operating systems). In addition, you must run the adb kill-server command to restart the ADB process to ensure correct ADB connection. Otherwise, ADB connection may fail due to authentication exceptions.
     *  *
     * @param AttachKeyPairRequest $request AttachKeyPairRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachKeyPairResponse AttachKeyPairResponse
     */
    public function attachKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->keyPairId)) {
            $query['KeyPairId'] = $request->keyPairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Attaches an Android Debug Bridge (ADB) key pair to one or more cloud phone instances.
     *  *
     * @description *   You can attach to an ADB key pair only to cloud phone instances in the Running state.
     * *   After you attach an ADB key pair, make sure the private key of the ADB key pair is copied to the ~/.android directory (macOS or Linux operating systems) or the C:\\Users\\Username.android directory (Windows operating systems). In addition, you must run the adb kill-server command to restart the ADB process to ensure correct ADB connection. Otherwise, ADB connection may fail due to authentication exceptions.
     *  *
     * @param AttachKeyPairRequest $request AttachKeyPairRequest
     *
     * @return AttachKeyPairResponse AttachKeyPairResponse
     */
    public function attachKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Authorize/unauthorize Android instances for users.
     *  *
     * @description Instance states that support user assignment: Available, Shutting Down, Stopped, Starting, Backing Up, Restoring, Backup Failed, Restore Failed.
     * Instance states that support unassignment: Available, Shutting Down, Stopped, Starting, Backing Up, Restoring, Backup Failed, Restore Failed, Expired, Overdue, Deleted.
     *  *
     * @param AuthorizeAndroidInstanceRequest $request AuthorizeAndroidInstanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthorizeAndroidInstanceResponse AuthorizeAndroidInstanceResponse
     */
    public function authorizeAndroidInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIds)) {
            $query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }
        if (!Utils::isUnset($request->authorizeUserId)) {
            $query['AuthorizeUserId'] = $request->authorizeUserId;
        }
        if (!Utils::isUnset($request->unAuthorizeUserId)) {
            $query['UnAuthorizeUserId'] = $request->unAuthorizeUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Authorize/unauthorize Android instances for users.
     *  *
     * @description Instance states that support user assignment: Available, Shutting Down, Stopped, Starting, Backing Up, Restoring, Backup Failed, Restore Failed.
     * Instance states that support unassignment: Available, Shutting Down, Stopped, Starting, Backing Up, Restoring, Backup Failed, Restore Failed, Expired, Overdue, Deleted.
     *  *
     * @param AuthorizeAndroidInstanceRequest $request AuthorizeAndroidInstanceRequest
     *
     * @return AuthorizeAndroidInstanceResponse AuthorizeAndroidInstanceResponse
     */
    public function authorizeAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Generates and uploads backup files.
     *  *
     * @description Currently, this operation allows you to upload only backup files generated by cloud phones to Object Storage Service (OSS) buckets.
     *  *
     * @param BackupFileRequest $request BackupFileRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return BackupFileResponse BackupFileResponse
     */
    public function backupFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIdList)) {
            $query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }
        if (!Utils::isUnset($request->backupAll)) {
            $query['BackupAll'] = $request->backupAll;
        }
        if (!Utils::isUnset($request->backupFileName)) {
            $query['BackupFileName'] = $request->backupFileName;
        }
        if (!Utils::isUnset($request->backupFilePath)) {
            $query['BackupFilePath'] = $request->backupFilePath;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->sourceAppList)) {
            $query['SourceAppList'] = $request->sourceAppList;
        }
        if (!Utils::isUnset($request->sourceFilePathList)) {
            $query['SourceFilePathList'] = $request->sourceFilePathList;
        }
        if (!Utils::isUnset($request->uploadEndpoint)) {
            $query['UploadEndpoint'] = $request->uploadEndpoint;
        }
        if (!Utils::isUnset($request->uploadType)) {
            $query['UploadType'] = $request->uploadType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Generates and uploads backup files.
     *  *
     * @description Currently, this operation allows you to upload only backup files generated by cloud phones to Object Storage Service (OSS) buckets.
     *  *
     * @param BackupFileRequest $request BackupFileRequest
     *
     * @return BackupFileResponse BackupFileResponse
     */
    public function backupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->backupFileWithOptions($request, $runtime);
    }

    /**
     * @summary Retrieves connection tickets in batch.
     *  *
     * @param BatchGetAcpConnectionTicketRequest $request BatchGetAcpConnectionTicketRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGetAcpConnectionTicketResponse BatchGetAcpConnectionTicketResponse
     */
    public function batchGetAcpConnectionTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->instanceGroupId)) {
            $query['InstanceGroupId'] = $request->instanceGroupId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceTasks)) {
            $query['InstanceTasks'] = $request->instanceTasks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Retrieves connection tickets in batch.
     *  *
     * @param BatchGetAcpConnectionTicketRequest $request BatchGetAcpConnectionTicketRequest
     *
     * @return BatchGetAcpConnectionTicketResponse BatchGetAcpConnectionTicketResponse
     */
    public function batchGetAcpConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetAcpConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * @summary 修改云手机矩阵的配置
     *  *
     * @param ChangeCloudPhoneNodeRequest $request ChangeCloudPhoneNodeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeCloudPhoneNodeResponse ChangeCloudPhoneNodeResponse
     */
    public function changeCloudPhoneNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->phoneCount)) {
            $query['PhoneCount'] = $request->phoneCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 修改云手机矩阵的配置
     *  *
     * @param ChangeCloudPhoneNodeRequest $request ChangeCloudPhoneNodeRequest
     *
     * @return ChangeCloudPhoneNodeResponse ChangeCloudPhoneNodeResponse
     */
    public function changeCloudPhoneNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeCloudPhoneNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Check the resource inventory.
     *  *
     * @param CheckResourceStockRequest $request CheckResourceStockRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckResourceStockResponse CheckResourceStockResponse
     */
    public function checkResourceStockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acpSpecId)) {
            $query['AcpSpecId'] = $request->acpSpecId;
        }
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->gpuAcceleration)) {
            $query['GpuAcceleration'] = $request->gpuAcceleration;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Check the resource inventory.
     *  *
     * @param CheckResourceStockRequest $request CheckResourceStockRequest
     *
     * @return CheckResourceStockResponse CheckResourceStockResponse
     */
    public function checkResourceStock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkResourceStockWithOptions($request, $runtime);
    }

    /**
     * @summary Creates pay-as-you-go or subscription instance groups.
     *  *
     * @description Before creating an instance group, ensure you understand the [billing methods](https://help.aliyun.com/document_detail/2807121.html) supported by Cloud Phone.
     * *   If the billing method of an instance group is PrePaid, AutoPay is set to false by default. In this case, you need to go to [Expenses and Costs](https://usercenter2-intl.aliyun.com/order/list) to manually complete the payment.
     * *   You can also set AutoPay to true based on your business requirements.
     *  *
     * @param CreateAndroidInstanceGroupRequest $request CreateAndroidInstanceGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAndroidInstanceGroupResponse CreateAndroidInstanceGroupResponse
     */
    public function createAndroidInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enableIpv6)) {
            $query['EnableIpv6'] = $request->enableIpv6;
        }
        if (!Utils::isUnset($request->gpuAcceleration)) {
            $query['GpuAcceleration'] = $request->gpuAcceleration;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceGroupName)) {
            $query['InstanceGroupName'] = $request->instanceGroupName;
        }
        if (!Utils::isUnset($request->instanceGroupSpec)) {
            $query['InstanceGroupSpec'] = $request->instanceGroupSpec;
        }
        if (!Utils::isUnset($request->ipv6Bandwidth)) {
            $query['Ipv6Bandwidth'] = $request->ipv6Bandwidth;
        }
        if (!Utils::isUnset($request->keyPairId)) {
            $query['KeyPairId'] = $request->keyPairId;
        }
        if (!Utils::isUnset($request->numberOfInstances)) {
            $query['NumberOfInstances'] = $request->numberOfInstances;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates pay-as-you-go or subscription instance groups.
     *  *
     * @description Before creating an instance group, ensure you understand the [billing methods](https://help.aliyun.com/document_detail/2807121.html) supported by Cloud Phone.
     * *   If the billing method of an instance group is PrePaid, AutoPay is set to false by default. In this case, you need to go to [Expenses and Costs](https://usercenter2-intl.aliyun.com/order/list) to manually complete the payment.
     * *   You can also set AutoPay to true based on your business requirements.
     *  *
     * @param CreateAndroidInstanceGroupRequest $request CreateAndroidInstanceGroupRequest
     *
     * @return CreateAndroidInstanceGroupResponse CreateAndroidInstanceGroupResponse
     */
    public function createAndroidInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAndroidInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an Android application.
     *  *
     * @description When creating an app, you can provide app information to the system in one of the following ways:
     * *   Way 1: Apps from the Application Center
     *     *   You can use one of the following methods:
     *         *   Method 1: Pass in the `FileName` and `FilePath` parameters at the same time.
     *         *   Method 2: Pass in the `OssAppUrl` parameter
     *     *   Rule: If your app is from the Alibaba Cloud Workspace Application Center, you must use either Method 1 or Method 2. If both are used, Method 1 takes priority.
     *     *   Condition: Before you proceed, log on to the [Elastic Desktop Service (EDS) Enterprise console](https://eds.console.aliyun.com/osshelp) and follow the on-screen instructions to upload the app file to the Application Center to obtain the values of the `FileName`, `FilePath`, and `OssAppUrl` parameters.
     * *   Way 2: Custom apps
     *     *   Pass in the `CustomAppInfo` parameter.
     *     *   Rule: If you pass in the `CustomAppInfo` parameter, all six fields within it are required.
     * >  If Way 1 and Way 2 are adopted simultaneously, the information from Way 2 takes priority.
     *  *
     * @param CreateAppRequest $tmpReq  CreateAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createAppWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->customAppInfo)) {
            $request->customAppInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customAppInfo, 'CustomAppInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->customAppInfoShrink)) {
            $query['CustomAppInfo'] = $request->customAppInfoShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->iconUrl)) {
            $query['IconUrl'] = $request->iconUrl;
        }
        if (!Utils::isUnset($request->installParam)) {
            $query['InstallParam'] = $request->installParam;
        }
        if (!Utils::isUnset($request->ossAppUrl)) {
            $query['OssAppUrl'] = $request->ossAppUrl;
        }
        if (!Utils::isUnset($request->signApk)) {
            $query['SignApk'] = $request->signApk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates an Android application.
     *  *
     * @description When creating an app, you can provide app information to the system in one of the following ways:
     * *   Way 1: Apps from the Application Center
     *     *   You can use one of the following methods:
     *         *   Method 1: Pass in the `FileName` and `FilePath` parameters at the same time.
     *         *   Method 2: Pass in the `OssAppUrl` parameter
     *     *   Rule: If your app is from the Alibaba Cloud Workspace Application Center, you must use either Method 1 or Method 2. If both are used, Method 1 takes priority.
     *     *   Condition: Before you proceed, log on to the [Elastic Desktop Service (EDS) Enterprise console](https://eds.console.aliyun.com/osshelp) and follow the on-screen instructions to upload the app file to the Application Center to obtain the values of the `FileName`, `FilePath`, and `OssAppUrl` parameters.
     * *   Way 2: Custom apps
     *     *   Pass in the `CustomAppInfo` parameter.
     *     *   Rule: If you pass in the `CustomAppInfo` parameter, all six fields within it are required.
     * >  If Way 1 and Way 2 are adopted simultaneously, the information from Way 2 takes priority.
     *  *
     * @param CreateAppRequest $request CreateAppRequest
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a cloud phone matrix.
     *  *
     * @param CreateCloudPhoneNodeRequest $tmpReq  CreateCloudPhoneNodeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCloudPhoneNodeResponse CreateCloudPhoneNodeResponse
     */
    public function createCloudPhoneNodeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCloudPhoneNodeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->displayConfig)) {
            $request->displayConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->displayConfig, 'DisplayConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->networkInfo)) {
            $request->networkInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->networkInfo, 'NetworkInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->bandwidthPackageType)) {
            $query['BandwidthPackageType'] = $request->bandwidthPackageType;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->downBandwidthLimit)) {
            $query['DownBandwidthLimit'] = $request->downBandwidthLimit;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->networkInfoShrink)) {
            $query['NetworkInfo'] = $request->networkInfoShrink;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->phoneCount)) {
            $query['PhoneCount'] = $request->phoneCount;
        }
        if (!Utils::isUnset($request->phoneDataVolume)) {
            $query['PhoneDataVolume'] = $request->phoneDataVolume;
        }
        if (!Utils::isUnset($request->resolutionHeight)) {
            $query['ResolutionHeight'] = $request->resolutionHeight;
        }
        if (!Utils::isUnset($request->resolutionWidth)) {
            $query['ResolutionWidth'] = $request->resolutionWidth;
        }
        if (!Utils::isUnset($request->serverShareDataVolume)) {
            $query['ServerShareDataVolume'] = $request->serverShareDataVolume;
        }
        if (!Utils::isUnset($request->serverType)) {
            $query['ServerType'] = $request->serverType;
        }
        if (!Utils::isUnset($request->streamMode)) {
            $query['StreamMode'] = $request->streamMode;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->upBandwidthLimit)) {
            $query['UpBandwidthLimit'] = $request->upBandwidthLimit;
        }
        if (!Utils::isUnset($request->useTemplate)) {
            $query['UseTemplate'] = $request->useTemplate;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $body = [];
        if (!Utils::isUnset($request->displayConfigShrink)) {
            $body['DisplayConfig'] = $request->displayConfigShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates a cloud phone matrix.
     *  *
     * @param CreateCloudPhoneNodeRequest $request CreateCloudPhoneNodeRequest
     *
     * @return CreateCloudPhoneNodeResponse CreateCloudPhoneNodeResponse
     */
    public function createCloudPhoneNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudPhoneNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom image from a cloud phone instance.
     *  *
     * @param CreateCustomImageRequest $request CreateCustomImageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomImageResponse CreateCustomImageResponse
     */
    public function createCustomImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->imageName)) {
            $body['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates a custom image from a cloud phone instance.
     *  *
     * @param CreateCustomImageRequest $request CreateCustomImageRequest
     *
     * @return CreateCustomImageResponse CreateCustomImageResponse
     */
    public function createCustomImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomImageWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an Android Debug Bridge (ADB) key pair. The system retains the public key and provides a PEM-encoded private key in PKCS#8 format, adhering to the ADB connection specification. You must securely store the private key.
     *  *
     * @description In addition to using the CreateKeyPair operation to generate a key pair, you can also create one by using the ADB tool and upload it to the Cloud Phone console. The usage of this key pair is identical to that of a system-generated key pair.
     * Each tenant can create up to 500 key pairs.
     *  *
     * @param CreateKeyPairRequest $request CreateKeyPairRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateKeyPairResponse CreateKeyPairResponse
     */
    public function createKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates an Android Debug Bridge (ADB) key pair. The system retains the public key and provides a PEM-encoded private key in PKCS#8 format, adhering to the ADB connection specification. You must securely store the private key.
     *  *
     * @description In addition to using the CreateKeyPair operation to generate a key pair, you can also create one by using the ADB tool and upload it to the Cloud Phone console. The usage of this key pair is identical to that of a system-generated key pair.
     * Each tenant can create up to 500 key pairs.
     *  *
     * @param CreateKeyPairRequest $request CreateKeyPairRequest
     *
     * @return CreateKeyPairResponse CreateKeyPairResponse
     */
    public function createKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a policy.
     *  *
     * @param CreatePolicyGroupRequest $tmpReq  CreatePolicyGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyGroupResponse CreatePolicyGroupResponse
     */
    public function createPolicyGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePolicyGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->netRedirectPolicy)) {
            $request->netRedirectPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->netRedirectPolicy, 'NetRedirectPolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->watermark)) {
            $request->watermarkShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->watermark, 'Watermark', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cameraRedirect)) {
            $body['CameraRedirect'] = $request->cameraRedirect;
        }
        if (!Utils::isUnset($request->clipboard)) {
            $body['Clipboard'] = $request->clipboard;
        }
        if (!Utils::isUnset($request->html5FileTransfer)) {
            $body['Html5FileTransfer'] = $request->html5FileTransfer;
        }
        if (!Utils::isUnset($request->localDrive)) {
            $body['LocalDrive'] = $request->localDrive;
        }
        if (!Utils::isUnset($request->lockResolution)) {
            $body['LockResolution'] = $request->lockResolution;
        }
        if (!Utils::isUnset($request->netRedirectPolicyShrink)) {
            $body['NetRedirectPolicy'] = $request->netRedirectPolicyShrink;
        }
        if (!Utils::isUnset($request->policyGroupName)) {
            $body['PolicyGroupName'] = $request->policyGroupName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $body['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->resolutionHeight)) {
            $body['ResolutionHeight'] = $request->resolutionHeight;
        }
        if (!Utils::isUnset($request->resolutionWidth)) {
            $body['ResolutionWidth'] = $request->resolutionWidth;
        }
        if (!Utils::isUnset($request->watermarkShrink)) {
            $body['Watermark'] = $request->watermarkShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates a policy.
     *  *
     * @param CreatePolicyGroupRequest $request CreatePolicyGroupRequest
     *
     * @return CreatePolicyGroupResponse CreatePolicyGroupResponse
     */
    public function createPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a screenshot of a cloud phone instance.
     *  *
     * @description You can call this operation to create a screenshot of a cloud phone instance and upload it to the default Object Storage Service (OSS) bucket. The operation returns a task ID, which you can use with the DescribeTasks operation to get the download link for the screenshot.
     *  *
     * @param CreateScreenshotRequest $request CreateScreenshotRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScreenshotResponse CreateScreenshotResponse
     */
    public function createScreenshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIdList)) {
            $query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }
        if (!Utils::isUnset($request->ossBucketName)) {
            $query['OssBucketName'] = $request->ossBucketName;
        }
        if (!Utils::isUnset($request->skipCheckPolicyConfig)) {
            $query['SkipCheckPolicyConfig'] = $request->skipCheckPolicyConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates a screenshot of a cloud phone instance.
     *  *
     * @description You can call this operation to create a screenshot of a cloud phone instance and upload it to the default Object Storage Service (OSS) bucket. The operation returns a task ID, which you can use with the DescribeTasks operation to get the download link for the screenshot.
     *  *
     * @param CreateScreenshotRequest $request CreateScreenshotRequest
     *
     * @return CreateScreenshotResponse CreateScreenshotResponse
     */
    public function createScreenshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScreenshotWithOptions($request, $runtime);
    }

    /**
     * @summary 创建系统属性模板
     *  *
     * @param CreateSystemPropertyTemplateRequest $tmpReq  CreateSystemPropertyTemplateRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSystemPropertyTemplateResponse CreateSystemPropertyTemplateResponse
     */
    public function createSystemPropertyTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSystemPropertyTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->systemPropertyInfo)) {
            $request->systemPropertyInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->systemPropertyInfo, 'SystemPropertyInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->enableAuto)) {
            $query['EnableAuto'] = $request->enableAuto;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->systemPropertyInfoShrink)) {
            $query['SystemPropertyInfo'] = $request->systemPropertyInfoShrink;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 创建系统属性模板
     *  *
     * @param CreateSystemPropertyTemplateRequest $request CreateSystemPropertyTemplateRequest
     *
     * @return CreateSystemPropertyTemplateResponse CreateSystemPropertyTemplateResponse
     */
    public function createSystemPropertyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSystemPropertyTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Delete an instance group.
     *  *
     * @description You can delete only pay-as-you-go instance groups.
     * You can delete subscription instance groups only after they expire.
     *  *
     * @param DeleteAndroidInstanceGroupRequest $request DeleteAndroidInstanceGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAndroidInstanceGroupResponse DeleteAndroidInstanceGroupResponse
     */
    public function deleteAndroidInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceGroupIds)) {
            $query['InstanceGroupIds'] = $request->instanceGroupIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Delete an instance group.
     *  *
     * @description You can delete only pay-as-you-go instance groups.
     * You can delete subscription instance groups only after they expire.
     *  *
     * @param DeleteAndroidInstanceGroupRequest $request DeleteAndroidInstanceGroupRequest
     *
     * @return DeleteAndroidInstanceGroupResponse DeleteAndroidInstanceGroupResponse
     */
    public function deleteAndroidInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAndroidInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an application. Before you delete an application, make sure that the application is not installed on any instances.
     *  *
     * @param DeleteAppsRequest $request DeleteAppsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppsResponse DeleteAppsResponse
     */
    public function deleteAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appIdList)) {
            $query['AppIdList'] = $request->appIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Deletes an application. Before you delete an application, make sure that the application is not installed on any instances.
     *  *
     * @param DeleteAppsRequest $request DeleteAppsRequest
     *
     * @return DeleteAppsResponse DeleteAppsResponse
     */
    public function deleteApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppsWithOptions($request, $runtime);
    }

    /**
     * @summary 删除备份文件
     *  *
     * @param DeleteBackupFileRequest $request DeleteBackupFileRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBackupFileResponse DeleteBackupFileResponse
     */
    public function deleteBackupFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupFileIdList)) {
            $query['BackupFileIdList'] = $request->backupFileIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除备份文件
     *  *
     * @param DeleteBackupFileRequest $request DeleteBackupFileRequest
     *
     * @return DeleteBackupFileResponse DeleteBackupFileResponse
     */
    public function deleteBackupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupFileWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a cloud phone matrix.
     *  *
     * @description Before you proceed, make sure that the cloud phone matrix that you want to delete expired.
     *  *
     * @param DeleteCloudPhoneNodesRequest $request DeleteCloudPhoneNodesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCloudPhoneNodesResponse DeleteCloudPhoneNodesResponse
     */
    public function deleteCloudPhoneNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeIds)) {
            $body['NodeIds'] = $request->nodeIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Deletes a cloud phone matrix.
     *  *
     * @description Before you proceed, make sure that the cloud phone matrix that you want to delete expired.
     *  *
     * @param DeleteCloudPhoneNodesRequest $request DeleteCloudPhoneNodesRequest
     *
     * @return DeleteCloudPhoneNodesResponse DeleteCloudPhoneNodesResponse
     */
    public function deleteCloudPhoneNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudPhoneNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom image.
     *  *
     * @description You cannot delete an image that is currently in use by an instance group.
     *  *
     * @param DeleteImagesRequest $tmpReq  DeleteImagesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteImagesResponse DeleteImagesResponse
     */
    public function deleteImagesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteImagesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->imageIds)) {
            $request->imageIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageIds, 'ImageIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->imageIdsShrink)) {
            $body['ImageIds'] = $request->imageIdsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Deletes a custom image.
     *  *
     * @description You cannot delete an image that is currently in use by an instance group.
     *  *
     * @param DeleteImagesRequest $request DeleteImagesRequest
     *
     * @return DeleteImagesResponse DeleteImagesResponse
     */
    public function deleteImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImagesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes Android Debug Bridge (ADB) key pairs.
     *  *
     * @description *   If a cloud phone instance is currently associated with the ADB key pair you intend to delete, the ADB key pair cannot be deleted.
     * *   Once an ADB key pair is deleted, it cannot be retrieved or queried by using the DescribeKeyPairs operation.
     *  *
     * @param DeleteKeyPairsRequest $request DeleteKeyPairsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKeyPairsResponse DeleteKeyPairsResponse
     */
    public function deleteKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairIds)) {
            $query['KeyPairIds'] = $request->keyPairIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Deletes Android Debug Bridge (ADB) key pairs.
     *  *
     * @description *   If a cloud phone instance is currently associated with the ADB key pair you intend to delete, the ADB key pair cannot be deleted.
     * *   Once an ADB key pair is deleted, it cannot be retrieved or queried by using the DescribeKeyPairs operation.
     *  *
     * @param DeleteKeyPairsRequest $request DeleteKeyPairsRequest
     *
     * @return DeleteKeyPairsResponse DeleteKeyPairsResponse
     */
    public function deleteKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a policy.
     *  *
     * @param DeletePolicyGroupRequest $request DeletePolicyGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyGroupResponse DeletePolicyGroupResponse
     */
    public function deletePolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyGroupIds)) {
            $query['PolicyGroupIds'] = $request->policyGroupIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Deletes a policy.
     *  *
     * @param DeletePolicyGroupRequest $request DeletePolicyGroupRequest
     *
     * @return DeletePolicyGroupResponse DeletePolicyGroupResponse
     */
    public function deletePolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 删除系统属性模板
     *  *
     * @param DeleteSystemPropertyTemplatesRequest $request DeleteSystemPropertyTemplatesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSystemPropertyTemplatesResponse DeleteSystemPropertyTemplatesResponse
     */
    public function deleteSystemPropertyTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateIds)) {
            $query['TemplateIds'] = $request->templateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除系统属性模板
     *  *
     * @param DeleteSystemPropertyTemplatesRequest $request DeleteSystemPropertyTemplatesRequest
     *
     * @return DeleteSystemPropertyTemplatesResponse DeleteSystemPropertyTemplatesResponse
     */
    public function deleteSystemPropertyTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSystemPropertyTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an instance group.
     *  *
     * @param DescribeAndroidInstanceGroupsRequest $request DescribeAndroidInstanceGroupsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAndroidInstanceGroupsResponse DescribeAndroidInstanceGroupsResponse
     */
    public function describeAndroidInstanceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->instanceGroupIds)) {
            $query['InstanceGroupIds'] = $request->instanceGroupIds;
        }
        if (!Utils::isUnset($request->instanceGroupName)) {
            $query['InstanceGroupName'] = $request->instanceGroupName;
        }
        if (!Utils::isUnset($request->keyPairId)) {
            $query['KeyPairId'] = $request->keyPairId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->saleMode)) {
            $query['SaleMode'] = $request->saleMode;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the details of an instance group.
     *  *
     * @param DescribeAndroidInstanceGroupsRequest $request DescribeAndroidInstanceGroupsRequest
     *
     * @return DescribeAndroidInstanceGroupsResponse DescribeAndroidInstanceGroupsResponse
     */
    public function describeAndroidInstanceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAndroidInstanceGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries cloud phone instances.
     *  *
     * @param DescribeAndroidInstancesRequest $request DescribeAndroidInstancesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAndroidInstancesResponse DescribeAndroidInstancesResponse
     */
    public function describeAndroidInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIds)) {
            $query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }
        if (!Utils::isUnset($request->androidInstanceName)) {
            $query['AndroidInstanceName'] = $request->androidInstanceName;
        }
        if (!Utils::isUnset($request->appManagePolicyId)) {
            $query['AppManagePolicyId'] = $request->appManagePolicyId;
        }
        if (!Utils::isUnset($request->authorizedUserId)) {
            $query['AuthorizedUserId'] = $request->authorizedUserId;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->instanceGroupId)) {
            $query['InstanceGroupId'] = $request->instanceGroupId;
        }
        if (!Utils::isUnset($request->instanceGroupIds)) {
            $query['InstanceGroupIds'] = $request->instanceGroupIds;
        }
        if (!Utils::isUnset($request->instanceGroupName)) {
            $query['InstanceGroupName'] = $request->instanceGroupName;
        }
        if (!Utils::isUnset($request->keyPairId)) {
            $query['KeyPairId'] = $request->keyPairId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->officeSiteIds)) {
            $query['OfficeSiteIds'] = $request->officeSiteIds;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->qosRuleIds)) {
            $query['QosRuleIds'] = $request->qosRuleIds;
        }
        if (!Utils::isUnset($request->saleMode)) {
            $query['SaleMode'] = $request->saleMode;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries cloud phone instances.
     *  *
     * @param DescribeAndroidInstancesRequest $request DescribeAndroidInstancesRequest
     *
     * @return DescribeAndroidInstancesResponse DescribeAndroidInstancesResponse
     */
    public function describeAndroidInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAndroidInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries applications.
     *  *
     * @param DescribeAppsRequest $request DescribeAppsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppsResponse DescribeAppsResponse
     */
    public function describeAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appIdList)) {
            $query['AppIdList'] = $request->appIdList;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->installationStatus)) {
            $query['InstallationStatus'] = $request->installationStatus;
        }
        if (!Utils::isUnset($request->MD5)) {
            $query['MD5'] = $request->MD5;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries applications.
     *  *
     * @param DescribeAppsRequest $request DescribeAppsRequest
     *
     * @return DescribeAppsResponse DescribeAppsResponse
     */
    public function describeApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries backup files.
     *  *
     * @description Currently, this operation allows you to query only backup files generated by cloud phones that are stored in Object Storage Service (OSS) buckets.
     *  *
     * @param DescribeBackupFilesRequest $request DescribeBackupFilesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupFilesResponse DescribeBackupFilesResponse
     */
    public function describeBackupFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceId)) {
            $query['AndroidInstanceId'] = $request->androidInstanceId;
        }
        if (!Utils::isUnset($request->androidInstanceName)) {
            $query['AndroidInstanceName'] = $request->androidInstanceName;
        }
        if (!Utils::isUnset($request->backupAll)) {
            $query['BackupAll'] = $request->backupAll;
        }
        if (!Utils::isUnset($request->backupFileId)) {
            $query['BackupFileId'] = $request->backupFileId;
        }
        if (!Utils::isUnset($request->backupFileName)) {
            $query['BackupFileName'] = $request->backupFileName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->instanceGroupId)) {
            $query['InstanceGroupId'] = $request->instanceGroupId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries backup files.
     *  *
     * @description Currently, this operation allows you to query only backup files generated by cloud phones that are stored in Object Storage Service (OSS) buckets.
     *  *
     * @param DescribeBackupFilesRequest $request DescribeBackupFilesRequest
     *
     * @return DescribeBackupFilesResponse DescribeBackupFilesResponse
     */
    public function describeBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a cloud phone matrix.
     *  *
     * @param DescribeCloudPhoneNodesRequest $request DescribeCloudPhoneNodesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudPhoneNodesResponse DescribeCloudPhoneNodesResponse
     */
    public function describeCloudPhoneNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthPackageId)) {
            $query['BandwidthPackageId'] = $request->bandwidthPackageId;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->nodeIds)) {
            $query['NodeIds'] = $request->nodeIds;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->serverType)) {
            $query['ServerType'] = $request->serverType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the details of a cloud phone matrix.
     *  *
     * @param DescribeCloudPhoneNodesRequest $request DescribeCloudPhoneNodesRequest
     *
     * @return DescribeCloudPhoneNodesResponse DescribeCloudPhoneNodesResponse
     */
    public function describeCloudPhoneNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudPhoneNodesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询显示设置
     *  *
     * @param DescribeDisplayConfigRequest $request DescribeDisplayConfigRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDisplayConfigResponse DescribeDisplayConfigResponse
     */
    public function describeDisplayConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->androidInstanceIds)) {
            $body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询显示设置
     *  *
     * @param DescribeDisplayConfigRequest $request DescribeDisplayConfigRequest
     *
     * @return DescribeDisplayConfigResponse DescribeDisplayConfigResponse
     */
    public function describeDisplayConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisplayConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries images.
     *  *
     * @param DescribeImageListRequest $request DescribeImageListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeImageListResponse DescribeImageListResponse
     */
    public function describeImageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageBizTags)) {
            $query['ImageBizTags'] = $request->imageBizTags;
        }
        if (!Utils::isUnset($request->imagePackageType)) {
            $query['ImagePackageType'] = $request->imagePackageType;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        $body = [];
        if (!Utils::isUnset($request->imageId)) {
            $body['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $body['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->imageType)) {
            $body['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries images.
     *  *
     * @param DescribeImageListRequest $request DescribeImageListRequest
     *
     * @return DescribeImageListResponse DescribeImageListResponse
     */
    public function describeImageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution results of commands.
     *  *
     * @param DescribeInvocationsRequest $request DescribeInvocationsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInvocationsResponse DescribeInvocationsResponse
     */
    public function describeInvocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->invocationId)) {
            $query['InvocationId'] = $request->invocationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the execution results of commands.
     *  *
     * @param DescribeInvocationsRequest $request DescribeInvocationsRequest
     *
     * @return DescribeInvocationsResponse DescribeInvocationsResponse
     */
    public function describeInvocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more key pairs.
     *  *
     * @param DescribeKeyPairsRequest $request DescribeKeyPairsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKeyPairsResponse DescribeKeyPairsResponse
     */
    public function describeKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairIds)) {
            $query['KeyPairIds'] = $request->keyPairIds;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries one or more key pairs.
     *  *
     * @param DescribeKeyPairsRequest $request DescribeKeyPairsRequest
     *
     * @return DescribeKeyPairsResponse DescribeKeyPairsResponse
     */
    public function describeKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询指定监控项的最新监控数据
     *  *
     * @param DescribeMetricLastRequest $request DescribeMetricLastRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricLastResponse DescribeMetricLastResponse
     */
    public function describeMetricLastWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->androidInstanceIds)) {
            $body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->length)) {
            $body['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->metricNames)) {
            $body['MetricNames'] = $request->metricNames;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询指定监控项的最新监控数据
     *  *
     * @param DescribeMetricLastRequest $request DescribeMetricLastRequest
     *
     * @return DescribeMetricLastResponse DescribeMetricLastResponse
     */
    public function describeMetricLast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricLastWithOptions($request, $runtime);
    }

    /**
     * @summary Query available regions.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->saleMode)) {
            $query['SaleMode'] = $request->saleMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Query available regions.
     *  *
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
     * @summary Query available specifications.
     *  *
     * @param DescribeSpecRequest $request DescribeSpecRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSpecResponse DescribeSpecResponse
     */
    public function describeSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->matrixSpec)) {
            $query['MatrixSpec'] = $request->matrixSpec;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->saleMode)) {
            $query['SaleMode'] = $request->saleMode;
        }
        if (!Utils::isUnset($request->specIds)) {
            $query['SpecIds'] = $request->specIds;
        }
        if (!Utils::isUnset($request->specStatus)) {
            $query['SpecStatus'] = $request->specStatus;
        }
        if (!Utils::isUnset($request->specType)) {
            $query['SpecType'] = $request->specType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Query available specifications.
     *  *
     * @param DescribeSpecRequest $request DescribeSpecRequest
     *
     * @return DescribeSpecResponse DescribeSpecResponse
     */
    public function describeSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSpecWithOptions($request, $runtime);
    }

    /**
     * @summary 查询系统属性模板
     *  *
     * @param DescribeSystemPropertyTemplatesRequest $request DescribeSystemPropertyTemplatesRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSystemPropertyTemplatesResponse DescribeSystemPropertyTemplatesResponse
     */
    public function describeSystemPropertyTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->templateIds)) {
            $query['TemplateIds'] = $request->templateIds;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询系统属性模板
     *  *
     * @param DescribeSystemPropertyTemplatesRequest $request DescribeSystemPropertyTemplatesRequest
     *
     * @return DescribeSystemPropertyTemplatesResponse DescribeSystemPropertyTemplatesResponse
     */
    public function describeSystemPropertyTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemPropertyTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tasks created for a cloud phone instance.
     *  *
     * @description *   You can call the DescribeTasks operation to query the tasks created for one or more cloud phone instances.
     * *   The system currently supports various tasks, including starting, stopping, restarting, and resetting cloud phone instances; backing up and restoring data; installing apps; and executing remote commands.
     * *   You can use the Level field to specify the type of task. If Level is set to 1, it represents a batch task. If Level is set to 2, it represents an instance-level task.
     * **Example**
     * Assume you restart two cloud phone instances with the instance IDs acp-25nt4kk9whhok\\*\\*\\*\\* and acp-j2taq887orj8l\\*\\*\\*\\*, and the returned request ID is B8ED2BA9-0C6A-5643-818F-B5D60A64\\*\\*\\*\\*. If you want to check the operation outcomes of the two cloud phone instances, you can call the DescribeTasks operation. You need to set the InvokeId request parameter to B8ED2BA9-0C6A-5643-818F-B5D60A64\\*\\*\\*\\*. If you only want to check the cloud phone instance with the ID acp-25nt4kk9whhok\\*\\*\\*\\*, you must set the ParentTaskId request parameter to the ID of the batch task and the AndroidInstanceId request parameter to acp-25nt4kk9whhok\\*\\*\\*\\* when calling the DescribeTasks operation.
     *  *
     * @param DescribeTasksRequest $request DescribeTasksRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTasksResponse DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->invokeId)) {
            $query['InvokeId'] = $request->invokeId;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
        }
        if (!Utils::isUnset($request->parentTaskId)) {
            $query['ParentTaskId'] = $request->parentTaskId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->taskIds)) {
            $query['TaskIds'] = $request->taskIds;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $query['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->taskStatuses)) {
            $query['TaskStatuses'] = $request->taskStatuses;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->taskTypes)) {
            $query['TaskTypes'] = $request->taskTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries tasks created for a cloud phone instance.
     *  *
     * @description *   You can call the DescribeTasks operation to query the tasks created for one or more cloud phone instances.
     * *   The system currently supports various tasks, including starting, stopping, restarting, and resetting cloud phone instances; backing up and restoring data; installing apps; and executing remote commands.
     * *   You can use the Level field to specify the type of task. If Level is set to 1, it represents a batch task. If Level is set to 2, it represents an instance-level task.
     * **Example**
     * Assume you restart two cloud phone instances with the instance IDs acp-25nt4kk9whhok\\*\\*\\*\\* and acp-j2taq887orj8l\\*\\*\\*\\*, and the returned request ID is B8ED2BA9-0C6A-5643-818F-B5D60A64\\*\\*\\*\\*. If you want to check the operation outcomes of the two cloud phone instances, you can call the DescribeTasks operation. You need to set the InvokeId request parameter to B8ED2BA9-0C6A-5643-818F-B5D60A64\\*\\*\\*\\*. If you only want to check the cloud phone instance with the ID acp-25nt4kk9whhok\\*\\*\\*\\*, you must set the ParentTaskId request parameter to the ID of the batch task and the AndroidInstanceId request parameter to acp-25nt4kk9whhok\\*\\*\\*\\* when calling the DescribeTasks operation.
     *  *
     * @param DescribeTasksRequest $request DescribeTasksRequest
     *
     * @return DescribeTasksResponse DescribeTasksResponse
     */
    public function describeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Detaches an Android Debug Bridge (ADB) key pair from one or more cloud phone instances.
     *  *
     * @description *   After you detach an ADB key pair from a cloud phone instance, the ADB connection will fail. This occurs because the system can no longer authenticate using a valid ADB public key, leading to authentication errors.
     *  *
     * @param DetachKeyPairRequest $request DetachKeyPairRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachKeyPairResponse DetachKeyPairResponse
     */
    public function detachKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->keyPairId)) {
            $query['KeyPairId'] = $request->keyPairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Detaches an Android Debug Bridge (ADB) key pair from one or more cloud phone instances.
     *  *
     * @description *   After you detach an ADB key pair from a cloud phone instance, the ADB connection will fail. This occurs because the system can no longer authenticate using a valid ADB public key, leading to authentication errors.
     *  *
     * @param DetachKeyPairRequest $request DetachKeyPairRequest
     *
     * @return DetachKeyPairResponse DetachKeyPairResponse
     */
    public function detachKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary 实例断开连接
     *  *
     * @param DisconnectAndroidInstanceRequest $request DisconnectAndroidInstanceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DisconnectAndroidInstanceResponse DisconnectAndroidInstanceResponse
     */
    public function disconnectAndroidInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 实例断开连接
     *  *
     * @param DisconnectAndroidInstanceRequest $request DisconnectAndroidInstanceRequest
     *
     * @return DisconnectAndroidInstanceResponse DisconnectAndroidInstanceResponse
     */
    public function disconnectAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disconnectAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Distributes an image.
     *  *
     * @description After you distribute an image in supported regions, the distribution cannot be canceled.
     *  *
     * @param DistributeImageRequest $request DistributeImageRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DistributeImageResponse DistributeImageResponse
     */
    public function distributeImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributeRegionList)) {
            $body['DistributeRegionList'] = $request->distributeRegionList;
        }
        if (!Utils::isUnset($request->imageId)) {
            $body['ImageId'] = $request->imageId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Distributes an image.
     *  *
     * @description After you distribute an image in supported regions, the distribution cannot be canceled.
     *  *
     * @param DistributeImageRequest $request DistributeImageRequest
     *
     * @return DistributeImageResponse DistributeImageResponse
     */
    public function distributeImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->distributeImageWithOptions($request, $runtime);
    }

    /**
     * @summary Downgrades an instance group. Currently, this operation allows you to only delete specific cloud phone instances from an instance group.
     *  *
     * @description This operation only allows you to scale down an instance group.
     *  *
     * @param DowngradeAndroidInstanceGroupRequest $request DowngradeAndroidInstanceGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DowngradeAndroidInstanceGroupResponse DowngradeAndroidInstanceGroupResponse
     */
    public function downgradeAndroidInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIds)) {
            $query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->instanceGroupId)) {
            $query['InstanceGroupId'] = $request->instanceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Downgrades an instance group. Currently, this operation allows you to only delete specific cloud phone instances from an instance group.
     *  *
     * @description This operation only allows you to scale down an instance group.
     *  *
     * @param DowngradeAndroidInstanceGroupRequest $request DowngradeAndroidInstanceGroupRequest
     *
     * @return DowngradeAndroidInstanceGroupResponse DowngradeAndroidInstanceGroupResponse
     */
    public function downgradeAndroidInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downgradeAndroidInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 结束协同
     *  *
     * @param EndCoordinationRequest $request EndCoordinationRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return EndCoordinationResponse EndCoordinationResponse
     */
    public function endCoordinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coordinatorUserId)) {
            $query['CoordinatorUserId'] = $request->coordinatorUserId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerUserId)) {
            $query['OwnerUserId'] = $request->ownerUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 结束协同
     *  *
     * @param EndCoordinationRequest $request EndCoordinationRequest
     *
     * @return EndCoordinationResponse EndCoordinationResponse
     */
    public function endCoordination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->endCoordinationWithOptions($request, $runtime);
    }

    /**
     * @summary 存储扩容
     *  *
     * @param ExpandDataVolumeRequest $request ExpandDataVolumeRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ExpandDataVolumeResponse ExpandDataVolumeResponse
     */
    public function expandDataVolumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->nodeIds)) {
            $query['NodeIds'] = $request->nodeIds;
        }
        if (!Utils::isUnset($request->shareDataVolume)) {
            $query['ShareDataVolume'] = $request->shareDataVolume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 存储扩容
     *  *
     * @param ExpandDataVolumeRequest $request ExpandDataVolumeRequest
     *
     * @return ExpandDataVolumeResponse ExpandDataVolumeResponse
     */
    public function expandDataVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->expandDataVolumeWithOptions($request, $runtime);
    }

    /**
     * @summary Pulls a file from a cloud phone instance and stores it in Object Storage Service (OSS).
     *  *
     * @description Currently, this operation allows you to retrieve files or folders from cloud phone instances and save them directly to OSS.
     *  *
     * @param FetchFileRequest $request FetchFileRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return FetchFileResponse FetchFileResponse
     */
    public function fetchFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIdList)) {
            $query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }
        if (!Utils::isUnset($request->sourceFilePath)) {
            $query['SourceFilePath'] = $request->sourceFilePath;
        }
        if (!Utils::isUnset($request->uploadEndpoint)) {
            $query['UploadEndpoint'] = $request->uploadEndpoint;
        }
        if (!Utils::isUnset($request->uploadType)) {
            $query['UploadType'] = $request->uploadType;
        }
        if (!Utils::isUnset($request->uploadUrl)) {
            $query['UploadUrl'] = $request->uploadUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Pulls a file from a cloud phone instance and stores it in Object Storage Service (OSS).
     *  *
     * @description Currently, this operation allows you to retrieve files or folders from cloud phone instances and save them directly to OSS.
     *  *
     * @param FetchFileRequest $request FetchFileRequest
     *
     * @return FetchFileResponse FetchFileResponse
     */
    public function fetchFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchFileWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a collaboration code for the cloud phone being accessed by using the current convenience account, and shares this code with other convenience accounts to allow them to access the same cloud phone.
     *  *
     * @description You can call this operation to generate a collaboration code for a cloud phone accessed by your current account and share this code with other convenience users to allow them to access the same cloud phone over the desktop, mobile, or web client.
     *  *
     * @param GenerateCoordinationCodeRequest $request GenerateCoordinationCodeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateCoordinationCodeResponse GenerateCoordinationCodeResponse
     */
    public function generateCoordinationCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerUserId)) {
            $query['OwnerUserId'] = $request->ownerUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Generates a collaboration code for the cloud phone being accessed by using the current convenience account, and shares this code with other convenience accounts to allow them to access the same cloud phone.
     *  *
     * @description You can call this operation to generate a collaboration code for a cloud phone accessed by your current account and share this code with other convenience users to allow them to access the same cloud phone over the desktop, mobile, or web client.
     *  *
     * @param GenerateCoordinationCodeRequest $request GenerateCoordinationCodeRequest
     *
     * @return GenerateCoordinationCodeResponse GenerateCoordinationCodeResponse
     */
    public function generateCoordinationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCoordinationCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 获取属性模板信息
     *  *
     * @param GetInstancePropertiesRequest $request GetInstancePropertiesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstancePropertiesResponse GetInstancePropertiesResponse
     */
    public function getInstancePropertiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取属性模板信息
     *  *
     * @param GetInstancePropertiesRequest $request GetInstancePropertiesRequest
     *
     * @return GetInstancePropertiesResponse GetInstancePropertiesResponse
     */
    public function getInstanceProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstancePropertiesWithOptions($request, $runtime);
    }

    /**
     * @summary Imports the public key of an Android Debug Bridge (ADB) key pair.
     *  *
     * @description To avoid authorization errors that could cause ADB connection failures, you must import the public key of an ADB key pair.
     *  *
     * @param ImportKeyPairRequest $request ImportKeyPairRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportKeyPairResponse ImportKeyPairResponse
     */
    public function importKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->publicKeyBody)) {
            $query['PublicKeyBody'] = $request->publicKeyBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Imports the public key of an Android Debug Bridge (ADB) key pair.
     *  *
     * @description To avoid authorization errors that could cause ADB connection failures, you must import the public key of an ADB key pair.
     *  *
     * @param ImportKeyPairRequest $request ImportKeyPairRequest
     *
     * @return ImportKeyPairResponse ImportKeyPairResponse
     */
    public function importKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Installs an app on multiple cloud phone instances at the same time.
     *  *
     * @description This operation runs asynchronously. To check the operation result, visit the Task Center. To retrieve task details, call the [DescribeTasks](~~DescribeTasks~~) operation.
     *  *
     * @param InstallAppRequest $request InstallAppRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallAppResponse InstallAppResponse
     */
    public function installAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appIdList)) {
            $query['AppIdList'] = $request->appIdList;
        }
        if (!Utils::isUnset($request->instanceGroupIdList)) {
            $query['InstanceGroupIdList'] = $request->instanceGroupIdList;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Installs an app on multiple cloud phone instances at the same time.
     *  *
     * @description This operation runs asynchronously. To check the operation result, visit the Task Center. To retrieve task details, call the [DescribeTasks](~~DescribeTasks~~) operation.
     *  *
     * @param InstallAppRequest $request InstallAppRequest
     *
     * @return InstallAppResponse InstallAppResponse
     */
    public function installApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installAppWithOptions($request, $runtime);
    }

    /**
     * @summary Queries policies.
     *  *
     * @param ListPolicyGroupsRequest $request ListPolicyGroupsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPolicyGroupsResponse ListPolicyGroupsResponse
     */
    public function listPolicyGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->policyGroupIds)) {
            $body['PolicyGroupIds'] = $request->policyGroupIds;
        }
        if (!Utils::isUnset($request->policyGroupName)) {
            $body['PolicyGroupName'] = $request->policyGroupName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $body['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries policies.
     *  *
     * @param ListPolicyGroupsRequest $request ListPolicyGroupsRequest
     *
     * @return ListPolicyGroupsResponse ListPolicyGroupsResponse
     */
    public function listPolicyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies attributes of a cloud phone instance. Currently, this operation allows you to modify only the name of a cloud phone instance.
     *  *
     * @param ModifyAndroidInstanceRequest $request ModifyAndroidInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAndroidInstanceResponse ModifyAndroidInstanceResponse
     */
    public function modifyAndroidInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceId)) {
            $query['AndroidInstanceId'] = $request->androidInstanceId;
        }
        if (!Utils::isUnset($request->downBandwidthLimit)) {
            $query['DownBandwidthLimit'] = $request->downBandwidthLimit;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->newAndroidInstanceName)) {
            $query['NewAndroidInstanceName'] = $request->newAndroidInstanceName;
        }
        if (!Utils::isUnset($request->upBandwidthLimit)) {
            $query['UpBandwidthLimit'] = $request->upBandwidthLimit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies attributes of a cloud phone instance. Currently, this operation allows you to modify only the name of a cloud phone instance.
     *  *
     * @param ModifyAndroidInstanceRequest $request ModifyAndroidInstanceRequest
     *
     * @return ModifyAndroidInstanceResponse ModifyAndroidInstanceResponse
     */
    public function modifyAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies attributes of an instance group.
     *  *
     * @param ModifyAndroidInstanceGroupRequest $request ModifyAndroidInstanceGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAndroidInstanceGroupResponse ModifyAndroidInstanceGroupResponse
     */
    public function modifyAndroidInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceGroupId)) {
            $query['InstanceGroupId'] = $request->instanceGroupId;
        }
        if (!Utils::isUnset($request->newInstanceGroupName)) {
            $query['NewInstanceGroupName'] = $request->newInstanceGroupName;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies attributes of an instance group.
     *  *
     * @param ModifyAndroidInstanceGroupRequest $request ModifyAndroidInstanceGroupRequest
     *
     * @return ModifyAndroidInstanceGroupResponse ModifyAndroidInstanceGroupResponse
     */
    public function modifyAndroidInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAndroidInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modify attributes of an application.
     *  *
     * @param ModifyAppRequest $request ModifyAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppResponse ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->iconUrl)) {
            $query['IconUrl'] = $request->iconUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modify attributes of an application.
     *  *
     * @param ModifyAppRequest $request ModifyAppRequest
     *
     * @return ModifyAppResponse ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a cloud phone matrix. Currently, you can only modify the name of a cloud phone matrix.
     *  *
     * @param ModifyCloudPhoneNodeRequest $request ModifyCloudPhoneNodeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCloudPhoneNodeResponse ModifyCloudPhoneNodeResponse
     */
    public function modifyCloudPhoneNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newNodeName)) {
            $query['NewNodeName'] = $request->newNodeName;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->streamMode)) {
            $query['StreamMode'] = $request->streamMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies a cloud phone matrix. Currently, you can only modify the name of a cloud phone matrix.
     *  *
     * @param ModifyCloudPhoneNodeRequest $request ModifyCloudPhoneNodeRequest
     *
     * @return ModifyCloudPhoneNodeResponse ModifyCloudPhoneNodeResponse
     */
    public function modifyCloudPhoneNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudPhoneNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 修改显示设置
     *  *
     * @param ModifyDisplayConfigRequest $tmpReq  ModifyDisplayConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDisplayConfigResponse ModifyDisplayConfigResponse
     */
    public function modifyDisplayConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyDisplayConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->displayConfig)) {
            $request->displayConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->displayConfig, 'DisplayConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->androidInstanceIds)) {
            $body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }
        if (!Utils::isUnset($request->displayConfigShrink)) {
            $body['DisplayConfig'] = $request->displayConfigShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 修改显示设置
     *  *
     * @param ModifyDisplayConfigRequest $request ModifyDisplayConfigRequest
     *
     * @return ModifyDisplayConfigResponse ModifyDisplayConfigResponse
     */
    public function modifyDisplayConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDisplayConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the billing method. Currently, this operation only allows you to change the billing method from pay-as-you-go to subscription.
     *  *
     * @param ModifyInstanceChargeTypeRequest $request ModifyInstanceChargeTypeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceChargeTypeResponse ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->instanceGroupIds)) {
            $query['InstanceGroupIds'] = $request->instanceGroupIds;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies the billing method. Currently, this operation only allows you to change the billing method from pay-as-you-go to subscription.
     *  *
     * @param ModifyInstanceChargeTypeRequest $request ModifyInstanceChargeTypeRequest
     *
     * @return ModifyInstanceChargeTypeResponse ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies Android Debug Bridge (ADB) key pairs.
     *  *
     * @param ModifyKeyPairNameRequest $request ModifyKeyPairNameRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyKeyPairNameResponse ModifyKeyPairNameResponse
     */
    public function modifyKeyPairNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairId)) {
            $query['KeyPairId'] = $request->keyPairId;
        }
        if (!Utils::isUnset($request->newKeyPairName)) {
            $query['NewKeyPairName'] = $request->newKeyPairName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies Android Debug Bridge (ADB) key pairs.
     *  *
     * @param ModifyKeyPairNameRequest $request ModifyKeyPairNameRequest
     *
     * @return ModifyKeyPairNameResponse ModifyKeyPairNameResponse
     */
    public function modifyKeyPairName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyKeyPairNameWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a policy.
     *  *
     * @param ModifyPolicyGroupRequest $tmpReq  ModifyPolicyGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPolicyGroupResponse ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyPolicyGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->netRedirectPolicy)) {
            $request->netRedirectPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->netRedirectPolicy, 'NetRedirectPolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->watermark)) {
            $request->watermarkShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->watermark, 'Watermark', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cameraRedirect)) {
            $body['CameraRedirect'] = $request->cameraRedirect;
        }
        if (!Utils::isUnset($request->clipboard)) {
            $body['Clipboard'] = $request->clipboard;
        }
        if (!Utils::isUnset($request->html5FileTransfer)) {
            $body['Html5FileTransfer'] = $request->html5FileTransfer;
        }
        if (!Utils::isUnset($request->localDrive)) {
            $body['LocalDrive'] = $request->localDrive;
        }
        if (!Utils::isUnset($request->lockResolution)) {
            $body['LockResolution'] = $request->lockResolution;
        }
        if (!Utils::isUnset($request->netRedirectPolicyShrink)) {
            $body['NetRedirectPolicy'] = $request->netRedirectPolicyShrink;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $body['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->policyGroupName)) {
            $body['PolicyGroupName'] = $request->policyGroupName;
        }
        if (!Utils::isUnset($request->resolutionHeight)) {
            $body['ResolutionHeight'] = $request->resolutionHeight;
        }
        if (!Utils::isUnset($request->resolutionWidth)) {
            $body['ResolutionWidth'] = $request->resolutionWidth;
        }
        if (!Utils::isUnset($request->watermarkShrink)) {
            $body['Watermark'] = $request->watermarkShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Modifies a policy.
     *  *
     * @param ModifyPolicyGroupRequest $request ModifyPolicyGroupRequest
     *
     * @return ModifyPolicyGroupResponse ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 修改属性模板
     *  *
     * @param ModifySystemPropertyTemplateRequest $tmpReq  ModifySystemPropertyTemplateRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySystemPropertyTemplateResponse ModifySystemPropertyTemplateResponse
     */
    public function modifySystemPropertyTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifySystemPropertyTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->systemPropertyInfo)) {
            $request->systemPropertyInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->systemPropertyInfo, 'SystemPropertyInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->enableAuto)) {
            $query['EnableAuto'] = $request->enableAuto;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->systemPropertyInfoShrink)) {
            $query['SystemPropertyInfo'] = $request->systemPropertyInfoShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 修改属性模板
     *  *
     * @param ModifySystemPropertyTemplateRequest $request ModifySystemPropertyTemplateRequest
     *
     * @return ModifySystemPropertyTemplateResponse ModifySystemPropertyTemplateResponse
     */
    public function modifySystemPropertyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySystemPropertyTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Operates apps in a cloud phone, such as opening, closing, and reopening apps.
     *  *
     * @description This operation runs asynchronously. To check the operation result, visit the Task Center. To retrieve task details, call the [DescribeTasks](~~DescribeTasks~~) operation.
     *  *
     * @param OperateAppRequest $request OperateAppRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateAppResponse OperateAppResponse
     */
    public function operateAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Operates apps in a cloud phone, such as opening, closing, and reopening apps.
     *  *
     * @description This operation runs asynchronously. To check the operation result, visit the Task Center. To retrieve task details, call the [DescribeTasks](~~DescribeTasks~~) operation.
     *  *
     * @param OperateAppRequest $request OperateAppRequest
     *
     * @return OperateAppResponse OperateAppResponse
     */
    public function operateApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAppWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts one or more cloud phone instances.
     *  *
     * @description Before you restart a cloud phone instance, make sure it is in one of the following states: **Available, Abnormal, Backup failure, and Restoration failure**.
     *  *
     * @param RebootAndroidInstancesInGroupRequest $request RebootAndroidInstancesInGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RebootAndroidInstancesInGroupResponse RebootAndroidInstancesInGroupResponse
     */
    public function rebootAndroidInstancesInGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIds)) {
            $query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }
        if (!Utils::isUnset($request->forceStop)) {
            $query['ForceStop'] = $request->forceStop;
        }
        if (!Utils::isUnset($request->saleMode)) {
            $query['SaleMode'] = $request->saleMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Restarts one or more cloud phone instances.
     *  *
     * @description Before you restart a cloud phone instance, make sure it is in one of the following states: **Available, Abnormal, Backup failure, and Restoration failure**.
     *  *
     * @param RebootAndroidInstancesInGroupRequest $request RebootAndroidInstancesInGroupRequest
     *
     * @return RebootAndroidInstancesInGroupResponse RebootAndroidInstancesInGroupResponse
     */
    public function rebootAndroidInstancesInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootAndroidInstancesInGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Restores backup files.
     *  *
     * @description Currently, this operation allows you to restore only backup files generated by cloud phones that are stored in Object Storage Service (OSS) buckets.
     *  *
     * @param RecoveryFileRequest $request RecoveryFileRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RecoveryFileResponse RecoveryFileResponse
     */
    public function recoveryFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIdList)) {
            $query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }
        if (!Utils::isUnset($request->backupAll)) {
            $query['BackupAll'] = $request->backupAll;
        }
        if (!Utils::isUnset($request->backupFileId)) {
            $query['BackupFileId'] = $request->backupFileId;
        }
        if (!Utils::isUnset($request->backupFilePath)) {
            $query['BackupFilePath'] = $request->backupFilePath;
        }
        if (!Utils::isUnset($request->uploadEndpoint)) {
            $query['UploadEndpoint'] = $request->uploadEndpoint;
        }
        if (!Utils::isUnset($request->uploadType)) {
            $query['UploadType'] = $request->uploadType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Restores backup files.
     *  *
     * @description Currently, this operation allows you to restore only backup files generated by cloud phones that are stored in Object Storage Service (OSS) buckets.
     *  *
     * @param RecoveryFileRequest $request RecoveryFileRequest
     *
     * @return RecoveryFileResponse RecoveryFileResponse
     */
    public function recoveryFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoveryFileWithOptions($request, $runtime);
    }

    /**
     * @summary Renews instance groups.
     *  *
     * @param RenewAndroidInstanceGroupsRequest $request RenewAndroidInstanceGroupsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewAndroidInstanceGroupsResponse RenewAndroidInstanceGroupsResponse
     */
    public function renewAndroidInstanceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->instanceGroupIds)) {
            $query['InstanceGroupIds'] = $request->instanceGroupIds;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Renews instance groups.
     *  *
     * @param RenewAndroidInstanceGroupsRequest $request RenewAndroidInstanceGroupsRequest
     *
     * @return RenewAndroidInstanceGroupsResponse RenewAndroidInstanceGroupsResponse
     */
    public function renewAndroidInstanceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewAndroidInstanceGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Renews a cloud mobile matrix.
     *  *
     * @param RenewCloudPhoneNodesRequest $request RenewCloudPhoneNodesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewCloudPhoneNodesResponse RenewCloudPhoneNodesResponse
     */
    public function renewCloudPhoneNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        $body = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->nodeIds)) {
            $body['NodeIds'] = $request->nodeIds;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $body['PeriodUnit'] = $request->periodUnit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Renews a cloud mobile matrix.
     *  *
     * @param RenewCloudPhoneNodesRequest $request RenewCloudPhoneNodesRequest
     *
     * @return RenewCloudPhoneNodesResponse RenewCloudPhoneNodesResponse
     */
    public function renewCloudPhoneNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewCloudPhoneNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Resets one or more cloud phone instances.
     *  *
     * @description Before you reset a cloud phone instance, make sure it is in one of the following states: **Available, Stopped, Abnormal, Backup failure, and Restoration failure**.
     *  *
     * @param ResetAndroidInstancesInGroupRequest $request ResetAndroidInstancesInGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAndroidInstancesInGroupResponse ResetAndroidInstancesInGroupResponse
     */
    public function resetAndroidInstancesInGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIds)) {
            $query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }
        if (!Utils::isUnset($request->saleMode)) {
            $query['SaleMode'] = $request->saleMode;
        }
        if (!Utils::isUnset($request->settingResetType)) {
            $query['SettingResetType'] = $request->settingResetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Resets one or more cloud phone instances.
     *  *
     * @description Before you reset a cloud phone instance, make sure it is in one of the following states: **Available, Stopped, Abnormal, Backup failure, and Restoration failure**.
     *  *
     * @param ResetAndroidInstancesInGroupRequest $request ResetAndroidInstancesInGroupRequest
     *
     * @return ResetAndroidInstancesInGroupResponse ResetAndroidInstancesInGroupResponse
     */
    public function resetAndroidInstancesInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAndroidInstancesInGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Executes a command on a cloud phone instance.
     *  *
     * @param RunCommandRequest $request RunCommandRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RunCommandResponse RunCommandResponse
     */
    public function runCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandContent)) {
            $query['CommandContent'] = $request->commandContent;
        }
        if (!Utils::isUnset($request->contentEncoding)) {
            $query['ContentEncoding'] = $request->contentEncoding;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Executes a command on a cloud phone instance.
     *  *
     * @param RunCommandRequest $request RunCommandRequest
     *
     * @return RunCommandResponse RunCommandResponse
     */
    public function runCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommandWithOptions($request, $runtime);
    }

    /**
     * @summary Pushes files from Object Storage Service (OSS) buckets to cloud phone instances.
     *  *
     * @description Currently, this operation allows you to only push files or folders from OSS buckets to cloud phone instances.
     *  *
     * @param SendFileRequest $request SendFileRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return SendFileResponse SendFileResponse
     */
    public function sendFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIdList)) {
            $query['AndroidInstanceIdList'] = $request->androidInstanceIdList;
        }
        if (!Utils::isUnset($request->sourceFilePath)) {
            $query['SourceFilePath'] = $request->sourceFilePath;
        }
        if (!Utils::isUnset($request->targetFileName)) {
            $query['TargetFileName'] = $request->targetFileName;
        }
        if (!Utils::isUnset($request->uploadEndpoint)) {
            $query['UploadEndpoint'] = $request->uploadEndpoint;
        }
        if (!Utils::isUnset($request->uploadType)) {
            $query['UploadType'] = $request->uploadType;
        }
        if (!Utils::isUnset($request->uploadUrl)) {
            $query['UploadUrl'] = $request->uploadUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Pushes files from Object Storage Service (OSS) buckets to cloud phone instances.
     *  *
     * @description Currently, this operation allows you to only push files or folders from OSS buckets to cloud phone instances.
     *  *
     * @param SendFileRequest $request SendFileRequest
     *
     * @return SendFileResponse SendFileResponse
     */
    public function sendFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendFileWithOptions($request, $runtime);
    }

    /**
     * @summary 发送属性模板
     *  *
     * @param SendSystemPropertyTemplateRequest $request SendSystemPropertyTemplateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SendSystemPropertyTemplateResponse SendSystemPropertyTemplateResponse
     */
    public function sendSystemPropertyTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateIds)) {
            $query['TemplateIds'] = $request->templateIds;
        }
        $body = [];
        if (!Utils::isUnset($request->androidInstanceIds)) {
            $body['AndroidInstanceIds'] = $request->androidInstanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 发送属性模板
     *  *
     * @param SendSystemPropertyTemplateRequest $request SendSystemPropertyTemplateRequest
     *
     * @return SendSystemPropertyTemplateResponse SendSystemPropertyTemplateResponse
     */
    public function sendSystemPropertyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSystemPropertyTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the authentication status for cloud phone instances. If you enable Android Debug Bridge (ADB) authentication for cloud phone instances, the system will verify the validity of the ADB key pairs provided by end users when they connect to the instances over ADB. To ensure successful authentication and a proper connection, we recommend that you attach ADB key pairs to cloud phone instances. If you disable ADB authentication for cloud phone instances, the system will no longer verify the validity of any ADB key pairs. As a result, end users can connect to the cloud phone instances over ADB without authentication, provided the network connection is functioning properly.
     *  *
     * @description Before you call this operation, make sure that the desired cloud phone instance is in the Running state.
     *  *
     * @param SetAdbSecureRequest $request SetAdbSecureRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SetAdbSecureResponse SetAdbSecureResponse
     */
    public function setAdbSecureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Sets the authentication status for cloud phone instances. If you enable Android Debug Bridge (ADB) authentication for cloud phone instances, the system will verify the validity of the ADB key pairs provided by end users when they connect to the instances over ADB. To ensure successful authentication and a proper connection, we recommend that you attach ADB key pairs to cloud phone instances. If you disable ADB authentication for cloud phone instances, the system will no longer verify the validity of any ADB key pairs. As a result, end users can connect to the cloud phone instances over ADB without authentication, provided the network connection is functioning properly.
     *  *
     * @description Before you call this operation, make sure that the desired cloud phone instance is in the Running state.
     *  *
     * @param SetAdbSecureRequest $request SetAdbSecureRequest
     *
     * @return SetAdbSecureResponse SetAdbSecureResponse
     */
    public function setAdbSecure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAdbSecureWithOptions($request, $runtime);
    }

    /**
     * @summary Start instances.
     *  *
     * @description Only supports starting when the instance is in the **Stopped, Backup Failed, or Recovery Failed** state.
     *  *
     * @param StartAndroidInstanceRequest $request StartAndroidInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StartAndroidInstanceResponse StartAndroidInstanceResponse
     */
    public function startAndroidInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIds)) {
            $query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }
        if (!Utils::isUnset($request->saleMode)) {
            $query['SaleMode'] = $request->saleMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Start instances.
     *  *
     * @description Only supports starting when the instance is in the **Stopped, Backup Failed, or Recovery Failed** state.
     *  *
     * @param StartAndroidInstanceRequest $request StartAndroidInstanceRequest
     *
     * @return StartAndroidInstanceResponse StartAndroidInstanceResponse
     */
    public function startAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a cloud phone instance.
     *  *
     * @description Before you stop a cloud phone instance, make sure it is in one of the following states: **Available, Backup failure, and Restoration failure**.
     *  *
     * @param StopAndroidInstanceRequest $request StopAndroidInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StopAndroidInstanceResponse StopAndroidInstanceResponse
     */
    public function stopAndroidInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidInstanceIds)) {
            $query['AndroidInstanceIds'] = $request->androidInstanceIds;
        }
        if (!Utils::isUnset($request->forceStop)) {
            $query['ForceStop'] = $request->forceStop;
        }
        if (!Utils::isUnset($request->saleMode)) {
            $query['SaleMode'] = $request->saleMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Stops a cloud phone instance.
     *  *
     * @description Before you stop a cloud phone instance, make sure it is in one of the following states: **Available, Backup failure, and Restoration failure**.
     *  *
     * @param StopAndroidInstanceRequest $request StopAndroidInstanceRequest
     *
     * @return StopAndroidInstanceResponse StopAndroidInstanceResponse
     */
    public function stopAndroidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAndroidInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Uninstalls an app from multiple cloud phone instances.
     *  *
     * @description This operation runs asynchronously. To check the operation result, you can visit the Task Center. To retrieve task details, call the [DescribeTasks](~~DescribeTasks~~) operation.
     *  *
     * @param UninstallAppRequest $request UninstallAppRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UninstallAppResponse UninstallAppResponse
     */
    public function uninstallAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appIdList)) {
            $query['AppIdList'] = $request->appIdList;
        }
        if (!Utils::isUnset($request->instanceGroupIdList)) {
            $query['InstanceGroupIdList'] = $request->instanceGroupIdList;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Uninstalls an app from multiple cloud phone instances.
     *  *
     * @description This operation runs asynchronously. To check the operation result, you can visit the Task Center. To retrieve task details, call the [DescribeTasks](~~DescribeTasks~~) operation.
     *  *
     * @param UninstallAppRequest $request UninstallAppRequest
     *
     * @return UninstallAppResponse UninstallAppResponse
     */
    public function uninstallApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallAppWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the name of a custom image.
     *  *
     * @param UpdateCustomImageNameRequest $request UpdateCustomImageNameRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomImageNameResponse UpdateCustomImageNameResponse
     */
    public function updateCustomImageNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageId)) {
            $body['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $body['ImageName'] = $request->imageName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Updates the name of a custom image.
     *  *
     * @param UpdateCustomImageNameRequest $request UpdateCustomImageNameRequest
     *
     * @return UpdateCustomImageNameResponse UpdateCustomImageNameResponse
     */
    public function updateCustomImageName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomImageNameWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the image of an instance group.
     *  *
     * @description Before you call this operation, make sure the image is in the Available state and the region of the image is included in the region list of the desired instance group. In addition, the instance group itself is available.
     *  *
     * @param UpdateInstanceGroupImageRequest $request UpdateInstanceGroupImageRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceGroupImageResponse UpdateInstanceGroupImageResponse
     */
    public function updateInstanceGroupImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageId)) {
            $body['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceGroupIds)) {
            $body['InstanceGroupIds'] = $request->instanceGroupIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Changes the image of an instance group.
     *  *
     * @description Before you call this operation, make sure the image is in the Available state and the region of the image is included in the region list of the desired instance group. In addition, the instance group itself is available.
     *  *
     * @param UpdateInstanceGroupImageRequest $request UpdateInstanceGroupImageRequest
     *
     * @return UpdateInstanceGroupImageResponse UpdateInstanceGroupImageResponse
     */
    public function updateInstanceGroupImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceGroupImageWithOptions($request, $runtime);
    }

    /**
     * @summary 更新实例镜像
     *  *
     * @param UpdateInstanceImageRequest $request UpdateInstanceImageRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceImageResponse UpdateInstanceImageResponse
     */
    public function updateInstanceImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新实例镜像
     *  *
     * @param UpdateInstanceImageRequest $request UpdateInstanceImageRequest
     *
     * @return UpdateInstanceImageResponse UpdateInstanceImageResponse
     */
    public function updateInstanceImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceImageWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades an instance group. Currently, this operation allows you to only increase the number of instances in an instance group.
     *  *
     * @description Currently, this operation allows you to only increase the size of an instance group.
     *  *
     * @param UpgradeAndroidInstanceGroupRequest $request UpgradeAndroidInstanceGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeAndroidInstanceGroupResponse UpgradeAndroidInstanceGroupResponse
     */
    public function upgradeAndroidInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->increaseNumberOfInstance)) {
            $query['IncreaseNumberOfInstance'] = $request->increaseNumberOfInstance;
        }
        if (!Utils::isUnset($request->instanceGroupId)) {
            $query['InstanceGroupId'] = $request->instanceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Upgrades an instance group. Currently, this operation allows you to only increase the number of instances in an instance group.
     *  *
     * @description Currently, this operation allows you to only increase the size of an instance group.
     *  *
     * @param UpgradeAndroidInstanceGroupRequest $request UpgradeAndroidInstanceGroupRequest
     *
     * @return UpgradeAndroidInstanceGroupResponse UpgradeAndroidInstanceGroupResponse
     */
    public function upgradeAndroidInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeAndroidInstanceGroupWithOptions($request, $runtime);
    }
}
