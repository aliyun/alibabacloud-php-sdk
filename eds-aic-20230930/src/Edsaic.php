<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AttachKeyPairRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AttachKeyPairResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AuthorizeAndroidInstanceRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\AuthorizeAndroidInstanceResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BatchGetAcpConnectionTicketRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BatchGetAcpConnectionTicketResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CheckResourceStockRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CheckResourceStockResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCustomImageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCustomImageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateKeyPairRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateKeyPairResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreatePolicyGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreatePolicyGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreatePolicyGroupShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateScreenshotRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateScreenshotResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteAndroidInstanceGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteAndroidInstanceGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteAppsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteAppsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteImagesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteImagesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteImagesShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteKeyPairsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteKeyPairsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeletePolicyGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DeletePolicyGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAppsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBackupFilesRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBackupFilesResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeImageListRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeImageListResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeInvocationsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeInvocationsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeKeyPairsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeKeyPairsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSpecRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSpecResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DetachKeyPairRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DetachKeyPairResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DistributeImageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DistributeImageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DowngradeAndroidInstanceGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DowngradeAndroidInstanceGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\FetchFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\FetchFileResponse;
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
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyKeyPairNameRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyKeyPairNameResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyPolicyGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyPolicyGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ModifyPolicyGroupShrinkRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\OperateAppRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\OperateAppResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RebootAndroidInstancesInGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RebootAndroidInstancesInGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoveryFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoveryFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewAndroidInstanceGroupsRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RenewAndroidInstanceGroupsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ResetAndroidInstancesInGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ResetAndroidInstancesInGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RunCommandRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RunCommandResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SendFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\SendFileResponse;
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
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
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
     * 绑定密钥对.
     *
     * @param request - AttachKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'AttachKeyPair',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 绑定密钥对.
     *
     * @param request - AttachKeyPairRequest
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
     * 为用户授权/解授权安卓实例.
     *
     * @param request - AuthorizeAndroidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'AuthorizeAndroidInstance',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AuthorizeAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AuthorizeAndroidInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 为用户授权/解授权安卓实例.
     *
     * @param request - AuthorizeAndroidInstanceRequest
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
     * 数据备份.
     *
     * @param request - BackupFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'BackupFile',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BackupFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 数据备份.
     *
     * @param request - BackupFileRequest
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
     * 批量获取ticket.
     *
     * @param request - BatchGetAcpConnectionTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetAcpConnectionTicket',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchGetAcpConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchGetAcpConnectionTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量获取ticket.
     *
     * @param request - BatchGetAcpConnectionTicketRequest
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
     * 检查资源库存.
     *
     * @param request - CheckResourceStockRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CheckResourceStock',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CheckResourceStockResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckResourceStockResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 检查资源库存.
     *
     * @param request - CheckResourceStockRequest
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
     * 创建安卓实例组.
     *
     * @param request - CreateAndroidInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateAndroidInstanceGroupResponse
     *
     * @param CreateAndroidInstanceGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAndroidInstanceGroupResponse
     */
    public function createAndroidInstanceGroupWithOptions($request, $runtime)
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

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
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

        if (null !== $request->keyPairId) {
            @$query['KeyPairId'] = $request->keyPairId;
        }

        if (null !== $request->numberOfInstances) {
            @$query['NumberOfInstances'] = $request->numberOfInstances;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
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

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAndroidInstanceGroup',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAndroidInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建安卓实例组.
     *
     * @param request - CreateAndroidInstanceGroupRequest
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
     * @param request - CreateAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateAppResponse
     *
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateAppRequest
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
     * 创建自定义镜像.
     *
     * @param request - CreateCustomImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CreateCustomImage',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateCustomImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCustomImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建自定义镜像.
     *
     * @param request - CreateCustomImageRequest
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
     * 创建密钥对.
     *
     * @param request - CreateKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CreateKeyPair',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建密钥对.
     *
     * @param request - CreateKeyPairRequest
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
     * 创建策略.
     *
     * @param tmpReq - CreatePolicyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->resolutionHeight) {
            @$body['ResolutionHeight'] = $request->resolutionHeight;
        }

        if (null !== $request->resolutionWidth) {
            @$body['ResolutionWidth'] = $request->resolutionWidth;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePolicyGroup',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePolicyGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建策略.
     *
     * @param request - CreatePolicyGroupRequest
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
     * 创建云手机截图接口.
     *
     * @param request - CreateScreenshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->skipCheckPolicyConfig) {
            @$query['SkipCheckPolicyConfig'] = $request->skipCheckPolicyConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScreenshot',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateScreenshotResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScreenshotResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建云手机截图接口.
     *
     * @param request - CreateScreenshotRequest
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
     * 删除安卓实例组.
     *
     * @param request - DeleteAndroidInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteAndroidInstanceGroup',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAndroidInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除安卓实例组.
     *
     * @param request - DeleteAndroidInstanceGroupRequest
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
     * 删除app.
     *
     * @param request - DeleteAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteApps',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAppsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAppsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除app.
     *
     * @param request - DeleteAppsRequest
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
     * @param tmpReq - DeleteImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteImages',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteImagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteImagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteImagesRequest
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
     * 删除密钥对.
     *
     * @param request - DeleteKeyPairsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteKeyPairs',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteKeyPairsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除密钥对.
     *
     * @param request - DeleteKeyPairsRequest
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
     * 删除策略.
     *
     * @param request - DeletePolicyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeletePolicyGroup',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePolicyGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除策略.
     *
     * @param request - DeletePolicyGroupRequest
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
     * 查询实例组.
     *
     * @param request - DescribeAndroidInstanceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAndroidInstanceGroups',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAndroidInstanceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAndroidInstanceGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询实例组.
     *
     * @param request - DescribeAndroidInstanceGroupsRequest
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
     * 查询安卓的实例列表.
     *
     * @param request - DescribeAndroidInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->saleMode) {
            @$query['SaleMode'] = $request->saleMode;
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
            'action'      => 'DescribeAndroidInstances',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAndroidInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAndroidInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询安卓的实例列表.
     *
     * @param request - DescribeAndroidInstancesRequest
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
     * 查询app.
     *
     * @param request - DescribeAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeApps',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAppsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询app.
     *
     * @param request - DescribeAppsRequest
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
     * 查询备份文件列表.
     *
     * @param request - DescribeBackupFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeBackupFiles',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeBackupFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询备份文件列表.
     *
     * @param request - DescribeBackupFilesRequest
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
     * 查询镜像列表.
     *
     * @param request - DescribeImageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->imagePackageType) {
            @$query['ImagePackageType'] = $request->imagePackageType;
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
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageList',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeImageListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeImageListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询镜像列表.
     *
     * @param request - DescribeImageListRequest
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
     * 查询命令结果.
     *
     * @param request - DescribeInvocationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeInvocations',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInvocationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInvocationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询命令结果.
     *
     * @param request - DescribeInvocationsRequest
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
     * 查询密钥对.
     *
     * @param request - DescribeKeyPairsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeKeyPairs',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeKeyPairsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询密钥对.
     *
     * @param request - DescribeKeyPairsRequest
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
     * 查询地域
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeRegions',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询地域
     *
     * @param request - DescribeRegionsRequest
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
     * 查询规格
     *
     * @param request - DescribeSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeSpec',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询规格
     *
     * @param request - DescribeSpecRequest
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
     * 查询异步任务
     *
     * @param request - DescribeTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeTasks',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询异步任务
     *
     * @param request - DescribeTasksRequest
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
     * 解绑密钥对.
     *
     * @param request - DetachKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DetachKeyPair',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetachKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetachKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 解绑密钥对.
     *
     * @param request - DetachKeyPairRequest
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
     * 自定义镜像分发.
     *
     * @param request - DistributeImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DistributeImage',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DistributeImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DistributeImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 自定义镜像分发.
     *
     * @param request - DistributeImageRequest
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
     * 实例组缩容.
     *
     * @param request - DowngradeAndroidInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DowngradeAndroidInstanceGroup',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DowngradeAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DowngradeAndroidInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 实例组缩容.
     *
     * @param request - DowngradeAndroidInstanceGroupRequest
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
     * 云手机拉取文件到OSS.
     *
     * @param request - FetchFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'FetchFile',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return FetchFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return FetchFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 云手机拉取文件到OSS.
     *
     * @param request - FetchFileRequest
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
     * 导入秘钥.
     *
     * @param request - ImportKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ImportKeyPair',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ImportKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ImportKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 导入秘钥.
     *
     * @param request - ImportKeyPairRequest
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
     * 安装app到实例组.
     *
     * @param request - InstallAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'InstallApp',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InstallAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 安装app到实例组.
     *
     * @param request - InstallAppRequest
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
     * 查询Policy列表.
     *
     * @param request - ListPolicyGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListPolicyGroups',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPolicyGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPolicyGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询Policy列表.
     *
     * @param request - ListPolicyGroupsRequest
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
     * 修改安卓实例信息.
     *
     * @param request - ModifyAndroidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->newAndroidInstanceName) {
            @$query['NewAndroidInstanceName'] = $request->newAndroidInstanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAndroidInstance',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAndroidInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改安卓实例信息.
     *
     * @param request - ModifyAndroidInstanceRequest
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
     * 修改安卓实例组.
     *
     * @param request - ModifyAndroidInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAndroidInstanceGroup',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAndroidInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改安卓实例组.
     *
     * @param request - ModifyAndroidInstanceGroupRequest
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
     * 修改app.
     *
     * @param request - ModifyAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ModifyApp',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改app.
     *
     * @param request - ModifyAppRequest
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
     * 修改密钥对名称.
     *
     * @param request - ModifyKeyPairNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ModifyKeyPairName',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyKeyPairNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyKeyPairNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改密钥对名称.
     *
     * @param request - ModifyKeyPairNameRequest
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
     * 修改policy.
     *
     * @param tmpReq - ModifyPolicyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPolicyGroup',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyPolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyPolicyGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改policy.
     *
     * @param request - ModifyPolicyGroupRequest
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
     * 操作App.
     *
     * @param request - OperateAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'OperateApp',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OperateAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OperateAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 操作App.
     *
     * @param request - OperateAppRequest
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
     * 重启安卓实例.
     *
     * @param request - RebootAndroidInstancesInGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootAndroidInstancesInGroup',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RebootAndroidInstancesInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RebootAndroidInstancesInGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 重启安卓实例.
     *
     * @param request - RebootAndroidInstancesInGroupRequest
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
     * 数据恢复.
     *
     * @param request - RecoveryFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'RecoveryFile',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RecoveryFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RecoveryFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 数据恢复.
     *
     * @param request - RecoveryFileRequest
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
     * 续费安卓实例组.
     *
     * @param request - RenewAndroidInstanceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewAndroidInstanceGroups',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RenewAndroidInstanceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenewAndroidInstanceGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 续费安卓实例组.
     *
     * @param request - RenewAndroidInstanceGroupsRequest
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
     * 重置安卓实例.
     *
     * @param request - ResetAndroidInstancesInGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAndroidInstancesInGroup',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResetAndroidInstancesInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResetAndroidInstancesInGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 重置安卓实例.
     *
     * @param request - ResetAndroidInstancesInGroupRequest
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
     * 通过eds agent通道下发命令.
     *
     * @param request - RunCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'RunCommand',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunCommandResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunCommandResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 通过eds agent通道下发命令.
     *
     * @param request - RunCommandRequest
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
     * 推送文件到云手机.
     *
     * @param request - SendFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'SendFile',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SendFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 推送文件到云手机.
     *
     * @param request - SendFileRequest
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
     * 实例开机.
     *
     * @param request - StartAndroidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartAndroidInstance',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartAndroidInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 实例开机.
     *
     * @param request - StartAndroidInstanceRequest
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
     * 实例关机.
     *
     * @param request - StopAndroidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAndroidInstance',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopAndroidInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 实例关机.
     *
     * @param request - StopAndroidInstanceRequest
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
     * 卸载app.
     *
     * @param request - UninstallAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'UninstallApp',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UninstallAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UninstallAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 卸载app.
     *
     * @param request - UninstallAppRequest
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
     * 修改自定义镜像名称.
     *
     * @param request - UpdateCustomImageNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'UpdateCustomImageName',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateCustomImageNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCustomImageNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改自定义镜像名称.
     *
     * @param request - UpdateCustomImageNameRequest
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
     * 实例组变更镜像.
     *
     * @param request - UpdateInstanceGroupImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'UpdateInstanceGroupImage',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateInstanceGroupImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateInstanceGroupImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 实例组变更镜像.
     *
     * @param request - UpdateInstanceGroupImageRequest
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
     * 安卓实例组扩容.
     *
     * @param request - UpgradeAndroidInstanceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeAndroidInstanceGroup',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeAndroidInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 安卓实例组扩容.
     *
     * @param request - UpgradeAndroidInstanceGroupRequest
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
