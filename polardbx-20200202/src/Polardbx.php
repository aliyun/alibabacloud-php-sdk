<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateDBInstanceShrinkRequest;
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
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcInfoRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcInfoResponse;
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
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenBackupSetRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenBackupSetResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParameterTemplatesRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParameterTemplatesResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeScaleOutMigrateTaskListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeScaleOutMigrateTaskListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSecurityIpsRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSecurityIpsResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSlowLogRecordsResponse;
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
use AlibabaCloud\SDK\Polardbx\V20200202\Models\SwitchGdnMemberRoleRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\SwitchGdnMemberRoleResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Polardbx extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'polardbx.aliyuncs.com',
            'ap-northeast-2-pop' => 'polardbx.aliyuncs.com',
            'ap-south-1' => 'polardbx.aliyuncs.com',
            'ap-southeast-2' => 'polardbx.aliyuncs.com',
            'ap-southeast-3' => 'polardbx.aliyuncs.com',
            'ap-southeast-5' => 'polardbx.aliyuncs.com',
            'cn-beijing-finance-1' => 'polardbx.aliyuncs.com',
            'cn-beijing-finance-pop' => 'polardbx.aliyuncs.com',
            'cn-beijing-gov-1' => 'polardbx.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'polardbx.aliyuncs.com',
            'cn-edge-1' => 'polardbx.aliyuncs.com',
            'cn-fujian' => 'polardbx.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-finance' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-test-306' => 'polardbx.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'polardbx.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'polardbx.aliyuncs.com',
            'cn-north-2-gov-1' => 'polardbx.aliyuncs.com',
            'cn-qingdao-nebula' => 'polardbx.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'polardbx.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'polardbx.aliyuncs.com',
            'cn-shanghai-finance-1' => 'polardbx.aliyuncs.com',
            'cn-shanghai-inner' => 'polardbx.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'polardbx.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'polardbx.aliyuncs.com',
            'cn-shenzhen-inner' => 'polardbx.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'polardbx.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'polardbx.aliyuncs.com',
            'cn-wuhan' => 'polardbx.aliyuncs.com',
            'cn-wulanchabu' => 'polardbx.aliyuncs.com',
            'cn-yushanfang' => 'polardbx.aliyuncs.com',
            'cn-zhangbei' => 'polardbx.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'polardbx.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'polardbx.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'polardbx.aliyuncs.com',
            'eu-central-1' => 'polardbx.aliyuncs.com',
            'eu-west-1' => 'polardbx.aliyuncs.com',
            'eu-west-1-oxs' => 'polardbx.aliyuncs.com',
            'me-east-1' => 'polardbx.aliyuncs.com',
            'rus-west-1-pop' => 'polardbx.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param request - AlignStoragePrimaryAzoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AlignStoragePrimaryAzoneResponse
     *
     * @param AlignStoragePrimaryAzoneRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AlignStoragePrimaryAzoneResponse
     */
    public function alignStoragePrimaryAzoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->storageInstanceName) {
            @$query['StorageInstanceName'] = $request->storageInstanceName;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        if (null !== $request->switchTimeMode) {
            @$query['SwitchTimeMode'] = $request->switchTimeMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AlignStoragePrimaryAzone',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AlignStoragePrimaryAzoneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AlignStoragePrimaryAzoneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - AlignStoragePrimaryAzoneRequest
     *
     * @returns AlignStoragePrimaryAzoneResponse
     *
     * @param AlignStoragePrimaryAzoneRequest $request
     *
     * @return AlignStoragePrimaryAzoneResponse
     */
    public function alignStoragePrimaryAzone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->alignStoragePrimaryAzoneWithOptions($request, $runtime);
    }

    /**
     * 开通冷存储.
     *
     * @param request - AllocateColdDataVolumeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateColdDataVolumeResponse
     *
     * @param AllocateColdDataVolumeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AllocateColdDataVolumeResponse
     */
    public function allocateColdDataVolumeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocateColdDataVolume',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AllocateColdDataVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AllocateColdDataVolumeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 开通冷存储.
     *
     * @param request - AllocateColdDataVolumeRequest
     *
     * @returns AllocateColdDataVolumeResponse
     *
     * @param AllocateColdDataVolumeRequest $request
     *
     * @return AllocateColdDataVolumeResponse
     */
    public function allocateColdDataVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateColdDataVolumeWithOptions($request, $runtime);
    }

    /**
     * @param request - AllocateInstancePublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateInstancePublicConnectionResponse
     *
     * @param AllocateInstancePublicConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocateInstancePublicConnection',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AllocateInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AllocateInstancePublicConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - AllocateInstancePublicConnectionRequest
     *
     * @returns AllocateInstancePublicConnectionResponse
     *
     * @param AllocateInstancePublicConnectionRequest $request
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * 取消主动运维任务
     *
     * @param request - CancelActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelActiveOperationTasksResponse
     *
     * @param CancelActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelActiveOperationTasks',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelActiveOperationTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消主动运维任务
     *
     * @param request - CancelActiveOperationTasksRequest
     *
     * @returns CancelActiveOperationTasksResponse
     *
     * @param CancelActiveOperationTasksRequest $request
     *
     * @return CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * 修改实例所在资源组.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改实例所在资源组.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - CheckCloudResourceAuthorizedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckCloudResourceAuthorizedResponse
     *
     * @param CheckCloudResourceAuthorizedRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorizedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckCloudResourceAuthorized',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CheckCloudResourceAuthorizedResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckCloudResourceAuthorizedResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CheckCloudResourceAuthorizedRequest
     *
     * @returns CheckCloudResourceAuthorizedResponse
     *
     * @param CheckCloudResourceAuthorizedRequest $request
     *
     * @return CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorized($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCloudResourceAuthorizedWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccountResponse
     *
     * @param CreateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountDescription) {
            @$query['AccountDescription'] = $request->accountDescription;
        }

        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->accountPrivilege) {
            @$query['AccountPrivilege'] = $request->accountPrivilege;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityAccountName) {
            @$query['SecurityAccountName'] = $request->securityAccountName;
        }

        if (null !== $request->securityAccountPassword) {
            @$query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccount',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateAccountRequest
     *
     * @returns CreateAccountResponse
     *
     * @param CreateAccountRequest $request
     *
     * @return CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackupResponse
     *
     * @param CreateBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupType) {
            @$query['BackupType'] = $request->backupType;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBackup',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateBackupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateBackupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateBackupRequest
     *
     * @returns CreateBackupResponse
     *
     * @param CreateBackupRequest $request
     *
     * @return CreateBackupResponse
     */
    public function createBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBResponse
     *
     * @param CreateDBRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return CreateDBResponse
     */
    public function createDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPrivilege) {
            @$query['AccountPrivilege'] = $request->accountPrivilege;
        }

        if (null !== $request->charset) {
            @$query['Charset'] = $request->charset;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->dbDescription) {
            @$query['DbDescription'] = $request->dbDescription;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityAccountName) {
            @$query['SecurityAccountName'] = $request->securityAccountName;
        }

        if (null !== $request->securityAccountPassword) {
            @$query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }

        if (null !== $request->storagePoolName) {
            @$query['StoragePoolName'] = $request->storagePoolName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDB',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateDBRequest
     *
     * @returns CreateDBResponse
     *
     * @param CreateDBRequest $request
     *
     * @return CreateDBResponse
     */
    public function createDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBWithOptions($request, $runtime);
    }

    /**
     * 创建实例.
     *
     * @param tmpReq - CreateDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBInstanceResponse
     *
     * @param CreateDBInstanceRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDBInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extraParams) {
            $request->extraParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extraParams, 'ExtraParams', 'json');
        }

        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->CNNodeCount) {
            @$query['CNNodeCount'] = $request->CNNodeCount;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cnClass) {
            @$query['CnClass'] = $request->cnClass;
        }

        if (null !== $request->DBNodeClass) {
            @$query['DBNodeClass'] = $request->DBNodeClass;
        }

        if (null !== $request->DBNodeCount) {
            @$query['DBNodeCount'] = $request->DBNodeCount;
        }

        if (null !== $request->DNNodeCount) {
            @$query['DNNodeCount'] = $request->DNNodeCount;
        }

        if (null !== $request->dnClass) {
            @$query['DnClass'] = $request->dnClass;
        }

        if (null !== $request->dnStorageSpace) {
            @$query['DnStorageSpace'] = $request->dnStorageSpace;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->extraParamsShrink) {
            @$query['ExtraParams'] = $request->extraParamsShrink;
        }

        if (null !== $request->isColumnarReadDBInstance) {
            @$query['IsColumnarReadDBInstance'] = $request->isColumnarReadDBInstance;
        }

        if (null !== $request->isReadDBInstance) {
            @$query['IsReadDBInstance'] = $request->isReadDBInstance;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->primaryDBInstanceName) {
            @$query['PrimaryDBInstanceName'] = $request->primaryDBInstanceName;
        }

        if (null !== $request->primaryZone) {
            @$query['PrimaryZone'] = $request->primaryZone;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->secondaryZone) {
            @$query['SecondaryZone'] = $request->secondaryZone;
        }

        if (null !== $request->series) {
            @$query['Series'] = $request->series;
        }

        if (null !== $request->tertiaryZone) {
            @$query['TertiaryZone'] = $request->tertiaryZone;
        }

        if (null !== $request->topologyType) {
            @$query['TopologyType'] = $request->topologyType;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        if (null !== $request->VPCId) {
            @$query['VPCId'] = $request->VPCId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBInstance',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDBInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建实例.
     *
     * @param request - CreateDBInstanceRequest
     *
     * @returns CreateDBInstanceResponse
     *
     * @param CreateDBInstanceRequest $request
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateSuperAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSuperAccountResponse
     *
     * @param CreateSuperAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSuperAccountResponse
     */
    public function createSuperAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountDescription) {
            @$query['AccountDescription'] = $request->accountDescription;
        }

        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSuperAccount',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSuperAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSuperAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateSuperAccountRequest
     *
     * @returns CreateSuperAccountResponse
     *
     * @param CreateSuperAccountRequest $request
     *
     * @return CreateSuperAccountResponse
     */
    public function createSuperAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSuperAccountWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccountResponse
     *
     * @param DeleteAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityAccountName) {
            @$query['SecurityAccountName'] = $request->securityAccountName;
        }

        if (null !== $request->securityAccountPassword) {
            @$query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccount',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAccountRequest
     *
     * @returns DeleteAccountResponse
     *
     * @param DeleteAccountRequest $request
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBResponse
     *
     * @param DeleteDBRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DeleteDBResponse
     */
    public function deleteDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDB',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteDBRequest
     *
     * @returns DeleteDBResponse
     *
     * @param DeleteDBRequest $request
     *
     * @return DeleteDBResponse
     */
    public function deleteDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBInstanceResponse
     *
     * @param DeleteDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBInstance',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDBInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteDBInstanceRequest
     *
     * @returns DeleteDBInstanceResponse
     *
     * @param DeleteDBInstanceRequest $request
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeAccountListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountListResponse
     *
     * @param DescribeAccountListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAccountListResponse
     */
    public function describeAccountListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccountList',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAccountListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAccountListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAccountListRequest
     *
     * @returns DescribeAccountListResponse
     *
     * @param DescribeAccountListRequest $request
     *
     * @return DescribeAccountListResponse
     */
    public function describeAccountList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountListWithOptions($request, $runtime);
    }

    /**
     * 展示全局运维窗口配置.
     *
     * @param request - DescribeActiveOperationMaintainConfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationMaintainConfResponse
     *
     * @param DescribeActiveOperationMaintainConfRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeActiveOperationMaintainConfResponse
     */
    public function describeActiveOperationMaintainConfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationMaintainConf',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeActiveOperationMaintainConfResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeActiveOperationMaintainConfResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 展示全局运维窗口配置.
     *
     * @param request - DescribeActiveOperationMaintainConfRequest
     *
     * @returns DescribeActiveOperationMaintainConfResponse
     *
     * @param DescribeActiveOperationMaintainConfRequest $request
     *
     * @return DescribeActiveOperationMaintainConfResponse
     */
    public function describeActiveOperationMaintainConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationMaintainConfWithOptions($request, $runtime);
    }

    /**
     * 获取主动运维任务数量.
     *
     * @param request - DescribeActiveOperationTaskCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationTaskCountResponse
     *
     * @param DescribeActiveOperationTaskCountRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationTaskCount',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeActiveOperationTaskCountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeActiveOperationTaskCountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取主动运维任务数量.
     *
     * @param request - DescribeActiveOperationTaskCountRequest
     *
     * @returns DescribeActiveOperationTaskCountResponse
     *
     * @param DescribeActiveOperationTaskCountRequest $request
     *
     * @return DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskCountWithOptions($request, $runtime);
    }

    /**
     * 获取待执行自动运维任务列表.
     *
     * @param request - DescribeActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationTasksResponse
     *
     * @param DescribeActiveOperationTasksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationTasks',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeActiveOperationTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取待执行自动运维任务列表.
     *
     * @param request - DescribeActiveOperationTasksRequest
     *
     * @returns DescribeActiveOperationTasksResponse
     *
     * @param DescribeActiveOperationTasksRequest $request
     *
     * @return DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * 冷存储表列表.
     *
     * @param request - DescribeArchiveTableListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeArchiveTableListResponse
     *
     * @param DescribeArchiveTableListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeArchiveTableListResponse
     */
    public function describeArchiveTableListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeArchiveTableList',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeArchiveTableListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeArchiveTableListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 冷存储表列表.
     *
     * @param request - DescribeArchiveTableListRequest
     *
     * @returns DescribeArchiveTableListResponse
     *
     * @param DescribeArchiveTableListRequest $request
     *
     * @return DescribeArchiveTableListResponse
     */
    public function describeArchiveTableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeArchiveTableListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupPolicyResponse
     *
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPolicy',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackupPolicyRequest
     *
     * @returns DescribeBackupPolicyResponse
     *
     * @param DescribeBackupPolicyRequest $request
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * 备份集详情.
     *
     * @param request - DescribeBackupSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupSetResponse
     *
     * @param DescribeBackupSetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeBackupSetResponse
     */
    public function describeBackupSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->destCrossRegion) {
            @$query['DestCrossRegion'] = $request->destCrossRegion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupSet',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeBackupSetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 备份集详情.
     *
     * @param request - DescribeBackupSetRequest
     *
     * @returns DescribeBackupSetResponse
     *
     * @param DescribeBackupSetRequest $request
     *
     * @return DescribeBackupSetResponse
     */
    public function describeBackupSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeBackupSetListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupSetListResponse
     *
     * @param DescribeBackupSetListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBackupSetListResponse
     */
    public function describeBackupSetListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupSetList',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeBackupSetListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupSetListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackupSetListRequest
     *
     * @returns DescribeBackupSetListResponse
     *
     * @param DescribeBackupSetListRequest $request
     *
     * @return DescribeBackupSetListResponse
     */
    public function describeBackupSetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeBinaryLogListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBinaryLogListResponse
     *
     * @param DescribeBinaryLogListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBinaryLogListResponse
     */
    public function describeBinaryLogListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBinaryLogList',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeBinaryLogListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBinaryLogListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBinaryLogListRequest
     *
     * @returns DescribeBinaryLogListResponse
     *
     * @param DescribeBinaryLogListRequest $request
     *
     * @return DescribeBinaryLogListResponse
     */
    public function describeBinaryLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBinaryLogListWithOptions($request, $runtime);
    }

    /**
     * 查询CDC信息.
     *
     * @param request - DescribeCdcInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdcInfoResponse
     *
     * @param DescribeCdcInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeCdcInfoResponse
     */
    public function describeCdcInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdcInfo',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeCdcInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCdcInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询CDC信息.
     *
     * @param request - DescribeCdcInfoRequest
     *
     * @returns DescribeCdcInfoResponse
     *
     * @param DescribeCdcInfoRequest $request
     *
     * @return DescribeCdcInfoResponse
     */
    public function describeCdcInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdcInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeCharacterSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCharacterSetResponse
     *
     * @param DescribeCharacterSetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCharacterSetResponse
     */
    public function describeCharacterSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCharacterSet',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeCharacterSetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCharacterSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeCharacterSetRequest
     *
     * @returns DescribeCharacterSetResponse
     *
     * @param DescribeCharacterSetRequest $request
     *
     * @return DescribeCharacterSetResponse
     */
    public function describeCharacterSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCharacterSetWithOptions($request, $runtime);
    }

    /**
     * 冷存储基础信息.
     *
     * @param request - DescribeColdDataBasicInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeColdDataBasicInfoResponse
     *
     * @param DescribeColdDataBasicInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeColdDataBasicInfoResponse
     */
    public function describeColdDataBasicInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeColdDataBasicInfo',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeColdDataBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeColdDataBasicInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 冷存储基础信息.
     *
     * @param request - DescribeColdDataBasicInfoRequest
     *
     * @returns DescribeColdDataBasicInfoResponse
     *
     * @param DescribeColdDataBasicInfoRequest $request
     *
     * @return DescribeColdDataBasicInfoResponse
     */
    public function describeColdDataBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeColdDataBasicInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDBInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceAttributeResponse
     *
     * @param DescribeDBInstanceAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceAttribute',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBInstanceAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDBInstanceAttributeRequest
     *
     * @returns DescribeDBInstanceAttributeResponse
     *
     * @param DescribeDBInstanceAttributeRequest $request
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDBInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceConfigResponse
     *
     * @param DescribeDBInstanceConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBInstanceConfigResponse
     */
    public function describeDBInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceConfig',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBInstanceConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDBInstanceConfigRequest
     *
     * @returns DescribeDBInstanceConfigResponse
     *
     * @param DescribeDBInstanceConfigRequest $request
     *
     * @return DescribeDBInstanceConfigResponse
     */
    public function describeDBInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDBInstanceHARequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceHAResponse
     *
     * @param DescribeDBInstanceHARequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDBInstanceHAResponse
     */
    public function describeDBInstanceHAWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceHA',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBInstanceHAResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBInstanceHAResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDBInstanceHARequest
     *
     * @returns DescribeDBInstanceHAResponse
     *
     * @param DescribeDBInstanceHARequest $request
     *
     * @return DescribeDBInstanceHAResponse
     */
    public function describeDBInstanceHA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceHAWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDBInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceSSLResponse
     *
     * @param DescribeDBInstanceSSLRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceSSL',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBInstanceSSLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDBInstanceSSLRequest
     *
     * @returns DescribeDBInstanceSSLResponse
     *
     * @param DescribeDBInstanceSSLRequest $request
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDBInstanceTDERequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceTDEResponse
     *
     * @param DescribeDBInstanceTDERequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDEWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceTDE',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBInstanceTDEResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDBInstanceTDERequest
     *
     * @returns DescribeDBInstanceTDEResponse
     *
     * @param DescribeDBInstanceTDERequest $request
     *
     * @return DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDBInstanceTopologyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceTopologyResponse
     *
     * @param DescribeDBInstanceTopologyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBInstanceTopologyResponse
     */
    public function describeDBInstanceTopologyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->minuteSimple) {
            @$query['MinuteSimple'] = $request->minuteSimple;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceTopology',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBInstanceTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBInstanceTopologyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDBInstanceTopologyRequest
     *
     * @returns DescribeDBInstanceTopologyResponse
     *
     * @param DescribeDBInstanceTopologyRequest $request
     *
     * @return DescribeDBInstanceTopologyResponse
     */
    public function describeDBInstanceTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * 通过Endpoint查询实例.
     *
     * @param request - DescribeDBInstanceViaEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceViaEndpointResponse
     *
     * @param DescribeDBInstanceViaEndpointRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstanceViaEndpointResponse
     */
    public function describeDBInstanceViaEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpoint) {
            @$query['Endpoint'] = $request->endpoint;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceViaEndpoint',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBInstanceViaEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBInstanceViaEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 通过Endpoint查询实例.
     *
     * @param request - DescribeDBInstanceViaEndpointRequest
     *
     * @returns DescribeDBInstanceViaEndpointResponse
     *
     * @param DescribeDBInstanceViaEndpointRequest $request
     *
     * @return DescribeDBInstanceViaEndpointResponse
     */
    public function describeDBInstanceViaEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceViaEndpointWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDBInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstancesResponse
     *
     * @param DescribeDBInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbVersion) {
            @$query['DbVersion'] = $request->dbVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mustHasCdc) {
            @$query['MustHasCdc'] = $request->mustHasCdc;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->series) {
            @$query['Series'] = $request->series;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstances',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDBInstancesRequest
     *
     * @returns DescribeDBInstancesResponse
     *
     * @param DescribeDBInstancesRequest $request
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesWithOptions($request, $runtime);
    }

    /**
     * 性能监控数据接口.
     *
     * @param request - DescribeDBNodePerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBNodePerformanceResponse
     *
     * @param DescribeDBNodePerformanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBNodePerformanceResponse
     */
    public function describeDBNodePerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->characterType) {
            @$query['CharacterType'] = $request->characterType;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->DBNodeIds) {
            @$query['DBNodeIds'] = $request->DBNodeIds;
        }

        if (null !== $request->DBNodeRole) {
            @$query['DBNodeRole'] = $request->DBNodeRole;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBNodePerformance',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBNodePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBNodePerformanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 性能监控数据接口.
     *
     * @param request - DescribeDBNodePerformanceRequest
     *
     * @returns DescribeDBNodePerformanceResponse
     *
     * @param DescribeDBNodePerformanceRequest $request
     *
     * @return DescribeDBNodePerformanceResponse
     */
    public function describeDBNodePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBNodePerformanceWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDbListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDbListResponse
     *
     * @param DescribeDbListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDbListResponse
     */
    public function describeDbListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDbList',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDbListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDbListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDbListRequest
     *
     * @returns DescribeDbListResponse
     *
     * @param DescribeDbListRequest $request
     *
     * @return DescribeDbListResponse
     */
    public function describeDbList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDbListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDistributeTableListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDistributeTableListResponse
     *
     * @param DescribeDistributeTableListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDistributeTableListResponse
     */
    public function describeDistributeTableListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDistributeTableList',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDistributeTableListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDistributeTableListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDistributeTableListRequest
     *
     * @returns DescribeDistributeTableListResponse
     *
     * @param DescribeDistributeTableListRequest $request
     *
     * @return DescribeDistributeTableListResponse
     */
    public function describeDistributeTableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDistributeTableListWithOptions($request, $runtime);
    }

    /**
     * 历史事件.
     *
     * @param request - DescribeEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventsResponse
     *
     * @param DescribeEventsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEvents',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 历史事件.
     *
     * @param request - DescribeEventsRequest
     *
     * @returns DescribeEventsResponse
     *
     * @param DescribeEventsRequest $request
     *
     * @return DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsWithOptions($request, $runtime);
    }

    /**
     * 获取GDN实例列表.
     *
     * @param request - DescribeGdnInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGdnInstancesResponse
     *
     * @param DescribeGdnInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGdnInstancesResponse
     */
    public function describeGdnInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterType) {
            @$query['FilterType'] = $request->filterType;
        }

        if (null !== $request->filterValue) {
            @$query['FilterValue'] = $request->filterValue;
        }

        if (null !== $request->GDNId) {
            @$query['GDNId'] = $request->GDNId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGdnInstances',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeGdnInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeGdnInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取GDN实例列表.
     *
     * @param request - DescribeGdnInstancesRequest
     *
     * @returns DescribeGdnInstancesResponse
     *
     * @param DescribeGdnInstancesRequest $request
     *
     * @return DescribeGdnInstancesResponse
     */
    public function describeGdnInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGdnInstancesWithOptions($request, $runtime);
    }

    /**
     * 开放商业备份集.
     *
     * @param request - DescribeOpenBackupSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOpenBackupSetResponse
     *
     * @param DescribeOpenBackupSetRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeOpenBackupSetResponse
     */
    public function describeOpenBackupSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOpenBackupSet',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeOpenBackupSetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOpenBackupSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 开放商业备份集.
     *
     * @param request - DescribeOpenBackupSetRequest
     *
     * @returns DescribeOpenBackupSetResponse
     *
     * @param DescribeOpenBackupSetRequest $request
     *
     * @return DescribeOpenBackupSetResponse
     */
    public function describeOpenBackupSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpenBackupSetWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeParameterTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParameterTemplatesResponse
     *
     * @param DescribeParameterTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->paramLevel) {
            @$query['ParamLevel'] = $request->paramLevel;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameterTemplates',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeParameterTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeParameterTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeParameterTemplatesRequest
     *
     * @returns DescribeParameterTemplatesResponse
     *
     * @param DescribeParameterTemplatesRequest $request
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParametersResponse
     *
     * @param DescribeParametersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->paramLevel) {
            @$query['ParamLevel'] = $request->paramLevel;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParameters',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeParametersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeParametersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeParametersRequest
     *
     * @returns DescribeParametersResponse
     *
     * @param DescribeParametersRequest $request
     *
     * @return DescribeParametersResponse
     */
    public function describeParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @returns DescribeRegionsResponse
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @param request - DescribeScaleOutMigrateTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScaleOutMigrateTaskListResponse
     *
     * @param DescribeScaleOutMigrateTaskListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeScaleOutMigrateTaskListResponse
     */
    public function describeScaleOutMigrateTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScaleOutMigrateTaskList',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeScaleOutMigrateTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScaleOutMigrateTaskListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeScaleOutMigrateTaskListRequest
     *
     * @returns DescribeScaleOutMigrateTaskListResponse
     *
     * @param DescribeScaleOutMigrateTaskListRequest $request
     *
     * @return DescribeScaleOutMigrateTaskListResponse
     */
    public function describeScaleOutMigrateTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScaleOutMigrateTaskListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeSecurityIpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityIpsResponse
     *
     * @param DescribeSecurityIpsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSecurityIpsResponse
     */
    public function describeSecurityIpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityIps',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSecurityIpsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSecurityIpsRequest
     *
     * @returns DescribeSecurityIpsResponse
     *
     * @param DescribeSecurityIpsRequest $request
     *
     * @return DescribeSecurityIpsResponse
     */
    public function describeSecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIpsWithOptions($request, $runtime);
    }

    /**
     * 慢SQL明细.
     *
     * @param request - DescribeSlowLogRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlowLogRecordsResponse
     *
     * @param DescribeSlowLogRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->characterType) {
            @$query['CharacterType'] = $request->characterType;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->DBNodeIds) {
            @$query['DBNodeIds'] = $request->DBNodeIds;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowLogRecords',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlowLogRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 慢SQL明细.
     *
     * @param request - DescribeSlowLogRecordsRequest
     *
     * @returns DescribeSlowLogRecordsResponse
     *
     * @param DescribeSlowLogRecordsRequest $request
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * 标签列表查询.
     *
     * @param request - DescribeTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTags',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 标签列表查询.
     *
     * @param request - DescribeTagsRequest
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     *
     * @return DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
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
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTasks',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @param request - DescribeUserEncryptionKeyListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserEncryptionKeyListResponse
     *
     * @param DescribeUserEncryptionKeyListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserEncryptionKeyList',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeUserEncryptionKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeUserEncryptionKeyListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeUserEncryptionKeyListRequest
     *
     * @returns DescribeUserEncryptionKeyListResponse
     *
     * @param DescribeUserEncryptionKeyListRequest $request
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEncryptionKeyListWithOptions($request, $runtime);
    }

    /**
     * @param request - DisableRightsSeparationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableRightsSeparationResponse
     *
     * @param DisableRightsSeparationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DisableRightsSeparationResponse
     */
    public function disableRightsSeparationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->dbaAccountName) {
            @$query['DbaAccountName'] = $request->dbaAccountName;
        }

        if (null !== $request->dbaAccountPassword) {
            @$query['DbaAccountPassword'] = $request->dbaAccountPassword;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableRightsSeparation',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableRightsSeparationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableRightsSeparationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DisableRightsSeparationRequest
     *
     * @returns DisableRightsSeparationResponse
     *
     * @param DisableRightsSeparationRequest $request
     *
     * @return DisableRightsSeparationResponse
     */
    public function disableRightsSeparation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableRightsSeparationWithOptions($request, $runtime);
    }

    /**
     * 开启三权分立.
     *
     * @param request - EnableRightsSeparationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableRightsSeparationResponse
     *
     * @param EnableRightsSeparationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EnableRightsSeparationResponse
     */
    public function enableRightsSeparationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditAccountDescription) {
            @$query['AuditAccountDescription'] = $request->auditAccountDescription;
        }

        if (null !== $request->auditAccountName) {
            @$query['AuditAccountName'] = $request->auditAccountName;
        }

        if (null !== $request->auditAccountPassword) {
            @$query['AuditAccountPassword'] = $request->auditAccountPassword;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityAccountDescription) {
            @$query['SecurityAccountDescription'] = $request->securityAccountDescription;
        }

        if (null !== $request->securityAccountName) {
            @$query['SecurityAccountName'] = $request->securityAccountName;
        }

        if (null !== $request->securityAccountPassword) {
            @$query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableRightsSeparation',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableRightsSeparationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableRightsSeparationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 开启三权分立.
     *
     * @param request - EnableRightsSeparationRequest
     *
     * @returns EnableRightsSeparationResponse
     *
     * @param EnableRightsSeparationRequest $request
     *
     * @return EnableRightsSeparationResponse
     */
    public function enableRightsSeparation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableRightsSeparationWithOptions($request, $runtime);
    }

    /**
     * 查标签接口.
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
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查标签接口.
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
     * @param request - ModifyAccountDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountDescriptionResponse
     *
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountDescription) {
            @$query['AccountDescription'] = $request->accountDescription;
        }

        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountDescription',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAccountDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifyAccountDescriptionRequest
     *
     * @returns ModifyAccountDescriptionResponse
     *
     * @param ModifyAccountDescriptionRequest $request
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyAccountPrivilegeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountPrivilegeResponse
     *
     * @param ModifyAccountPrivilegeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilegeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPrivilege) {
            @$query['AccountPrivilege'] = $request->accountPrivilege;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityAccountName) {
            @$query['SecurityAccountName'] = $request->securityAccountName;
        }

        if (null !== $request->securityAccountPassword) {
            @$query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountPrivilege',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAccountPrivilegeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifyAccountPrivilegeRequest
     *
     * @returns ModifyAccountPrivilegeResponse
     *
     * @param ModifyAccountPrivilegeRequest $request
     *
     * @return ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * 修改全局运维窗口信息.
     *
     * @param request - ModifyActiveOperationMaintainConfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyActiveOperationMaintainConfResponse
     *
     * @param ModifyActiveOperationMaintainConfRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyActiveOperationMaintainConfResponse
     */
    public function modifyActiveOperationMaintainConfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyActiveOperationMaintainConf',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyActiveOperationMaintainConfResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyActiveOperationMaintainConfResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改全局运维窗口信息.
     *
     * @param request - ModifyActiveOperationMaintainConfRequest
     *
     * @returns ModifyActiveOperationMaintainConfResponse
     *
     * @param ModifyActiveOperationMaintainConfRequest $request
     *
     * @return ModifyActiveOperationMaintainConfResponse
     */
    public function modifyActiveOperationMaintainConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationMaintainConfWithOptions($request, $runtime);
    }

    /**
     * 修改主动运维任务
     *
     * @param request - ModifyActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyActiveOperationTasksResponse
     *
     * @param ModifyActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->immediateStart) {
            @$query['ImmediateStart'] = $request->immediateStart;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyActiveOperationTasks',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyActiveOperationTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改主动运维任务
     *
     * @param request - ModifyActiveOperationTasksRequest
     *
     * @returns ModifyActiveOperationTasksResponse
     *
     * @param ModifyActiveOperationTasksRequest $request
     *
     * @return ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyDBInstanceClassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceClassResponse
     *
     * @param ModifyDBInstanceClassRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDBInstanceClassResponse
     */
    public function modifyDBInstanceClassWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cnClass) {
            @$query['CnClass'] = $request->cnClass;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->dnClass) {
            @$query['DnClass'] = $request->dnClass;
        }

        if (null !== $request->dnStorageSpace) {
            @$query['DnStorageSpace'] = $request->dnStorageSpace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->specifiedDNScale) {
            @$query['SpecifiedDNScale'] = $request->specifiedDNScale;
        }

        if (null !== $request->specifiedDNSpecMapJson) {
            @$query['SpecifiedDNSpecMapJson'] = $request->specifiedDNSpecMapJson;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        if (null !== $request->switchTimeMode) {
            @$query['SwitchTimeMode'] = $request->switchTimeMode;
        }

        if (null !== $request->targetDBInstanceClass) {
            @$query['TargetDBInstanceClass'] = $request->targetDBInstanceClass;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceClass',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDBInstanceClassResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDBInstanceClassResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifyDBInstanceClassRequest
     *
     * @returns ModifyDBInstanceClassResponse
     *
     * @param ModifyDBInstanceClassRequest $request
     *
     * @return ModifyDBInstanceClassResponse
     */
    public function modifyDBInstanceClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceClassWithOptions($request, $runtime);
    }

    /**
     * 修改实例配置.
     *
     * @param request - ModifyDBInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceConfigResponse
     *
     * @param ModifyDBInstanceConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->configValue) {
            @$query['ConfigValue'] = $request->configValue;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceConfig',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDBInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDBInstanceConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改实例配置.
     *
     * @param request - ModifyDBInstanceConfigRequest
     *
     * @returns ModifyDBInstanceConfigResponse
     *
     * @param ModifyDBInstanceConfigRequest $request
     *
     * @return ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * 修改实例链接串.
     *
     * @param request - ModifyDBInstanceConnectionStringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceConnectionStringResponse
     *
     * @param ModifyDBInstanceConnectionStringRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->newPort) {
            @$query['NewPort'] = $request->newPort;
        }

        if (null !== $request->newPrefix) {
            @$query['NewPrefix'] = $request->newPrefix;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceConnectionString',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDBInstanceConnectionStringResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改实例链接串.
     *
     * @param request - ModifyDBInstanceConnectionStringRequest
     *
     * @returns ModifyDBInstanceConnectionStringResponse
     *
     * @param ModifyDBInstanceConnectionStringRequest $request
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionStringWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyDBInstanceDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceDescriptionResponse
     *
     * @param ModifyDBInstanceDescriptionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceDescription',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDBInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDBInstanceDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifyDBInstanceDescriptionRequest
     *
     * @returns ModifyDBInstanceDescriptionResponse
     *
     * @param ModifyDBInstanceDescriptionRequest $request
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyDatabaseDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDatabaseDescriptionResponse
     *
     * @param ModifyDatabaseDescriptionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->dbDescription) {
            @$query['DbDescription'] = $request->dbDescription;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDatabaseDescription',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDatabaseDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDatabaseDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifyDatabaseDescriptionRequest
     *
     * @returns ModifyDatabaseDescriptionResponse
     *
     * @param ModifyDatabaseDescriptionRequest $request
     *
     * @return ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyParameterResponse
     *
     * @param ModifyParameterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyParameterResponse
     */
    public function modifyParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->paramLevel) {
            @$query['ParamLevel'] = $request->paramLevel;
        }

        if (null !== $request->parameterGroupId) {
            @$query['ParameterGroupId'] = $request->parameterGroupId;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyParameter',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyParameterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyParameterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifyParameterRequest
     *
     * @returns ModifyParameterResponse
     *
     * @param ModifyParameterRequest $request
     *
     * @return ModifyParameterResponse
     */
    public function modifyParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParameterWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifySecurityIpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySecurityIpsResponse
     *
     * @param ModifySecurityIpsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->modifyMode) {
            @$query['ModifyMode'] = $request->modifyMode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityIps',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifySecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifySecurityIpsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifySecurityIpsRequest
     *
     * @returns ModifySecurityIpsResponse
     *
     * @param ModifySecurityIpsRequest $request
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIpsWithOptions($request, $runtime);
    }

    /**
     * 关闭冷存储.
     *
     * @param request - ReleaseColdDataVolumeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseColdDataVolumeResponse
     *
     * @param ReleaseColdDataVolumeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReleaseColdDataVolumeResponse
     */
    public function releaseColdDataVolumeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseColdDataVolume',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReleaseColdDataVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseColdDataVolumeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 关闭冷存储.
     *
     * @param request - ReleaseColdDataVolumeRequest
     *
     * @returns ReleaseColdDataVolumeResponse
     *
     * @param ReleaseColdDataVolumeRequest $request
     *
     * @return ReleaseColdDataVolumeResponse
     */
    public function releaseColdDataVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseColdDataVolumeWithOptions($request, $runtime);
    }

    /**
     * @param request - ReleaseInstancePublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstancePublicConnectionResponse
     *
     * @param ReleaseInstancePublicConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentConnectionString) {
            @$query['CurrentConnectionString'] = $request->currentConnectionString;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseInstancePublicConnection',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReleaseInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseInstancePublicConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ReleaseInstancePublicConnectionRequest
     *
     * @returns ReleaseInstancePublicConnectionResponse
     *
     * @param ReleaseInstancePublicConnectionRequest $request
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @param request - ResetAccountPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAccountPasswordResponse
     *
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityAccountName) {
            @$query['SecurityAccountName'] = $request->securityAccountName;
        }

        if (null !== $request->securityAccountPassword) {
            @$query['SecurityAccountPassword'] = $request->securityAccountPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetAccountPassword',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResetAccountPasswordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ResetAccountPasswordRequest
     *
     * @returns ResetAccountPasswordResponse
     *
     * @param ResetAccountPasswordRequest $request
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param request - RestartDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartDBInstanceResponse
     *
     * @param RestartDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartDBInstance',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RestartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RestartDBInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - RestartDBInstanceRequest
     *
     * @returns RestartDBInstanceResponse
     *
     * @param RestartDBInstanceRequest $request
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - SwitchDBInstanceHARequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchDBInstanceHAResponse
     *
     * @param SwitchDBInstanceHARequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHAWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        if (null !== $request->switchTimeMode) {
            @$query['SwitchTimeMode'] = $request->switchTimeMode;
        }

        if (null !== $request->targetPrimaryAzoneId) {
            @$query['TargetPrimaryAzoneId'] = $request->targetPrimaryAzoneId;
        }

        if (null !== $request->targetPrimaryRegionId) {
            @$query['TargetPrimaryRegionId'] = $request->targetPrimaryRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchDBInstanceHA',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SwitchDBInstanceHAResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SwitchDBInstanceHAResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - SwitchDBInstanceHARequest
     *
     * @returns SwitchDBInstanceHAResponse
     *
     * @param SwitchDBInstanceHARequest $request
     *
     * @return SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceHAWithOptions($request, $runtime);
    }

    /**
     * GDN主备切换.
     *
     * @param request - SwitchGdnMemberRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchGdnMemberRoleResponse
     *
     * @param SwitchGdnMemberRoleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SwitchGdnMemberRoleResponse
     */
    public function switchGdnMemberRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        if (null !== $request->taskTimeout) {
            @$query['TaskTimeout'] = $request->taskTimeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchGdnMemberRole',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SwitchGdnMemberRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SwitchGdnMemberRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * GDN主备切换.
     *
     * @param request - SwitchGdnMemberRoleRequest
     *
     * @returns SwitchGdnMemberRoleResponse
     *
     * @param SwitchGdnMemberRoleRequest $request
     *
     * @return SwitchGdnMemberRoleResponse
     */
    public function switchGdnMemberRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchGdnMemberRoleWithOptions($request, $runtime);
    }

    /**
     * 打标签接口.
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
            'action' => 'TagResources',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 打标签接口.
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
     * 删标签接口.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删标签接口.
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
     * @param request - UpdateBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBackupPolicyResponse
     *
     * @param UpdateBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateBackupPolicyResponse
     */
    public function updateBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPeriod) {
            @$query['BackupPeriod'] = $request->backupPeriod;
        }

        if (null !== $request->backupPlanBegin) {
            @$query['BackupPlanBegin'] = $request->backupPlanBegin;
        }

        if (null !== $request->backupSetRetention) {
            @$query['BackupSetRetention'] = $request->backupSetRetention;
        }

        if (null !== $request->backupType) {
            @$query['BackupType'] = $request->backupType;
        }

        if (null !== $request->backupWay) {
            @$query['BackupWay'] = $request->backupWay;
        }

        if (null !== $request->coldDataBackupInterval) {
            @$query['ColdDataBackupInterval'] = $request->coldDataBackupInterval;
        }

        if (null !== $request->coldDataBackupRetention) {
            @$query['ColdDataBackupRetention'] = $request->coldDataBackupRetention;
        }

        if (null !== $request->crossRegionDataBackupRetention) {
            @$query['CrossRegionDataBackupRetention'] = $request->crossRegionDataBackupRetention;
        }

        if (null !== $request->crossRegionLogBackupRetention) {
            @$query['CrossRegionLogBackupRetention'] = $request->crossRegionLogBackupRetention;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->destCrossRegion) {
            @$query['DestCrossRegion'] = $request->destCrossRegion;
        }

        if (null !== $request->forceCleanOnHighSpaceUsage) {
            @$query['ForceCleanOnHighSpaceUsage'] = $request->forceCleanOnHighSpaceUsage;
        }

        if (null !== $request->isCrossRegionDataBackupEnabled) {
            @$query['IsCrossRegionDataBackupEnabled'] = $request->isCrossRegionDataBackupEnabled;
        }

        if (null !== $request->isCrossRegionLogBackupEnabled) {
            @$query['IsCrossRegionLogBackupEnabled'] = $request->isCrossRegionLogBackupEnabled;
        }

        if (null !== $request->isEnabled) {
            @$query['IsEnabled'] = $request->isEnabled;
        }

        if (null !== $request->localLogRetention) {
            @$query['LocalLogRetention'] = $request->localLogRetention;
        }

        if (null !== $request->localLogRetentionNumber) {
            @$query['LocalLogRetentionNumber'] = $request->localLogRetentionNumber;
        }

        if (null !== $request->logLocalRetentionSpace) {
            @$query['LogLocalRetentionSpace'] = $request->logLocalRetentionSpace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->removeLogRetention) {
            @$query['RemoveLogRetention'] = $request->removeLogRetention;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateBackupPolicy',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateBackupPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateBackupPolicyRequest
     *
     * @returns UpdateBackupPolicyResponse
     *
     * @param UpdateBackupPolicyRequest $request
     *
     * @return UpdateBackupPolicyResponse
     */
    public function updateBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateDBInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDBInstanceSSLResponse
     *
     * @param UpdateDBInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDBInstanceSSLResponse
     */
    public function updateDBInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certCommonName) {
            @$query['CertCommonName'] = $request->certCommonName;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->enableSSL) {
            @$query['EnableSSL'] = $request->enableSSL;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDBInstanceSSL',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDBInstanceSSLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateDBInstanceSSLRequest
     *
     * @returns UpdateDBInstanceSSLResponse
     *
     * @param UpdateDBInstanceSSLRequest $request
     *
     * @return UpdateDBInstanceSSLResponse
     */
    public function updateDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateDBInstanceTDERequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDBInstanceTDEResponse
     *
     * @param UpdateDBInstanceTDERequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDBInstanceTDEResponse
     */
    public function updateDBInstanceTDEWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->encryptionKey) {
            @$query['EncryptionKey'] = $request->encryptionKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleArn) {
            @$query['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->TDEStatus) {
            @$query['TDEStatus'] = $request->TDEStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDBInstanceTDE',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDBInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDBInstanceTDEResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateDBInstanceTDERequest
     *
     * @returns UpdateDBInstanceTDEResponse
     *
     * @param UpdateDBInstanceTDERequest $request
     *
     * @return UpdateDBInstanceTDEResponse
     */
    public function updateDBInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * 扩缩容实例节点数.
     *
     * @param request - UpdatePolarDBXInstanceNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePolarDBXInstanceNodeResponse
     *
     * @param UpdatePolarDBXInstanceNodeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdatePolarDBXInstanceNodeResponse
     */
    public function updatePolarDBXInstanceNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addDNSpec) {
            @$query['AddDNSpec'] = $request->addDNSpec;
        }

        if (null !== $request->CNNodeCount) {
            @$query['CNNodeCount'] = $request->CNNodeCount;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->DNNodeCount) {
            @$query['DNNodeCount'] = $request->DNNodeCount;
        }

        if (null !== $request->dbInstanceNodeCount) {
            @$query['DbInstanceNodeCount'] = $request->dbInstanceNodeCount;
        }

        if (null !== $request->deleteDNIds) {
            @$query['DeleteDNIds'] = $request->deleteDNIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->storagePoolName) {
            @$query['StoragePoolName'] = $request->storagePoolName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePolarDBXInstanceNode',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePolarDBXInstanceNodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePolarDBXInstanceNodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 扩缩容实例节点数.
     *
     * @param request - UpdatePolarDBXInstanceNodeRequest
     *
     * @returns UpdatePolarDBXInstanceNodeResponse
     *
     * @param UpdatePolarDBXInstanceNodeRequest $request
     *
     * @return UpdatePolarDBXInstanceNodeResponse
     */
    public function updatePolarDBXInstanceNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolarDBXInstanceNodeWithOptions($request, $runtime);
    }

    /**
     * @param request - UpgradeDBInstanceKernelVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeDBInstanceKernelVersionResponse
     *
     * @param UpgradeDBInstanceKernelVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->minorVersion) {
            @$query['MinorVersion'] = $request->minorVersion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeDBInstanceKernelVersion',
            'version' => '2020-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeDBInstanceKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeDBInstanceKernelVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpgradeDBInstanceKernelVersionRequest
     *
     * @returns UpgradeDBInstanceKernelVersionResponse
     *
     * @param UpgradeDBInstanceKernelVersionRequest $request
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceKernelVersionWithOptions($request, $runtime);
    }
}
