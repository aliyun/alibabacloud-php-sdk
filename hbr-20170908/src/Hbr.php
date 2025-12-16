<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Hbr\V20170908\Models\AddContainerClusterRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\AddContainerClusterResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CancelBackupJobRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CancelBackupJobResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CancelRestoreJobRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CancelRestoreJobResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CheckRoleRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CheckRoleResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateBackupJobRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateBackupJobResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateBackupJobShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateBackupPlanRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateBackupPlanResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateBackupPlanShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateClientsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateClientsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateHanaBackupPlanRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateHanaBackupPlanResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateHanaInstanceRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateHanaInstanceResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateHanaRestoreRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateHanaRestoreResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyV2Request;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyV2Response;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyV2ShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateReplicationVaultRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateReplicationVaultResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateRestoreJobRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateRestoreJobResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateRestoreJobShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateTempFileUploadUrlRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateTempFileUploadUrlResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateVaultReplicationRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateVaultReplicationResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateVaultRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateVaultResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteAirEcsInstanceRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteAirEcsInstanceResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteAirEcsInstanceShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteBackupClientRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteBackupClientResourceRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteBackupClientResourceResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteBackupClientResourceShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteBackupClientResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteBackupPlanRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteBackupPlanResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteClientRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteClientResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteHanaBackupPlanRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteHanaBackupPlanResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteHanaInstanceRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteHanaInstanceResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeletePolicyBindingRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeletePolicyBindingResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeletePolicyBindingShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeletePolicyV2Request;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeletePolicyV2Response;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteUdmDiskRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteUdmDiskResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteUdmEcsInstanceRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteUdmEcsInstanceResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteVaultReplicationRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteVaultReplicationResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteVaultRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DeleteVaultResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupClientsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupClientsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupClientsShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2Request;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2Response;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeClientsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeClientsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeContainerClusterRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeContainerClusterResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeCrossAccountsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeCrossAccountsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupPlansRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupPlansResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupsAsyncRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupsAsyncResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupSettingRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupSettingResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaDatabasesRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaDatabasesResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaInstancesRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaInstancesResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaRestoresRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaRestoresResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaRetentionSettingRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaRetentionSettingResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeOtsTableSnapshotsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeOtsTableSnapshotsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2Request;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2Response;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRecoverableOtsInstancesRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRecoverableOtsInstancesResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2Request;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2Response;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeTaskRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeTaskResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeUdmSnapshotsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeUdmSnapshotsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeUdmSnapshotsShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultReplicationRegionsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultReplicationRegionsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DetachNasFileSystemRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DetachNasFileSystemResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DisableBackupPlanRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DisableBackupPlanResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DisableHanaBackupPlanRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DisableHanaBackupPlanResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\EnableBackupPlanRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\EnableBackupPlanResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\EnableHanaBackupPlanRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\EnableHanaBackupPlanResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\ExecuteBackupPlanRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\ExecuteBackupPlanResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\ExecutePolicyV2Request;
use AlibabaCloud\SDK\Hbr\V20170908\Models\ExecutePolicyV2Response;
use AlibabaCloud\SDK\Hbr\V20170908\Models\GenerateRamPolicyRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\GenerateRamPolicyResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\GetTempFileDownloadLinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\GetTempFileDownloadLinkResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\InstallBackupClientsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\InstallBackupClientsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\InstallBackupClientsShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\ListProtectedResourcesRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\ListProtectedResourcesResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\OpenHbrServiceResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\SearchHistoricalSnapshotsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\SearchHistoricalSnapshotsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\SearchHistoricalSnapshotsShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\StartHanaDatabaseAsyncRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\StartHanaDatabaseAsyncResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\StopHanaDatabaseAsyncRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\StopHanaDatabaseAsyncResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UninstallBackupClientsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UninstallBackupClientsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UninstallBackupClientsShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UninstallClientRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UninstallClientResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateBackupPlanRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateBackupPlanResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateBackupPlanShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateClientSettingsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateClientSettingsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateContainerClusterRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateContainerClusterResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateHanaBackupPlanRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateHanaBackupPlanResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateHanaBackupSettingRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateHanaBackupSettingResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateHanaInstanceRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateHanaInstanceResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateHanaRetentionSettingRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateHanaRetentionSettingResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyV2Request;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyV2Response;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyV2ShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateVaultRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateVaultResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpgradeBackupClientsRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpgradeBackupClientsResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpgradeBackupClientsShrinkRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpgradeClientRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpgradeClientResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Hbr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-2-pop' => 'hbr.aliyuncs.com',
            'cn-beijing-finance-pop' => 'hbr.aliyuncs.com',
            'cn-beijing-gov-1' => 'hbr.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'hbr.aliyuncs.com',
            'cn-edge-1' => 'hbr.aliyuncs.com',
            'cn-fujian' => 'hbr.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'hbr.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'hbr.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'hbr.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'hbr.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'hbr.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'hbr.aliyuncs.com',
            'cn-hangzhou-test-306' => 'hbr.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'hbr.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'hbr.aliyuncs.com',
            'cn-qingdao-nebula' => 'hbr.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'hbr.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'hbr.aliyuncs.com',
            'cn-shanghai-inner' => 'hbr.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'hbr.aliyuncs.com',
            'cn-shenzhen-inner' => 'hbr.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'hbr.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'hbr.aliyuncs.com',
            'cn-wuhan' => 'hbr.aliyuncs.com',
            'cn-yushanfang' => 'hbr.aliyuncs.com',
            'cn-zhangbei' => 'hbr.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'hbr.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'hbr.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'hbr.aliyuncs.com',
            'eu-west-1-oxs' => 'hbr.aliyuncs.com',
            'rus-west-1-pop' => 'hbr.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hbr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Registers a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - AddContainerClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddContainerClusterResponse
     *
     * @param AddContainerClusterRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddContainerClusterResponse
     */
    public function addContainerClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddContainerCluster',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddContainerClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers a Container Service for Kubernetes (ACK) cluster.
     *
     * @param request - AddContainerClusterRequest
     *
     * @returns AddContainerClusterResponse
     *
     * @param AddContainerClusterRequest $request
     *
     * @return AddContainerClusterResponse
     */
    public function addContainerCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addContainerClusterWithOptions($request, $runtime);
    }

    /**
     * Cancels a backup job.
     *
     * @param request - CancelBackupJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelBackupJobResponse
     *
     * @param CancelBackupJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelBackupJobResponse
     */
    public function cancelBackupJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelBackupJob',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelBackupJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a backup job.
     *
     * @param request - CancelBackupJobRequest
     *
     * @returns CancelBackupJobResponse
     *
     * @param CancelBackupJobRequest $request
     *
     * @return CancelBackupJobResponse
     */
    public function cancelBackupJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelBackupJobWithOptions($request, $runtime);
    }

    /**
     * Cancels a restore job.
     *
     * @param request - CancelRestoreJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelRestoreJobResponse
     *
     * @param CancelRestoreJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CancelRestoreJobResponse
     */
    public function cancelRestoreJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->restoreId) {
            @$query['RestoreId'] = $request->restoreId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelRestoreJob',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelRestoreJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a restore job.
     *
     * @param request - CancelRestoreJobRequest
     *
     * @returns CancelRestoreJobResponse
     *
     * @param CancelRestoreJobRequest $request
     *
     * @return CancelRestoreJobResponse
     */
    public function cancelRestoreJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRestoreJobWithOptions($request, $runtime);
    }

    /**
     * Changes the resource group to which an instance belongs.
     *
     * @remarks
     *   In the Cloud Backup console, you can use resource groups to manage resources such as backup vaults, Cloud Backup clients, and SAP HANA instances.
     * *   A resource is a cloud service entity that you create on Alibaba Cloud, such as an Elastic Compute Service (ECS) instance, a backup vault, or an SAP HANA instance.
     * *   You can sort resources owned by your Alibaba Cloud account into various resource groups. Resource groups facilitate resource management among multiple projects or applications within your Alibaba Cloud account and simplify permission management.
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
        $body = [];
        if (null !== $request->newResourceGroupId) {
            @$body['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the resource group to which an instance belongs.
     *
     * @remarks
     *   In the Cloud Backup console, you can use resource groups to manage resources such as backup vaults, Cloud Backup clients, and SAP HANA instances.
     * *   A resource is a cloud service entity that you create on Alibaba Cloud, such as an Elastic Compute Service (ECS) instance, a backup vault, or an SAP HANA instance.
     * *   You can sort resources owned by your Alibaba Cloud account into various resource groups. Resource groups facilitate resource management among multiple projects or applications within your Alibaba Cloud account and simplify permission management.
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
     * Checks whether the user has permissions to access the current resource or page.
     *
     * @param request - CheckRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckRoleResponse
     *
     * @param CheckRoleRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CheckRoleResponse
     */
    public function checkRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkRoleType) {
            @$query['CheckRoleType'] = $request->checkRoleType;
        }

        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckRole',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether the user has permissions to access the current resource or page.
     *
     * @param request - CheckRoleRequest
     *
     * @returns CheckRoleResponse
     *
     * @param CheckRoleRequest $request
     *
     * @return CheckRoleResponse
     */
    public function checkRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkRoleWithOptions($request, $runtime);
    }

    /**
     * Creates a backup job.
     *
     * @param tmpReq - CreateBackupJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackupJobResponse
     *
     * @param CreateBackupJobRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateBackupJobResponse
     */
    public function createBackupJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateBackupJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->detail) {
            $request->detailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->detail, 'Detail', 'json');
        }

        $query = [];
        if (null !== $request->backupType) {
            @$query['BackupType'] = $request->backupType;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->containerClusterId) {
            @$query['ContainerClusterId'] = $request->containerClusterId;
        }

        if (null !== $request->containerResources) {
            @$query['ContainerResources'] = $request->containerResources;
        }

        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        if (null !== $request->detailShrink) {
            @$query['Detail'] = $request->detailShrink;
        }

        if (null !== $request->exclude) {
            @$query['Exclude'] = $request->exclude;
        }

        if (null !== $request->include) {
            @$query['Include'] = $request->include;
        }

        if (null !== $request->initiatedByAck) {
            @$query['InitiatedByAck'] = $request->initiatedByAck;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->options) {
            @$query['Options'] = $request->options;
        }

        if (null !== $request->retention) {
            @$query['Retention'] = $request->retention;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->speedLimit) {
            @$query['SpeedLimit'] = $request->speedLimit;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBackupJob',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBackupJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a backup job.
     *
     * @param request - CreateBackupJobRequest
     *
     * @returns CreateBackupJobResponse
     *
     * @param CreateBackupJobRequest $request
     *
     * @return CreateBackupJobResponse
     */
    public function createBackupJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupJobWithOptions($request, $runtime);
    }

    /**
     * Create a backup plan.
     *
     * @remarks
     * - A backup plan associates data sources with backup policies and other necessary information for backups. After the execution of a backup plan, it generates a backup task that records the progress and results of the backup. If the backup task is successful, a backup snapshot is created. You can use the backup snapshot to create a recovery task.
     * - A backup plan supports only one type of data source.
     * - A backup plan supports only a single fixed interval backup cycle strategy.
     * - A backup plan can back up to only one backup vault.
     *
     * @param tmpReq - CreateBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackupPlanResponse
     *
     * @param CreateBackupPlanRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlanWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateBackupPlanShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destDataSourceDetail) {
            $request->destDataSourceDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destDataSourceDetail, 'DestDataSourceDetail', 'json');
        }

        if (null !== $tmpReq->detail) {
            $request->detailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->detail, 'Detail', 'json');
        }

        if (null !== $tmpReq->otsDetail) {
            $request->otsDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->otsDetail, 'OtsDetail', 'json');
        }

        $query = [];
        if (null !== $request->backupType) {
            @$query['BackupType'] = $request->backupType;
        }

        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->changeListPath) {
            @$query['ChangeListPath'] = $request->changeListPath;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->createTime) {
            @$query['CreateTime'] = $request->createTime;
        }

        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        if (null !== $request->destDataSourceDetailShrink) {
            @$query['DestDataSourceDetail'] = $request->destDataSourceDetailShrink;
        }

        if (null !== $request->destDataSourceId) {
            @$query['DestDataSourceId'] = $request->destDataSourceId;
        }

        if (null !== $request->destSourceType) {
            @$query['DestSourceType'] = $request->destSourceType;
        }

        if (null !== $request->detailShrink) {
            @$query['Detail'] = $request->detailShrink;
        }

        if (null !== $request->disabled) {
            @$query['Disabled'] = $request->disabled;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->keepLatestSnapshots) {
            @$query['KeepLatestSnapshots'] = $request->keepLatestSnapshots;
        }

        if (null !== $request->planName) {
            @$query['PlanName'] = $request->planName;
        }

        if (null !== $request->prefix) {
            @$query['Prefix'] = $request->prefix;
        }

        if (null !== $request->retention) {
            @$query['Retention'] = $request->retention;
        }

        if (null !== $request->schedule) {
            @$query['Schedule'] = $request->schedule;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->udmRegionId) {
            @$query['UdmRegionId'] = $request->udmRegionId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $body = [];
        if (null !== $request->dataSourceId) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->exclude) {
            @$body['Exclude'] = $request->exclude;
        }

        if (null !== $request->include) {
            @$body['Include'] = $request->include;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        if (null !== $request->otsDetailShrink) {
            @$body['OtsDetail'] = $request->otsDetailShrink;
        }

        if (null !== $request->path) {
            @$body['Path'] = $request->path;
        }

        if (null !== $request->rule) {
            @$body['Rule'] = $request->rule;
        }

        if (null !== $request->speedLimit) {
            @$body['SpeedLimit'] = $request->speedLimit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBackupPlan',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a backup plan.
     *
     * @remarks
     * - A backup plan associates data sources with backup policies and other necessary information for backups. After the execution of a backup plan, it generates a backup task that records the progress and results of the backup. If the backup task is successful, a backup snapshot is created. You can use the backup snapshot to create a recovery task.
     * - A backup plan supports only one type of data source.
     * - A backup plan supports only a single fixed interval backup cycle strategy.
     * - A backup plan can back up to only one backup vault.
     *
     * @param request - CreateBackupPlanRequest
     *
     * @returns CreateBackupPlanResponse
     *
     * @param CreateBackupPlanRequest $request
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Installs one or more Cloud Backup clients on specified instances.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of Cloud Backup. For more information, see [Billing methods and billable items](https://help.aliyun.com/document_detail/89062.html).
     *
     * @param request - CreateClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClientsResponse
     *
     * @param CreateClientsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClientsResponse
     */
    public function createClientsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertSetting) {
            @$query['AlertSetting'] = $request->alertSetting;
        }

        if (null !== $request->clientInfo) {
            @$query['ClientInfo'] = $request->clientInfo;
        }

        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->useHttps) {
            @$query['UseHttps'] = $request->useHttps;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateClients',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs one or more Cloud Backup clients on specified instances.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of Cloud Backup. For more information, see [Billing methods and billable items](https://help.aliyun.com/document_detail/89062.html).
     *
     * @param request - CreateClientsRequest
     *
     * @returns CreateClientsResponse
     *
     * @param CreateClientsRequest $request
     *
     * @return CreateClientsResponse
     */
    public function createClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientsWithOptions($request, $runtime);
    }

    /**
     * Creates a backup plan for an SAP HANA instance.
     *
     * @remarks
     *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   You can specify only one type of data source in a backup plan.
     * *   You can specify only one interval as a backup cycle in a backup plan.
     * *   Each backup plan allows you to back up data to only one backup vault.
     *
     * @param request - CreateHanaBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHanaBackupPlanResponse
     *
     * @param CreateHanaBackupPlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateHanaBackupPlanResponse
     */
    public function createHanaBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPrefix) {
            @$query['BackupPrefix'] = $request->backupPrefix;
        }

        if (null !== $request->backupType) {
            @$query['BackupType'] = $request->backupType;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->planName) {
            @$query['PlanName'] = $request->planName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->schedule) {
            @$query['Schedule'] = $request->schedule;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHanaBackupPlan',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a backup plan for an SAP HANA instance.
     *
     * @remarks
     *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   You can specify only one type of data source in a backup plan.
     * *   You can specify only one interval as a backup cycle in a backup plan.
     * *   Each backup plan allows you to back up data to only one backup vault.
     *
     * @param request - CreateHanaBackupPlanRequest
     *
     * @returns CreateHanaBackupPlanResponse
     *
     * @param CreateHanaBackupPlanRequest $request
     *
     * @return CreateHanaBackupPlanResponse
     */
    public function createHanaBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHanaBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Registers an SAP HANA instance.
     *
     * @remarks
     * To register an SAP HANA instance, you must configure the SAP HANA connection information. After the SAP HANA instance is registered, Cloud Backup installs a backup client on the node of the SAP HANA instance.
     *
     * @param request - CreateHanaInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHanaInstanceResponse
     *
     * @param CreateHanaInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateHanaInstanceResponse
     */
    public function createHanaInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertSetting) {
            @$query['AlertSetting'] = $request->alertSetting;
        }

        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        if (null !== $request->ecsInstanceId) {
            @$query['EcsInstanceId'] = $request->ecsInstanceId;
        }

        if (null !== $request->hanaName) {
            @$query['HanaName'] = $request->hanaName;
        }

        if (null !== $request->host) {
            @$query['Host'] = $request->host;
        }

        if (null !== $request->instanceNumber) {
            @$query['InstanceNumber'] = $request->instanceNumber;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sid) {
            @$query['Sid'] = $request->sid;
        }

        if (null !== $request->useSsl) {
            @$query['UseSsl'] = $request->useSsl;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->validateCertificate) {
            @$query['ValidateCertificate'] = $request->validateCertificate;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHanaInstance',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHanaInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers an SAP HANA instance.
     *
     * @remarks
     * To register an SAP HANA instance, you must configure the SAP HANA connection information. After the SAP HANA instance is registered, Cloud Backup installs a backup client on the node of the SAP HANA instance.
     *
     * @param request - CreateHanaInstanceRequest
     *
     * @returns CreateHanaInstanceResponse
     *
     * @param CreateHanaInstanceRequest $request
     *
     * @return CreateHanaInstanceResponse
     */
    public function createHanaInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHanaInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a restore job for an SAP HANA database.
     *
     * @remarks
     * If you call this operation to restore a database, the database is restored to a specified state. Proceed with caution. For more information, see [Restore databases to an SAP HANA instance](https://help.aliyun.com/document_detail/101178.html).
     *
     * @param request - CreateHanaRestoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHanaRestoreResponse
     *
     * @param CreateHanaRestoreRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateHanaRestoreResponse
     */
    public function createHanaRestoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->backupPrefix) {
            @$query['BackupPrefix'] = $request->backupPrefix;
        }

        if (null !== $request->checkAccess) {
            @$query['CheckAccess'] = $request->checkAccess;
        }

        if (null !== $request->clearLog) {
            @$query['ClearLog'] = $request->clearLog;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->logPosition) {
            @$query['LogPosition'] = $request->logPosition;
        }

        if (null !== $request->masterClientId) {
            @$query['MasterClientId'] = $request->masterClientId;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->recoveryPointInTime) {
            @$query['RecoveryPointInTime'] = $request->recoveryPointInTime;
        }

        if (null !== $request->sidAdmin) {
            @$query['SidAdmin'] = $request->sidAdmin;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceClusterId) {
            @$query['SourceClusterId'] = $request->sourceClusterId;
        }

        if (null !== $request->systemCopy) {
            @$query['SystemCopy'] = $request->systemCopy;
        }

        if (null !== $request->useCatalog) {
            @$query['UseCatalog'] = $request->useCatalog;
        }

        if (null !== $request->useDelta) {
            @$query['UseDelta'] = $request->useDelta;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        if (null !== $request->volumeId) {
            @$query['VolumeId'] = $request->volumeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHanaRestore',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHanaRestoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a restore job for an SAP HANA database.
     *
     * @remarks
     * If you call this operation to restore a database, the database is restored to a specified state. Proceed with caution. For more information, see [Restore databases to an SAP HANA instance](https://help.aliyun.com/document_detail/101178.html).
     *
     * @param request - CreateHanaRestoreRequest
     *
     * @returns CreateHanaRestoreResponse
     *
     * @param CreateHanaRestoreRequest $request
     *
     * @return CreateHanaRestoreResponse
     */
    public function createHanaRestore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHanaRestoreWithOptions($request, $runtime);
    }

    /**
     * Binds one or more data sources to a backup policy.
     *
     * @remarks
     *   You can bind data sources to only one policy in each request.
     * *   Elastic Compute Service (ECS) instances can be bound to only one policy.
     *
     * @param tmpReq - CreatePolicyBindingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyBindingsResponse
     *
     * @param CreatePolicyBindingsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePolicyBindingsResponse
     */
    public function createPolicyBindingsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePolicyBindingsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->policyBindingList) {
            $request->policyBindingListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policyBindingList, 'PolicyBindingList', 'json');
        }

        $query = [];
        if (null !== $request->policyBindingListShrink) {
            @$query['PolicyBindingList'] = $request->policyBindingListShrink;
        }

        $body = [];
        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePolicyBindings',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds one or more data sources to a backup policy.
     *
     * @remarks
     *   You can bind data sources to only one policy in each request.
     * *   Elastic Compute Service (ECS) instances can be bound to only one policy.
     *
     * @param request - CreatePolicyBindingsRequest
     *
     * @returns CreatePolicyBindingsResponse
     *
     * @param CreatePolicyBindingsRequest $request
     *
     * @return CreatePolicyBindingsResponse
     */
    public function createPolicyBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyBindingsWithOptions($request, $runtime);
    }

    /**
     * Creates a backup policy.
     *
     * @remarks
     * A backup policy records the information required for backup. After you execute a backup policy, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   A backup policy supports multiple data sources. The data sources can be only Elastic Compute Service (ECS) instances.
     * *   You can specify only one interval as a backup cycle in a backup policy.
     * *   Each backup policy allows you to back up data to only one backup vault.
     *
     * @param tmpReq - CreatePolicyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyV2Response
     *
     * @param CreatePolicyV2Request $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePolicyV2Response
     */
    public function createPolicyV2WithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePolicyV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $body = [];
        if (null !== $request->policyDescription) {
            @$body['PolicyDescription'] = $request->policyDescription;
        }

        if (null !== $request->policyName) {
            @$body['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$body['PolicyType'] = $request->policyType;
        }

        if (null !== $request->rulesShrink) {
            @$body['Rules'] = $request->rulesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePolicyV2',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a backup policy.
     *
     * @remarks
     * A backup policy records the information required for backup. After you execute a backup policy, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   A backup policy supports multiple data sources. The data sources can be only Elastic Compute Service (ECS) instances.
     * *   You can specify only one interval as a backup cycle in a backup policy.
     * *   Each backup policy allows you to back up data to only one backup vault.
     *
     * @param request - CreatePolicyV2Request
     *
     * @returns CreatePolicyV2Response
     *
     * @param CreatePolicyV2Request $request
     *
     * @return CreatePolicyV2Response
     */
    public function createPolicyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyV2WithOptions($request, $runtime);
    }

    /**
     * Creates a mirror vault.
     *
     * @remarks
     * After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state.Call this operation in the region where the mirror vault resides, which is specified by the VaultRegionId parameter.
     *
     * @param request - CreateReplicationVaultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateReplicationVaultResponse
     *
     * @param CreateReplicationVaultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateReplicationVaultResponse
     */
    public function createReplicationVaultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->encryptType) {
            @$query['EncryptType'] = $request->encryptType;
        }

        if (null !== $request->kmsKeyId) {
            @$query['KmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->redundancyType) {
            @$query['RedundancyType'] = $request->redundancyType;
        }

        if (null !== $request->replicationSourceRegionId) {
            @$query['ReplicationSourceRegionId'] = $request->replicationSourceRegionId;
        }

        if (null !== $request->replicationSourceVaultId) {
            @$query['ReplicationSourceVaultId'] = $request->replicationSourceVaultId;
        }

        if (null !== $request->vaultName) {
            @$query['VaultName'] = $request->vaultName;
        }

        if (null !== $request->vaultRegionId) {
            @$query['VaultRegionId'] = $request->vaultRegionId;
        }

        if (null !== $request->vaultStorageClass) {
            @$query['VaultStorageClass'] = $request->vaultStorageClass;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateReplicationVault',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateReplicationVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a mirror vault.
     *
     * @remarks
     * After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state.Call this operation in the region where the mirror vault resides, which is specified by the VaultRegionId parameter.
     *
     * @param request - CreateReplicationVaultRequest
     *
     * @returns CreateReplicationVaultResponse
     *
     * @param CreateReplicationVaultRequest $request
     *
     * @return CreateReplicationVaultResponse
     */
    public function createReplicationVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReplicationVaultWithOptions($request, $runtime);
    }

    /**
     * Create a restore job.
     *
     * @remarks
     * - Create a restore job based on the selected snapshot and the restore destination.
     * - Currently, the data source type must match the restore destination data source type.
     *
     * @param tmpReq - CreateRestoreJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRestoreJobResponse
     *
     * @param CreateRestoreJobRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRestoreJobResponse
     */
    public function createRestoreJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateRestoreJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->failbackDetail) {
            $request->failbackDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->failbackDetail, 'FailbackDetail', 'json');
        }

        if (null !== $tmpReq->otsDetail) {
            $request->otsDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->otsDetail, 'OtsDetail', 'json');
        }

        if (null !== $tmpReq->udmDetail) {
            $request->udmDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->udmDetail, 'UdmDetail', 'json');
        }

        $query = [];
        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->failbackDetailShrink) {
            @$query['FailbackDetail'] = $request->failbackDetailShrink;
        }

        if (null !== $request->initiatedByAck) {
            @$query['InitiatedByAck'] = $request->initiatedByAck;
        }

        if (null !== $request->options) {
            @$query['Options'] = $request->options;
        }

        if (null !== $request->restoreType) {
            @$query['RestoreType'] = $request->restoreType;
        }

        if (null !== $request->snapshotHash) {
            @$query['SnapshotHash'] = $request->snapshotHash;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->targetBucket) {
            @$query['TargetBucket'] = $request->targetBucket;
        }

        if (null !== $request->targetContainer) {
            @$query['TargetContainer'] = $request->targetContainer;
        }

        if (null !== $request->targetContainerClusterId) {
            @$query['TargetContainerClusterId'] = $request->targetContainerClusterId;
        }

        if (null !== $request->targetCreateTime) {
            @$query['TargetCreateTime'] = $request->targetCreateTime;
        }

        if (null !== $request->targetFileSystemId) {
            @$query['TargetFileSystemId'] = $request->targetFileSystemId;
        }

        if (null !== $request->targetInstanceName) {
            @$query['TargetInstanceName'] = $request->targetInstanceName;
        }

        if (null !== $request->targetPrefix) {
            @$query['TargetPrefix'] = $request->targetPrefix;
        }

        if (null !== $request->targetTableName) {
            @$query['TargetTableName'] = $request->targetTableName;
        }

        if (null !== $request->targetTime) {
            @$query['TargetTime'] = $request->targetTime;
        }

        if (null !== $request->udmDetailShrink) {
            @$query['UdmDetail'] = $request->udmDetailShrink;
        }

        if (null !== $request->udmRegionId) {
            @$query['UdmRegionId'] = $request->udmRegionId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $body = [];
        if (null !== $request->exclude) {
            @$body['Exclude'] = $request->exclude;
        }

        if (null !== $request->include) {
            @$body['Include'] = $request->include;
        }

        if (null !== $request->otsDetailShrink) {
            @$body['OtsDetail'] = $request->otsDetailShrink;
        }

        if (null !== $request->targetInstanceId) {
            @$body['TargetInstanceId'] = $request->targetInstanceId;
        }

        if (null !== $request->targetPath) {
            @$body['TargetPath'] = $request->targetPath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRestoreJob',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRestoreJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a restore job.
     *
     * @remarks
     * - Create a restore job based on the selected snapshot and the restore destination.
     * - Currently, the data source type must match the restore destination data source type.
     *
     * @param request - CreateRestoreJobRequest
     *
     * @returns CreateRestoreJobResponse
     *
     * @param CreateRestoreJobRequest $request
     *
     * @return CreateRestoreJobResponse
     */
    public function createRestoreJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRestoreJobWithOptions($request, $runtime);
    }

    /**
     * Generates the parameters and signature required for a file upload URL.
     *
     * @remarks
     * 1.  You can directly upload a file to Object Storage Service (OSS) by using a form based on the returned value of this operation.
     * 2.  For more information about how to upload a file to OSS by using a form, see OSS documentation.
     * 3.  The system periodically deletes files that are uploaded to OSS.
     *
     * @param request - CreateTempFileUploadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTempFileUploadUrlResponse
     *
     * @param CreateTempFileUploadUrlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateTempFileUploadUrlResponse
     */
    public function createTempFileUploadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTempFileUploadUrl',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTempFileUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates the parameters and signature required for a file upload URL.
     *
     * @remarks
     * 1.  You can directly upload a file to Object Storage Service (OSS) by using a form based on the returned value of this operation.
     * 2.  For more information about how to upload a file to OSS by using a form, see OSS documentation.
     * 3.  The system periodically deletes files that are uploaded to OSS.
     *
     * @param request - CreateTempFileUploadUrlRequest
     *
     * @returns CreateTempFileUploadUrlResponse
     *
     * @param CreateTempFileUploadUrlRequest $request
     *
     * @return CreateTempFileUploadUrlResponse
     */
    public function createTempFileUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTempFileUploadUrlWithOptions($request, $runtime);
    }

    /**
     * Creates a backup vault.
     *
     * @remarks
     *   Each Alibaba Cloud account can create up to 100 backup vaults.
     * *   After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state. A backup job can use a backup vault to store backup data only if the backup vault is in the CREATED state.
     *     **
     *     **Note** Before you call this operation, make sure that you fully understand the billing of Cloud Backup.
     *
     * @param request - CreateVaultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVaultResponse
     *
     * @param CreateVaultRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateVaultResponse
     */
    public function createVaultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->encryptType) {
            @$query['EncryptType'] = $request->encryptType;
        }

        if (null !== $request->kmsKeyId) {
            @$query['KmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->replication) {
            @$query['Replication'] = $request->replication;
        }

        if (null !== $request->vaultName) {
            @$query['VaultName'] = $request->vaultName;
        }

        if (null !== $request->vaultRegionId) {
            @$query['VaultRegionId'] = $request->vaultRegionId;
        }

        if (null !== $request->vaultStorageClass) {
            @$query['VaultStorageClass'] = $request->vaultStorageClass;
        }

        if (null !== $request->vaultType) {
            @$query['VaultType'] = $request->vaultType;
        }

        if (null !== $request->wormEnabled) {
            @$query['WormEnabled'] = $request->wormEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVault',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a backup vault.
     *
     * @remarks
     *   Each Alibaba Cloud account can create up to 100 backup vaults.
     * *   After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state. A backup job can use a backup vault to store backup data only if the backup vault is in the CREATED state.
     *     **
     *     **Note** Before you call this operation, make sure that you fully understand the billing of Cloud Backup.
     *
     * @param request - CreateVaultRequest
     *
     * @returns CreateVaultResponse
     *
     * @param CreateVaultRequest $request
     *
     * @return CreateVaultResponse
     */
    public function createVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVaultWithOptions($request, $runtime);
    }

    /**
     * 创建备份库复制.
     *
     * @param request - CreateVaultReplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVaultReplicationResponse
     *
     * @param CreateVaultReplicationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVaultReplicationResponse
     */
    public function createVaultReplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->replicationSourceRegionId) {
            @$query['ReplicationSourceRegionId'] = $request->replicationSourceRegionId;
        }

        if (null !== $request->replicationSourceVaultId) {
            @$query['ReplicationSourceVaultId'] = $request->replicationSourceVaultId;
        }

        if (null !== $request->replicationTargetVaultId) {
            @$query['ReplicationTargetVaultId'] = $request->replicationTargetVaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVaultReplication',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVaultReplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建备份库复制.
     *
     * @param request - CreateVaultReplicationRequest
     *
     * @returns CreateVaultReplicationResponse
     *
     * @param CreateVaultReplicationRequest $request
     *
     * @return CreateVaultReplicationResponse
     */
    public function createVaultReplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVaultReplicationWithOptions($request, $runtime);
    }

    /**
     * Removes the Elastic Compute Service (ECS) instance that is used for restoration only in ECS Backup Essential Edition.
     *
     * @param tmpReq - DeleteAirEcsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAirEcsInstanceResponse
     *
     * @param DeleteAirEcsInstanceRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteAirEcsInstanceResponse
     */
    public function deleteAirEcsInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAirEcsInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->uninstallClientSourceTypes) {
            $request->uninstallClientSourceTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->uninstallClientSourceTypes, 'UninstallClientSourceTypes', 'json');
        }

        $query = [];
        if (null !== $request->ecsInstanceId) {
            @$query['EcsInstanceId'] = $request->ecsInstanceId;
        }

        if (null !== $request->uninstallClientSourceTypesShrink) {
            @$query['UninstallClientSourceTypes'] = $request->uninstallClientSourceTypesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAirEcsInstance',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAirEcsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes the Elastic Compute Service (ECS) instance that is used for restoration only in ECS Backup Essential Edition.
     *
     * @param request - DeleteAirEcsInstanceRequest
     *
     * @returns DeleteAirEcsInstanceResponse
     *
     * @param DeleteAirEcsInstanceRequest $request
     *
     * @return DeleteAirEcsInstanceResponse
     */
    public function deleteAirEcsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAirEcsInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes a Cloud Backup client.
     *
     * @remarks
     *   You cannot delete the active Cloud Backup clients that receive heartbeat packets within 1 hour. You can call the UninstallBackupClients operation to uninstall a Cloud Backup client. Then, the client becomes inactive.
     * *   When you perform this operation, resources that are associated with the client are also deleted, including:
     *     *   Backup plans
     *     *   Backup jobs
     *     *   Snapshots
     *
     * @param request - DeleteBackupClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupClientResponse
     *
     * @param DeleteBackupClientRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteBackupClientResponse
     */
    public function deleteBackupClientWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackupClient',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBackupClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Cloud Backup client.
     *
     * @remarks
     *   You cannot delete the active Cloud Backup clients that receive heartbeat packets within 1 hour. You can call the UninstallBackupClients operation to uninstall a Cloud Backup client. Then, the client becomes inactive.
     * *   When you perform this operation, resources that are associated with the client are also deleted, including:
     *     *   Backup plans
     *     *   Backup jobs
     *     *   Snapshots
     *
     * @param request - DeleteBackupClientRequest
     *
     * @returns DeleteBackupClientResponse
     *
     * @param DeleteBackupClientRequest $request
     *
     * @return DeleteBackupClientResponse
     */
    public function deleteBackupClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupClientWithOptions($request, $runtime);
    }

    /**
     * Deletes the resources that are related to one or more HBR clients.
     *
     * @remarks
     * This operation deletes only the resources that are related to HBR clients. The resources include backup plans, backup jobs, and backup snapshots. The operation does not delete HBR clients.
     *
     * @param tmpReq - DeleteBackupClientResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupClientResourceResponse
     *
     * @param DeleteBackupClientResourceRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteBackupClientResourceResponse
     */
    public function deleteBackupClientResourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteBackupClientResourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clientIds) {
            $request->clientIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clientIds, 'ClientIds', 'json');
        }

        $query = [];
        if (null !== $request->clientIdsShrink) {
            @$query['ClientIds'] = $request->clientIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackupClientResource',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBackupClientResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the resources that are related to one or more HBR clients.
     *
     * @remarks
     * This operation deletes only the resources that are related to HBR clients. The resources include backup plans, backup jobs, and backup snapshots. The operation does not delete HBR clients.
     *
     * @param request - DeleteBackupClientResourceRequest
     *
     * @returns DeleteBackupClientResourceResponse
     *
     * @param DeleteBackupClientResourceRequest $request
     *
     * @return DeleteBackupClientResourceResponse
     */
    public function deleteBackupClientResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupClientResourceWithOptions($request, $runtime);
    }

    /**
     * Deletes a backup plan.
     *
     * @remarks
     *   If you delete a backup plan, the backup jobs are also deleted.
     * *   If you delete a backup plan, the created snapshot files are not deleted.
     *
     * @param request - DeleteBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupPlanResponse
     *
     * @param DeleteBackupPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteBackupPlanResponse
     */
    public function deleteBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->requireNoRunningJobs) {
            @$query['RequireNoRunningJobs'] = $request->requireNoRunningJobs;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackupPlan',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a backup plan.
     *
     * @remarks
     *   If you delete a backup plan, the backup jobs are also deleted.
     * *   If you delete a backup plan, the created snapshot files are not deleted.
     *
     * @param request - DeleteBackupPlanRequest
     *
     * @returns DeleteBackupPlanResponse
     *
     * @param DeleteBackupPlanRequest $request
     *
     * @return DeleteBackupPlanResponse
     */
    public function deleteBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClientResponse
     *
     * @param DeleteClientRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteClientResponse
     */
    public function deleteClientWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteClient',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteClientRequest
     *
     * @returns DeleteClientResponse
     *
     * @param DeleteClientRequest $request
     *
     * @return DeleteClientResponse
     */
    public function deleteClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientWithOptions($request, $runtime);
    }

    /**
     * Deletes an SAP HANA backup plan.
     *
     * @param request - DeleteHanaBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHanaBackupPlanResponse
     *
     * @param DeleteHanaBackupPlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteHanaBackupPlanResponse
     */
    public function deleteHanaBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHanaBackupPlan',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an SAP HANA backup plan.
     *
     * @param request - DeleteHanaBackupPlanRequest
     *
     * @returns DeleteHanaBackupPlanResponse
     *
     * @param DeleteHanaBackupPlanRequest $request
     *
     * @return DeleteHanaBackupPlanResponse
     */
    public function deleteHanaBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHanaBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Deletes an SAP HANA instance.
     *
     * @remarks
     * If you delete an SAP HANA instance, the existing backup data is also deleted and the running backup and restore jobs fail to be completed. Before you delete the SAP HANA instance, make sure that you no longer need the backup data of the instance and no backup or restore jobs are running for the instance. To delete an SAP HANA instance, you must specify the security identifier (SID) of the instance. The SID is three characters in length and starts with a letter. For more information, see [How to find sid user and instance number of HANA db?](https://answers.sap.com/questions/555192/how-to-find-sid-user-and-instance-number-of-hana-d.html?)
     *
     * @param request - DeleteHanaInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHanaInstanceResponse
     *
     * @param DeleteHanaInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteHanaInstanceResponse
     */
    public function deleteHanaInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sid) {
            @$query['Sid'] = $request->sid;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHanaInstance',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHanaInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an SAP HANA instance.
     *
     * @remarks
     * If you delete an SAP HANA instance, the existing backup data is also deleted and the running backup and restore jobs fail to be completed. Before you delete the SAP HANA instance, make sure that you no longer need the backup data of the instance and no backup or restore jobs are running for the instance. To delete an SAP HANA instance, you must specify the security identifier (SID) of the instance. The SID is three characters in length and starts with a letter. For more information, see [How to find sid user and instance number of HANA db?](https://answers.sap.com/questions/555192/how-to-find-sid-user-and-instance-number-of-hana-d.html?)
     *
     * @param request - DeleteHanaInstanceRequest
     *
     * @returns DeleteHanaInstanceResponse
     *
     * @param DeleteHanaInstanceRequest $request
     *
     * @return DeleteHanaInstanceResponse
     */
    public function deleteHanaInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHanaInstanceWithOptions($request, $runtime);
    }

    /**
     * Disassociates one or more data sources from a backup policy. After you disassociate the data sources from the backup policy, the backup policy no longer protects the data sources. Proceed with caution.
     *
     * @param tmpReq - DeletePolicyBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyBindingResponse
     *
     * @param DeletePolicyBindingRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePolicyBindingResponse
     */
    public function deletePolicyBindingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeletePolicyBindingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataSourceIds) {
            $request->dataSourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataSourceIds, 'DataSourceIds', 'json');
        }

        $query = [];
        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $body = [];
        if (null !== $request->dataSourceIdsShrink) {
            @$body['DataSourceIds'] = $request->dataSourceIdsShrink;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePolicyBinding',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates one or more data sources from a backup policy. After you disassociate the data sources from the backup policy, the backup policy no longer protects the data sources. Proceed with caution.
     *
     * @param request - DeletePolicyBindingRequest
     *
     * @returns DeletePolicyBindingResponse
     *
     * @param DeletePolicyBindingRequest $request
     *
     * @return DeletePolicyBindingResponse
     */
    public function deletePolicyBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyBindingWithOptions($request, $runtime);
    }

    /**
     * Deletes a backup policy.
     *
     * @remarks
     * If you delete a backup policy, the backup policy is disassociated with all data sources. Proceed with caution.
     *
     * @param request - DeletePolicyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyV2Response
     *
     * @param DeletePolicyV2Request $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePolicyV2Response
     */
    public function deletePolicyV2WithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePolicyV2',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a backup policy.
     *
     * @remarks
     * If you delete a backup policy, the backup policy is disassociated with all data sources. Proceed with caution.
     *
     * @param request - DeletePolicyV2Request
     *
     * @returns DeletePolicyV2Response
     *
     * @param DeletePolicyV2Request $request
     *
     * @return DeletePolicyV2Response
     */
    public function deletePolicyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyV2WithOptions($request, $runtime);
    }

    /**
     * Deletes a backup snapshot.
     *
     * @param request - DeleteSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSnapshotResponse
     *
     * @param DeleteSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSnapshot',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a backup snapshot.
     *
     * @param request - DeleteSnapshotRequest
     *
     * @returns DeleteSnapshotResponse
     *
     * @param DeleteSnapshotRequest $request
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * Cancels a protected disk.
     *
     * @param request - DeleteUdmDiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUdmDiskResponse
     *
     * @param DeleteUdmDiskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteUdmDiskResponse
     */
    public function deleteUdmDiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUdmDisk',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUdmDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a protected disk.
     *
     * @param request - DeleteUdmDiskRequest
     *
     * @returns DeleteUdmDiskResponse
     *
     * @param DeleteUdmDiskRequest $request
     *
     * @return DeleteUdmDiskResponse
     */
    public function deleteUdmDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUdmDiskWithOptions($request, $runtime);
    }

    /**
     * Stops protection for Elastic Compute Service (ECS) instance backup.
     *
     * @param request - DeleteUdmEcsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUdmEcsInstanceResponse
     *
     * @param DeleteUdmEcsInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteUdmEcsInstanceResponse
     */
    public function deleteUdmEcsInstanceWithOptions($request, $runtime)
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
            'action' => 'DeleteUdmEcsInstance',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUdmEcsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops protection for Elastic Compute Service (ECS) instance backup.
     *
     * @param request - DeleteUdmEcsInstanceRequest
     *
     * @returns DeleteUdmEcsInstanceResponse
     *
     * @param DeleteUdmEcsInstanceRequest $request
     *
     * @return DeleteUdmEcsInstanceResponse
     */
    public function deleteUdmEcsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUdmEcsInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes a backup vault.
     *
     * @remarks
     *   You cannot delete a backup vault within 2 hours after the backup vault is created or a backup vault that is in the INITIALIZING state.
     * *   After you delete a backup vault, all resources that are associated with the backup vault are deleted. The resources include the Cloud Backup client of the old version, backup plans, backup jobs, snapshots, and restore jobs.
     *
     * @param request - DeleteVaultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVaultResponse
     *
     * @param DeleteVaultRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteVaultResponse
     */
    public function deleteVaultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVault',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a backup vault.
     *
     * @remarks
     *   You cannot delete a backup vault within 2 hours after the backup vault is created or a backup vault that is in the INITIALIZING state.
     * *   After you delete a backup vault, all resources that are associated with the backup vault are deleted. The resources include the Cloud Backup client of the old version, backup plans, backup jobs, snapshots, and restore jobs.
     *
     * @param request - DeleteVaultRequest
     *
     * @returns DeleteVaultResponse
     *
     * @param DeleteVaultRequest $request
     *
     * @return DeleteVaultResponse
     */
    public function deleteVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVaultWithOptions($request, $runtime);
    }

    /**
     * 关闭备份库复制.
     *
     * @param request - DeleteVaultReplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVaultReplicationResponse
     *
     * @param DeleteVaultReplicationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteVaultReplicationResponse
     */
    public function deleteVaultReplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->replicationSourceRegionId) {
            @$query['ReplicationSourceRegionId'] = $request->replicationSourceRegionId;
        }

        if (null !== $request->replicationSourceVaultId) {
            @$query['ReplicationSourceVaultId'] = $request->replicationSourceVaultId;
        }

        if (null !== $request->replicationTargetVaultId) {
            @$query['ReplicationTargetVaultId'] = $request->replicationTargetVaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVaultReplication',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVaultReplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭备份库复制.
     *
     * @param request - DeleteVaultReplicationRequest
     *
     * @returns DeleteVaultReplicationResponse
     *
     * @param DeleteVaultReplicationRequest $request
     *
     * @return DeleteVaultReplicationResponse
     */
    public function deleteVaultReplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVaultReplicationWithOptions($request, $runtime);
    }

    /**
     * Queries the information about one or more HBR clients that meet the specified conditions.
     *
     * @param tmpReq - DescribeBackupClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupClientsResponse
     *
     * @param DescribeBackupClientsRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBackupClientsResponse
     */
    public function describeBackupClientsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeBackupClientsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clientIds) {
            $request->clientIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clientIds, 'ClientIds', 'json');
        }

        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->clientIdsShrink) {
            @$body['ClientIds'] = $request->clientIdsShrink;
        }

        if (null !== $request->instanceIdsShrink) {
            @$body['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupClients',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about one or more HBR clients that meet the specified conditions.
     *
     * @param request - DescribeBackupClientsRequest
     *
     * @returns DescribeBackupClientsResponse
     *
     * @param DescribeBackupClientsRequest $request
     *
     * @return DescribeBackupClientsResponse
     */
    public function describeBackupClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupClientsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about one or more backup jobs that meet the specified conditions.
     *
     * @param request - DescribeBackupJobs2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupJobs2Response
     *
     * @param DescribeBackupJobs2Request $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupJobs2Response
     */
    public function describeBackupJobs2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortDirection) {
            @$query['SortDirection'] = $request->sortDirection;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupJobs2',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupJobs2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about one or more backup jobs that meet the specified conditions.
     *
     * @param request - DescribeBackupJobs2Request
     *
     * @returns DescribeBackupJobs2Response
     *
     * @param DescribeBackupJobs2Request $request
     *
     * @return DescribeBackupJobs2Response
     */
    public function describeBackupJobs2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupJobs2WithOptions($request, $runtime);
    }

    /**
     * Queries the information about one or more backup plans that meet the specified conditions.
     *
     * @param request - DescribeBackupPlansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupPlansResponse
     *
     * @param DescribeBackupPlansRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupPlansResponse
     */
    public function describeBackupPlansWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPlans',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about one or more backup plans that meet the specified conditions.
     *
     * @param request - DescribeBackupPlansRequest
     *
     * @returns DescribeBackupPlansResponse
     *
     * @param DescribeBackupPlansRequest $request
     *
     * @return DescribeBackupPlansResponse
     */
    public function describeBackupPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPlansWithOptions($request, $runtime);
    }

    /**
     * Queries one or more Cloud Backup clients that meet the specified conditions.
     *
     * @remarks
     * This operation is applicable only to SAP HANA backup. For Cloud Backup clients of other data sources, call the DescribeBackupClients operation.
     *
     * @param request - DescribeClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClientsResponse
     *
     * @param DescribeClientsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeClientsResponse
     */
    public function describeClientsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClients',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more Cloud Backup clients that meet the specified conditions.
     *
     * @remarks
     * This operation is applicable only to SAP HANA backup. For Cloud Backup clients of other data sources, call the DescribeBackupClients operation.
     *
     * @param request - DescribeClientsRequest
     *
     * @returns DescribeClientsResponse
     *
     * @param DescribeClientsRequest $request
     *
     * @return DescribeClientsResponse
     */
    public function describeClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientsWithOptions($request, $runtime);
    }

    /**
     * Queries one or more container clusters that meet the specified conditions.
     *
     * @remarks
     * You can call this operation to query only Container Service for Kubernetes (ACK) clusters.
     *
     * @param request - DescribeContainerClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeContainerClusterResponse
     *
     * @param DescribeContainerClusterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeContainerClusterResponse
     */
    public function describeContainerClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeContainerCluster',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeContainerClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more container clusters that meet the specified conditions.
     *
     * @remarks
     * You can call this operation to query only Container Service for Kubernetes (ACK) clusters.
     *
     * @param request - DescribeContainerClusterRequest
     *
     * @returns DescribeContainerClusterResponse
     *
     * @param DescribeContainerClusterRequest $request
     *
     * @return DescribeContainerClusterResponse
     */
    public function describeContainerCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerClusterWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the accounts used in cross-account backup.
     *
     * @param request - DescribeCrossAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCrossAccountsResponse
     *
     * @param DescribeCrossAccountsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCrossAccountsResponse
     */
    public function describeCrossAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCrossAccounts',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCrossAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the accounts used in cross-account backup.
     *
     * @param request - DescribeCrossAccountsRequest
     *
     * @returns DescribeCrossAccountsResponse
     *
     * @param DescribeCrossAccountsRequest $request
     *
     * @return DescribeCrossAccountsResponse
     */
    public function describeCrossAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossAccountsWithOptions($request, $runtime);
    }

    /**
     * Queries one or more SAP HANA backup plans that meet the specified conditions.
     *
     * @param request - DescribeHanaBackupPlansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHanaBackupPlansResponse
     *
     * @param DescribeHanaBackupPlansRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeHanaBackupPlansResponse
     */
    public function describeHanaBackupPlansWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHanaBackupPlans',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHanaBackupPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more SAP HANA backup plans that meet the specified conditions.
     *
     * @param request - DescribeHanaBackupPlansRequest
     *
     * @returns DescribeHanaBackupPlansResponse
     *
     * @param DescribeHanaBackupPlansRequest $request
     *
     * @return DescribeHanaBackupPlansResponse
     */
    public function describeHanaBackupPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaBackupPlansWithOptions($request, $runtime);
    }

    /**
     * Queries the backup parameters of an SAP HANA database.
     *
     * @remarks
     * If you want to query the backup retention period of a database, you can call the DescribeHanaRetentionSetting operation.
     *
     * @param request - DescribeHanaBackupSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHanaBackupSettingResponse
     *
     * @param DescribeHanaBackupSettingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHanaBackupSettingResponse
     */
    public function describeHanaBackupSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHanaBackupSetting',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHanaBackupSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the backup parameters of an SAP HANA database.
     *
     * @remarks
     * If you want to query the backup retention period of a database, you can call the DescribeHanaRetentionSetting operation.
     *
     * @param request - DescribeHanaBackupSettingRequest
     *
     * @returns DescribeHanaBackupSettingResponse
     *
     * @param DescribeHanaBackupSettingRequest $request
     *
     * @return DescribeHanaBackupSettingResponse
     */
    public function describeHanaBackupSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaBackupSettingWithOptions($request, $runtime);
    }

    /**
     * Queries one or more SAP HANA backups that meet the specified conditions.
     *
     * @remarks
     * After you call the DescribeHanaBackupsAsync operation to query the SAP HANA backups that meet the specified conditions, call the DescribeTask operation to query the final result.
     *
     * @param request - DescribeHanaBackupsAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHanaBackupsAsyncResponse
     *
     * @param DescribeHanaBackupsAsyncRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeHanaBackupsAsyncResponse
     */
    public function describeHanaBackupsAsyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->includeDifferential) {
            @$query['IncludeDifferential'] = $request->includeDifferential;
        }

        if (null !== $request->includeIncremental) {
            @$query['IncludeIncremental'] = $request->includeIncremental;
        }

        if (null !== $request->includeLog) {
            @$query['IncludeLog'] = $request->includeLog;
        }

        if (null !== $request->logPosition) {
            @$query['LogPosition'] = $request->logPosition;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->recoveryPointInTime) {
            @$query['RecoveryPointInTime'] = $request->recoveryPointInTime;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceClusterId) {
            @$query['SourceClusterId'] = $request->sourceClusterId;
        }

        if (null !== $request->systemCopy) {
            @$query['SystemCopy'] = $request->systemCopy;
        }

        if (null !== $request->useBackint) {
            @$query['UseBackint'] = $request->useBackint;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        if (null !== $request->volumeId) {
            @$query['VolumeId'] = $request->volumeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHanaBackupsAsync',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHanaBackupsAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more SAP HANA backups that meet the specified conditions.
     *
     * @remarks
     * After you call the DescribeHanaBackupsAsync operation to query the SAP HANA backups that meet the specified conditions, call the DescribeTask operation to query the final result.
     *
     * @param request - DescribeHanaBackupsAsyncRequest
     *
     * @returns DescribeHanaBackupsAsyncResponse
     *
     * @param DescribeHanaBackupsAsyncRequest $request
     *
     * @return DescribeHanaBackupsAsyncResponse
     */
    public function describeHanaBackupsAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaBackupsAsyncWithOptions($request, $runtime);
    }

    /**
     * Queries the information about SAP HANA databases.
     *
     * @remarks
     * After you register an SAP HANA instance and install a Cloud Backup client on the instance, you can call this operation to query the information about SAP HANA databases. You can call the StartHanaDatabaseAsync operation to start a database and call the StopHanaDatabaseAsync operation to stop a database.
     *
     * @param request - DescribeHanaDatabasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHanaDatabasesResponse
     *
     * @param DescribeHanaDatabasesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeHanaDatabasesResponse
     */
    public function describeHanaDatabasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHanaDatabases',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHanaDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about SAP HANA databases.
     *
     * @remarks
     * After you register an SAP HANA instance and install a Cloud Backup client on the instance, you can call this operation to query the information about SAP HANA databases. You can call the StartHanaDatabaseAsync operation to start a database and call the StopHanaDatabaseAsync operation to stop a database.
     *
     * @param request - DescribeHanaDatabasesRequest
     *
     * @returns DescribeHanaDatabasesResponse
     *
     * @param DescribeHanaDatabasesRequest $request
     *
     * @return DescribeHanaDatabasesResponse
     */
    public function describeHanaDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaDatabasesWithOptions($request, $runtime);
    }

    /**
     * Queries one or more SAP HANA instances that meet the specified conditions.
     *
     * @param request - DescribeHanaInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHanaInstancesResponse
     *
     * @param DescribeHanaInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeHanaInstancesResponse
     */
    public function describeHanaInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $body = [];
        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeHanaInstances',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHanaInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more SAP HANA instances that meet the specified conditions.
     *
     * @param request - DescribeHanaInstancesRequest
     *
     * @returns DescribeHanaInstancesResponse
     *
     * @param DescribeHanaInstancesRequest $request
     *
     * @return DescribeHanaInstancesResponse
     */
    public function describeHanaInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries one or more SAP HANA restore jobs that meet the specified conditions.
     *
     * @param request - DescribeHanaRestoresRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHanaRestoresResponse
     *
     * @param DescribeHanaRestoresRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHanaRestoresResponse
     */
    public function describeHanaRestoresWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->restoreId) {
            @$query['RestoreId'] = $request->restoreId;
        }

        if (null !== $request->restoreStatus) {
            @$query['RestoreStatus'] = $request->restoreStatus;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHanaRestores',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHanaRestoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more SAP HANA restore jobs that meet the specified conditions.
     *
     * @param request - DescribeHanaRestoresRequest
     *
     * @returns DescribeHanaRestoresResponse
     *
     * @param DescribeHanaRestoresRequest $request
     *
     * @return DescribeHanaRestoresResponse
     */
    public function describeHanaRestores($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaRestoresWithOptions($request, $runtime);
    }

    /**
     * Queries the backup retention period of an SAP HANA database.
     *
     * @remarks
     *   If you want to query the backup parameters of a database, you can call the DescribeHanaBackupSetting operation.
     * *   Cloud Backup deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *
     * @param request - DescribeHanaRetentionSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHanaRetentionSettingResponse
     *
     * @param DescribeHanaRetentionSettingRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeHanaRetentionSettingResponse
     */
    public function describeHanaRetentionSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHanaRetentionSetting',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHanaRetentionSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the backup retention period of an SAP HANA database.
     *
     * @remarks
     *   If you want to query the backup parameters of a database, you can call the DescribeHanaBackupSetting operation.
     * *   Cloud Backup deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *
     * @param request - DescribeHanaRetentionSettingRequest
     *
     * @returns DescribeHanaRetentionSettingResponse
     *
     * @param DescribeHanaRetentionSettingRequest $request
     *
     * @return DescribeHanaRetentionSettingResponse
     */
    public function describeHanaRetentionSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaRetentionSettingWithOptions($request, $runtime);
    }

    /**
     * Queries the details about Tablestore instances that are backed up.
     *
     * @param request - DescribeOtsTableSnapshotsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOtsTableSnapshotsResponse
     *
     * @param DescribeOtsTableSnapshotsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOtsTableSnapshotsResponse
     */
    public function describeOtsTableSnapshotsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $bodyFlat = [];
        if (null !== $request->otsInstances) {
            @$bodyFlat['OtsInstances'] = $request->otsInstances;
        }

        if (null !== $request->snapshotIds) {
            @$bodyFlat['SnapshotIds'] = $request->snapshotIds;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeOtsTableSnapshots',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOtsTableSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about Tablestore instances that are backed up.
     *
     * @param request - DescribeOtsTableSnapshotsRequest
     *
     * @returns DescribeOtsTableSnapshotsResponse
     *
     * @param DescribeOtsTableSnapshotsRequest $request
     *
     * @return DescribeOtsTableSnapshotsResponse
     */
    public function describeOtsTableSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOtsTableSnapshotsWithOptions($request, $runtime);
    }

    /**
     * Queries one or more backup policies.
     *
     * @param request - DescribePoliciesV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePoliciesV2Response
     *
     * @param DescribePoliciesV2Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePoliciesV2Response
     */
    public function describePoliciesV2WithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribePoliciesV2',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePoliciesV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more backup policies.
     *
     * @param request - DescribePoliciesV2Request
     *
     * @returns DescribePoliciesV2Response
     *
     * @param DescribePoliciesV2Request $request
     *
     * @return DescribePoliciesV2Response
     */
    public function describePoliciesV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePoliciesV2WithOptions($request, $runtime);
    }

    /**
     * Query one or more data sources bound to a policy, or query one or more policies bound to a data source.
     *
     * @param tmpReq - DescribePolicyBindingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePolicyBindingsResponse
     *
     * @param DescribePolicyBindingsRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePolicyBindingsResponse
     */
    public function describePolicyBindingsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribePolicyBindingsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataSourceIds) {
            $request->dataSourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataSourceIds, 'DataSourceIds', 'json');
        }

        $query = [];
        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $body = [];
        if (null !== $request->dataSourceIdsShrink) {
            @$body['DataSourceIds'] = $request->dataSourceIdsShrink;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribePolicyBindings',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePolicyBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query one or more data sources bound to a policy, or query one or more policies bound to a data source.
     *
     * @param request - DescribePolicyBindingsRequest
     *
     * @returns DescribePolicyBindingsResponse
     *
     * @param DescribePolicyBindingsRequest $request
     *
     * @return DescribePolicyBindingsResponse
     */
    public function describePolicyBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyBindingsWithOptions($request, $runtime);
    }

    /**
     * Queries the tables of a restorable Tablestore instance.
     *
     * @param request - DescribeRecoverableOtsInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecoverableOtsInstancesResponse
     *
     * @param DescribeRecoverableOtsInstancesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeRecoverableOtsInstancesResponse
     */
    public function describeRecoverableOtsInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecoverableOtsInstances',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecoverableOtsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tables of a restorable Tablestore instance.
     *
     * @param request - DescribeRecoverableOtsInstancesRequest
     *
     * @returns DescribeRecoverableOtsInstancesResponse
     *
     * @param DescribeRecoverableOtsInstancesRequest $request
     *
     * @return DescribeRecoverableOtsInstancesResponse
     */
    public function describeRecoverableOtsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecoverableOtsInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries available regions.
     *
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
            'version' => '2017-09-08',
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
     * Queries available regions.
     *
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
     * Queries one or more restore jobs that meet the specified conditions.
     *
     * @param request - DescribeRestoreJobs2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRestoreJobs2Response
     *
     * @param DescribeRestoreJobs2Request $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRestoreJobs2Response
     */
    public function describeRestoreJobs2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->restoreType) {
            @$query['RestoreType'] = $request->restoreType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRestoreJobs2',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRestoreJobs2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more restore jobs that meet the specified conditions.
     *
     * @param request - DescribeRestoreJobs2Request
     *
     * @returns DescribeRestoreJobs2Response
     *
     * @param DescribeRestoreJobs2Request $request
     *
     * @return DescribeRestoreJobs2Response
     */
    public function describeRestoreJobs2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreJobs2WithOptions($request, $runtime);
    }

    /**
     * Queries an asynchronous job.
     *
     * @param request - DescribeTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTaskResponse
     *
     * @param DescribeTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTaskResponse
     */
    public function describeTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTask',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an asynchronous job.
     *
     * @param request - DescribeTaskRequest
     *
     * @returns DescribeTaskResponse
     *
     * @param DescribeTaskRequest $request
     *
     * @return DescribeTaskResponse
     */
    public function describeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the backup snapshots of an Elastic Compute Service (ECS) instance.
     *
     * @param tmpReq - DescribeUdmSnapshotsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUdmSnapshotsResponse
     *
     * @param DescribeUdmSnapshotsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUdmSnapshotsResponse
     */
    public function describeUdmSnapshotsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeUdmSnapshotsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->snapshotIds) {
            $request->snapshotIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->snapshotIds, 'SnapshotIds', 'json');
        }

        $query = [];
        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->udmRegionId) {
            @$query['UdmRegionId'] = $request->udmRegionId;
        }

        $body = [];
        if (null !== $request->snapshotIdsShrink) {
            @$body['SnapshotIds'] = $request->snapshotIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeUdmSnapshots',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUdmSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the backup snapshots of an Elastic Compute Service (ECS) instance.
     *
     * @param request - DescribeUdmSnapshotsRequest
     *
     * @returns DescribeUdmSnapshotsResponse
     *
     * @param DescribeUdmSnapshotsRequest $request
     *
     * @return DescribeUdmSnapshotsResponse
     */
    public function describeUdmSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUdmSnapshotsWithOptions($request, $runtime);
    }

    /**
     * Queries the regions that support cross-region replication.
     *
     * @param request - DescribeVaultReplicationRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVaultReplicationRegionsResponse
     *
     * @param DescribeVaultReplicationRegionsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVaultReplicationRegionsResponse
     */
    public function describeVaultReplicationRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVaultReplicationRegions',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVaultReplicationRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions that support cross-region replication.
     *
     * @param request - DescribeVaultReplicationRegionsRequest
     *
     * @returns DescribeVaultReplicationRegionsResponse
     *
     * @param DescribeVaultReplicationRegionsRequest $request
     *
     * @return DescribeVaultReplicationRegionsResponse
     */
    public function describeVaultReplicationRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVaultReplicationRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about one or more backup vaults that meet the specified conditions.
     *
     * @param request - DescribeVaultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVaultsResponse
     *
     * @param DescribeVaultsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeVaultsResponse
     */
    public function describeVaultsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->replication) {
            @$query['Replication'] = $request->replication;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        if (null !== $request->vaultName) {
            @$query['VaultName'] = $request->vaultName;
        }

        if (null !== $request->vaultOwnerId) {
            @$query['VaultOwnerId'] = $request->vaultOwnerId;
        }

        if (null !== $request->vaultRegionId) {
            @$query['VaultRegionId'] = $request->vaultRegionId;
        }

        if (null !== $request->vaultType) {
            @$query['VaultType'] = $request->vaultType;
        }

        $body = [];
        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeVaults',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVaultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about one or more backup vaults that meet the specified conditions.
     *
     * @param request - DescribeVaultsRequest
     *
     * @returns DescribeVaultsResponse
     *
     * @param DescribeVaultsRequest $request
     *
     * @return DescribeVaultsResponse
     */
    public function describeVaults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVaultsWithOptions($request, $runtime);
    }

    /**
     * Deletes an internal mount target created by Cloud Backup.
     *
     * @remarks
     *   If the request is successful, the mount target is deleted.
     * *   After you create a backup plan for an Apsara File Storage NAS file system, HBR automatically creates a mount target for the file system. You can call this operation to delete the mount target. In the **Status** column of the mount target of the NAS file system, the following information is displayed: **This mount target is created by an Alibaba Cloud internal service and cannot be operated. Service name: HBR**.
     *
     * @param request - DetachNasFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachNasFileSystemResponse
     *
     * @param DetachNasFileSystemRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetachNasFileSystemResponse
     */
    public function detachNasFileSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTime) {
            @$query['CreateTime'] = $request->createTime;
        }

        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachNasFileSystem',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachNasFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an internal mount target created by Cloud Backup.
     *
     * @remarks
     *   If the request is successful, the mount target is deleted.
     * *   After you create a backup plan for an Apsara File Storage NAS file system, HBR automatically creates a mount target for the file system. You can call this operation to delete the mount target. In the **Status** column of the mount target of the NAS file system, the following information is displayed: **This mount target is created by an Alibaba Cloud internal service and cannot be operated. Service name: HBR**.
     *
     * @param request - DetachNasFileSystemRequest
     *
     * @returns DetachNasFileSystemResponse
     *
     * @param DetachNasFileSystemRequest $request
     *
     * @return DetachNasFileSystemResponse
     */
    public function detachNasFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachNasFileSystemWithOptions($request, $runtime);
    }

    /**
     * Disables a backup plan.
     *
     * @remarks
     * After you call this operation, the backup plan is suspended. In the DescribeBackupPlans operation, the Disabled parameter is set to true.
     *
     * @param request - DisableBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableBackupPlanResponse
     *
     * @param DisableBackupPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableBackupPlanResponse
     */
    public function disableBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableBackupPlan',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a backup plan.
     *
     * @remarks
     * After you call this operation, the backup plan is suspended. In the DescribeBackupPlans operation, the Disabled parameter is set to true.
     *
     * @param request - DisableBackupPlanRequest
     *
     * @returns DisableBackupPlanResponse
     *
     * @param DisableBackupPlanRequest $request
     *
     * @return DisableBackupPlanResponse
     */
    public function disableBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Disables an SAP HANA backup plan.
     *
     * @remarks
     * To enable the backup plan again, call the EnableHanaBackupPlan operation.
     *
     * @param request - DisableHanaBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableHanaBackupPlanResponse
     *
     * @param DisableHanaBackupPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DisableHanaBackupPlanResponse
     */
    public function disableHanaBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableHanaBackupPlan',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an SAP HANA backup plan.
     *
     * @remarks
     * To enable the backup plan again, call the EnableHanaBackupPlan operation.
     *
     * @param request - DisableHanaBackupPlanRequest
     *
     * @returns DisableHanaBackupPlanResponse
     *
     * @param DisableHanaBackupPlanRequest $request
     *
     * @return DisableHanaBackupPlanResponse
     */
    public function disableHanaBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableHanaBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Enables a backup plan.
     *
     * @remarks
     * After you call this operation, the backup plan is restarted (Disabled is set to false in the DescribeBackupPlans operation). Cloud Backup continues to perform backups based on the policy specified in the backup plan.
     *
     * @param request - EnableBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableBackupPlanResponse
     *
     * @param EnableBackupPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EnableBackupPlanResponse
     */
    public function enableBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableBackupPlan',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a backup plan.
     *
     * @remarks
     * After you call this operation, the backup plan is restarted (Disabled is set to false in the DescribeBackupPlans operation). Cloud Backup continues to perform backups based on the policy specified in the backup plan.
     *
     * @param request - EnableBackupPlanRequest
     *
     * @returns EnableBackupPlanResponse
     *
     * @param EnableBackupPlanRequest $request
     *
     * @return EnableBackupPlanResponse
     */
    public function enableBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Enables an SAP HANA backup plan.
     *
     * @remarks
     * To disable the backup plan again, call the DisableHanaBackupPlan operation.
     *
     * @param request - EnableHanaBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableHanaBackupPlanResponse
     *
     * @param EnableHanaBackupPlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableHanaBackupPlanResponse
     */
    public function enableHanaBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableHanaBackupPlan',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables an SAP HANA backup plan.
     *
     * @remarks
     * To disable the backup plan again, call the DisableHanaBackupPlan operation.
     *
     * @param request - EnableHanaBackupPlanRequest
     *
     * @returns EnableHanaBackupPlanResponse
     *
     * @param EnableHanaBackupPlanRequest $request
     *
     * @return EnableHanaBackupPlanResponse
     */
    public function enableHanaBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHanaBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Executes a backup plan.
     *
     * @param request - ExecuteBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteBackupPlanResponse
     *
     * @param ExecuteBackupPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExecuteBackupPlanResponse
     */
    public function executeBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecuteBackupPlan',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes a backup plan.
     *
     * @param request - ExecuteBackupPlanRequest
     *
     * @returns ExecuteBackupPlanResponse
     *
     * @param ExecuteBackupPlanRequest $request
     *
     * @return ExecuteBackupPlanResponse
     */
    public function executeBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Execute a policy for one or all bound data sources.
     *
     * @param request - ExecutePolicyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecutePolicyV2Response
     *
     * @param ExecutePolicyV2Request $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecutePolicyV2Response
     */
    public function executePolicyV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $body = [];
        if (null !== $request->dataSourceId) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecutePolicyV2',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecutePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Execute a policy for one or all bound data sources.
     *
     * @param request - ExecutePolicyV2Request
     *
     * @returns ExecutePolicyV2Response
     *
     * @param ExecutePolicyV2Request $request
     *
     * @return ExecutePolicyV2Response
     */
    public function executePolicyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executePolicyV2WithOptions($request, $runtime);
    }

    /**
     * Generates a Resource Access Management (RAM) policy.
     *
     * @param request - GenerateRamPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateRamPolicyResponse
     *
     * @param GenerateRamPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateRamPolicyResponse
     */
    public function generateRamPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        if (null !== $request->requireBasePolicy) {
            @$query['RequireBasePolicy'] = $request->requireBasePolicy;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateRamPolicy',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateRamPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a Resource Access Management (RAM) policy.
     *
     * @param request - GenerateRamPolicyRequest
     *
     * @returns GenerateRamPolicyResponse
     *
     * @param GenerateRamPolicyRequest $request
     *
     * @return GenerateRamPolicyResponse
     */
    public function generateRamPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateRamPolicyWithOptions($request, $runtime);
    }

    /**
     * Obtains download links of files such as job reports.
     *
     * @param request - GetTempFileDownloadLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTempFileDownloadLinkResponse
     *
     * @param GetTempFileDownloadLinkRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTempFileDownloadLinkResponse
     */
    public function getTempFileDownloadLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tempFileKey) {
            @$query['TempFileKey'] = $request->tempFileKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTempFileDownloadLink',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTempFileDownloadLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains download links of files such as job reports.
     *
     * @param request - GetTempFileDownloadLinkRequest
     *
     * @returns GetTempFileDownloadLinkResponse
     *
     * @param GetTempFileDownloadLinkRequest $request
     *
     * @return GetTempFileDownloadLinkResponse
     */
    public function getTempFileDownloadLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTempFileDownloadLinkWithOptions($request, $runtime);
    }

    /**
     * Installs an HBR client on one or more Elastic Compute Service (ECS) instances.
     *
     * @remarks
     *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to install an HBR client on an ECS instance.
     * *   You can call the [DescribeTask](https://help.aliyun.com/document_detail/431265.html) operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 60 seconds after you call the InstallBackupClients operation to install HBR clients. Then, run the next queries at an interval of 30 seconds.
     *
     * @param tmpReq - InstallBackupClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallBackupClientsResponse
     *
     * @param InstallBackupClientsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return InstallBackupClientsResponse
     */
    public function installBackupClientsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InstallBackupClientsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InstallBackupClients',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstallBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs an HBR client on one or more Elastic Compute Service (ECS) instances.
     *
     * @remarks
     *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to install an HBR client on an ECS instance.
     * *   You can call the [DescribeTask](https://help.aliyun.com/document_detail/431265.html) operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 60 seconds after you call the InstallBackupClients operation to install HBR clients. Then, run the next queries at an interval of 30 seconds.
     *
     * @param request - InstallBackupClientsRequest
     *
     * @returns InstallBackupClientsResponse
     *
     * @param InstallBackupClientsRequest $request
     *
     * @return InstallBackupClientsResponse
     */
    public function installBackupClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installBackupClientsWithOptions($request, $runtime);
    }

    /**
     * 查询已保护的资源列表.
     *
     * @param request - ListProtectedResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProtectedResourcesResponse
     *
     * @param ListProtectedResourcesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListProtectedResourcesResponse
     */
    public function listProtectedResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createdByProduct) {
            @$query['CreatedByProduct'] = $request->createdByProduct;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->skip) {
            @$query['Skip'] = $request->skip;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProtectedResources',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProtectedResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询已保护的资源列表.
     *
     * @param request - ListProtectedResourcesRequest
     *
     * @returns ListProtectedResourcesResponse
     *
     * @param ListProtectedResourcesRequest $request
     *
     * @return ListProtectedResourcesResponse
     */
    public function listProtectedResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProtectedResourcesWithOptions($request, $runtime);
    }

    /**
     * Activates Cloud Backup.
     *
     * @param request - OpenHbrServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenHbrServiceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return OpenHbrServiceResponse
     */
    public function openHbrServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'OpenHbrService',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenHbrServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates Cloud Backup.
     *
     * @returns OpenHbrServiceResponse
     *
     * @return OpenHbrServiceResponse
     */
    public function openHbrService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openHbrServiceWithOptions($runtime);
    }

    /**
     * Queries the information about one or more backup snapshots that meet the specified conditions.
     *
     * @param tmpReq - SearchHistoricalSnapshotsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchHistoricalSnapshotsResponse
     *
     * @param SearchHistoricalSnapshotsRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SearchHistoricalSnapshotsResponse
     */
    public function searchHistoricalSnapshotsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchHistoricalSnapshotsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }

        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->queryShrink) {
            @$query['Query'] = $request->queryShrink;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchHistoricalSnapshots',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchHistoricalSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about one or more backup snapshots that meet the specified conditions.
     *
     * @param request - SearchHistoricalSnapshotsRequest
     *
     * @returns SearchHistoricalSnapshotsResponse
     *
     * @param SearchHistoricalSnapshotsRequest $request
     *
     * @return SearchHistoricalSnapshotsResponse
     */
    public function searchHistoricalSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchHistoricalSnapshotsWithOptions($request, $runtime);
    }

    /**
     * Starts an SAP HANA database.
     *
     * @remarks
     * To stop the database again, call the StopHanaDatabaseAsync operation.
     *
     * @param request - StartHanaDatabaseAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartHanaDatabaseAsyncResponse
     *
     * @param StartHanaDatabaseAsyncRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StartHanaDatabaseAsyncResponse
     */
    public function startHanaDatabaseAsyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartHanaDatabaseAsync',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartHanaDatabaseAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts an SAP HANA database.
     *
     * @remarks
     * To stop the database again, call the StopHanaDatabaseAsync operation.
     *
     * @param request - StartHanaDatabaseAsyncRequest
     *
     * @returns StartHanaDatabaseAsyncResponse
     *
     * @param StartHanaDatabaseAsyncRequest $request
     *
     * @return StartHanaDatabaseAsyncResponse
     */
    public function startHanaDatabaseAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startHanaDatabaseAsyncWithOptions($request, $runtime);
    }

    /**
     * Stops an SAP HANA database.
     *
     * @remarks
     * To start the database again, call the StartHanaDatabaseAsync operation.
     *
     * @param request - StopHanaDatabaseAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopHanaDatabaseAsyncResponse
     *
     * @param StopHanaDatabaseAsyncRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return StopHanaDatabaseAsyncResponse
     */
    public function stopHanaDatabaseAsyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopHanaDatabaseAsync',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopHanaDatabaseAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops an SAP HANA database.
     *
     * @remarks
     * To start the database again, call the StartHanaDatabaseAsync operation.
     *
     * @param request - StopHanaDatabaseAsyncRequest
     *
     * @returns StopHanaDatabaseAsyncResponse
     *
     * @param StopHanaDatabaseAsyncRequest $request
     *
     * @return StopHanaDatabaseAsyncResponse
     */
    public function stopHanaDatabaseAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopHanaDatabaseAsyncWithOptions($request, $runtime);
    }

    /**
     * Uninstalls a Cloud Backup client from one or more Elastic Compute Service (ECS) instance.
     *
     * @remarks
     *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to uninstall a backup client from an ECS instance.
     * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 30 seconds after you call the UninstallBackupClients operation to uninstall backup clients. Then, run the next queries at an interval of 30 seconds.
     *
     * @param tmpReq - UninstallBackupClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallBackupClientsResponse
     *
     * @param UninstallBackupClientsRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UninstallBackupClientsResponse
     */
    public function uninstallBackupClientsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UninstallBackupClientsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clientIds) {
            $request->clientIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clientIds, 'ClientIds', 'json');
        }

        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->clientIdsShrink) {
            @$query['ClientIds'] = $request->clientIdsShrink;
        }

        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UninstallBackupClients',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UninstallBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls a Cloud Backup client from one or more Elastic Compute Service (ECS) instance.
     *
     * @remarks
     *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to uninstall a backup client from an ECS instance.
     * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 30 seconds after you call the UninstallBackupClients operation to uninstall backup clients. Then, run the next queries at an interval of 30 seconds.
     *
     * @param request - UninstallBackupClientsRequest
     *
     * @returns UninstallBackupClientsResponse
     *
     * @param UninstallBackupClientsRequest $request
     *
     * @return UninstallBackupClientsResponse
     */
    public function uninstallBackupClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallBackupClientsWithOptions($request, $runtime);
    }

    /**
     * Uninstalls an HBR client.
     *
     * @remarks
     * If you call this operation, the specified HBR client is uninstalled. To reinstall the HBR client, call the CreateClients operation.
     *
     * @param request - UninstallClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallClientResponse
     *
     * @param UninstallClientRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UninstallClientResponse
     */
    public function uninstallClientWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UninstallClient',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UninstallClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls an HBR client.
     *
     * @remarks
     * If you call this operation, the specified HBR client is uninstalled. To reinstall the HBR client, call the CreateClients operation.
     *
     * @param request - UninstallClientRequest
     *
     * @returns UninstallClientResponse
     *
     * @param UninstallClientRequest $request
     *
     * @return UninstallClientResponse
     */
    public function uninstallClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallClientWithOptions($request, $runtime);
    }

    /**
     * Updates a backup plan.
     *
     * @param tmpReq - UpdateBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBackupPlanResponse
     *
     * @param UpdateBackupPlanRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateBackupPlanResponse
     */
    public function updateBackupPlanWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateBackupPlanShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->detail) {
            $request->detailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->detail, 'Detail', 'json');
        }

        if (null !== $tmpReq->otsDetail) {
            $request->otsDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->otsDetail, 'OtsDetail', 'json');
        }

        $query = [];
        if (null !== $request->changeListPath) {
            @$query['ChangeListPath'] = $request->changeListPath;
        }

        if (null !== $request->detailShrink) {
            @$query['Detail'] = $request->detailShrink;
        }

        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->keepLatestSnapshots) {
            @$query['KeepLatestSnapshots'] = $request->keepLatestSnapshots;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->planName) {
            @$query['PlanName'] = $request->planName;
        }

        if (null !== $request->prefix) {
            @$query['Prefix'] = $request->prefix;
        }

        if (null !== $request->retention) {
            @$query['Retention'] = $request->retention;
        }

        if (null !== $request->schedule) {
            @$query['Schedule'] = $request->schedule;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->speedLimit) {
            @$query['SpeedLimit'] = $request->speedLimit;
        }

        if (null !== $request->updatePaths) {
            @$query['UpdatePaths'] = $request->updatePaths;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $body = [];
        if (null !== $request->exclude) {
            @$body['Exclude'] = $request->exclude;
        }

        if (null !== $request->include) {
            @$body['Include'] = $request->include;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        if (null !== $request->otsDetailShrink) {
            @$body['OtsDetail'] = $request->otsDetailShrink;
        }

        if (null !== $request->rule) {
            @$body['Rule'] = $request->rule;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateBackupPlan',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a backup plan.
     *
     * @param request - UpdateBackupPlanRequest
     *
     * @returns UpdateBackupPlanResponse
     *
     * @param UpdateBackupPlanRequest $request
     *
     * @return UpdateBackupPlanResponse
     */
    public function updateBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of an HBR client.
     *
     * @remarks
     * You can call this operation to update the configurations of both the old and new HBR clients.
     *
     * @param request - UpdateClientSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClientSettingsResponse
     *
     * @param UpdateClientSettingsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateClientSettingsResponse
     */
    public function updateClientSettingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertOnPartialComplete) {
            @$query['AlertOnPartialComplete'] = $request->alertOnPartialComplete;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->dataNetworkType) {
            @$query['DataNetworkType'] = $request->dataNetworkType;
        }

        if (null !== $request->dataProxySetting) {
            @$query['DataProxySetting'] = $request->dataProxySetting;
        }

        if (null !== $request->maxCpuCore) {
            @$query['MaxCpuCore'] = $request->maxCpuCore;
        }

        if (null !== $request->maxMemory) {
            @$query['MaxMemory'] = $request->maxMemory;
        }

        if (null !== $request->maxWorker) {
            @$query['MaxWorker'] = $request->maxWorker;
        }

        if (null !== $request->proxyHost) {
            @$query['ProxyHost'] = $request->proxyHost;
        }

        if (null !== $request->proxyPassword) {
            @$query['ProxyPassword'] = $request->proxyPassword;
        }

        if (null !== $request->proxyPort) {
            @$query['ProxyPort'] = $request->proxyPort;
        }

        if (null !== $request->proxyUser) {
            @$query['ProxyUser'] = $request->proxyUser;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->useHttps) {
            @$query['UseHttps'] = $request->useHttps;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateClientSettings',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateClientSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of an HBR client.
     *
     * @remarks
     * You can call this operation to update the configurations of both the old and new HBR clients.
     *
     * @param request - UpdateClientSettingsRequest
     *
     * @returns UpdateClientSettingsResponse
     *
     * @param UpdateClientSettingsRequest $request
     *
     * @return UpdateClientSettingsResponse
     */
    public function updateClientSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClientSettingsWithOptions($request, $runtime);
    }

    /**
     * Update container cluster information, including the container cluster name, network type, etc.
     *
     * @param request - UpdateContainerClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContainerClusterResponse
     *
     * @param UpdateContainerClusterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateContainerClusterResponse
     */
    public function updateContainerClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->renewToken) {
            @$query['RenewToken'] = $request->renewToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContainerCluster',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContainerClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update container cluster information, including the container cluster name, network type, etc.
     *
     * @param request - UpdateContainerClusterRequest
     *
     * @returns UpdateContainerClusterResponse
     *
     * @param UpdateContainerClusterRequest $request
     *
     * @return UpdateContainerClusterResponse
     */
    public function updateContainerCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContainerClusterWithOptions($request, $runtime);
    }

    /**
     * Updates an SAP HANA backup plan.
     *
     * @remarks
     *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   You can specify only one type of data source in a backup plan.
     * *   You can specify only one interval as a backup cycle in a backup plan.
     * *   Each backup plan allows you to back up data to only one backup vault.
     *
     * @param request - UpdateHanaBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHanaBackupPlanResponse
     *
     * @param UpdateHanaBackupPlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateHanaBackupPlanResponse
     */
    public function updateHanaBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPrefix) {
            @$query['BackupPrefix'] = $request->backupPrefix;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->planName) {
            @$query['PlanName'] = $request->planName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->schedule) {
            @$query['Schedule'] = $request->schedule;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHanaBackupPlan',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an SAP HANA backup plan.
     *
     * @remarks
     *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   You can specify only one type of data source in a backup plan.
     * *   You can specify only one interval as a backup cycle in a backup plan.
     * *   Each backup plan allows you to back up data to only one backup vault.
     *
     * @param request - UpdateHanaBackupPlanRequest
     *
     * @returns UpdateHanaBackupPlanResponse
     *
     * @param UpdateHanaBackupPlanRequest $request
     *
     * @return UpdateHanaBackupPlanResponse
     */
    public function updateHanaBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHanaBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Updates the backup parameters of an SAP HANA database.
     *
     * @remarks
     * You can call the UpdateHanaRetentionSetting operation to update the backup retention period of a database.
     *
     * @param request - UpdateHanaBackupSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHanaBackupSettingResponse
     *
     * @param UpdateHanaBackupSettingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateHanaBackupSettingResponse
     */
    public function updateHanaBackupSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogBackupParameterFile) {
            @$query['CatalogBackupParameterFile'] = $request->catalogBackupParameterFile;
        }

        if (null !== $request->catalogBackupUsingBackint) {
            @$query['CatalogBackupUsingBackint'] = $request->catalogBackupUsingBackint;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dataBackupParameterFile) {
            @$query['DataBackupParameterFile'] = $request->dataBackupParameterFile;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->enableAutoLogBackup) {
            @$query['EnableAutoLogBackup'] = $request->enableAutoLogBackup;
        }

        if (null !== $request->logBackupParameterFile) {
            @$query['LogBackupParameterFile'] = $request->logBackupParameterFile;
        }

        if (null !== $request->logBackupTimeout) {
            @$query['LogBackupTimeout'] = $request->logBackupTimeout;
        }

        if (null !== $request->logBackupUsingBackint) {
            @$query['LogBackupUsingBackint'] = $request->logBackupUsingBackint;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHanaBackupSetting',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateHanaBackupSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the backup parameters of an SAP HANA database.
     *
     * @remarks
     * You can call the UpdateHanaRetentionSetting operation to update the backup retention period of a database.
     *
     * @param request - UpdateHanaBackupSettingRequest
     *
     * @returns UpdateHanaBackupSettingResponse
     *
     * @param UpdateHanaBackupSettingRequest $request
     *
     * @return UpdateHanaBackupSettingResponse
     */
    public function updateHanaBackupSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHanaBackupSettingWithOptions($request, $runtime);
    }

    /**
     * Updates an SAP HANA instance.
     *
     * @param request - UpdateHanaInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHanaInstanceResponse
     *
     * @param UpdateHanaInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateHanaInstanceResponse
     */
    public function updateHanaInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertSetting) {
            @$query['AlertSetting'] = $request->alertSetting;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->hanaName) {
            @$query['HanaName'] = $request->hanaName;
        }

        if (null !== $request->host) {
            @$query['Host'] = $request->host;
        }

        if (null !== $request->instanceNumber) {
            @$query['InstanceNumber'] = $request->instanceNumber;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->useSsl) {
            @$query['UseSsl'] = $request->useSsl;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->validateCertificate) {
            @$query['ValidateCertificate'] = $request->validateCertificate;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHanaInstance',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateHanaInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an SAP HANA instance.
     *
     * @param request - UpdateHanaInstanceRequest
     *
     * @returns UpdateHanaInstanceResponse
     *
     * @param UpdateHanaInstanceRequest $request
     *
     * @return UpdateHanaInstanceResponse
     */
    public function updateHanaInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHanaInstanceWithOptions($request, $runtime);
    }

    /**
     * Updates the backup retention period of an SAP HANA database.
     *
     * @remarks
     *   If you want to update the backup parameters of a database, you can call the UpdateHanaBackupSetting operation.
     * *   Cloud Backup deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *
     * @param request - UpdateHanaRetentionSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHanaRetentionSettingResponse
     *
     * @param UpdateHanaRetentionSettingRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateHanaRetentionSettingResponse
     */
    public function updateHanaRetentionSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->disabled) {
            @$query['Disabled'] = $request->disabled;
        }

        if (null !== $request->retentionDays) {
            @$query['RetentionDays'] = $request->retentionDays;
        }

        if (null !== $request->schedule) {
            @$query['Schedule'] = $request->schedule;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHanaRetentionSetting',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateHanaRetentionSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the backup retention period of an SAP HANA database.
     *
     * @remarks
     *   If you want to update the backup parameters of a database, you can call the UpdateHanaBackupSetting operation.
     * *   Cloud Backup deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *
     * @param request - UpdateHanaRetentionSettingRequest
     *
     * @returns UpdateHanaRetentionSettingResponse
     *
     * @param UpdateHanaRetentionSettingRequest $request
     *
     * @return UpdateHanaRetentionSettingResponse
     */
    public function updateHanaRetentionSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHanaRetentionSettingWithOptions($request, $runtime);
    }

    /**
     * Modifies the association between a backup policy and a data source.
     *
     * @param tmpReq - UpdatePolicyBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePolicyBindingResponse
     *
     * @param UpdatePolicyBindingRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdatePolicyBindingResponse
     */
    public function updatePolicyBindingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePolicyBindingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->advancedOptions) {
            $request->advancedOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->advancedOptions, 'AdvancedOptions', 'json');
        }

        $query = [];
        if (null !== $request->advancedOptionsShrink) {
            @$query['AdvancedOptions'] = $request->advancedOptionsShrink;
        }

        if (null !== $request->disabled) {
            @$query['Disabled'] = $request->disabled;
        }

        if (null !== $request->exclude) {
            @$query['Exclude'] = $request->exclude;
        }

        if (null !== $request->include) {
            @$query['Include'] = $request->include;
        }

        if (null !== $request->policyBindingDescription) {
            @$query['PolicyBindingDescription'] = $request->policyBindingDescription;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->speedLimit) {
            @$query['SpeedLimit'] = $request->speedLimit;
        }

        $body = [];
        if (null !== $request->dataSourceId) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePolicyBinding',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePolicyBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the association between a backup policy and a data source.
     *
     * @param request - UpdatePolicyBindingRequest
     *
     * @returns UpdatePolicyBindingResponse
     *
     * @param UpdatePolicyBindingRequest $request
     *
     * @return UpdatePolicyBindingResponse
     */
    public function updatePolicyBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolicyBindingWithOptions($request, $runtime);
    }

    /**
     * Modifies a backup policy.
     *
     * @remarks
     * If you modify a backup policy, the modification takes effect on all data sources that are bound to the backup policy. Proceed with caution.
     *
     * @param tmpReq - UpdatePolicyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePolicyV2Response
     *
     * @param UpdatePolicyV2Request $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePolicyV2Response
     */
    public function updatePolicyV2WithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePolicyV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $body = [];
        if (null !== $request->policyDescription) {
            @$body['PolicyDescription'] = $request->policyDescription;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        if (null !== $request->policyName) {
            @$body['PolicyName'] = $request->policyName;
        }

        if (null !== $request->rulesShrink) {
            @$body['Rules'] = $request->rulesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePolicyV2',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a backup policy.
     *
     * @remarks
     * If you modify a backup policy, the modification takes effect on all data sources that are bound to the backup policy. Proceed with caution.
     *
     * @param request - UpdatePolicyV2Request
     *
     * @returns UpdatePolicyV2Response
     *
     * @param UpdatePolicyV2Request $request
     *
     * @return UpdatePolicyV2Response
     */
    public function updatePolicyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolicyV2WithOptions($request, $runtime);
    }

    /**
     * Updates the configuration information about the backup vault.
     *
     * @param request - UpdateVaultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVaultResponse
     *
     * @param UpdateVaultRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateVaultResponse
     */
    public function updateVaultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        if (null !== $request->vaultName) {
            @$query['VaultName'] = $request->vaultName;
        }

        if (null !== $request->wormEnabled) {
            @$query['WormEnabled'] = $request->wormEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVault',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration information about the backup vault.
     *
     * @param request - UpdateVaultRequest
     *
     * @returns UpdateVaultResponse
     *
     * @param UpdateVaultRequest $request
     *
     * @return UpdateVaultResponse
     */
    public function updateVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVaultWithOptions($request, $runtime);
    }

    /**
     * Upgrades an HBR client on one or more Elastic Compute Service (ECS) instances.
     *
     * @remarks
     *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to upgrade an HBR client that is installed on an ECS instance.
     * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes.
     *
     * @param tmpReq - UpgradeBackupClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeBackupClientsResponse
     *
     * @param UpgradeBackupClientsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpgradeBackupClientsResponse
     */
    public function upgradeBackupClientsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpgradeBackupClientsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clientIds) {
            $request->clientIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clientIds, 'ClientIds', 'json');
        }

        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->clientIdsShrink) {
            @$query['ClientIds'] = $request->clientIdsShrink;
        }

        if (null !== $request->crossAccountRoleName) {
            @$query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }

        if (null !== $request->crossAccountType) {
            @$query['CrossAccountType'] = $request->crossAccountType;
        }

        if (null !== $request->crossAccountUserId) {
            @$query['CrossAccountUserId'] = $request->crossAccountUserId;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeBackupClients',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades an HBR client on one or more Elastic Compute Service (ECS) instances.
     *
     * @remarks
     *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to upgrade an HBR client that is installed on an ECS instance.
     * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes.
     *
     * @param request - UpgradeBackupClientsRequest
     *
     * @returns UpgradeBackupClientsResponse
     *
     * @param UpgradeBackupClientsRequest $request
     *
     * @return UpgradeBackupClientsResponse
     */
    public function upgradeBackupClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeBackupClientsWithOptions($request, $runtime);
    }

    /**
     * Upgrades the Cloud Backup client.
     *
     * @remarks
     * You can call this operation to upgrade a Cloud Backup client to the latest version. After the Cloud Backup client is upgraded, the version of the client cannot be rolled back.
     *
     * @param request - UpgradeClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeClientResponse
     *
     * @param UpgradeClientRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpgradeClientResponse
     */
    public function upgradeClientWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vaultId) {
            @$query['VaultId'] = $request->vaultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeClient',
            'version' => '2017-09-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the Cloud Backup client.
     *
     * @remarks
     * You can call this operation to upgrade a Cloud Backup client to the latest version. After the Cloud Backup client is upgraded, the version of the client cannot be rolled back.
     *
     * @param request - UpgradeClientRequest
     *
     * @returns UpgradeClientResponse
     *
     * @param UpgradeClientRequest $request
     *
     * @return UpgradeClientResponse
     */
    public function upgradeClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClientWithOptions($request, $runtime);
    }
}
