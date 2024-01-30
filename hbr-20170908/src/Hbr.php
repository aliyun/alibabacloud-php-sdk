<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Hbr\V20170908\Models\AddContainerClusterRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\AddContainerClusterResponse;
use AlibabaCloud\SDK\Hbr\V20170908\Models\AttachNasFileSystemRequest;
use AlibabaCloud\SDK\Hbr\V20170908\Models\AttachNasFileSystemResponse;
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
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRegionsRequest;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'hbr.aliyuncs.com',
            'cn-beijing-finance-1'        => 'hbr.aliyuncs.com',
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
            'cn-wulanchabu'               => 'hbr.aliyuncs.com',
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
     * @param AddContainerClusterRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddContainerClusterResponse
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

        return AddContainerClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AttachNasFileSystemRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AttachNasFileSystemResponse
     */
    public function attachNasFileSystemWithOptions($request, $runtime)
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
            'action'      => 'AttachNasFileSystem',
            'version'     => '2017-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachNasFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachNasFileSystemRequest $request
     *
     * @return AttachNasFileSystemResponse
     */
    public function attachNasFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachNasFileSystemWithOptions($request, $runtime);
    }

    /**
     * @param CancelBackupJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelBackupJobResponse
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

        return CancelBackupJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CancelRestoreJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CancelRestoreJobResponse
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

        return CancelRestoreJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   In the Hybrid Backup Recovery (HBR), you can use resource groups to manage resources such as backup vaults, backup clients, and SAP HANA instances.
     *   * *   A resource is a cloud service entity that you create on Alibaba Cloud, such as an ECS instance, a backup vault, or an SAP HANA instance.
     *   * *   You can sort resources owned by your Alibaba Cloud account into various resource groups. This facilitates resource management among multiple projects or applications within your Alibaba Cloud account and simplifies permission management.
     *   *
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

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   In the Hybrid Backup Recovery (HBR), you can use resource groups to manage resources such as backup vaults, backup clients, and SAP HANA instances.
     *   * *   A resource is a cloud service entity that you create on Alibaba Cloud, such as an ECS instance, a backup vault, or an SAP HANA instance.
     *   * *   You can sort resources owned by your Alibaba Cloud account into various resource groups. This facilitates resource management among multiple projects or applications within your Alibaba Cloud account and simplifies permission management.
     *   *
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
     * @param CheckRoleRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CheckRoleResponse
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

        return CheckRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateBackupJobRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateBackupJobResponse
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

        return CreateBackupJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   A backup schedule defines the data source, backup policy, and other configurations. After you execute a backup schedule, a backup job is generated to record the backup progress and the backup result. If a backup job is complete, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     *   * *   You can specify only one type of data source in a backup schedule.
     *   * *   You can specify only one interval as a backup cycle in a backup schedule.
     *   * *   Each backup schedule allows you to back up data to only one backup vault.
     *   *
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

        return CreateBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   A backup schedule defines the data source, backup policy, and other configurations. After you execute a backup schedule, a backup job is generated to record the backup progress and the backup result. If a backup job is complete, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     *   * *   You can specify only one type of data source in a backup schedule.
     *   * *   You can specify only one interval as a backup cycle in a backup schedule.
     *   * *   Each backup schedule allows you to back up data to only one backup vault.
     *   *
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
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of Hybrid Backup Recovery (HBR). For more information, see [Billable items and billing methods](~~89062~~).
     *   *
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

        return CreateClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of Hybrid Backup Recovery (HBR). For more information, see [Billable items and billing methods](~~89062~~).
     *   *
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
     * *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     *   * *   You can specify only one type of data source in a backup plan.
     *   * *   You can specify only one interval as a backup cycle in a backup plan.
     *   * *   Each backup plan allows you to back up data to only one backup vault.
     *   *
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

        return CreateHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     *   * *   You can specify only one type of data source in a backup plan.
     *   * *   You can specify only one interval as a backup cycle in a backup plan.
     *   * *   Each backup plan allows you to back up data to only one backup vault.
     *   *
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
     * To register an SAP HANA instance, you must configure the connection parameters of the SAP HANA instance. After the SAP HANA instance is registered, HBR installs an HBR client on the ECS instance that hosts the SAP HANA instance.
     *   *
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

        return CreateHanaInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To register an SAP HANA instance, you must configure the connection parameters of the SAP HANA instance. After the SAP HANA instance is registered, HBR installs an HBR client on the ECS instance that hosts the SAP HANA instance.
     *   *
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
     * If you call this operation to restore a database, the database is restored to a specified state. Proceed with caution. For more information, see [Restore databases to an SAP HANA instance](~~101178~~).
     *   *
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

        return CreateHanaRestoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you call this operation to restore a database, the database is restored to a specified state. Proceed with caution. For more information, see [Restore databases to an SAP HANA instance](~~101178~~).
     *   *
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
     * *   You can bind data sources to only one policy in each request.
     *   * *   Elastic Compute Service (ECS) instances can be bound to only one policy.
     *   *
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

        return CreatePolicyBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can bind data sources to only one policy in each request.
     *   * *   Elastic Compute Service (ECS) instances can be bound to only one policy.
     *   *
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
     * A backup policy records the information required for backup. After you execute a backup policy, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     *   * *   A backup policy supports multiple data sources. The data sources can be only Elastic Compute Service (ECS) instances.
     *   * *   You can specify only one interval as a backup cycle in a backup policy.
     *   * *   Each backup policy allows you to back up data to only one backup vault.
     *   *
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

        return CreatePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A backup policy records the information required for backup. After you execute a backup policy, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     *   * *   A backup policy supports multiple data sources. The data sources can be only Elastic Compute Service (ECS) instances.
     *   * *   You can specify only one interval as a backup cycle in a backup policy.
     *   * *   Each backup policy allows you to back up data to only one backup vault.
     *   *
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
     * After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state.
     *   *
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

        return CreateReplicationVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state.
     *   *
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
     * *   You must create a restore job based on the specified backup snapshot and restore destination.
     *   * *   The type of the data source from which you restore data must be the same as the type of the restore destination.
     *   *
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

        return CreateRestoreJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You must create a restore job based on the specified backup snapshot and restore destination.
     *   * *   The type of the data source from which you restore data must be the same as the type of the restore destination.
     *   *
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
     * 1.  You can directly upload a file to Object Storage Service (OSS) by using a form based on the returned value of this operation.
     *   * 2.  For more information about how to upload a file to OSS by using a form, see OSS documentation.
     *   * 3.  The system periodically deletes files that are uploaded to OSS.
     *   *
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

        return CreateTempFileUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 1.  You can directly upload a file to Object Storage Service (OSS) by using a form based on the returned value of this operation.
     *   * 2.  For more information about how to upload a file to OSS by using a form, see OSS documentation.
     *   * 3.  The system periodically deletes files that are uploaded to OSS.
     *   *
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
     * *   Each Alibaba Cloud account can create up to 100 backup vaults.
     *   * *   After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state. A backup job can use a backup vault to store backup data only if the backup vault is in the CREATED state.
     *   *
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

        return CreateVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Each Alibaba Cloud account can create up to 100 backup vaults.
     *   * *   After a backup vault is created, the backup vault is in the INITIALIZING state, and the system automatically runs an initialization task to initialize the backup vault. After the initialization task is completed, the backup vault is in the CREATED state. A backup job can use a backup vault to store backup data only if the backup vault is in the CREATED state.
     *   *
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
     * *   You cannot delete an active backup client from which a heartbeat packet is received within the previous hour. After you call the UninstallBackupClients operation to uninstall a backup client, the status of the backup client changes to inactive.
     *   * *   This operation deletes the resources that are related to the backup client. The following resources are included:
     *   *     *   Backup plans
     *   *     *   Backup jobs
     *   *     *   Backup files.
     *   *
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

        return DeleteBackupClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You cannot delete an active backup client from which a heartbeat packet is received within the previous hour. After you call the UninstallBackupClients operation to uninstall a backup client, the status of the backup client changes to inactive.
     *   * *   This operation deletes the resources that are related to the backup client. The following resources are included:
     *   *     *   Backup plans
     *   *     *   Backup jobs
     *   *     *   Backup files.
     *   *
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
     * This operation deletes only the resources that are related to HBR clients. The resources include backup plans, backup jobs, and backup snapshots. The operation does not delete HBR clients.
     *   *
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

        return DeleteBackupClientResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation deletes only the resources that are related to HBR clients. The resources include backup plans, backup jobs, and backup snapshots. The operation does not delete HBR clients.
     *   *
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
     * *   If you delete a backup plan, the backup jobs are also deleted.
     *   * *   If you delete a backup plan, the created snapshot files are not deleted.
     *   *
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

        return DeleteBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   If you delete a backup plan, the backup jobs are also deleted.
     *   * *   If you delete a backup plan, the created snapshot files are not deleted.
     *   *
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
     * @param DeleteClientRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteClientResponse
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

        return DeleteClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteHanaBackupPlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteHanaBackupPlanResponse
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

        return DeleteHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * If you delete an SAP HANA instance, the existing backup data is also deleted and the running backup and restore jobs fail to be completed. Before you delete the SAP HANA instance, make sure that you no longer need the data in the HBR client of the instance and no backup or restore jobs are running for the instance. To delete an SAP HANA instance, you must specify the security identifier (SID) of the instance. The SID is three characters in length and starts with a letter. For more information, see [How to find sid user and instance number of HANA db?](https://answers.sap.com/questions/555192/how-to-find-sid-user-and-instance-number-of-hana-d.html?).
     *   *
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

        return DeleteHanaInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you delete an SAP HANA instance, the existing backup data is also deleted and the running backup and restore jobs fail to be completed. Before you delete the SAP HANA instance, make sure that you no longer need the data in the HBR client of the instance and no backup or restore jobs are running for the instance. To delete an SAP HANA instance, you must specify the security identifier (SID) of the instance. The SID is three characters in length and starts with a letter. For more information, see [How to find sid user and instance number of HANA db?](https://answers.sap.com/questions/555192/how-to-find-sid-user-and-instance-number-of-hana-d.html?).
     *   *
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
     * @param DeletePolicyBindingRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePolicyBindingResponse
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

        return DeletePolicyBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * If you delete a backup policy, the backup policy is disassociated with all data sources. Proceed with caution.
     *   *
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

        return DeletePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you delete a backup policy, the backup policy is disassociated with all data sources. Proceed with caution.
     *   *
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
     * If you delete the most recent backup file for a data source, you must set the `Force parameter to true`. Otherwise, an error occurs.
     *   *
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

        return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you delete the most recent backup file for a data source, you must set the `Force parameter to true`. Otherwise, an error occurs.
     *   *
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
     * *   You cannot delete a backup vault within 2 hours after the backup vault is created or a backup vault that is in the INITIALIZING state.
     *   * *   After you delete a backup vault, all resources that are associated with the backup vault are deleted. The resources include backup clients of earlier versions, backup plans, backup jobs, snapshots, and restore jobs.
     *   *
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

        return DeleteVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You cannot delete a backup vault within 2 hours after the backup vault is created or a backup vault that is in the INITIALIZING state.
     *   * *   After you delete a backup vault, all resources that are associated with the backup vault are deleted. The resources include backup clients of earlier versions, backup plans, backup jobs, snapshots, and restore jobs.
     *   *
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
     * @param DescribeBackupClientsRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBackupClientsResponse
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

        return DescribeBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupJobs2Request $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupJobs2Response
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

        return DescribeBackupJobs2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupPlansRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupPlansResponse
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

        return DescribeBackupPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * This operation is applicable only to SAP HANA backup. For backup clients of other data sources, call the DescribeBackupClients operation.
     *   *
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

        return DescribeClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is applicable only to SAP HANA backup. For backup clients of other data sources, call the DescribeBackupClients operation.
     *   *
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
     * You can call this operation to query only Container Service for Kubernetes (ACK) clusters.
     *   *
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

        return DescribeContainerClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query only Container Service for Kubernetes (ACK) clusters.
     *   *
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
     * @param DescribeCrossAccountsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCrossAccountsResponse
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

        return DescribeCrossAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeHanaBackupPlansRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeHanaBackupPlansResponse
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

        return DescribeHanaBackupPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * If you want to query the backup retention period of a database, you can call the DescribeHanaRetentionSetting operation.
     *   *
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

        return DescribeHanaBackupSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you want to query the backup retention period of a database, you can call the DescribeHanaRetentionSetting operation.
     *   *
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
     * After you call the DescribeHanaBackupsAsync operation to query the SAP HANA backups that meet the specified conditions, call the DescribeTask operation to query the execution result of the asynchronous job.
     *   *
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

        return DescribeHanaBackupsAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you call the DescribeHanaBackupsAsync operation to query the SAP HANA backups that meet the specified conditions, call the DescribeTask operation to query the execution result of the asynchronous job.
     *   *
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
     * After you register an SAP HANA instance and install a backup client on the instance, you can call this operation to query the information about SAP HANA databases. You can call the StartHanaDatabaseAsync operation to start a database and call the StopHanaDatabaseAsync operation to stop a database.
     *   *
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

        return DescribeHanaDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you register an SAP HANA instance and install a backup client on the instance, you can call this operation to query the information about SAP HANA databases. You can call the StartHanaDatabaseAsync operation to start a database and call the StopHanaDatabaseAsync operation to stop a database.
     *   *
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
     * @param DescribeHanaInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeHanaInstancesResponse
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

        return DescribeHanaInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeHanaRestoresRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHanaRestoresResponse
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

        return DescribeHanaRestoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   If you want to query the backup parameters of a database, you can call the DescribeHanaBackupSetting operation.
     *   * *   HBR deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *   *
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

        return DescribeHanaRetentionSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   If you want to query the backup parameters of a database, you can call the DescribeHanaBackupSetting operation.
     *   * *   HBR deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *   *
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
     * @param DescribeOtsTableSnapshotsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOtsTableSnapshotsResponse
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

        return DescribeOtsTableSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePoliciesV2Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePoliciesV2Response
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

        return DescribePoliciesV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePolicyBindingsRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePolicyBindingsResponse
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

        return DescribePolicyBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRecoverableOtsInstancesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeRecoverableOtsInstancesResponse
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

        return DescribeRecoverableOtsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needVaultCount)) {
            $query['NeedVaultCount'] = $request->needVaultCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
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

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRestoreJobs2Request $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRestoreJobs2Response
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

        return DescribeRestoreJobs2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTaskResponse
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

        return DescribeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeUdmSnapshotsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUdmSnapshotsResponse
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

        return DescribeUdmSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeVaultReplicationRegionsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVaultReplicationRegionsResponse
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

        return DescribeVaultReplicationRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeVaultsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeVaultsResponse
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

        return DescribeVaultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   If the request is successful, the mount target is deleted.
     *   * *   After you create a backup plan for an Apsara File Storage NAS file system, HBR automatically creates a mount target for the file system. You can call this operation to delete the mount target. In the **Status** column of the mount target of the NAS file system, the following information is displayed: **This mount target is created by an Alibaba Cloud internal service and cannot be operated. Service name: HBR**.
     *   *
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

        return DetachNasFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   If the request is successful, the mount target is deleted.
     *   * *   After you create a backup plan for an Apsara File Storage NAS file system, HBR automatically creates a mount target for the file system. You can call this operation to delete the mount target. In the **Status** column of the mount target of the NAS file system, the following information is displayed: **This mount target is created by an Alibaba Cloud internal service and cannot be operated. Service name: HBR**.
     *   *
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
     * If the request is successful, the specified backup plan is disabled. If you call the DescribeBackupPlans operation to query backup plans, the Disabled parameter is set to true for the backup plan.
     *   *
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

        return DisableBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If the request is successful, the specified backup plan is disabled. If you call the DescribeBackupPlans operation to query backup plans, the Disabled parameter is set to true for the backup plan.
     *   *
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
     * To enable the backup plan again, call the EnableHanaBackupPlan operation.
     *   *
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

        return DisableHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To enable the backup plan again, call the EnableHanaBackupPlan operation.
     *   *
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
     * If the request is successful, the system enables the backup plan and backs up data based on the polices that are specified in the backup plan. If you call the DescribeBackupPlans operation to query backup plans, the Disabled parameter is automatically set to false for the backup plan.
     *   *
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

        return EnableBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If the request is successful, the system enables the backup plan and backs up data based on the polices that are specified in the backup plan. If you call the DescribeBackupPlans operation to query backup plans, the Disabled parameter is automatically set to false for the backup plan.
     *   *
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
     * To disable the backup plan again, call the DisableHanaBackupPlan operation.
     *   *
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

        return EnableHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To disable the backup plan again, call the DisableHanaBackupPlan operation.
     *   *
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
     * @param ExecuteBackupPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExecuteBackupPlanResponse
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

        return ExecuteBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ExecutePolicyV2Request $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecutePolicyV2Response
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

        return ExecutePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GenerateRamPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateRamPolicyResponse
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

        return GenerateRamPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetTempFileDownloadLinkRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTempFileDownloadLinkResponse
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

        return GetTempFileDownloadLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to install an HBR client on an ECS instance.
     *   * *   You can call the [DescribeTask](~~431265~~) operation to query the execution result of an asynchronous job.
     *   * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 60 seconds after you call the InstallBackupClients operation to install HBR clients. Then, run the next queries at an interval of 30 seconds.
     *   *
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

        return InstallBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to install an HBR client on an ECS instance.
     *   * *   You can call the [DescribeTask](~~431265~~) operation to query the execution result of an asynchronous job.
     *   * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 60 seconds after you call the InstallBackupClients operation to install HBR clients. Then, run the next queries at an interval of 30 seconds.
     *   *
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
     * @param RuntimeOptions $runtime
     *
     * @return OpenHbrServiceResponse
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

        return OpenHbrServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return OpenHbrServiceResponse
     */
    public function openHbrService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openHbrServiceWithOptions($runtime);
    }

    /**
     * @param SearchHistoricalSnapshotsRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SearchHistoricalSnapshotsResponse
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

        return SearchHistoricalSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * To stop the database again, call the StopHanaDatabaseAsync operation.
     *   *
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

        return StartHanaDatabaseAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To stop the database again, call the StopHanaDatabaseAsync operation.
     *   *
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
     * To start the database again, call the StartHanaDatabaseAsync operation.
     *   *
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

        return StopHanaDatabaseAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To start the database again, call the StartHanaDatabaseAsync operation.
     *   *
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
     * *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to uninstall a backup client from an ECS instance.
     *   * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     *   * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 30 seconds after you call the UninstallBackupClients operation to uninstall backup clients. Then, run the next queries at an interval of 30 seconds.
     *   *
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

        return UninstallBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to uninstall a backup client from an ECS instance.
     *   * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     *   * *   The timeout period of an asynchronous job is 15 minutes. We recommend that you call the DescribeTask operation to run the first query 30 seconds after you call the UninstallBackupClients operation to uninstall backup clients. Then, run the next queries at an interval of 30 seconds.
     *   *
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
     * If you call this operation, the specified HBR client is uninstalled. To reinstall the HBR client, call the CreateClients operation.
     *   *
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

        return UninstallClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you call this operation, the specified HBR client is uninstalled. To reinstall the HBR client, call the CreateClients operation.
     *   *
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
     * @param UpdateBackupPlanRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateBackupPlanResponse
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

        return UpdateBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can call this operation to update the configurations of both the old and new HBR clients.
     *   *
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

        return UpdateClientSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to update the configurations of both the old and new HBR clients.
     *   *
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
     * @param UpdateContainerClusterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateContainerClusterResponse
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

        return UpdateContainerClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     *   * *   You can specify only one type of data source in a backup plan.
     *   * *   You can specify only one interval as a backup cycle in a backup plan.
     *   * *   Each backup plan allows you to back up data to only one backup vault.
     *   *
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

        return UpdateHanaBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   A backup plan defines the data source, backup policy, and other configurations. After you execute a backup plan, a backup job is generated to record the backup progress and the backup result. If a backup job is completed, a backup snapshot is generated. You can use a backup snapshot to create a restore job.
     *   * *   You can specify only one type of data source in a backup plan.
     *   * *   You can specify only one interval as a backup cycle in a backup plan.
     *   * *   Each backup plan allows you to back up data to only one backup vault.
     *   *
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
     * You can call the UpdateHanaRetentionSetting operation to update the backup retention period of a database.
     *   *
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

        return UpdateHanaBackupSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the UpdateHanaRetentionSetting operation to update the backup retention period of a database.
     *   *
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
     * @param UpdateHanaInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateHanaInstanceResponse
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

        return UpdateHanaInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   If you want to update the backup parameters of a database, you can call the UpdateHanaBackupSetting operation.
     *   * *   HBR deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *   *
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

        return UpdateHanaRetentionSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   If you want to update the backup parameters of a database, you can call the UpdateHanaBackupSetting operation.
     *   * *   HBR deletes the expired catalogs and data that are related to Backint and file backup. The deleted catalogs and data cannot be restored. We recommend that you set the retention period based on your business requirements.
     *   *
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
     * @param UpdatePolicyBindingRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdatePolicyBindingResponse
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
        if (!Utils::isUnset($request->policyBindingDescription)) {
            $query['PolicyBindingDescription'] = $request->policyBindingDescription;
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

        return UpdatePolicyBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * If you modify a backup policy, the modification takes effect on all data sources that are bound to the backup policy. Proceed with caution.
     *   *
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

        return UpdatePolicyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you modify a backup policy, the modification takes effect on all data sources that are bound to the backup policy. Proceed with caution.
     *   *
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
     * @param UpdateVaultRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateVaultResponse
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

        return UpdateVaultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to upgrade an HBR client that is installed on an ECS instance.
     *   * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     *   * *   The timeout period of an asynchronous job is 15 minutes.
     *   *
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

        return UpgradeBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation creates an asynchronous job at the backend and calls Cloud Assistant to upgrade an HBR client that is installed on an ECS instance.
     *   * *   You can call the DescribeTask operation to query the execution result of an asynchronous job.
     *   * *   The timeout period of an asynchronous job is 15 minutes.
     *   *
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
     * You can call this operation to upgrade a backup client to the latest version. After the backup client is upgraded, the version of the backup client cannot be rolled back.
     *   *
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

        return UpgradeClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to upgrade a backup client to the latest version. After the backup client is upgraded, the version of the backup client cannot be rolled back.
     *   *
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
