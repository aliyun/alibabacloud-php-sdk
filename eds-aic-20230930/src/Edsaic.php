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
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSpecRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSpecResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DetachKeyPairRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DetachKeyPairResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DistributeImageRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DistributeImageResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DowngradeAndroidInstanceGroupRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DowngradeAndroidInstanceGroupResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\FetchFileRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\FetchFileResponse;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetAdbSecureRequest;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetAdbSecureResponse;
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 绑定密钥对
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

        return AttachKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 绑定密钥对
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
     * @summary 为用户授权/解授权安卓实例
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

        return AuthorizeAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为用户授权/解授权安卓实例
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
        if (!Utils::isUnset($request->backupFilePath)) {
            $query['BackupFilePath'] = $request->backupFilePath;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
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

        return BackupFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary 检查资源库存
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
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CheckResourceStockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查资源库存
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
     * @summary 创建安卓实例组
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
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceGroupName)) {
            $query['InstanceGroupName'] = $request->instanceGroupName;
        }
        if (!Utils::isUnset($request->instanceGroupSpec)) {
            $query['InstanceGroupSpec'] = $request->instanceGroupSpec;
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
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建安卓实例组
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
     * @param CreateAppRequest $request CreateAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary 创建自定义镜像
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

        return CreateCustomImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建自定义镜像
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
     * @summary 创建密钥对
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

        return CreateKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建密钥对
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
     * @summary 创建策略
     *  *
     * @param CreatePolicyGroupRequest $request CreatePolicyGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyGroupResponse CreatePolicyGroupResponse
     */
    public function createPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
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
        if (!Utils::isUnset($request->policyGroupName)) {
            $body['PolicyGroupName'] = $request->policyGroupName;
        }
        if (!Utils::isUnset($request->resolutionHeight)) {
            $body['ResolutionHeight'] = $request->resolutionHeight;
        }
        if (!Utils::isUnset($request->resolutionWidth)) {
            $body['ResolutionWidth'] = $request->resolutionWidth;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreatePolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建策略
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
     * @summary 删除安卓实例组
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

        return DeleteAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除安卓实例组
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
     * @summary 删除app
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

        return DeleteAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除app
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

        return DeleteImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary 删除密钥对
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

        return DeleteKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除密钥对
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
     * @summary 删除策略
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

        return DeletePolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除策略
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
     * @summary 查询安卓实例组
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

        return DescribeAndroidInstanceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询安卓实例组
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
     * @summary 查询安卓实例列表
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
        if (!Utils::isUnset($request->instanceGroupId)) {
            $query['InstanceGroupId'] = $request->instanceGroupId;
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

        return DescribeAndroidInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询安卓实例列表
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
     * @summary 查询app
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
        if (!Utils::isUnset($request->installationStatus)) {
            $query['InstallationStatus'] = $request->installationStatus;
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

        return DescribeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询app
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeBackupFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeImageListRequest $request DescribeImageListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeImageListResponse DescribeImageListResponse
     */
    public function describeImageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
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
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DescribeImageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary 查询命令结果
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

        return DescribeInvocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询命令结果
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
     * @summary 查询密钥对
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

        return DescribeKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询密钥对
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
     * @summary 查询地域
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
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

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询地域
     *  *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @summary 查询规格
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
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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

        return DescribeSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询规格
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
     * @summary 解绑密钥对
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

        return DetachKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解绑密钥对
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
     * @summary 自定义镜像分发
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

        return DistributeImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 自定义镜像分发
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
     * @summary 实例组缩容
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

        return DowngradeAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实例组缩容
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
     * @summary 云手机拉取文件到OSS
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

        return FetchFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 云手机拉取文件到OSS
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
     * @param GetAdbSecureRequest $request GetAdbSecureRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAdbSecureResponse GetAdbSecureResponse
     */
    public function getAdbSecureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAdbSecure',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAdbSecureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAdbSecureRequest $request GetAdbSecureRequest
     *
     * @return GetAdbSecureResponse GetAdbSecureResponse
     */
    public function getAdbSecure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAdbSecureWithOptions($request, $runtime);
    }

    /**
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

        return ImportKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary 安装app到实例组
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return InstallAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 安装app到实例组
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
     * @summary 查询Policy列表
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
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return ListPolicyGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询Policy列表
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
     * @summary 修改安卓实例信息
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
        if (!Utils::isUnset($request->newAndroidInstanceName)) {
            $query['NewAndroidInstanceName'] = $request->newAndroidInstanceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ModifyAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改安卓实例信息
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
     * @summary 修改安卓实例组
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

        return ModifyAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改安卓实例组
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
     * @summary 修改app
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

        return ModifyAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改app
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
     * @summary 修改密钥对名称
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

        return ModifyKeyPairNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改密钥对名称
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
     * @summary 修改policy
     *  *
     * @param ModifyPolicyGroupRequest $request ModifyPolicyGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPolicyGroupResponse ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
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
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return ModifyPolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改policy
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
     * @summary 重启安卓实例
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RebootAndroidInstancesInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重启安卓实例
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

        return RecoveryFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary 续费安卓实例组
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

        return RenewAndroidInstanceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 续费安卓实例组
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
     * @summary 重置安卓实例
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ResetAndroidInstancesInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重置安卓实例
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
     * @summary 通过eds agent通道下发命令
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

        return RunCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过eds agent通道下发命令
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
     * @summary 推送文件到云手机
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

        return SendFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 推送文件到云手机
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
            'action'      => 'SetAdbSecure',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAdbSecureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary 实例开机
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return StartAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实例开机
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
     * @summary 实例关机
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return StopAndroidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实例关机
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
     * @summary 卸载app
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UninstallAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 卸载app
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
     * @summary 修改自定义镜像名称
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

        return UpdateCustomImageNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改自定义镜像名称
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
     * @summary 实例组变更镜像
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

        return UpdateInstanceGroupImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实例组变更镜像
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
     * @summary 安卓实例组扩容
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

        return UpgradeAndroidInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 安卓实例组扩容
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
