<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Hbr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->_endpointMap        = [
            'ap-northeast-2-pop'          => 'hbr.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'hbr.aliyuncs.com',
            'cn-beijing-gov-1'            => 'hbr.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'hbr.aliyuncs.com',
            'cn-edge-1'                   => 'hbr.aliyuncs.com',
            'cn-fujian'                   => 'hbr.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'hbr.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'hbr.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'hbr.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'hbr.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'hbr.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'hbr.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'hbr.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'hbr.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'hbr.aliyuncs.com',
            'cn-qingdao-nebula'           => 'hbr.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'hbr.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'hbr.aliyuncs.com',
            'cn-shanghai-inner'           => 'hbr.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'hbr.aliyuncs.com',
            'cn-shenzhen-inner'           => 'hbr.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'hbr.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'hbr.aliyuncs.com',
            'cn-wuhan'                    => 'hbr.aliyuncs.com',
            'cn-yushanfang'               => 'hbr.aliyuncs.com',
            'cn-zhangbei'                 => 'hbr.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'hbr.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'hbr.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'hbr.aliyuncs.com',
            'eu-west-1-oxs'               => 'hbr.aliyuncs.com',
            'rus-west-1-pop'              => 'hbr.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Registers a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @param AddContainerClusterRequest $request AddContainerClusterRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AddContainerClusterResponse AddContainerClusterResponse
     */
    public function addContainerClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddContainerCluster',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddContainerClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddContainerClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Registers a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @param AddContainerClusterRequest $request AddContainerClusterRequest
     *
     * @return AddContainerClusterResponse AddContainerClusterResponse
     */
    public function addContainerCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addContainerClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels a backup job.
     *  *
     * @param CancelBackupJobRequest $request CancelBackupJobRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelBackupJobResponse CancelBackupJobResponse
     */
    public function cancelBackupJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelBackupJob',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelBackupJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelBackupJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Cancels a backup job.
     *  *
     * @param CancelBackupJobRequest $request CancelBackupJobRequest
     *
     * @return CancelBackupJobResponse CancelBackupJobResponse
     */
    public function cancelBackupJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelBackupJobWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels a restore job.
     *  *
     * @param CancelRestoreJobRequest $request CancelRestoreJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelRestoreJobResponse CancelRestoreJobResponse
     */
    public function cancelRestoreJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->restoreId)) {
            $query['RestoreId'] = $request->restoreId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelRestoreJob',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelRestoreJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelRestoreJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Cancels a restore job.
     *  *
     * @param CancelRestoreJobRequest $request CancelRestoreJobRequest
     *
     * @return CancelRestoreJobResponse CancelRestoreJobResponse
     */
    public function cancelRestoreJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRestoreJobWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the resource group to which an instance belongs.
     *  *
     * @description *   In the Cloud Backup console, you can use resource groups to manage resources such as backup vaults, Cloud Backup clients, and SAP HANA instances.
     * *   A resource is a cloud service entity that you create on Alibaba Cloud, such as an Elastic Compute Service (ECS) instance, a backup vault, or an SAP HANA instance.
     * *   You can sort resources owned by your Alibaba Cloud account into various resource groups. Resource groups facilitate resource management among multiple projects or applications within your Alibaba Cloud account and simplify permission management.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $body['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Changes the resource group to which an instance belongs.
     *  *
     * @description *   In the Cloud Backup console, you can use resource groups to manage resources such as backup vaults, Cloud Backup clients, and SAP HANA instances.
     * *   A resource is a cloud service entity that you create on Alibaba Cloud, such as an Elastic Compute Service (ECS) instance, a backup vault, or an SAP HANA instance.
     * *   You can sort resources owned by your Alibaba Cloud account into various resource groups. Resource groups facilitate resource management among multiple projects or applications within your Alibaba Cloud account and simplify permission management.
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
     * @summary Checks whether the user has permissions to access the current resource or page.
     *  *
     * @param CheckRoleRequest $request CheckRoleRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckRoleResponse CheckRoleResponse
     */
    public function checkRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkRoleType)) {
            $query['CheckRoleType'] = $request->checkRoleType;
        }
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckRole',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Checks whether the user has permissions to access the current resource or page.
     *  *
     * @param CheckRoleRequest $request CheckRoleRequest
     *
     * @return CheckRoleResponse CheckRoleResponse
     */
    public function checkRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a backup job.
     *  *
     * @param CreateBackupJobRequest $tmpReq  CreateBackupJobRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBackupJobResponse CreateBackupJobResponse
     */
    public function createBackupJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateBackupJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->detail)) {
            $request->detailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->detail, 'Detail', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->backupType)) {
            $query['BackupType'] = $request->backupType;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->containerClusterId)) {
            $query['ContainerClusterId'] = $request->containerClusterId;
        }
        if (!Utils::isUnset($request->containerResources)) {
            $query['ContainerResources'] = $request->containerResources;
        }
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        if (!Utils::isUnset($request->detailShrink)) {
            $query['Detail'] = $request->detailShrink;
        }
        if (!Utils::isUnset($request->exclude)) {
            $query['Exclude'] = $request->exclude;
        }
        if (!Utils::isUnset($request->include_)) {
            $query['Include'] = $request->include_;
        }
        if (!Utils::isUnset($request->initiatedByAck)) {
            $query['InitiatedByAck'] = $request->initiatedByAck;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobName)) {
            $query['JobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->options)) {
            $query['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->speedLimit)) {
            $query['SpeedLimit'] = $request->speedLimit;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBackupJob',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateBackupJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateBackupJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a backup job.
     *  *
     * @param CreateBackupJobRequest $request CreateBackupJobRequest
     *
     * @return CreateBackupJobResponse CreateBackupJobResponse
     */
    public function createBackupJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupJobWithOptions($request, $runtime);
    }

    /**
     * @summary Create a backup plan.
     *  *
     * @description - A backup plan associates data sources with backup policies and other necessary information for backups. After the execution of a backup plan, it generates a backup task that records the progress and results of the backup. If the backup task is successful, a backup snapshot is created. You can use the backup snapshot to create a recovery task.
     * - A backup plan supports only one type of data source.
     * - A backup plan supports only a single fixed interval backup cycle strategy.
     * - A backup plan can back up to only one backup vault.
     *  *
     * @param CreateBackupPlanRequest $tmpReq  CreateBackupPlanRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBackupPlanResponse CreateBackupPlanResponse
     */
    public function createBackupPlanWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateBackupPlanShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destDataSourceDetail)) {
            $request->destDataSourceDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destDataSourceDetail, 'DestDataSourceDetail', 'json');
        }
        if (!Utils::isUnset($tmpReq->detail)) {
            $request->detailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->detail, 'Detail', 'json');
        }
        if (!Utils::isUnset($tmpReq->otsDetail)) {
            $request->otsDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->otsDetail, 'OtsDetail', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->backupType)) {
            $query['BackupType'] = $request->backupType;
        }
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->changeListPath)) {
            $query['ChangeListPath'] = $request->changeListPath;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->createTime)) {
            $query['CreateTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        if (!Utils::isUnset($request->destDataSourceDetailShrink)) {
            $query['DestDataSourceDetail'] = $request->destDataSourceDetailShrink;
        }
        if (!Utils::isUnset($request->destDataSourceId)) {
            $query['DestDataSourceId'] = $request->destDataSourceId;
        }
        if (!Utils::isUnset($request->destSourceType)) {
            $query['DestSourceType'] = $request->destSourceType;
        }
        if (!Utils::isUnset($request->detailShrink)) {
            $query['Detail'] = $request->detailShrink;
        }
        if (!Utils::isUnset($request->disabled)) {
            $query['Disabled'] = $request->disabled;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->keepLatestSnapshots)) {
            $query['KeepLatestSnapshots'] = $request->keepLatestSnapshots;
        }
        if (!Utils::isUnset($request->planName)) {
            $query['PlanName'] = $request->planName;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['Prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        if (!Utils::isUnset($request->schedule)) {
            $query['Schedule'] = $request->schedule;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->udmRegionId)) {
            $query['UdmRegionId'] = $request->udmRegionId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $body = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $body['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->exclude)) {
            $body['Exclude'] = $request->exclude;
        }
        if (!Utils::isUnset($request->include_)) {
            $body['Include'] = $request->include_;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->otsDetailShrink)) {
            $body['OtsDetail'] = $request->otsDetailShrink;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->rule)) {
            $body['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->speedLimit)) {
            $body['SpeedLimit'] = $request->speedLimit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBackupPlan',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateBackupPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create a backup plan.
     *  *
     * @description - A backup plan associates data sources with backup policies and other necessary information for backups. After the execution of a backup plan, it generates a backup task that records the progress and results of the backup. If the backup task is successful, a backup snapshot is created. You can use the backup snapshot to create a recovery task.
     * - A backup plan supports only one type of data source.
     * - A backup plan supports only a single fixed interval backup cycle strategy.
     * - A backup plan can back up to only one backup vault.
     *  *
     * @param CreateBackupPlanRequest $request CreateBackupPlanRequest
     *
     * @return CreateBackupPlanResponse CreateBackupPlanResponse
     */
    public function createBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Installs one or more Cloud Backup clients on specified instances.
     *  *
     * @description Before you call this operation, make sure that you fully understand the billing methods and pricing of Cloud Backup. For more information, see [Billing methods and billable items](https://help.aliyun.com/document_detail/89062.html).
     *  *
     * @param CreateClientsRequest $request CreateClientsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClientsResponse CreateClientsResponse
     */
    public function createClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertSetting)) {
            $query['AlertSetting'] = $request->alertSetting;
        }
        if (!Utils::isUnset($request->clientInfo)) {
            $query['ClientInfo'] = $request->clientInfo;
        }
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->useHttps)) {
            $query['UseHttps'] = $request->useHttps;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateClients',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateClientsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClientsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Installs one or more Cloud Backup clients on specified instances.
     *  *
     * @description Before you call this operation, make sure that you fully understand the billing methods and pricing of Cloud Backup. For more information, see [Billing methods and billable items](https://help.aliyun.com/document_detail/89062.html).
     *  *
     * @param CreateClientsRequest $request CreateClientsRequest
     *
     * @return CreateClientsResponse CreateClientsResponse
     */
    public function createClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a backup plan for an SAP HANA instance.
     *  *
     * @description *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   You can specify only one type of data source in a backup plan.
     * *   You can specify only one interval as a backup cycle in a backup plan.
     * *   Each backup plan allows you to back up data to only one backup vault.
     *  *
     * @param CreateHanaBackupPlanRequest $request CreateHanaBackupPlanRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHanaBackupPlanResponse CreateHanaBackupPlanResponse
     */
    public function createHanaBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPrefix)) {
            $query['BackupPrefix'] = $request->backupPrefix;
        }
        if (!Utils::isUnset($request->backupType)) {
            $query['BackupType'] = $request->backupType;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->planName)) {
            $query['PlanName'] = $request->planName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->schedule)) {
            $query['Schedule'] = $request->schedule;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHanaBackupPlan',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateHanaBackupPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a backup plan for an SAP HANA instance.
     *  *
     * @description *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   You can specify only one type of data source in a backup plan.
     * *   You can specify only one interval as a backup cycle in a backup plan.
     * *   Each backup plan allows you to back up data to only one backup vault.
     *  *
     * @param CreateHanaBackupPlanRequest $request CreateHanaBackupPlanRequest
     *
     * @return CreateHanaBackupPlanResponse CreateHanaBackupPlanResponse
     */
    public function createHanaBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHanaBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Registers an SAP HANA instance.
     *  *
     * @description To register an SAP HANA instance, you must configure the SAP HANA connection information. After the SAP HANA instance is registered, Cloud Backup installs a backup client on the node of the SAP HANA instance.
     *  *
     * @param CreateHanaInstanceRequest $request CreateHanaInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHanaInstanceResponse CreateHanaInstanceResponse
     */
    public function createHanaInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertSetting)) {
            $query['AlertSetting'] = $request->alertSetting;
        }
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        if (!Utils::isUnset($request->ecsInstanceId)) {
            $query['EcsInstanceId'] = $request->ecsInstanceId;
        }
        if (!Utils::isUnset($request->hanaName)) {
            $query['HanaName'] = $request->hanaName;
        }
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->instanceNumber)) {
            $query['InstanceNumber'] = $request->instanceNumber;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sid)) {
            $query['Sid'] = $request->sid;
        }
        if (!Utils::isUnset($request->useSsl)) {
            $query['UseSsl'] = $request->useSsl;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->validateCertificate)) {
            $query['ValidateCertificate'] = $request->validateCertificate;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHanaInstance',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateHanaInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateHanaInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Registers an SAP HANA instance.
     *  *
     * @description To register an SAP HANA instance, you must configure the SAP HANA connection information. After the SAP HANA instance is registered, Cloud Backup installs a backup client on the node of the SAP HANA instance.
     *  *
     * @param CreateHanaInstanceRequest $request CreateHanaInstanceRequest
     *
     * @return CreateHanaInstanceResponse CreateHanaInstanceResponse
     */
    public function createHanaInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHanaInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a restore job for an SAP HANA database.
     *  *
     * @description If you call this operation to restore a database, the database is restored to a specified state. Proceed with caution. For more information, see [Restore databases to an SAP HANA instance](https://help.aliyun.com/document_detail/101178.html).
     *  *
     * @param CreateHanaRestoreRequest $request CreateHanaRestoreRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHanaRestoreResponse CreateHanaRestoreResponse
     */
    public function createHanaRestoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupPrefix)) {
            $query['BackupPrefix'] = $request->backupPrefix;
        }
        if (!Utils::isUnset($request->checkAccess)) {
            $query['CheckAccess'] = $request->checkAccess;
        }
        if (!Utils::isUnset($request->clearLog)) {
            $query['ClearLog'] = $request->clearLog;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->logPosition)) {
            $query['LogPosition'] = $request->logPosition;
        }
        if (!Utils::isUnset($request->masterClientId)) {
            $query['MasterClientId'] = $request->masterClientId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->recoveryPointInTime)) {
            $query['RecoveryPointInTime'] = $request->recoveryPointInTime;
        }
        if (!Utils::isUnset($request->sidAdmin)) {
            $query['SidAdmin'] = $request->sidAdmin;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceClusterId)) {
            $query['SourceClusterId'] = $request->sourceClusterId;
        }
        if (!Utils::isUnset($request->systemCopy)) {
            $query['SystemCopy'] = $request->systemCopy;
        }
        if (!Utils::isUnset($request->useCatalog)) {
            $query['UseCatalog'] = $request->useCatalog;
        }
        if (!Utils::isUnset($request->useDelta)) {
            $query['UseDelta'] = $request->useDelta;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        if (!Utils::isUnset($request->volumeId)) {
            $query['VolumeId'] = $request->volumeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHanaRestore',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateHanaRestoreResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateHanaRestoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a restore job for an SAP HANA database.
     *  *
     * @description If you call this operation to restore a database, the database is restored to a specified state. Proceed with caution. For more information, see [Restore databases to an SAP HANA instance](https://help.aliyun.com/document_detail/101178.html).
     *  *
     * @param CreateHanaRestoreRequest $request CreateHanaRestoreRequest
     *
     * @return CreateHanaRestoreResponse CreateHanaRestoreResponse
     */
    public function createHanaRestore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHanaRestoreWithOptions($request, $runtime);
    }

    /**
     * @summary Binds one or more data sources to a backup policy.
     *  *
     * @description *   You can bind data sources to only one policy in each request.
     * *   Elastic Compute Service (ECS) instances can be bound to only one policy.
     *  *
     * @param CreatePolicyBindingsRequest $tmpReq  CreatePolicyBindingsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyBindingsResponse CreatePolicyBindingsResponse
     */
    public function createPolicyBindingsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePolicyBindingsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->policyBindingList)) {
            $request->policyBindingListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->policyBindingList, 'PolicyBindingList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->policyBindingListShrink)) {
            $query['PolicyBindingList'] = $request->policyBindingListShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePolicyBindings',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreatePolicyBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePolicyBindingsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Binds one or more data sources to a backup policy.
     *  *
     * @description *   You can bind data sources to only one policy in each request.
     * *   Elastic Compute Service (ECS) instances can be bound to only one policy.
     *  *
     * @param CreatePolicyBindingsRequest $request CreatePolicyBindingsRequest
     *
     * @return CreatePolicyBindingsResponse CreatePolicyBindingsResponse
     */
    public function createPolicyBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyBindingsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a backup policy.
     *  *
     * @description A backup policy records the information required for backup. After you execute a backup policy, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   A backup policy supports multiple data sources. The data sources can be only Elastic Compute Service (ECS) instances.
     * *   You can specify only one interval as a backup cycle in a backup policy.
     * *   Each backup policy allows you to back up data to only one backup vault.
     *  *
     * @param CreatePolicyV2Request $tmpReq  CreatePolicyV2Request
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyV2Response CreatePolicyV2Response
     */
    public function createPolicyV2WithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePolicyV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rules)) {
            $request->rulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->policyDescription)) {
            $body['PolicyDescription'] = $request->policyDescription;
        }
        if (!Utils::isUnset($request->policyName)) {
            $body['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $body['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->rulesShrink)) {
            $body['Rules'] = $request->rulesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePolicyV2',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreatePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePolicyV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a backup policy.
     *  *
     * @description A backup policy records the information required for backup. After you execute a backup policy, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   A backup policy supports multiple data sources. The data sources can be only Elastic Compute Service (ECS) instances.
     * *   You can specify only one interval as a backup cycle in a backup policy.
     * *   Each backup policy allows you to back up data to only one backup vault.
     *  *
     * @param CreatePolicyV2Request $request CreatePolicyV2Request
     *
     * @return CreatePolicyV2Response CreatePolicyV2Response
     */
    public function createPolicyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyV2WithOptions($request, $runtime);
    }

    /**
     * @summary Creates a mirror vault.
     *  *
     * @description After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state.Call this operation in the region where the mirror vault resides, which is specified by the VaultRegionId parameter.
     *  *
     * @param CreateReplicationVaultRequest $request CreateReplicationVaultRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateReplicationVaultResponse CreateReplicationVaultResponse
     */
    public function createReplicationVaultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encryptType)) {
            $query['EncryptType'] = $request->encryptType;
        }
        if (!Utils::isUnset($request->kmsKeyId)) {
            $query['KmsKeyId'] = $request->kmsKeyId;
        }
        if (!Utils::isUnset($request->redundancyType)) {
            $query['RedundancyType'] = $request->redundancyType;
        }
        if (!Utils::isUnset($request->replicationSourceRegionId)) {
            $query['ReplicationSourceRegionId'] = $request->replicationSourceRegionId;
        }
        if (!Utils::isUnset($request->replicationSourceVaultId)) {
            $query['ReplicationSourceVaultId'] = $request->replicationSourceVaultId;
        }
        if (!Utils::isUnset($request->vaultName)) {
            $query['VaultName'] = $request->vaultName;
        }
        if (!Utils::isUnset($request->vaultRegionId)) {
            $query['VaultRegionId'] = $request->vaultRegionId;
        }
        if (!Utils::isUnset($request->vaultStorageClass)) {
            $query['VaultStorageClass'] = $request->vaultStorageClass;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateReplicationVault',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateReplicationVaultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateReplicationVaultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a mirror vault.
     *  *
     * @description After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state.Call this operation in the region where the mirror vault resides, which is specified by the VaultRegionId parameter.
     *  *
     * @param CreateReplicationVaultRequest $request CreateReplicationVaultRequest
     *
     * @return CreateReplicationVaultResponse CreateReplicationVaultResponse
     */
    public function createReplicationVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReplicationVaultWithOptions($request, $runtime);
    }

    /**
     * @summary Create a restore job.
     *  *
     * @description - Create a restore job based on the selected snapshot and the restore destination.
     * - Currently, the data source type must match the restore destination data source type.
     *  *
     * @param CreateRestoreJobRequest $tmpReq  CreateRestoreJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRestoreJobResponse CreateRestoreJobResponse
     */
    public function createRestoreJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRestoreJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->failbackDetail)) {
            $request->failbackDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->failbackDetail, 'FailbackDetail', 'json');
        }
        if (!Utils::isUnset($tmpReq->otsDetail)) {
            $request->otsDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->otsDetail, 'OtsDetail', 'json');
        }
        if (!Utils::isUnset($tmpReq->udmDetail)) {
            $request->udmDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->udmDetail, 'UdmDetail', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        if (!Utils::isUnset($request->failbackDetailShrink)) {
            $query['FailbackDetail'] = $request->failbackDetailShrink;
        }
        if (!Utils::isUnset($request->initiatedByAck)) {
            $query['InitiatedByAck'] = $request->initiatedByAck;
        }
        if (!Utils::isUnset($request->options)) {
            $query['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->restoreType)) {
            $query['RestoreType'] = $request->restoreType;
        }
        if (!Utils::isUnset($request->snapshotHash)) {
            $query['SnapshotHash'] = $request->snapshotHash;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->targetBucket)) {
            $query['TargetBucket'] = $request->targetBucket;
        }
        if (!Utils::isUnset($request->targetContainer)) {
            $query['TargetContainer'] = $request->targetContainer;
        }
        if (!Utils::isUnset($request->targetContainerClusterId)) {
            $query['TargetContainerClusterId'] = $request->targetContainerClusterId;
        }
        if (!Utils::isUnset($request->targetCreateTime)) {
            $query['TargetCreateTime'] = $request->targetCreateTime;
        }
        if (!Utils::isUnset($request->targetFileSystemId)) {
            $query['TargetFileSystemId'] = $request->targetFileSystemId;
        }
        if (!Utils::isUnset($request->targetInstanceName)) {
            $query['TargetInstanceName'] = $request->targetInstanceName;
        }
        if (!Utils::isUnset($request->targetPrefix)) {
            $query['TargetPrefix'] = $request->targetPrefix;
        }
        if (!Utils::isUnset($request->targetTableName)) {
            $query['TargetTableName'] = $request->targetTableName;
        }
        if (!Utils::isUnset($request->targetTime)) {
            $query['TargetTime'] = $request->targetTime;
        }
        if (!Utils::isUnset($request->udmDetailShrink)) {
            $query['UdmDetail'] = $request->udmDetailShrink;
        }
        if (!Utils::isUnset($request->udmRegionId)) {
            $query['UdmRegionId'] = $request->udmRegionId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $body = [];
        if (!Utils::isUnset($request->exclude)) {
            $body['Exclude'] = $request->exclude;
        }
        if (!Utils::isUnset($request->include_)) {
            $body['Include'] = $request->include_;
        }
        if (!Utils::isUnset($request->otsDetailShrink)) {
            $body['OtsDetail'] = $request->otsDetailShrink;
        }
        if (!Utils::isUnset($request->targetInstanceId)) {
            $body['TargetInstanceId'] = $request->targetInstanceId;
        }
        if (!Utils::isUnset($request->targetPath)) {
            $body['TargetPath'] = $request->targetPath;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRestoreJob',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateRestoreJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRestoreJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create a restore job.
     *  *
     * @description - Create a restore job based on the selected snapshot and the restore destination.
     * - Currently, the data source type must match the restore destination data source type.
     *  *
     * @param CreateRestoreJobRequest $request CreateRestoreJobRequest
     *
     * @return CreateRestoreJobResponse CreateRestoreJobResponse
     */
    public function createRestoreJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRestoreJobWithOptions($request, $runtime);
    }

    /**
     * @summary Generates the parameters and signature required for a file upload URL.
     *  *
     * @description 1.  You can directly upload a file to Object Storage Service (OSS) by using a form based on the returned value of this operation.
     * 2.  For more information about how to upload a file to OSS by using a form, see OSS documentation.
     * 3.  The system periodically deletes files that are uploaded to OSS.
     *  *
     * @param CreateTempFileUploadUrlRequest $request CreateTempFileUploadUrlRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTempFileUploadUrlResponse CreateTempFileUploadUrlResponse
     */
    public function createTempFileUploadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTempFileUploadUrl',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateTempFileUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTempFileUploadUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Generates the parameters and signature required for a file upload URL.
     *  *
     * @description 1.  You can directly upload a file to Object Storage Service (OSS) by using a form based on the returned value of this operation.
     * 2.  For more information about how to upload a file to OSS by using a form, see OSS documentation.
     * 3.  The system periodically deletes files that are uploaded to OSS.
     *  *
     * @param CreateTempFileUploadUrlRequest $request CreateTempFileUploadUrlRequest
     *
     * @return CreateTempFileUploadUrlResponse CreateTempFileUploadUrlResponse
     */
    public function createTempFileUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTempFileUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a backup vault.
     *  *
     * @description *   Each Alibaba Cloud account can create up to 100 backup vaults.
     * *   After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state. A backup job can use a backup vault to store backup data only if the backup vault is in the CREATED state.
     *     **
     *     **Note** Before you call this operation, make sure that you fully understand the billing of Cloud Backup.
     *  *
     * @param CreateVaultRequest $request CreateVaultRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVaultResponse CreateVaultResponse
     */
    public function createVaultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encryptType)) {
            $query['EncryptType'] = $request->encryptType;
        }
        if (!Utils::isUnset($request->kmsKeyId)) {
            $query['KmsKeyId'] = $request->kmsKeyId;
        }
        if (!Utils::isUnset($request->vaultName)) {
            $query['VaultName'] = $request->vaultName;
        }
        if (!Utils::isUnset($request->vaultRegionId)) {
            $query['VaultRegionId'] = $request->vaultRegionId;
        }
        if (!Utils::isUnset($request->vaultStorageClass)) {
            $query['VaultStorageClass'] = $request->vaultStorageClass;
        }
        if (!Utils::isUnset($request->vaultType)) {
            $query['VaultType'] = $request->vaultType;
        }
        if (!Utils::isUnset($request->wormEnabled)) {
            $query['WormEnabled'] = $request->wormEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVault',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateVaultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVaultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a backup vault.
     *  *
     * @description *   Each Alibaba Cloud account can create up to 100 backup vaults.
     * *   After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state. A backup job can use a backup vault to store backup data only if the backup vault is in the CREATED state.
     *     **
     *     **Note** Before you call this operation, make sure that you fully understand the billing of Cloud Backup.
     *  *
     * @param CreateVaultRequest $request CreateVaultRequest
     *
     * @return CreateVaultResponse CreateVaultResponse
     */
    public function createVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVaultWithOptions($request, $runtime);
    }

    /**
     * @summary Removes the Elastic Compute Service (ECS) instance that is used for restoration only in ECS Backup Essential Edition.
     *  *
     * @param DeleteAirEcsInstanceRequest $tmpReq  DeleteAirEcsInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAirEcsInstanceResponse DeleteAirEcsInstanceResponse
     */
    public function deleteAirEcsInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteAirEcsInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->uninstallClientSourceTypes)) {
            $request->uninstallClientSourceTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->uninstallClientSourceTypes, 'UninstallClientSourceTypes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ecsInstanceId)) {
            $query['EcsInstanceId'] = $request->ecsInstanceId;
        }
        if (!Utils::isUnset($request->uninstallClientSourceTypesShrink)) {
            $query['UninstallClientSourceTypes'] = $request->uninstallClientSourceTypesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAirEcsInstance',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAirEcsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAirEcsInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Removes the Elastic Compute Service (ECS) instance that is used for restoration only in ECS Backup Essential Edition.
     *  *
     * @param DeleteAirEcsInstanceRequest $request DeleteAirEcsInstanceRequest
     *
     * @return DeleteAirEcsInstanceResponse DeleteAirEcsInstanceResponse
     */
    public function deleteAirEcsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAirEcsInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Cloud Backup client.
     *  *
     * @description *   You cannot delete the active Cloud Backup clients that receive heartbeat packets within 1 hour. You can call the UninstallBackupClients operation to uninstall a Cloud Backup client. Then, the client becomes inactive.
     * *   When you perform this operation, resources that are associated with the client are also deleted, including:
     *     *   Backup plans
     *     *   Backup jobs
     *     *   Snapshots
     *  *
     * @param DeleteBackupClientRequest $request DeleteBackupClientRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBackupClientResponse DeleteBackupClientResponse
     */
    public function deleteBackupClientWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBackupClient',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteBackupClientResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteBackupClientResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Cloud Backup client.
     *  *
     * @description *   You cannot delete the active Cloud Backup clients that receive heartbeat packets within 1 hour. You can call the UninstallBackupClients operation to uninstall a Cloud Backup client. Then, the client becomes inactive.
     * *   When you perform this operation, resources that are associated with the client are also deleted, including:
     *     *   Backup plans
     *     *   Backup jobs
     *     *   Snapshots
     *  *
     * @param DeleteBackupClientRequest $request DeleteBackupClientRequest
     *
     * @return DeleteBackupClientResponse DeleteBackupClientResponse
     */
    public function deleteBackupClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupClientWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the resources that are related to one or more HBR clients.
     *  *
     * @description This operation deletes only the resources that are related to HBR clients. The resources include backup plans, backup jobs, and backup snapshots. The operation does not delete HBR clients.
     *  *
     * @param DeleteBackupClientResourceRequest $tmpReq  DeleteBackupClientResourceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBackupClientResourceResponse DeleteBackupClientResourceResponse
     */
    public function deleteBackupClientResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteBackupClientResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clientIds)) {
            $request->clientIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clientIds, 'ClientIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientIdsShrink)) {
            $query['ClientIds'] = $request->clientIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBackupClientResource',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteBackupClientResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteBackupClientResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes the resources that are related to one or more HBR clients.
     *  *
     * @description This operation deletes only the resources that are related to HBR clients. The resources include backup plans, backup jobs, and backup snapshots. The operation does not delete HBR clients.
     *  *
     * @param DeleteBackupClientResourceRequest $request DeleteBackupClientResourceRequest
     *
     * @return DeleteBackupClientResourceResponse DeleteBackupClientResourceResponse
     */
    public function deleteBackupClientResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupClientResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a backup plan.
     *  *
     * @description *   If you delete a backup plan, the backup jobs are also deleted.
     * *   If you delete a backup plan, the created snapshot files are not deleted.
     *  *
     * @param DeleteBackupPlanRequest $request DeleteBackupPlanRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBackupPlanResponse DeleteBackupPlanResponse
     */
    public function deleteBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->requireNoRunningJobs)) {
            $query['RequireNoRunningJobs'] = $request->requireNoRunningJobs;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBackupPlan',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteBackupPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a backup plan.
     *  *
     * @description *   If you delete a backup plan, the backup jobs are also deleted.
     * *   If you delete a backup plan, the created snapshot files are not deleted.
     *  *
     * @param DeleteBackupPlanRequest $request DeleteBackupPlanRequest
     *
     * @return DeleteBackupPlanResponse DeleteBackupPlanResponse
     */
    public function deleteBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClientRequest $request DeleteClientRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClientResponse DeleteClientResponse
     */
    public function deleteClientWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteClient',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteClientResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClientResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteClientRequest $request DeleteClientRequest
     *
     * @return DeleteClientResponse DeleteClientResponse
     */
    public function deleteClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an SAP HANA backup plan.
     *  *
     * @param DeleteHanaBackupPlanRequest $request DeleteHanaBackupPlanRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHanaBackupPlanResponse DeleteHanaBackupPlanResponse
     */
    public function deleteHanaBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHanaBackupPlan',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteHanaBackupPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an SAP HANA backup plan.
     *  *
     * @param DeleteHanaBackupPlanRequest $request DeleteHanaBackupPlanRequest
     *
     * @return DeleteHanaBackupPlanResponse DeleteHanaBackupPlanResponse
     */
    public function deleteHanaBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHanaBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an SAP HANA instance.
     *  *
     * @description If you delete an SAP HANA instance, the existing backup data is also deleted and the running backup and restore jobs fail to be completed. Before you delete the SAP HANA instance, make sure that you no longer need the backup data of the instance and no backup or restore jobs are running for the instance. To delete an SAP HANA instance, you must specify the security identifier (SID) of the instance. The SID is three characters in length and starts with a letter. For more information, see [How to find sid user and instance number of HANA db?](https://answers.sap.com/questions/555192/how-to-find-sid-user-and-instance-number-of-hana-d.html?)
     *  *
     * @param DeleteHanaInstanceRequest $request DeleteHanaInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHanaInstanceResponse DeleteHanaInstanceResponse
     */
    public function deleteHanaInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sid)) {
            $query['Sid'] = $request->sid;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHanaInstance',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteHanaInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteHanaInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an SAP HANA instance.
     *  *
     * @description If you delete an SAP HANA instance, the existing backup data is also deleted and the running backup and restore jobs fail to be completed. Before you delete the SAP HANA instance, make sure that you no longer need the backup data of the instance and no backup or restore jobs are running for the instance. To delete an SAP HANA instance, you must specify the security identifier (SID) of the instance. The SID is three characters in length and starts with a letter. For more information, see [How to find sid user and instance number of HANA db?](https://answers.sap.com/questions/555192/how-to-find-sid-user-and-instance-number-of-hana-d.html?)
     *  *
     * @param DeleteHanaInstanceRequest $request DeleteHanaInstanceRequest
     *
     * @return DeleteHanaInstanceResponse DeleteHanaInstanceResponse
     */
    public function deleteHanaInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHanaInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates one or more data sources from a backup policy. After you disassociate the data sources from the backup policy, the backup policy no longer protects the data sources. Proceed with caution.
     *  *
     * @param DeletePolicyBindingRequest $tmpReq  DeletePolicyBindingRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyBindingResponse DeletePolicyBindingResponse
     */
    public function deletePolicyBindingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeletePolicyBindingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dataSourceIds)) {
            $request->dataSourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dataSourceIds, 'DataSourceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $body = [];
        if (!Utils::isUnset($request->dataSourceIdsShrink)) {
            $body['DataSourceIds'] = $request->dataSourceIdsShrink;
        }
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicyBinding',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeletePolicyBindingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePolicyBindingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Disassociates one or more data sources from a backup policy. After you disassociate the data sources from the backup policy, the backup policy no longer protects the data sources. Proceed with caution.
     *  *
     * @param DeletePolicyBindingRequest $request DeletePolicyBindingRequest
     *
     * @return DeletePolicyBindingResponse DeletePolicyBindingResponse
     */
    public function deletePolicyBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyBindingWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a backup policy.
     *  *
     * @description If you delete a backup policy, the backup policy is disassociated with all data sources. Proceed with caution.
     *  *
     * @param DeletePolicyV2Request $request DeletePolicyV2Request
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyV2Response DeletePolicyV2Response
     */
    public function deletePolicyV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicyV2',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeletePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePolicyV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a backup policy.
     *  *
     * @description If you delete a backup policy, the backup policy is disassociated with all data sources. Proceed with caution.
     *  *
     * @param DeletePolicyV2Request $request DeletePolicyV2Request
     *
     * @return DeletePolicyV2Response DeletePolicyV2Response
     */
    public function deletePolicyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyV2WithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a backup snapshot.
     *  *
     * @description If you delete the most recent backup snapshot for a data source, you must set the Force parameter to `true`. Otherwise, an error occurs.
     *  *
     * @param DeleteSnapshotRequest $request DeleteSnapshotRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshot',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSnapshotResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a backup snapshot.
     *  *
     * @description If you delete the most recent backup snapshot for a data source, you must set the Force parameter to `true`. Otherwise, an error occurs.
     *  *
     * @param DeleteSnapshotRequest $request DeleteSnapshotRequest
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels a protected disk.
     *  *
     * @param DeleteUdmDiskRequest $request DeleteUdmDiskRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUdmDiskResponse DeleteUdmDiskResponse
     */
    public function deleteUdmDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUdmDisk',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteUdmDiskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteUdmDiskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Cancels a protected disk.
     *  *
     * @param DeleteUdmDiskRequest $request DeleteUdmDiskRequest
     *
     * @return DeleteUdmDiskResponse DeleteUdmDiskResponse
     */
    public function deleteUdmDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUdmDiskWithOptions($request, $runtime);
    }

    /**
     * @summary Stops protection for Elastic Compute Service (ECS) instance backup.
     *  *
     * @param DeleteUdmEcsInstanceRequest $request DeleteUdmEcsInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUdmEcsInstanceResponse DeleteUdmEcsInstanceResponse
     */
    public function deleteUdmEcsInstanceWithOptions($request, $runtime)
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
            'action'      => 'DeleteUdmEcsInstance',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteUdmEcsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteUdmEcsInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Stops protection for Elastic Compute Service (ECS) instance backup.
     *  *
     * @param DeleteUdmEcsInstanceRequest $request DeleteUdmEcsInstanceRequest
     *
     * @return DeleteUdmEcsInstanceResponse DeleteUdmEcsInstanceResponse
     */
    public function deleteUdmEcsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUdmEcsInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a backup vault.
     *  *
     * @description *   You cannot delete a backup vault within 2 hours after the backup vault is created or a backup vault that is in the INITIALIZING state.
     * *   After you delete a backup vault, all resources that are associated with the backup vault are deleted. The resources include the Cloud Backup client of the old version, backup plans, backup jobs, snapshots, and restore jobs.
     *  *
     * @param DeleteVaultRequest $request DeleteVaultRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVaultResponse DeleteVaultResponse
     */
    public function deleteVaultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVault',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteVaultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVaultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a backup vault.
     *  *
     * @description *   You cannot delete a backup vault within 2 hours after the backup vault is created or a backup vault that is in the INITIALIZING state.
     * *   After you delete a backup vault, all resources that are associated with the backup vault are deleted. The resources include the Cloud Backup client of the old version, backup plans, backup jobs, snapshots, and restore jobs.
     *  *
     * @param DeleteVaultRequest $request DeleteVaultRequest
     *
     * @return DeleteVaultResponse DeleteVaultResponse
     */
    public function deleteVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVaultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about one or more HBR clients that meet the specified conditions.
     *  *
     * @param DescribeBackupClientsRequest $tmpReq  DescribeBackupClientsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupClientsResponse DescribeBackupClientsResponse
     */
    public function describeBackupClientsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeBackupClientsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clientIds)) {
            $request->clientIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clientIds, 'ClientIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->clientIdsShrink)) {
            $body['ClientIds'] = $request->clientIdsShrink;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $body['InstanceIds'] = $request->instanceIdsShrink;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupClients',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupClientsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about one or more HBR clients that meet the specified conditions.
     *  *
     * @param DescribeBackupClientsRequest $request DescribeBackupClientsRequest
     *
     * @return DescribeBackupClientsResponse DescribeBackupClientsResponse
     */
    public function describeBackupClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupClientsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about one or more backup jobs that meet the specified conditions.
     *  *
     * @param DescribeBackupJobs2Request $request DescribeBackupJobs2Request
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupJobs2Response DescribeBackupJobs2Response
     */
    public function describeBackupJobs2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortDirection)) {
            $query['SortDirection'] = $request->sortDirection;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupJobs2',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackupJobs2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupJobs2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about one or more backup jobs that meet the specified conditions.
     *  *
     * @param DescribeBackupJobs2Request $request DescribeBackupJobs2Request
     *
     * @return DescribeBackupJobs2Response DescribeBackupJobs2Response
     */
    public function describeBackupJobs2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupJobs2WithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about one or more backup plans that meet the specified conditions.
     *  *
     * @param DescribeBackupPlansRequest $request DescribeBackupPlansRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupPlansResponse DescribeBackupPlansResponse
     */
    public function describeBackupPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPlans',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackupPlansResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupPlansResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about one or more backup plans that meet the specified conditions.
     *  *
     * @param DescribeBackupPlansRequest $request DescribeBackupPlansRequest
     *
     * @return DescribeBackupPlansResponse DescribeBackupPlansResponse
     */
    public function describeBackupPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPlansWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more Cloud Backup clients that meet the specified conditions.
     *  *
     * @description This operation is applicable only to SAP HANA backup. For Cloud Backup clients of other data sources, call the DescribeBackupClients operation.
     *  *
     * @param DescribeClientsRequest $request DescribeClientsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClientsResponse DescribeClientsResponse
     */
    public function describeClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClients',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeClientsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeClientsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries one or more Cloud Backup clients that meet the specified conditions.
     *  *
     * @description This operation is applicable only to SAP HANA backup. For Cloud Backup clients of other data sources, call the DescribeBackupClients operation.
     *  *
     * @param DescribeClientsRequest $request DescribeClientsRequest
     *
     * @return DescribeClientsResponse DescribeClientsResponse
     */
    public function describeClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more container clusters that meet the specified conditions.
     *  *
     * @description You can call this operation to query only Container Service for Kubernetes (ACK) clusters.
     *  *
     * @param DescribeContainerClusterRequest $request DescribeContainerClusterRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContainerClusterResponse DescribeContainerClusterResponse
     */
    public function describeContainerClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerCluster',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeContainerClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeContainerClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries one or more container clusters that meet the specified conditions.
     *  *
     * @description You can call this operation to query only Container Service for Kubernetes (ACK) clusters.
     *  *
     * @param DescribeContainerClusterRequest $request DescribeContainerClusterRequest
     *
     * @return DescribeContainerClusterResponse DescribeContainerClusterResponse
     */
    public function describeContainerCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the accounts used in cross-account backup.
     *  *
     * @param DescribeCrossAccountsRequest $request DescribeCrossAccountsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCrossAccountsResponse DescribeCrossAccountsResponse
     */
    public function describeCrossAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCrossAccounts',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeCrossAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCrossAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the accounts used in cross-account backup.
     *  *
     * @param DescribeCrossAccountsRequest $request DescribeCrossAccountsRequest
     *
     * @return DescribeCrossAccountsResponse DescribeCrossAccountsResponse
     */
    public function describeCrossAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more SAP HANA backup plans that meet the specified conditions.
     *  *
     * @param DescribeHanaBackupPlansRequest $request DescribeHanaBackupPlansRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHanaBackupPlansResponse DescribeHanaBackupPlansResponse
     */
    public function describeHanaBackupPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHanaBackupPlans',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHanaBackupPlansResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHanaBackupPlansResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries one or more SAP HANA backup plans that meet the specified conditions.
     *  *
     * @param DescribeHanaBackupPlansRequest $request DescribeHanaBackupPlansRequest
     *
     * @return DescribeHanaBackupPlansResponse DescribeHanaBackupPlansResponse
     */
    public function describeHanaBackupPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaBackupPlansWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the backup parameters of an SAP HANA database.
     *  *
     * @description If you want to query the backup retention period of a database, you can call the DescribeHanaRetentionSetting operation.
     *  *
     * @param DescribeHanaBackupSettingRequest $request DescribeHanaBackupSettingRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHanaBackupSettingResponse DescribeHanaBackupSettingResponse
     */
    public function describeHanaBackupSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHanaBackupSetting',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHanaBackupSettingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHanaBackupSettingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the backup parameters of an SAP HANA database.
     *  *
     * @description If you want to query the backup retention period of a database, you can call the DescribeHanaRetentionSetting operation.
     *  *
     * @param DescribeHanaBackupSettingRequest $request DescribeHanaBackupSettingRequest
     *
     * @return DescribeHanaBackupSettingResponse DescribeHanaBackupSettingResponse
     */
    public function describeHanaBackupSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaBackupSettingWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more SAP HANA backups that meet the specified conditions.
     *  *
     * @description After you call the DescribeHanaBackupsAsync operation to query the SAP HANA backups that meet the specified conditions, call the DescribeTask operation to query the final result.
     *  *
     * @param DescribeHanaBackupsAsyncRequest $request DescribeHanaBackupsAsyncRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHanaBackupsAsyncResponse DescribeHanaBackupsAsyncResponse
     */
    public function describeHanaBackupsAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->includeDifferential)) {
            $query['IncludeDifferential'] = $request->includeDifferential;
        }
        if (!Utils::isUnset($request->includeIncremental)) {
            $query['IncludeIncremental'] = $request->includeIncremental;
        }
        if (!Utils::isUnset($request->includeLog)) {
            $query['IncludeLog'] = $request->includeLog;
        }
        if (!Utils::isUnset($request->logPosition)) {
            $query['LogPosition'] = $request->logPosition;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->recoveryPointInTime)) {
            $query['RecoveryPointInTime'] = $request->recoveryPointInTime;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceClusterId)) {
            $query['SourceClusterId'] = $request->sourceClusterId;
        }
        if (!Utils::isUnset($request->systemCopy)) {
            $query['SystemCopy'] = $request->systemCopy;
        }
        if (!Utils::isUnset($request->useBackint)) {
            $query['UseBackint'] = $request->useBackint;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        if (!Utils::isUnset($request->volumeId)) {
            $query['VolumeId'] = $request->volumeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHanaBackupsAsync',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHanaBackupsAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHanaBackupsAsyncResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries one or more SAP HANA backups that meet the specified conditions.
     *  *
     * @description After you call the DescribeHanaBackupsAsync operation to query the SAP HANA backups that meet the specified conditions, call the DescribeTask operation to query the final result.
     *  *
     * @param DescribeHanaBackupsAsyncRequest $request DescribeHanaBackupsAsyncRequest
     *
     * @return DescribeHanaBackupsAsyncResponse DescribeHanaBackupsAsyncResponse
     */
    public function describeHanaBackupsAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaBackupsAsyncWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about SAP HANA databases.
     *  *
     * @description After you register an SAP HANA instance and install a Cloud Backup client on the instance, you can call this operation to query the information about SAP HANA databases. You can call the StartHanaDatabaseAsync operation to start a database and call the StopHanaDatabaseAsync operation to stop a database.
     *  *
     * @param DescribeHanaDatabasesRequest $request DescribeHanaDatabasesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHanaDatabasesResponse DescribeHanaDatabasesResponse
     */
    public function describeHanaDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHanaDatabases',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHanaDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHanaDatabasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about SAP HANA databases.
     *  *
     * @description After you register an SAP HANA instance and install a Cloud Backup client on the instance, you can call this operation to query the information about SAP HANA databases. You can call the StartHanaDatabaseAsync operation to start a database and call the StopHanaDatabaseAsync operation to stop a database.
     *  *
     * @param DescribeHanaDatabasesRequest $request DescribeHanaDatabasesRequest
     *
     * @return DescribeHanaDatabasesResponse DescribeHanaDatabasesResponse
     */
    public function describeHanaDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaDatabasesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more SAP HANA instances that meet the specified conditions.
     *  *
     * @param DescribeHanaInstancesRequest $request DescribeHanaInstancesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHanaInstancesResponse DescribeHanaInstancesResponse
     */
    public function describeHanaInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $body = [];
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeHanaInstances',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHanaInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHanaInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries one or more SAP HANA instances that meet the specified conditions.
     *  *
     * @param DescribeHanaInstancesRequest $request DescribeHanaInstancesRequest
     *
     * @return DescribeHanaInstancesResponse DescribeHanaInstancesResponse
     */
    public function describeHanaInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more SAP HANA restore jobs that meet the specified conditions.
     *  *
     * @param DescribeHanaRestoresRequest $request DescribeHanaRestoresRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHanaRestoresResponse DescribeHanaRestoresResponse
     */
    public function describeHanaRestoresWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->restoreId)) {
            $query['RestoreId'] = $request->restoreId;
        }
        if (!Utils::isUnset($request->restoreStatus)) {
            $query['RestoreStatus'] = $request->restoreStatus;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHanaRestores',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHanaRestoresResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHanaRestoresResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries one or more SAP HANA restore jobs that meet the specified conditions.
     *  *
     * @param DescribeHanaRestoresRequest $request DescribeHanaRestoresRequest
     *
     * @return DescribeHanaRestoresResponse DescribeHanaRestoresResponse
     */
    public function describeHanaRestores($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaRestoresWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the backup retention period of an SAP HANA database.
     *  *
     * @description *   If you want to query the backup parameters of a database, you can call the DescribeHanaBackupSetting operation.
     * *   Cloud Backup deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *  *
     * @param DescribeHanaRetentionSettingRequest $request DescribeHanaRetentionSettingRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHanaRetentionSettingResponse DescribeHanaRetentionSettingResponse
     */
    public function describeHanaRetentionSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHanaRetentionSetting',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHanaRetentionSettingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHanaRetentionSettingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the backup retention period of an SAP HANA database.
     *  *
     * @description *   If you want to query the backup parameters of a database, you can call the DescribeHanaBackupSetting operation.
     * *   Cloud Backup deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *  *
     * @param DescribeHanaRetentionSettingRequest $request DescribeHanaRetentionSettingRequest
     *
     * @return DescribeHanaRetentionSettingResponse DescribeHanaRetentionSettingResponse
     */
    public function describeHanaRetentionSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHanaRetentionSettingWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about Tablestore instances that are backed up.
     *  *
     * @param DescribeOtsTableSnapshotsRequest $request DescribeOtsTableSnapshotsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOtsTableSnapshotsResponse DescribeOtsTableSnapshotsResponse
     */
    public function describeOtsTableSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->otsInstances)) {
            $bodyFlat['OtsInstances'] = $request->otsInstances;
        }
        if (!Utils::isUnset($request->snapshotIds)) {
            $bodyFlat['SnapshotIds'] = $request->snapshotIds;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOtsTableSnapshots',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeOtsTableSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOtsTableSnapshotsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about Tablestore instances that are backed up.
     *  *
     * @param DescribeOtsTableSnapshotsRequest $request DescribeOtsTableSnapshotsRequest
     *
     * @return DescribeOtsTableSnapshotsResponse DescribeOtsTableSnapshotsResponse
     */
    public function describeOtsTableSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOtsTableSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more backup policies.
     *  *
     * @param DescribePoliciesV2Request $request DescribePoliciesV2Request
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePoliciesV2Response DescribePoliciesV2Response
     */
    public function describePoliciesV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribePoliciesV2',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePoliciesV2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePoliciesV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries one or more backup policies.
     *  *
     * @param DescribePoliciesV2Request $request DescribePoliciesV2Request
     *
     * @return DescribePoliciesV2Response DescribePoliciesV2Response
     */
    public function describePoliciesV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePoliciesV2WithOptions($request, $runtime);
    }

    /**
     * @summary Query one or more data sources bound to a policy, or query one or more policies bound to a data source.
     *  *
     * @param DescribePolicyBindingsRequest $tmpReq  DescribePolicyBindingsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyBindingsResponse DescribePolicyBindingsResponse
     */
    public function describePolicyBindingsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribePolicyBindingsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dataSourceIds)) {
            $request->dataSourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dataSourceIds, 'DataSourceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $body = [];
        if (!Utils::isUnset($request->dataSourceIdsShrink)) {
            $body['DataSourceIds'] = $request->dataSourceIdsShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyBindings',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePolicyBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePolicyBindingsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query one or more data sources bound to a policy, or query one or more policies bound to a data source.
     *  *
     * @param DescribePolicyBindingsRequest $request DescribePolicyBindingsRequest
     *
     * @return DescribePolicyBindingsResponse DescribePolicyBindingsResponse
     */
    public function describePolicyBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyBindingsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tables of a restorable Tablestore instance.
     *  *
     * @param DescribeRecoverableOtsInstancesRequest $request DescribeRecoverableOtsInstancesRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecoverableOtsInstancesResponse DescribeRecoverableOtsInstancesResponse
     */
    public function describeRecoverableOtsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecoverableOtsInstances',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRecoverableOtsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRecoverableOtsInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the tables of a restorable Tablestore instance.
     *  *
     * @param DescribeRecoverableOtsInstancesRequest $request DescribeRecoverableOtsInstancesRequest
     *
     * @return DescribeRecoverableOtsInstancesResponse DescribeRecoverableOtsInstancesResponse
     */
    public function describeRecoverableOtsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecoverableOtsInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available regions.
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
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries available regions.
     *  *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @summary Queries one or more restore jobs that meet the specified conditions.
     *  *
     * @param DescribeRestoreJobs2Request $request DescribeRestoreJobs2Request
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRestoreJobs2Response DescribeRestoreJobs2Response
     */
    public function describeRestoreJobs2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->restoreType)) {
            $query['RestoreType'] = $request->restoreType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRestoreJobs2',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRestoreJobs2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRestoreJobs2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries one or more restore jobs that meet the specified conditions.
     *  *
     * @param DescribeRestoreJobs2Request $request DescribeRestoreJobs2Request
     *
     * @return DescribeRestoreJobs2Response DescribeRestoreJobs2Response
     */
    public function describeRestoreJobs2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreJobs2WithOptions($request, $runtime);
    }

    /**
     * @summary Queries an asynchronous job.
     *  *
     * @param DescribeTaskRequest $request DescribeTaskRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTaskResponse DescribeTaskResponse
     */
    public function describeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTask',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries an asynchronous job.
     *  *
     * @param DescribeTaskRequest $request DescribeTaskRequest
     *
     * @return DescribeTaskResponse DescribeTaskResponse
     */
    public function describeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the backup snapshots of an Elastic Compute Service (ECS) instance.
     *  *
     * @param DescribeUdmSnapshotsRequest $tmpReq  DescribeUdmSnapshotsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUdmSnapshotsResponse DescribeUdmSnapshotsResponse
     */
    public function describeUdmSnapshotsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeUdmSnapshotsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->snapshotIds)) {
            $request->snapshotIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->snapshotIds, 'SnapshotIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->udmRegionId)) {
            $query['UdmRegionId'] = $request->udmRegionId;
        }
        $body = [];
        if (!Utils::isUnset($request->snapshotIdsShrink)) {
            $body['SnapshotIds'] = $request->snapshotIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeUdmSnapshots',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeUdmSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeUdmSnapshotsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the backup snapshots of an Elastic Compute Service (ECS) instance.
     *  *
     * @param DescribeUdmSnapshotsRequest $request DescribeUdmSnapshotsRequest
     *
     * @return DescribeUdmSnapshotsResponse DescribeUdmSnapshotsResponse
     */
    public function describeUdmSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUdmSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the regions that support cross-region replication.
     *  *
     * @param DescribeVaultReplicationRegionsRequest $request DescribeVaultReplicationRegionsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVaultReplicationRegionsResponse DescribeVaultReplicationRegionsResponse
     */
    public function describeVaultReplicationRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVaultReplicationRegions',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeVaultReplicationRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeVaultReplicationRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the regions that support cross-region replication.
     *  *
     * @param DescribeVaultReplicationRegionsRequest $request DescribeVaultReplicationRegionsRequest
     *
     * @return DescribeVaultReplicationRegionsResponse DescribeVaultReplicationRegionsResponse
     */
    public function describeVaultReplicationRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVaultReplicationRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about one or more backup vaults that meet the specified conditions.
     *  *
     * @param DescribeVaultsRequest $request DescribeVaultsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVaultsResponse DescribeVaultsResponse
     */
    public function describeVaultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        if (!Utils::isUnset($request->vaultName)) {
            $query['VaultName'] = $request->vaultName;
        }
        if (!Utils::isUnset($request->vaultRegionId)) {
            $query['VaultRegionId'] = $request->vaultRegionId;
        }
        if (!Utils::isUnset($request->vaultType)) {
            $query['VaultType'] = $request->vaultType;
        }
        $body = [];
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeVaults',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeVaultsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeVaultsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about one or more backup vaults that meet the specified conditions.
     *  *
     * @param DescribeVaultsRequest $request DescribeVaultsRequest
     *
     * @return DescribeVaultsResponse DescribeVaultsResponse
     */
    public function describeVaults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVaultsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an internal mount target created by Cloud Backup.
     *  *
     * @description *   If the request is successful, the mount target is deleted.
     * *   After you create a backup plan for an Apsara File Storage NAS file system, HBR automatically creates a mount target for the file system. You can call this operation to delete the mount target. In the **Status** column of the mount target of the NAS file system, the following information is displayed: **This mount target is created by an Alibaba Cloud internal service and cannot be operated. Service name: HBR**.
     *  *
     * @param DetachNasFileSystemRequest $request DetachNasFileSystemRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachNasFileSystemResponse DetachNasFileSystemResponse
     */
    public function detachNasFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTime)) {
            $query['CreateTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachNasFileSystem',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DetachNasFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetachNasFileSystemResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an internal mount target created by Cloud Backup.
     *  *
     * @description *   If the request is successful, the mount target is deleted.
     * *   After you create a backup plan for an Apsara File Storage NAS file system, HBR automatically creates a mount target for the file system. You can call this operation to delete the mount target. In the **Status** column of the mount target of the NAS file system, the following information is displayed: **This mount target is created by an Alibaba Cloud internal service and cannot be operated. Service name: HBR**.
     *  *
     * @param DetachNasFileSystemRequest $request DetachNasFileSystemRequest
     *
     * @return DetachNasFileSystemResponse DetachNasFileSystemResponse
     */
    public function detachNasFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachNasFileSystemWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a backup plan.
     *  *
     * @description After you call this operation, the backup plan is suspended. In the DescribeBackupPlans operation, the Disabled parameter is set to true.
     *  *
     * @param DisableBackupPlanRequest $request DisableBackupPlanRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableBackupPlanResponse DisableBackupPlanResponse
     */
    public function disableBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableBackupPlan',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DisableBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableBackupPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Disables a backup plan.
     *  *
     * @description After you call this operation, the backup plan is suspended. In the DescribeBackupPlans operation, the Disabled parameter is set to true.
     *  *
     * @param DisableBackupPlanRequest $request DisableBackupPlanRequest
     *
     * @return DisableBackupPlanResponse DisableBackupPlanResponse
     */
    public function disableBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Disables an SAP HANA backup plan.
     *  *
     * @description To enable the backup plan again, call the EnableHanaBackupPlan operation.
     *  *
     * @param DisableHanaBackupPlanRequest $request DisableHanaBackupPlanRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableHanaBackupPlanResponse DisableHanaBackupPlanResponse
     */
    public function disableHanaBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableHanaBackupPlan',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DisableHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableHanaBackupPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Disables an SAP HANA backup plan.
     *  *
     * @description To enable the backup plan again, call the EnableHanaBackupPlan operation.
     *  *
     * @param DisableHanaBackupPlanRequest $request DisableHanaBackupPlanRequest
     *
     * @return DisableHanaBackupPlanResponse DisableHanaBackupPlanResponse
     */
    public function disableHanaBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableHanaBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a backup plan.
     *  *
     * @description After you call this operation, the backup plan is restarted (Disabled is set to false in the DescribeBackupPlans operation). Cloud Backup continues to perform backups based on the policy specified in the backup plan.
     *  *
     * @param EnableBackupPlanRequest $request EnableBackupPlanRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableBackupPlanResponse EnableBackupPlanResponse
     */
    public function enableBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableBackupPlan',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnableBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableBackupPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables a backup plan.
     *  *
     * @description After you call this operation, the backup plan is restarted (Disabled is set to false in the DescribeBackupPlans operation). Cloud Backup continues to perform backups based on the policy specified in the backup plan.
     *  *
     * @param EnableBackupPlanRequest $request EnableBackupPlanRequest
     *
     * @return EnableBackupPlanResponse EnableBackupPlanResponse
     */
    public function enableBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Enables an SAP HANA backup plan.
     *  *
     * @description To disable the backup plan again, call the DisableHanaBackupPlan operation.
     *  *
     * @param EnableHanaBackupPlanRequest $request EnableHanaBackupPlanRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableHanaBackupPlanResponse EnableHanaBackupPlanResponse
     */
    public function enableHanaBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableHanaBackupPlan',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnableHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableHanaBackupPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables an SAP HANA backup plan.
     *  *
     * @description To disable the backup plan again, call the DisableHanaBackupPlan operation.
     *  *
     * @param EnableHanaBackupPlanRequest $request EnableHanaBackupPlanRequest
     *
     * @return EnableHanaBackupPlanResponse EnableHanaBackupPlanResponse
     */
    public function enableHanaBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableHanaBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Executes a backup plan.
     *  *
     * @param ExecuteBackupPlanRequest $request ExecuteBackupPlanRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteBackupPlanResponse ExecuteBackupPlanResponse
     */
    public function executeBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteBackupPlan',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ExecuteBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteBackupPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Executes a backup plan.
     *  *
     * @param ExecuteBackupPlanRequest $request ExecuteBackupPlanRequest
     *
     * @return ExecuteBackupPlanResponse ExecuteBackupPlanResponse
     */
    public function executeBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Execute a policy for one or all bound data sources.
     *  *
     * @param ExecutePolicyV2Request $request ExecutePolicyV2Request
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecutePolicyV2Response ExecutePolicyV2Response
     */
    public function executePolicyV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $body = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $body['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecutePolicyV2',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ExecutePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecutePolicyV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Execute a policy for one or all bound data sources.
     *  *
     * @param ExecutePolicyV2Request $request ExecutePolicyV2Request
     *
     * @return ExecutePolicyV2Response ExecutePolicyV2Response
     */
    public function executePolicyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executePolicyV2WithOptions($request, $runtime);
    }

    /**
     * @summary Generates a Resource Access Management (RAM) policy.
     *  *
     * @param GenerateRamPolicyRequest $request GenerateRamPolicyRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateRamPolicyResponse GenerateRamPolicyResponse
     */
    public function generateRamPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->requireBasePolicy)) {
            $query['RequireBasePolicy'] = $request->requireBasePolicy;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateRamPolicy',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateRamPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateRamPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Generates a Resource Access Management (RAM) policy.
     *  *
     * @param GenerateRamPolicyRequest $request GenerateRamPolicyRequest
     *
     * @return GenerateRamPolicyResponse GenerateRamPolicyResponse
     */
    public function generateRamPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateRamPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains download links of files such as job reports.
     *  *
     * @param GetTempFileDownloadLinkRequest $request GetTempFileDownloadLinkRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTempFileDownloadLinkResponse GetTempFileDownloadLinkResponse
     */
    public function getTempFileDownloadLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tempFileKey)) {
            $query['TempFileKey'] = $request->tempFileKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTempFileDownloadLink',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTempFileDownloadLinkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTempFileDownloadLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains download links of files such as job reports.
     *  *
     * @param GetTempFileDownloadLinkRequest $request GetTempFileDownloadLinkRequest
     *
     * @return GetTempFileDownloadLinkResponse GetTempFileDownloadLinkResponse
     */
    public function getTempFileDownloadLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTempFileDownloadLinkWithOptions($request, $runtime);
    }

    /**
     * @summary Installs an HBR client on one or more Elastic Compute Service (ECS) instances.
     *  *
     * @description *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to install an HBR client on an ECS instance.
     * *   You can call the [DescribeTask](https://help.aliyun.com/document_detail/431265.html) operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 60 seconds after you call the InstallBackupClients operation to install HBR clients. Then, run the next queries at an interval of 30 seconds.
     *  *
     * @param InstallBackupClientsRequest $tmpReq  InstallBackupClientsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallBackupClientsResponse InstallBackupClientsResponse
     */
    public function installBackupClientsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InstallBackupClientsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallBackupClients',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return InstallBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallBackupClientsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Installs an HBR client on one or more Elastic Compute Service (ECS) instances.
     *  *
     * @description *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to install an HBR client on an ECS instance.
     * *   You can call the [DescribeTask](https://help.aliyun.com/document_detail/431265.html) operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 60 seconds after you call the InstallBackupClients operation to install HBR clients. Then, run the next queries at an interval of 30 seconds.
     *  *
     * @param InstallBackupClientsRequest $request InstallBackupClientsRequest
     *
     * @return InstallBackupClientsResponse InstallBackupClientsResponse
     */
    public function installBackupClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installBackupClientsWithOptions($request, $runtime);
    }

    /**
     * @summary Activates Cloud Backup.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenHbrServiceResponse OpenHbrServiceResponse
     */
    public function openHbrServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'OpenHbrService',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return OpenHbrServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenHbrServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Activates Cloud Backup.
     *  *
     * @return OpenHbrServiceResponse OpenHbrServiceResponse
     */
    public function openHbrService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openHbrServiceWithOptions($runtime);
    }

    /**
     * @summary Queries the information about one or more backup snapshots that meet the specified conditions.
     *  *
     * @param SearchHistoricalSnapshotsRequest $tmpReq  SearchHistoricalSnapshotsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchHistoricalSnapshotsResponse SearchHistoricalSnapshotsResponse
     */
    public function searchHistoricalSnapshotsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchHistoricalSnapshotsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->query)) {
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->queryShrink)) {
            $query['Query'] = $request->queryShrink;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchHistoricalSnapshots',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchHistoricalSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchHistoricalSnapshotsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about one or more backup snapshots that meet the specified conditions.
     *  *
     * @param SearchHistoricalSnapshotsRequest $request SearchHistoricalSnapshotsRequest
     *
     * @return SearchHistoricalSnapshotsResponse SearchHistoricalSnapshotsResponse
     */
    public function searchHistoricalSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchHistoricalSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @summary Starts an SAP HANA database.
     *  *
     * @description To stop the database again, call the StopHanaDatabaseAsync operation.
     *  *
     * @param StartHanaDatabaseAsyncRequest $request StartHanaDatabaseAsyncRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return StartHanaDatabaseAsyncResponse StartHanaDatabaseAsyncResponse
     */
    public function startHanaDatabaseAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartHanaDatabaseAsync',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartHanaDatabaseAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartHanaDatabaseAsyncResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Starts an SAP HANA database.
     *  *
     * @description To stop the database again, call the StopHanaDatabaseAsync operation.
     *  *
     * @param StartHanaDatabaseAsyncRequest $request StartHanaDatabaseAsyncRequest
     *
     * @return StartHanaDatabaseAsyncResponse StartHanaDatabaseAsyncResponse
     */
    public function startHanaDatabaseAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startHanaDatabaseAsyncWithOptions($request, $runtime);
    }

    /**
     * @summary Stops an SAP HANA database.
     *  *
     * @description To start the database again, call the StartHanaDatabaseAsync operation.
     *  *
     * @param StopHanaDatabaseAsyncRequest $request StopHanaDatabaseAsyncRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return StopHanaDatabaseAsyncResponse StopHanaDatabaseAsyncResponse
     */
    public function stopHanaDatabaseAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopHanaDatabaseAsync',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopHanaDatabaseAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopHanaDatabaseAsyncResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Stops an SAP HANA database.
     *  *
     * @description To start the database again, call the StartHanaDatabaseAsync operation.
     *  *
     * @param StopHanaDatabaseAsyncRequest $request StopHanaDatabaseAsyncRequest
     *
     * @return StopHanaDatabaseAsyncResponse StopHanaDatabaseAsyncResponse
     */
    public function stopHanaDatabaseAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopHanaDatabaseAsyncWithOptions($request, $runtime);
    }

    /**
     * @summary Uninstalls a Cloud Backup client from one or more Elastic Compute Service (ECS) instance.
     *  *
     * @description *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to uninstall a backup client from an ECS instance.
     * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 30 seconds after you call the UninstallBackupClients operation to uninstall backup clients. Then, run the next queries at an interval of 30 seconds.
     *  *
     * @param UninstallBackupClientsRequest $tmpReq  UninstallBackupClientsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UninstallBackupClientsResponse UninstallBackupClientsResponse
     */
    public function uninstallBackupClientsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UninstallBackupClientsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clientIds)) {
            $request->clientIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clientIds, 'ClientIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientIdsShrink)) {
            $query['ClientIds'] = $request->clientIdsShrink;
        }
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UninstallBackupClients',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UninstallBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UninstallBackupClientsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Uninstalls a Cloud Backup client from one or more Elastic Compute Service (ECS) instance.
     *  *
     * @description *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to uninstall a backup client from an ECS instance.
     * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 30 seconds after you call the UninstallBackupClients operation to uninstall backup clients. Then, run the next queries at an interval of 30 seconds.
     *  *
     * @param UninstallBackupClientsRequest $request UninstallBackupClientsRequest
     *
     * @return UninstallBackupClientsResponse UninstallBackupClientsResponse
     */
    public function uninstallBackupClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallBackupClientsWithOptions($request, $runtime);
    }

    /**
     * @summary Uninstalls an HBR client.
     *  *
     * @description If you call this operation, the specified HBR client is uninstalled. To reinstall the HBR client, call the CreateClients operation.
     *  *
     * @param UninstallClientRequest $request UninstallClientRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UninstallClientResponse UninstallClientResponse
     */
    public function uninstallClientWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UninstallClient',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UninstallClientResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UninstallClientResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Uninstalls an HBR client.
     *  *
     * @description If you call this operation, the specified HBR client is uninstalled. To reinstall the HBR client, call the CreateClients operation.
     *  *
     * @param UninstallClientRequest $request UninstallClientRequest
     *
     * @return UninstallClientResponse UninstallClientResponse
     */
    public function uninstallClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallClientWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a backup plan.
     *  *
     * @param UpdateBackupPlanRequest $tmpReq  UpdateBackupPlanRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBackupPlanResponse UpdateBackupPlanResponse
     */
    public function updateBackupPlanWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateBackupPlanShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->detail)) {
            $request->detailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->detail, 'Detail', 'json');
        }
        if (!Utils::isUnset($tmpReq->otsDetail)) {
            $request->otsDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->otsDetail, 'OtsDetail', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->changeListPath)) {
            $query['ChangeListPath'] = $request->changeListPath;
        }
        if (!Utils::isUnset($request->detailShrink)) {
            $query['Detail'] = $request->detailShrink;
        }
        if (!Utils::isUnset($request->keepLatestSnapshots)) {
            $query['KeepLatestSnapshots'] = $request->keepLatestSnapshots;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->planName)) {
            $query['PlanName'] = $request->planName;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['Prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        if (!Utils::isUnset($request->schedule)) {
            $query['Schedule'] = $request->schedule;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->speedLimit)) {
            $query['SpeedLimit'] = $request->speedLimit;
        }
        if (!Utils::isUnset($request->updatePaths)) {
            $query['UpdatePaths'] = $request->updatePaths;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $body = [];
        if (!Utils::isUnset($request->exclude)) {
            $body['Exclude'] = $request->exclude;
        }
        if (!Utils::isUnset($request->include_)) {
            $body['Include'] = $request->include_;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->otsDetailShrink)) {
            $body['OtsDetail'] = $request->otsDetailShrink;
        }
        if (!Utils::isUnset($request->rule)) {
            $body['Rule'] = $request->rule;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateBackupPlan',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateBackupPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a backup plan.
     *  *
     * @param UpdateBackupPlanRequest $request UpdateBackupPlanRequest
     *
     * @return UpdateBackupPlanResponse UpdateBackupPlanResponse
     */
    public function updateBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configurations of an HBR client.
     *  *
     * @description You can call this operation to update the configurations of both the old and new HBR clients.
     *  *
     * @param UpdateClientSettingsRequest $request UpdateClientSettingsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateClientSettingsResponse UpdateClientSettingsResponse
     */
    public function updateClientSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertOnPartialComplete)) {
            $query['AlertOnPartialComplete'] = $request->alertOnPartialComplete;
        }
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->dataNetworkType)) {
            $query['DataNetworkType'] = $request->dataNetworkType;
        }
        if (!Utils::isUnset($request->dataProxySetting)) {
            $query['DataProxySetting'] = $request->dataProxySetting;
        }
        if (!Utils::isUnset($request->maxCpuCore)) {
            $query['MaxCpuCore'] = $request->maxCpuCore;
        }
        if (!Utils::isUnset($request->maxMemory)) {
            $query['MaxMemory'] = $request->maxMemory;
        }
        if (!Utils::isUnset($request->maxWorker)) {
            $query['MaxWorker'] = $request->maxWorker;
        }
        if (!Utils::isUnset($request->proxyHost)) {
            $query['ProxyHost'] = $request->proxyHost;
        }
        if (!Utils::isUnset($request->proxyPassword)) {
            $query['ProxyPassword'] = $request->proxyPassword;
        }
        if (!Utils::isUnset($request->proxyPort)) {
            $query['ProxyPort'] = $request->proxyPort;
        }
        if (!Utils::isUnset($request->proxyUser)) {
            $query['ProxyUser'] = $request->proxyUser;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->useHttps)) {
            $query['UseHttps'] = $request->useHttps;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateClientSettings',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateClientSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateClientSettingsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the configurations of an HBR client.
     *  *
     * @description You can call this operation to update the configurations of both the old and new HBR clients.
     *  *
     * @param UpdateClientSettingsRequest $request UpdateClientSettingsRequest
     *
     * @return UpdateClientSettingsResponse UpdateClientSettingsResponse
     */
    public function updateClientSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClientSettingsWithOptions($request, $runtime);
    }

    /**
     * @summary Update container cluster information, including the container cluster name, network type, etc.
     *  *
     * @param UpdateContainerClusterRequest $request UpdateContainerClusterRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateContainerClusterResponse UpdateContainerClusterResponse
     */
    public function updateContainerClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->renewToken)) {
            $query['RenewToken'] = $request->renewToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateContainerCluster',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateContainerClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateContainerClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Update container cluster information, including the container cluster name, network type, etc.
     *  *
     * @param UpdateContainerClusterRequest $request UpdateContainerClusterRequest
     *
     * @return UpdateContainerClusterResponse UpdateContainerClusterResponse
     */
    public function updateContainerCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContainerClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Updates an SAP HANA backup plan.
     *  *
     * @description *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   You can specify only one type of data source in a backup plan.
     * *   You can specify only one interval as a backup cycle in a backup plan.
     * *   Each backup plan allows you to back up data to only one backup vault.
     *  *
     * @param UpdateHanaBackupPlanRequest $request UpdateHanaBackupPlanRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHanaBackupPlanResponse UpdateHanaBackupPlanResponse
     */
    public function updateHanaBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPrefix)) {
            $query['BackupPrefix'] = $request->backupPrefix;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->planName)) {
            $query['PlanName'] = $request->planName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->schedule)) {
            $query['Schedule'] = $request->schedule;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHanaBackupPlan',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateHanaBackupPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates an SAP HANA backup plan.
     *  *
     * @description *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     * *   You can specify only one type of data source in a backup plan.
     * *   You can specify only one interval as a backup cycle in a backup plan.
     * *   Each backup plan allows you to back up data to only one backup vault.
     *  *
     * @param UpdateHanaBackupPlanRequest $request UpdateHanaBackupPlanRequest
     *
     * @return UpdateHanaBackupPlanResponse UpdateHanaBackupPlanResponse
     */
    public function updateHanaBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHanaBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the backup parameters of an SAP HANA database.
     *  *
     * @description You can call the UpdateHanaRetentionSetting operation to update the backup retention period of a database.
     *  *
     * @param UpdateHanaBackupSettingRequest $request UpdateHanaBackupSettingRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHanaBackupSettingResponse UpdateHanaBackupSettingResponse
     */
    public function updateHanaBackupSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogBackupParameterFile)) {
            $query['CatalogBackupParameterFile'] = $request->catalogBackupParameterFile;
        }
        if (!Utils::isUnset($request->catalogBackupUsingBackint)) {
            $query['CatalogBackupUsingBackint'] = $request->catalogBackupUsingBackint;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dataBackupParameterFile)) {
            $query['DataBackupParameterFile'] = $request->dataBackupParameterFile;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->enableAutoLogBackup)) {
            $query['EnableAutoLogBackup'] = $request->enableAutoLogBackup;
        }
        if (!Utils::isUnset($request->logBackupParameterFile)) {
            $query['LogBackupParameterFile'] = $request->logBackupParameterFile;
        }
        if (!Utils::isUnset($request->logBackupTimeout)) {
            $query['LogBackupTimeout'] = $request->logBackupTimeout;
        }
        if (!Utils::isUnset($request->logBackupUsingBackint)) {
            $query['LogBackupUsingBackint'] = $request->logBackupUsingBackint;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHanaBackupSetting',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateHanaBackupSettingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateHanaBackupSettingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the backup parameters of an SAP HANA database.
     *  *
     * @description You can call the UpdateHanaRetentionSetting operation to update the backup retention period of a database.
     *  *
     * @param UpdateHanaBackupSettingRequest $request UpdateHanaBackupSettingRequest
     *
     * @return UpdateHanaBackupSettingResponse UpdateHanaBackupSettingResponse
     */
    public function updateHanaBackupSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHanaBackupSettingWithOptions($request, $runtime);
    }

    /**
     * @summary Updates an SAP HANA instance.
     *  *
     * @param UpdateHanaInstanceRequest $request UpdateHanaInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHanaInstanceResponse UpdateHanaInstanceResponse
     */
    public function updateHanaInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertSetting)) {
            $query['AlertSetting'] = $request->alertSetting;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->hanaName)) {
            $query['HanaName'] = $request->hanaName;
        }
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->instanceNumber)) {
            $query['InstanceNumber'] = $request->instanceNumber;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->useSsl)) {
            $query['UseSsl'] = $request->useSsl;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->validateCertificate)) {
            $query['ValidateCertificate'] = $request->validateCertificate;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHanaInstance',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateHanaInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateHanaInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates an SAP HANA instance.
     *  *
     * @param UpdateHanaInstanceRequest $request UpdateHanaInstanceRequest
     *
     * @return UpdateHanaInstanceResponse UpdateHanaInstanceResponse
     */
    public function updateHanaInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHanaInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the backup retention period of an SAP HANA database.
     *  *
     * @description *   If you want to update the backup parameters of a database, you can call the UpdateHanaBackupSetting operation.
     * *   Cloud Backup deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *  *
     * @param UpdateHanaRetentionSettingRequest $request UpdateHanaRetentionSettingRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHanaRetentionSettingResponse UpdateHanaRetentionSettingResponse
     */
    public function updateHanaRetentionSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->disabled)) {
            $query['Disabled'] = $request->disabled;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->schedule)) {
            $query['Schedule'] = $request->schedule;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHanaRetentionSetting',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateHanaRetentionSettingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateHanaRetentionSettingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the backup retention period of an SAP HANA database.
     *  *
     * @description *   If you want to update the backup parameters of a database, you can call the UpdateHanaBackupSetting operation.
     * *   Cloud Backup deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *  *
     * @param UpdateHanaRetentionSettingRequest $request UpdateHanaRetentionSettingRequest
     *
     * @return UpdateHanaRetentionSettingResponse UpdateHanaRetentionSettingResponse
     */
    public function updateHanaRetentionSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHanaRetentionSettingWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the association between a backup policy and a data source.
     *  *
     * @param UpdatePolicyBindingRequest $tmpReq  UpdatePolicyBindingRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePolicyBindingResponse UpdatePolicyBindingResponse
     */
    public function updatePolicyBindingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdatePolicyBindingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->advancedOptions)) {
            $request->advancedOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->advancedOptions, 'AdvancedOptions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->advancedOptionsShrink)) {
            $query['AdvancedOptions'] = $request->advancedOptionsShrink;
        }
        if (!Utils::isUnset($request->disabled)) {
            $query['Disabled'] = $request->disabled;
        }
        if (!Utils::isUnset($request->exclude)) {
            $query['Exclude'] = $request->exclude;
        }
        if (!Utils::isUnset($request->include_)) {
            $query['Include'] = $request->include_;
        }
        if (!Utils::isUnset($request->policyBindingDescription)) {
            $query['PolicyBindingDescription'] = $request->policyBindingDescription;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->speedLimit)) {
            $query['SpeedLimit'] = $request->speedLimit;
        }
        $body = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $body['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePolicyBinding',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdatePolicyBindingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePolicyBindingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the association between a backup policy and a data source.
     *  *
     * @param UpdatePolicyBindingRequest $request UpdatePolicyBindingRequest
     *
     * @return UpdatePolicyBindingResponse UpdatePolicyBindingResponse
     */
    public function updatePolicyBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolicyBindingWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a backup policy.
     *  *
     * @description If you modify a backup policy, the modification takes effect on all data sources that are bound to the backup policy. Proceed with caution.
     *  *
     * @param UpdatePolicyV2Request $tmpReq  UpdatePolicyV2Request
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePolicyV2Response UpdatePolicyV2Response
     */
    public function updatePolicyV2WithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdatePolicyV2ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rules)) {
            $request->rulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->policyDescription)) {
            $body['PolicyDescription'] = $request->policyDescription;
        }
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->policyName)) {
            $body['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->rulesShrink)) {
            $body['Rules'] = $request->rulesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePolicyV2',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdatePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePolicyV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a backup policy.
     *  *
     * @description If you modify a backup policy, the modification takes effect on all data sources that are bound to the backup policy. Proceed with caution.
     *  *
     * @param UpdatePolicyV2Request $request UpdatePolicyV2Request
     *
     * @return UpdatePolicyV2Response UpdatePolicyV2Response
     */
    public function updatePolicyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolicyV2WithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configuration information about the backup vault.
     *  *
     * @param UpdateVaultRequest $request UpdateVaultRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVaultResponse UpdateVaultResponse
     */
    public function updateVaultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        if (!Utils::isUnset($request->vaultName)) {
            $query['VaultName'] = $request->vaultName;
        }
        if (!Utils::isUnset($request->wormEnabled)) {
            $query['WormEnabled'] = $request->wormEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVault',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateVaultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateVaultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the configuration information about the backup vault.
     *  *
     * @param UpdateVaultRequest $request UpdateVaultRequest
     *
     * @return UpdateVaultResponse UpdateVaultResponse
     */
    public function updateVault($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVaultWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades an HBR client on one or more Elastic Compute Service (ECS) instances.
     *  *
     * @description *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to upgrade an HBR client that is installed on an ECS instance.
     * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes.
     *  *
     * @param UpgradeBackupClientsRequest $tmpReq  UpgradeBackupClientsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeBackupClientsResponse UpgradeBackupClientsResponse
     */
    public function upgradeBackupClientsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpgradeBackupClientsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clientIds)) {
            $request->clientIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clientIds, 'ClientIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientIdsShrink)) {
            $query['ClientIds'] = $request->clientIdsShrink;
        }
        if (!Utils::isUnset($request->crossAccountRoleName)) {
            $query['CrossAccountRoleName'] = $request->crossAccountRoleName;
        }
        if (!Utils::isUnset($request->crossAccountType)) {
            $query['CrossAccountType'] = $request->crossAccountType;
        }
        if (!Utils::isUnset($request->crossAccountUserId)) {
            $query['CrossAccountUserId'] = $request->crossAccountUserId;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeBackupClients',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpgradeBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeBackupClientsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Upgrades an HBR client on one or more Elastic Compute Service (ECS) instances.
     *  *
     * @description *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to upgrade an HBR client that is installed on an ECS instance.
     * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     * *   The timeout period of an asynchronous job is 15 minutes.
     *  *
     * @param UpgradeBackupClientsRequest $request UpgradeBackupClientsRequest
     *
     * @return UpgradeBackupClientsResponse UpgradeBackupClientsResponse
     */
    public function upgradeBackupClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeBackupClientsWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades the Cloud Backup client.
     *  *
     * @description You can call this operation to upgrade a Cloud Backup client to the latest version. After the Cloud Backup client is upgraded, the version of the client cannot be rolled back.
     *  *
     * @param UpgradeClientRequest $request UpgradeClientRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeClientResponse UpgradeClientResponse
     */
    public function upgradeClientWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeClient',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpgradeClientResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeClientResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Upgrades the Cloud Backup client.
     *  *
     * @description You can call this operation to upgrade a Cloud Backup client to the latest version. After the Cloud Backup client is upgraded, the version of the client cannot be rolled back.
     *  *
     * @param UpgradeClientRequest $request UpgradeClientRequest
     *
     * @return UpgradeClientResponse UpgradeClientResponse
     */
    public function upgradeClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClientWithOptions($request, $runtime);
    }
}
