<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\AlignStoragePrimaryAzoneRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\AlignStoragePrimaryAzoneResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\AllocateColdDataVolumeRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\AllocateColdDataVolumeResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CancelActiveOperationTasksRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CancelActiveOperationTasksResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CheckCloudResourceAuthorizedRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CheckCloudResourceAuthorizedResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateDBRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateDBResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateSuperAccountRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateSuperAccountResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteDBRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteDBResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeAccountListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeAccountListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationMaintainConfRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationMaintainConfResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationTaskCountRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationTaskCountResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationTasksRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationTasksResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeArchiveTableListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeArchiveTableListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBinaryLogListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBinaryLogListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCharacterSetRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCharacterSetResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeColdDataBasicInfoRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeColdDataBasicInfoResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceConfigRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceConfigResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceHARequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceHAResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceSSLRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceSSLResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTDERequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTDEResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceViaEndpointRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceViaEndpointResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDbListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDbListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDistributeTableListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDistributeTableListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParameterTemplatesRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParameterTemplatesResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeScaleOutMigrateTaskListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeScaleOutMigrateTaskListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSecurityIpsRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSecurityIpsResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeUserEncryptionKeyListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeUserEncryptionKeyListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DisableRightsSeparationRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DisableRightsSeparationResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\EnableRightsSeparationRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\EnableRightsSeparationResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyAccountPrivilegeRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyAccountPrivilegeResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyActiveOperationMaintainConfRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyActiveOperationMaintainConfResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyActiveOperationTasksRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyActiveOperationTasksResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDatabaseDescriptionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDatabaseDescriptionResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceClassRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceClassResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceConfigRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceConfigResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceDescriptionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceDescriptionResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyParameterRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyParameterResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ReleaseColdDataVolumeRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ReleaseColdDataVolumeResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ReleaseInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ReleaseInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\SwitchDBInstanceHARequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\SwitchDBInstanceHAResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateBackupPolicyRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateBackupPolicyResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateDBInstanceSSLRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateDBInstanceSSLResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateDBInstanceTDERequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateDBInstanceTDEResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdatePolarDBXInstanceNodeRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdatePolarDBXInstanceNodeResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpgradeDBInstanceKernelVersionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpgradeDBInstanceKernelVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Polardbx extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'polardbx.aliyuncs.com',
            'ap-northeast-2-pop'          => 'polardbx.aliyuncs.com',
            'ap-south-1'                  => 'polardbx.aliyuncs.com',
            'ap-southeast-2'              => 'polardbx.aliyuncs.com',
            'ap-southeast-3'              => 'polardbx.aliyuncs.com',
            'ap-southeast-5'              => 'polardbx.aliyuncs.com',
            'cn-beijing-finance-1'        => 'polardbx.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'polardbx.aliyuncs.com',
            'cn-beijing-gov-1'            => 'polardbx.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'polardbx.aliyuncs.com',
            'cn-edge-1'                   => 'polardbx.aliyuncs.com',
            'cn-fujian'                   => 'polardbx.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'polardbx.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'polardbx.aliyuncs.com',
            'cn-hangzhou-finance'         => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'polardbx.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'polardbx.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'polardbx.aliyuncs.com',
            'cn-north-2-gov-1'            => 'polardbx.aliyuncs.com',
            'cn-qingdao-nebula'           => 'polardbx.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'polardbx.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'polardbx.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'polardbx.aliyuncs.com',
            'cn-shanghai-inner'           => 'polardbx.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'polardbx.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'polardbx.aliyuncs.com',
            'cn-shenzhen-inner'           => 'polardbx.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'polardbx.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'polardbx.aliyuncs.com',
            'cn-wuhan'                    => 'polardbx.aliyuncs.com',
            'cn-wulanchabu'               => 'polardbx.aliyuncs.com',
            'cn-yushanfang'               => 'polardbx.aliyuncs.com',
            'cn-zhangbei'                 => 'polardbx.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'polardbx.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'polardbx.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'polardbx.aliyuncs.com',
            'eu-central-1'                => 'polardbx.aliyuncs.com',
            'eu-west-1'                   => 'polardbx.aliyuncs.com',
            'eu-west-1-oxs'               => 'polardbx.aliyuncs.com',
            'me-east-1'                   => 'polardbx.aliyuncs.com',
            'rus-west-1-pop'              => 'polardbx.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('polardbx', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AlignStoragePrimaryAzoneRequest $request AlignStoragePrimaryAzoneRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AlignStoragePrimaryAzoneResponse AlignStoragePrimaryAzoneResponse
     */
    public function alignStoragePrimaryAzoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->storageInstanceName)) {
            $query['StorageInstanceName'] = $request->storageInstanceName;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->switchTimeMode)) {
            $query['SwitchTimeMode'] = $request->switchTimeMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AlignStoragePrimaryAzone',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AlignStoragePrimaryAzoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AlignStoragePrimaryAzoneRequest $request AlignStoragePrimaryAzoneRequest
     *
     * @return AlignStoragePrimaryAzoneResponse AlignStoragePrimaryAzoneResponse
     */
    public function alignStoragePrimaryAzone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->alignStoragePrimaryAzoneWithOptions($request, $runtime);
    }

    /**
     * @summary 开通冷存储
     *  *
     * @param AllocateColdDataVolumeRequest $request AllocateColdDataVolumeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocateColdDataVolumeResponse AllocateColdDataVolumeResponse
     */
    public function allocateColdDataVolumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateColdDataVolume',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateColdDataVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开通冷存储
     *  *
     * @param AllocateColdDataVolumeRequest $request AllocateColdDataVolumeRequest
     *
     * @return AllocateColdDataVolumeResponse AllocateColdDataVolumeResponse
     */
    public function allocateColdDataVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateColdDataVolumeWithOptions($request, $runtime);
    }

    /**
     * @param AllocateInstancePublicConnectionRequest $request AllocateInstancePublicConnectionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocateInstancePublicConnectionResponse AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateInstancePublicConnection',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllocateInstancePublicConnectionRequest $request AllocateInstancePublicConnectionRequest
     *
     * @return AllocateInstancePublicConnectionResponse AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @summary 取消主动运维任务
     *  *
     * @param CancelActiveOperationTasksRequest $request CancelActiveOperationTasksRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelActiveOperationTasksResponse CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelActiveOperationTasks',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消主动运维任务
     *  *
     * @param CancelActiveOperationTasksRequest $request CancelActiveOperationTasksRequest
     *
     * @return CancelActiveOperationTasksResponse CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例所在资源组.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例所在资源组.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param CheckCloudResourceAuthorizedRequest $request CheckCloudResourceAuthorizedRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCloudResourceAuthorizedResponse CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorizedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCloudResourceAuthorized',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCloudResourceAuthorizedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckCloudResourceAuthorizedRequest $request CheckCloudResourceAuthorizedRequest
     *
     * @return CheckCloudResourceAuthorizedResponse CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorized($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCloudResourceAuthorizedWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccountRequest $request CreateAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountDescription)) {
            $query['AccountDescription'] = $request->accountDescription;
        }
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->accountPrivilege)) {
            $query['AccountPrivilege'] = $request->accountPrivilege;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityAccountName)) {
            $query['SecurityAccountName'] = $request->securityAccountName;
        }
        if (!Utils::isUnset($request->securityAccountPassword)) {
            $query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccount',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAccountRequest $request CreateAccountRequest
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateBackupRequest $request CreateBackupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBackupResponse CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupType)) {
            $query['BackupType'] = $request->backupType;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBackup',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBackupRequest $request CreateBackupRequest
     *
     * @return CreateBackupResponse CreateBackupResponse
     */
    public function createBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBRequest $request CreateDBRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBResponse CreateDBResponse
     */
    public function createDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPrivilege)) {
            $query['AccountPrivilege'] = $request->accountPrivilege;
        }
        if (!Utils::isUnset($request->charset)) {
            $query['Charset'] = $request->charset;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->dbDescription)) {
            $query['DbDescription'] = $request->dbDescription;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityAccountName)) {
            $query['SecurityAccountName'] = $request->securityAccountName;
        }
        if (!Utils::isUnset($request->securityAccountPassword)) {
            $query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }
        if (!Utils::isUnset($request->storagePoolName)) {
            $query['StoragePoolName'] = $request->storagePoolName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDB',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDBRequest $request CreateDBRequest
     *
     * @return CreateDBResponse CreateDBResponse
     */
    public function createDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBInstanceRequest $request CreateDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->CNNodeCount)) {
            $query['CNNodeCount'] = $request->CNNodeCount;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cnClass)) {
            $query['CnClass'] = $request->cnClass;
        }
        if (!Utils::isUnset($request->DBNodeClass)) {
            $query['DBNodeClass'] = $request->DBNodeClass;
        }
        if (!Utils::isUnset($request->DBNodeCount)) {
            $query['DBNodeCount'] = $request->DBNodeCount;
        }
        if (!Utils::isUnset($request->DNNodeCount)) {
            $query['DNNodeCount'] = $request->DNNodeCount;
        }
        if (!Utils::isUnset($request->dnClass)) {
            $query['DnClass'] = $request->dnClass;
        }
        if (!Utils::isUnset($request->dnStorageSpace)) {
            $query['DnStorageSpace'] = $request->dnStorageSpace;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->isColumnarReadDBInstance)) {
            $query['IsColumnarReadDBInstance'] = $request->isColumnarReadDBInstance;
        }
        if (!Utils::isUnset($request->isReadDBInstance)) {
            $query['IsReadDBInstance'] = $request->isReadDBInstance;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->primaryDBInstanceName)) {
            $query['PrimaryDBInstanceName'] = $request->primaryDBInstanceName;
        }
        if (!Utils::isUnset($request->primaryZone)) {
            $query['PrimaryZone'] = $request->primaryZone;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->secondaryZone)) {
            $query['SecondaryZone'] = $request->secondaryZone;
        }
        if (!Utils::isUnset($request->series)) {
            $query['Series'] = $request->series;
        }
        if (!Utils::isUnset($request->tertiaryZone)) {
            $query['TertiaryZone'] = $request->tertiaryZone;
        }
        if (!Utils::isUnset($request->topologyType)) {
            $query['TopologyType'] = $request->topologyType;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstance',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDBInstanceRequest $request CreateDBInstanceRequest
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateSuperAccountRequest $request CreateSuperAccountRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSuperAccountResponse CreateSuperAccountResponse
     */
    public function createSuperAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountDescription)) {
            $query['AccountDescription'] = $request->accountDescription;
        }
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSuperAccount',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSuperAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSuperAccountRequest $request CreateSuperAccountRequest
     *
     * @return CreateSuperAccountResponse CreateSuperAccountResponse
     */
    public function createSuperAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSuperAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccountRequest $request DeleteAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityAccountName)) {
            $query['SecurityAccountName'] = $request->securityAccountName;
        }
        if (!Utils::isUnset($request->securityAccountPassword)) {
            $query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccount',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAccountRequest $request DeleteAccountRequest
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBRequest $request DeleteDBRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBResponse DeleteDBResponse
     */
    public function deleteDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDB',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDBRequest $request DeleteDBRequest
     *
     * @return DeleteDBResponse DeleteDBResponse
     */
    public function deleteDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBInstanceRequest $request DeleteDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBInstanceResponse DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBInstance',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDBInstanceRequest $request DeleteDBInstanceRequest
     *
     * @return DeleteDBInstanceResponse DeleteDBInstanceResponse
     */
    public function deleteDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountListRequest $request DescribeAccountListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountListResponse DescribeAccountListResponse
     */
    public function describeAccountListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccountListRequest $request DescribeAccountListRequest
     *
     * @return DescribeAccountListResponse DescribeAccountListResponse
     */
    public function describeAccountList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountListWithOptions($request, $runtime);
    }

    /**
     * @summary 展示全局运维窗口配置
     *  *
     * @param DescribeActiveOperationMaintainConfRequest $request DescribeActiveOperationMaintainConfRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveOperationMaintainConfResponse DescribeActiveOperationMaintainConfResponse
     */
    public function describeActiveOperationMaintainConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveOperationMaintainConf',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveOperationMaintainConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 展示全局运维窗口配置
     *  *
     * @param DescribeActiveOperationMaintainConfRequest $request DescribeActiveOperationMaintainConfRequest
     *
     * @return DescribeActiveOperationMaintainConfResponse DescribeActiveOperationMaintainConfResponse
     */
    public function describeActiveOperationMaintainConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationMaintainConfWithOptions($request, $runtime);
    }

    /**
     * @summary 获取主动运维任务数量
     *  *
     * @param DescribeActiveOperationTaskCountRequest $request DescribeActiveOperationTaskCountRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveOperationTaskCountResponse DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveOperationTaskCount',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveOperationTaskCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取主动运维任务数量
     *  *
     * @param DescribeActiveOperationTaskCountRequest $request DescribeActiveOperationTaskCountRequest
     *
     * @return DescribeActiveOperationTaskCountResponse DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskCountWithOptions($request, $runtime);
    }

    /**
     * @summary 获取待执行自动运维任务列表
     *  *
     * @param DescribeActiveOperationTasksRequest $request DescribeActiveOperationTasksRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveOperationTasksResponse DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveOperationTasks',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取待执行自动运维任务列表
     *  *
     * @param DescribeActiveOperationTasksRequest $request DescribeActiveOperationTasksRequest
     *
     * @return DescribeActiveOperationTasksResponse DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * @summary 冷存储表列表
     *  *
     * @param DescribeArchiveTableListRequest $request DescribeArchiveTableListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeArchiveTableListResponse DescribeArchiveTableListResponse
     */
    public function describeArchiveTableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeArchiveTableList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeArchiveTableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 冷存储表列表
     *  *
     * @param DescribeArchiveTableListRequest $request DescribeArchiveTableListRequest
     *
     * @return DescribeArchiveTableListResponse DescribeArchiveTableListResponse
     */
    public function describeArchiveTableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeArchiveTableListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupPolicyRequest $request DescribeBackupPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupPolicyResponse DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupPolicyRequest $request DescribeBackupPolicyRequest
     *
     * @return DescribeBackupPolicyResponse DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 备份集详情
     *  *
     * @param DescribeBackupSetRequest $request DescribeBackupSetRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupSetResponse DescribeBackupSetResponse
     */
    public function describeBackupSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->destCrossRegion)) {
            $query['DestCrossRegion'] = $request->destCrossRegion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupSet',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 备份集详情
     *  *
     * @param DescribeBackupSetRequest $request DescribeBackupSetRequest
     *
     * @return DescribeBackupSetResponse DescribeBackupSetResponse
     */
    public function describeBackupSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupSetListRequest $request DescribeBackupSetListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupSetListResponse DescribeBackupSetListResponse
     */
    public function describeBackupSetListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupSetList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupSetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupSetListRequest $request DescribeBackupSetListRequest
     *
     * @return DescribeBackupSetListResponse DescribeBackupSetListResponse
     */
    public function describeBackupSetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBinaryLogListRequest $request DescribeBinaryLogListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBinaryLogListResponse DescribeBinaryLogListResponse
     */
    public function describeBinaryLogListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBinaryLogList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBinaryLogListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBinaryLogListRequest $request DescribeBinaryLogListRequest
     *
     * @return DescribeBinaryLogListResponse DescribeBinaryLogListResponse
     */
    public function describeBinaryLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBinaryLogListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCharacterSetRequest $request DescribeCharacterSetRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCharacterSetResponse DescribeCharacterSetResponse
     */
    public function describeCharacterSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCharacterSet',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCharacterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCharacterSetRequest $request DescribeCharacterSetRequest
     *
     * @return DescribeCharacterSetResponse DescribeCharacterSetResponse
     */
    public function describeCharacterSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCharacterSetWithOptions($request, $runtime);
    }

    /**
     * @summary 冷存储基础信息
     *  *
     * @param DescribeColdDataBasicInfoRequest $request DescribeColdDataBasicInfoRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeColdDataBasicInfoResponse DescribeColdDataBasicInfoResponse
     */
    public function describeColdDataBasicInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeColdDataBasicInfo',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeColdDataBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 冷存储基础信息
     *  *
     * @param DescribeColdDataBasicInfoRequest $request DescribeColdDataBasicInfoRequest
     *
     * @return DescribeColdDataBasicInfoResponse DescribeColdDataBasicInfoResponse
     */
    public function describeColdDataBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeColdDataBasicInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceAttributeRequest $request DescribeDBInstanceAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceAttributeResponse DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceAttribute',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceAttributeRequest $request DescribeDBInstanceAttributeRequest
     *
     * @return DescribeDBInstanceAttributeResponse DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceConfigRequest $request DescribeDBInstanceConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceConfigResponse DescribeDBInstanceConfigResponse
     */
    public function describeDBInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configName)) {
            $query['ConfigName'] = $request->configName;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceConfig',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceConfigRequest $request DescribeDBInstanceConfigRequest
     *
     * @return DescribeDBInstanceConfigResponse DescribeDBInstanceConfigResponse
     */
    public function describeDBInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceHARequest $request DescribeDBInstanceHARequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceHAResponse DescribeDBInstanceHAResponse
     */
    public function describeDBInstanceHAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceHA',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceHAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceHARequest $request DescribeDBInstanceHARequest
     *
     * @return DescribeDBInstanceHAResponse DescribeDBInstanceHAResponse
     */
    public function describeDBInstanceHA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceHAWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceSSLRequest $request DescribeDBInstanceSSLRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceSSLResponse DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceSSL',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceSSLRequest $request DescribeDBInstanceSSLRequest
     *
     * @return DescribeDBInstanceSSLResponse DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceTDERequest $request DescribeDBInstanceTDERequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceTDEResponse DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceTDE',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceTDERequest $request DescribeDBInstanceTDERequest
     *
     * @return DescribeDBInstanceTDEResponse DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceTopologyRequest $request DescribeDBInstanceTopologyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceTopologyResponse DescribeDBInstanceTopologyResponse
     */
    public function describeDBInstanceTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceTopology',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceTopologyRequest $request DescribeDBInstanceTopologyRequest
     *
     * @return DescribeDBInstanceTopologyResponse DescribeDBInstanceTopologyResponse
     */
    public function describeDBInstanceTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * @summary 通过Endpoint查询实例
     *  *
     * @param DescribeDBInstanceViaEndpointRequest $request DescribeDBInstanceViaEndpointRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstanceViaEndpointResponse DescribeDBInstanceViaEndpointResponse
     */
    public function describeDBInstanceViaEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpoint)) {
            $query['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceViaEndpoint',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceViaEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过Endpoint查询实例
     *  *
     * @param DescribeDBInstanceViaEndpointRequest $request DescribeDBInstanceViaEndpointRequest
     *
     * @return DescribeDBInstanceViaEndpointResponse DescribeDBInstanceViaEndpointResponse
     */
    public function describeDBInstanceViaEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceViaEndpointWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancesRequest $request DescribeDBInstancesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBInstancesResponse DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mustHasCdc)) {
            $query['MustHasCdc'] = $request->mustHasCdc;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->series)) {
            $query['Series'] = $request->series;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstances',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstancesRequest $request DescribeDBInstancesRequest
     *
     * @return DescribeDBInstancesResponse DescribeDBInstancesResponse
     */
    public function describeDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBNodePerformanceRequest $request DescribeDBNodePerformanceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBNodePerformanceResponse DescribeDBNodePerformanceResponse
     */
    public function describeDBNodePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->characterType)) {
            $query['CharacterType'] = $request->characterType;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->DBNodeIds)) {
            $query['DBNodeIds'] = $request->DBNodeIds;
        }
        if (!Utils::isUnset($request->DBNodeRole)) {
            $query['DBNodeRole'] = $request->DBNodeRole;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBNodePerformance',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBNodePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBNodePerformanceRequest $request DescribeDBNodePerformanceRequest
     *
     * @return DescribeDBNodePerformanceResponse DescribeDBNodePerformanceResponse
     */
    public function describeDBNodePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBNodePerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDbListRequest $request DescribeDbListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDbListResponse DescribeDbListResponse
     */
    public function describeDbListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDbList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDbListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDbListRequest $request DescribeDbListRequest
     *
     * @return DescribeDbListResponse DescribeDbListResponse
     */
    public function describeDbList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDbListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDistributeTableListRequest $request DescribeDistributeTableListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDistributeTableListResponse DescribeDistributeTableListResponse
     */
    public function describeDistributeTableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDistributeTableList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDistributeTableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDistributeTableListRequest $request DescribeDistributeTableListRequest
     *
     * @return DescribeDistributeTableListResponse DescribeDistributeTableListResponse
     */
    public function describeDistributeTableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDistributeTableListWithOptions($request, $runtime);
    }

    /**
     * @summary 历史事件
     *  *
     * @param DescribeEventsRequest $request DescribeEventsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventsResponse DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEvents',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 历史事件
     *  *
     * @param DescribeEventsRequest $request DescribeEventsRequest
     *
     * @return DescribeEventsResponse DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParameterTemplatesRequest $request DescribeParameterTemplatesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParameterTemplatesResponse DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->paramLevel)) {
            $query['ParamLevel'] = $request->paramLevel;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameterTemplates',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParameterTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeParameterTemplatesRequest $request DescribeParameterTemplatesRequest
     *
     * @return DescribeParameterTemplatesResponse DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParametersRequest $request DescribeParametersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParametersResponse DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->paramLevel)) {
            $query['ParamLevel'] = $request->paramLevel;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameters',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeParametersRequest $request DescribeParametersRequest
     *
     * @return DescribeParametersResponse DescribeParametersResponse
     */
    public function describeParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-02-02',
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
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @param DescribeScaleOutMigrateTaskListRequest $request DescribeScaleOutMigrateTaskListRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScaleOutMigrateTaskListResponse DescribeScaleOutMigrateTaskListResponse
     */
    public function describeScaleOutMigrateTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScaleOutMigrateTaskList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScaleOutMigrateTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScaleOutMigrateTaskListRequest $request DescribeScaleOutMigrateTaskListRequest
     *
     * @return DescribeScaleOutMigrateTaskListResponse DescribeScaleOutMigrateTaskListResponse
     */
    public function describeScaleOutMigrateTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScaleOutMigrateTaskListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityIpsRequest $request DescribeSecurityIpsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityIpsResponse DescribeSecurityIpsResponse
     */
    public function describeSecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityIps',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecurityIpsRequest $request DescribeSecurityIpsRequest
     *
     * @return DescribeSecurityIpsResponse DescribeSecurityIpsResponse
     */
    public function describeSecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIpsWithOptions($request, $runtime);
    }

    /**
     * @summary 标签列表查询
     *  *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsResponse DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTags',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 标签列表查询
     *  *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     *
     * @return DescribeTagsResponse DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTasksRequest $request DescribeTasksRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTasksResponse DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTasks',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeUserEncryptionKeyListRequest $request DescribeUserEncryptionKeyListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserEncryptionKeyListResponse DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserEncryptionKeyList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserEncryptionKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserEncryptionKeyListRequest $request DescribeUserEncryptionKeyListRequest
     *
     * @return DescribeUserEncryptionKeyListResponse DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEncryptionKeyListWithOptions($request, $runtime);
    }

    /**
     * @param DisableRightsSeparationRequest $request DisableRightsSeparationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableRightsSeparationResponse DisableRightsSeparationResponse
     */
    public function disableRightsSeparationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->dbaAccountName)) {
            $query['DbaAccountName'] = $request->dbaAccountName;
        }
        if (!Utils::isUnset($request->dbaAccountPassword)) {
            $query['DbaAccountPassword'] = $request->dbaAccountPassword;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableRightsSeparation',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableRightsSeparationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableRightsSeparationRequest $request DisableRightsSeparationRequest
     *
     * @return DisableRightsSeparationResponse DisableRightsSeparationResponse
     */
    public function disableRightsSeparation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableRightsSeparationWithOptions($request, $runtime);
    }

    /**
     * @summary 开启三权分立
     *  *
     * @param EnableRightsSeparationRequest $request EnableRightsSeparationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableRightsSeparationResponse EnableRightsSeparationResponse
     */
    public function enableRightsSeparationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditAccountDescription)) {
            $query['AuditAccountDescription'] = $request->auditAccountDescription;
        }
        if (!Utils::isUnset($request->auditAccountName)) {
            $query['AuditAccountName'] = $request->auditAccountName;
        }
        if (!Utils::isUnset($request->auditAccountPassword)) {
            $query['AuditAccountPassword'] = $request->auditAccountPassword;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityAccountDescription)) {
            $query['SecurityAccountDescription'] = $request->securityAccountDescription;
        }
        if (!Utils::isUnset($request->securityAccountName)) {
            $query['SecurityAccountName'] = $request->securityAccountName;
        }
        if (!Utils::isUnset($request->securityAccountPassword)) {
            $query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableRightsSeparation',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableRightsSeparationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启三权分立
     *  *
     * @param EnableRightsSeparationRequest $request EnableRightsSeparationRequest
     *
     * @return EnableRightsSeparationResponse EnableRightsSeparationResponse
     */
    public function enableRightsSeparation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableRightsSeparationWithOptions($request, $runtime);
    }

    /**
     * @summary 查标签接口
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查标签接口
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountDescription)) {
            $query['AccountDescription'] = $request->accountDescription;
        }
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountDescription',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountPrivilegeRequest $request ModifyAccountPrivilegeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountPrivilegeResponse ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPrivilege)) {
            $query['AccountPrivilege'] = $request->accountPrivilege;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityAccountName)) {
            $query['SecurityAccountName'] = $request->securityAccountName;
        }
        if (!Utils::isUnset($request->securityAccountPassword)) {
            $query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountPrivilege',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAccountPrivilegeRequest $request ModifyAccountPrivilegeRequest
     *
     * @return ModifyAccountPrivilegeResponse ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @summary 修改全局运维窗口信息
     *  *
     * @param ModifyActiveOperationMaintainConfRequest $request ModifyActiveOperationMaintainConfRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyActiveOperationMaintainConfResponse ModifyActiveOperationMaintainConfResponse
     */
    public function modifyActiveOperationMaintainConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyActiveOperationMaintainConf',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyActiveOperationMaintainConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改全局运维窗口信息
     *  *
     * @param ModifyActiveOperationMaintainConfRequest $request ModifyActiveOperationMaintainConfRequest
     *
     * @return ModifyActiveOperationMaintainConfResponse ModifyActiveOperationMaintainConfResponse
     */
    public function modifyActiveOperationMaintainConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationMaintainConfWithOptions($request, $runtime);
    }

    /**
     * @summary 修改主动运维任务
     *  *
     * @param ModifyActiveOperationTasksRequest $request ModifyActiveOperationTasksRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyActiveOperationTasksResponse ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->immediateStart)) {
            $query['ImmediateStart'] = $request->immediateStart;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyActiveOperationTasks',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改主动运维任务
     *  *
     * @param ModifyActiveOperationTasksRequest $request ModifyActiveOperationTasksRequest
     *
     * @return ModifyActiveOperationTasksResponse ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceClassRequest $request ModifyDBInstanceClassRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceClassResponse ModifyDBInstanceClassResponse
     */
    public function modifyDBInstanceClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cnClass)) {
            $query['CnClass'] = $request->cnClass;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->dnClass)) {
            $query['DnClass'] = $request->dnClass;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->specifiedDNScale)) {
            $query['SpecifiedDNScale'] = $request->specifiedDNScale;
        }
        if (!Utils::isUnset($request->specifiedDNSpecMapJson)) {
            $query['SpecifiedDNSpecMapJson'] = $request->specifiedDNSpecMapJson;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->switchTimeMode)) {
            $query['SwitchTimeMode'] = $request->switchTimeMode;
        }
        if (!Utils::isUnset($request->targetDBInstanceClass)) {
            $query['TargetDBInstanceClass'] = $request->targetDBInstanceClass;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceClass',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceClassRequest $request ModifyDBInstanceClassRequest
     *
     * @return ModifyDBInstanceClassResponse ModifyDBInstanceClassResponse
     */
    public function modifyDBInstanceClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceClassWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例配置
     *  *
     * @param ModifyDBInstanceConfigRequest $request ModifyDBInstanceConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceConfigResponse ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configName)) {
            $query['ConfigName'] = $request->configName;
        }
        if (!Utils::isUnset($request->configValue)) {
            $query['ConfigValue'] = $request->configValue;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceConfig',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例配置
     *  *
     * @param ModifyDBInstanceConfigRequest $request ModifyDBInstanceConfigRequest
     *
     * @return ModifyDBInstanceConfigResponse ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例链接串
     *  *
     * @param ModifyDBInstanceConnectionStringRequest $request ModifyDBInstanceConnectionStringRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceConnectionStringResponse ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->newPort)) {
            $query['NewPort'] = $request->newPort;
        }
        if (!Utils::isUnset($request->newPrefix)) {
            $query['NewPrefix'] = $request->newPrefix;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceConnectionString',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例链接串
     *  *
     * @param ModifyDBInstanceConnectionStringRequest $request ModifyDBInstanceConnectionStringRequest
     *
     * @return ModifyDBInstanceConnectionStringResponse ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionStringWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceDescriptionRequest $request ModifyDBInstanceDescriptionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBInstanceDescriptionResponse ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceDescription',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceDescriptionRequest $request ModifyDBInstanceDescriptionRequest
     *
     * @return ModifyDBInstanceDescriptionResponse ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDatabaseDescriptionRequest $request ModifyDatabaseDescriptionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDatabaseDescriptionResponse ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->dbDescription)) {
            $query['DbDescription'] = $request->dbDescription;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatabaseDescription',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDatabaseDescriptionRequest $request ModifyDatabaseDescriptionRequest
     *
     * @return ModifyDatabaseDescriptionResponse ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyParameterRequest $request ModifyParameterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyParameterResponse ModifyParameterResponse
     */
    public function modifyParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->paramLevel)) {
            $query['ParamLevel'] = $request->paramLevel;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyParameter',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyParameterRequest $request ModifyParameterRequest
     *
     * @return ModifyParameterResponse ModifyParameterResponse
     */
    public function modifyParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParameterWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityIpsRequest $request ModifySecurityIpsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySecurityIpsResponse ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['ModifyMode'] = $request->modifyMode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityIps',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySecurityIpsRequest $request ModifySecurityIpsRequest
     *
     * @return ModifySecurityIpsResponse ModifySecurityIpsResponse
     */
    public function modifySecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIpsWithOptions($request, $runtime);
    }

    /**
     * @summary 关闭冷存储
     *  *
     * @param ReleaseColdDataVolumeRequest $request ReleaseColdDataVolumeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseColdDataVolumeResponse ReleaseColdDataVolumeResponse
     */
    public function releaseColdDataVolumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseColdDataVolume',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseColdDataVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭冷存储
     *  *
     * @param ReleaseColdDataVolumeRequest $request ReleaseColdDataVolumeRequest
     *
     * @return ReleaseColdDataVolumeResponse ReleaseColdDataVolumeResponse
     */
    public function releaseColdDataVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseColdDataVolumeWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstancePublicConnectionRequest $request ReleaseInstancePublicConnectionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstancePublicConnectionResponse ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentConnectionString)) {
            $query['CurrentConnectionString'] = $request->currentConnectionString;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstancePublicConnection',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseInstancePublicConnectionRequest $request ReleaseInstancePublicConnectionRequest
     *
     * @return ReleaseInstancePublicConnectionResponse ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityAccountName)) {
            $query['SecurityAccountName'] = $request->securityAccountName;
        }
        if (!Utils::isUnset($request->securityAccountPassword)) {
            $query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAccountPassword',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param RestartDBInstanceRequest $request RestartDBInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartDBInstanceResponse RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartDBInstance',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartDBInstanceRequest $request RestartDBInstanceRequest
     *
     * @return RestartDBInstanceResponse RestartDBInstanceResponse
     */
    public function restartDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SwitchDBInstanceHARequest $request SwitchDBInstanceHARequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchDBInstanceHAResponse SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->switchTimeMode)) {
            $query['SwitchTimeMode'] = $request->switchTimeMode;
        }
        if (!Utils::isUnset($request->targetPrimaryAzoneId)) {
            $query['TargetPrimaryAzoneId'] = $request->targetPrimaryAzoneId;
        }
        if (!Utils::isUnset($request->targetPrimaryRegionId)) {
            $query['TargetPrimaryRegionId'] = $request->targetPrimaryRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchDBInstanceHA',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchDBInstanceHAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchDBInstanceHARequest $request SwitchDBInstanceHARequest
     *
     * @return SwitchDBInstanceHAResponse SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceHAWithOptions($request, $runtime);
    }

    /**
     * @summary 打标签接口
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 打标签接口
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 删标签接口
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删标签接口
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBackupPolicyRequest $request UpdateBackupPolicyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBackupPolicyResponse UpdateBackupPolicyResponse
     */
    public function updateBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPeriod)) {
            $query['BackupPeriod'] = $request->backupPeriod;
        }
        if (!Utils::isUnset($request->backupPlanBegin)) {
            $query['BackupPlanBegin'] = $request->backupPlanBegin;
        }
        if (!Utils::isUnset($request->backupSetRetention)) {
            $query['BackupSetRetention'] = $request->backupSetRetention;
        }
        if (!Utils::isUnset($request->backupType)) {
            $query['BackupType'] = $request->backupType;
        }
        if (!Utils::isUnset($request->backupWay)) {
            $query['BackupWay'] = $request->backupWay;
        }
        if (!Utils::isUnset($request->coldDataBackupInterval)) {
            $query['ColdDataBackupInterval'] = $request->coldDataBackupInterval;
        }
        if (!Utils::isUnset($request->coldDataBackupRetention)) {
            $query['ColdDataBackupRetention'] = $request->coldDataBackupRetention;
        }
        if (!Utils::isUnset($request->crossRegionDataBackupRetention)) {
            $query['CrossRegionDataBackupRetention'] = $request->crossRegionDataBackupRetention;
        }
        if (!Utils::isUnset($request->crossRegionLogBackupRetention)) {
            $query['CrossRegionLogBackupRetention'] = $request->crossRegionLogBackupRetention;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->destCrossRegion)) {
            $query['DestCrossRegion'] = $request->destCrossRegion;
        }
        if (!Utils::isUnset($request->forceCleanOnHighSpaceUsage)) {
            $query['ForceCleanOnHighSpaceUsage'] = $request->forceCleanOnHighSpaceUsage;
        }
        if (!Utils::isUnset($request->isCrossRegionDataBackupEnabled)) {
            $query['IsCrossRegionDataBackupEnabled'] = $request->isCrossRegionDataBackupEnabled;
        }
        if (!Utils::isUnset($request->isCrossRegionLogBackupEnabled)) {
            $query['IsCrossRegionLogBackupEnabled'] = $request->isCrossRegionLogBackupEnabled;
        }
        if (!Utils::isUnset($request->isEnabled)) {
            $query['IsEnabled'] = $request->isEnabled;
        }
        if (!Utils::isUnset($request->localLogRetention)) {
            $query['LocalLogRetention'] = $request->localLogRetention;
        }
        if (!Utils::isUnset($request->localLogRetentionNumber)) {
            $query['LocalLogRetentionNumber'] = $request->localLogRetentionNumber;
        }
        if (!Utils::isUnset($request->logLocalRetentionSpace)) {
            $query['LogLocalRetentionSpace'] = $request->logLocalRetentionSpace;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->removeLogRetention)) {
            $query['RemoveLogRetention'] = $request->removeLogRetention;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBackupPolicy',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBackupPolicyRequest $request UpdateBackupPolicyRequest
     *
     * @return UpdateBackupPolicyResponse UpdateBackupPolicyResponse
     */
    public function updateBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDBInstanceSSLRequest $request UpdateDBInstanceSSLRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDBInstanceSSLResponse UpdateDBInstanceSSLResponse
     */
    public function updateDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certCommonName)) {
            $query['CertCommonName'] = $request->certCommonName;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->enableSSL)) {
            $query['EnableSSL'] = $request->enableSSL;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDBInstanceSSL',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDBInstanceSSLRequest $request UpdateDBInstanceSSLRequest
     *
     * @return UpdateDBInstanceSSLResponse UpdateDBInstanceSSLResponse
     */
    public function updateDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDBInstanceTDERequest $request UpdateDBInstanceTDERequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDBInstanceTDEResponse UpdateDBInstanceTDEResponse
     */
    public function updateDBInstanceTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->encryptionKey)) {
            $query['EncryptionKey'] = $request->encryptionKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->TDEStatus)) {
            $query['TDEStatus'] = $request->TDEStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDBInstanceTDE',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDBInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDBInstanceTDERequest $request UpdateDBInstanceTDERequest
     *
     * @return UpdateDBInstanceTDEResponse UpdateDBInstanceTDEResponse
     */
    public function updateDBInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePolarDBXInstanceNodeRequest $request UpdatePolarDBXInstanceNodeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePolarDBXInstanceNodeResponse UpdatePolarDBXInstanceNodeResponse
     */
    public function updatePolarDBXInstanceNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addDNSpec)) {
            $query['AddDNSpec'] = $request->addDNSpec;
        }
        if (!Utils::isUnset($request->CNNodeCount)) {
            $query['CNNodeCount'] = $request->CNNodeCount;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->DNNodeCount)) {
            $query['DNNodeCount'] = $request->DNNodeCount;
        }
        if (!Utils::isUnset($request->dbInstanceNodeCount)) {
            $query['DbInstanceNodeCount'] = $request->dbInstanceNodeCount;
        }
        if (!Utils::isUnset($request->deleteDNIds)) {
            $query['DeleteDNIds'] = $request->deleteDNIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->storagePoolName)) {
            $query['StoragePoolName'] = $request->storagePoolName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePolarDBXInstanceNode',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePolarDBXInstanceNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePolarDBXInstanceNodeRequest $request UpdatePolarDBXInstanceNodeRequest
     *
     * @return UpdatePolarDBXInstanceNodeResponse UpdatePolarDBXInstanceNodeResponse
     */
    public function updatePolarDBXInstanceNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolarDBXInstanceNodeWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeDBInstanceKernelVersionRequest $request UpgradeDBInstanceKernelVersionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeDBInstanceKernelVersionResponse UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceName)) {
            $query['DBInstanceName'] = $request->DBInstanceName;
        }
        if (!Utils::isUnset($request->minorVersion)) {
            $query['MinorVersion'] = $request->minorVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->switchMode)) {
            $query['SwitchMode'] = $request->switchMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBInstanceKernelVersion',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBInstanceKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeDBInstanceKernelVersionRequest $request UpgradeDBInstanceKernelVersionRequest
     *
     * @return UpgradeDBInstanceKernelVersionResponse UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceKernelVersionWithOptions($request, $runtime);
    }
}
