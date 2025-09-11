<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigAuditLogRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigAuditLogResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigBackupRemarkRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigBackupRemarkResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigBackupTaskRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigBackupTaskResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterCertificateRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterCertificateResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterNameRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterNameResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterSubnetRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterSubnetResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterSubnetShrinkRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterWhitelistRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterWhitelistResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigImageRemarkRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigImageRemarkResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceIpAddressRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceIpAddressResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceRemarkRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceRemarkResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceWhitelistRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceWhitelistResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\CopyImageRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\CopyImageResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\DownloadClusterManagedCertRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\DownloadClusterManagedCertResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\EnableBackupRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\EnableBackupResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ExportImageRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ExportImageResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetAuditLogStatusRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetAuditLogStatusResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetBackupRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetBackupResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetImageRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetImageResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetJobRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetJobResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\InitializeAuditLogResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\InitializeClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\InitializeClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\JoinClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\JoinClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\LeaveClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\LeaveClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListBackupsRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListBackupsResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListClustersRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListClustersResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListImagesRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListImagesResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\PauseInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\PauseInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\QuickDeployClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\QuickDeployClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\QuickDeployClusterShrinkRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\QuickInitInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\QuickInitInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResetBackupRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResetBackupResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResetInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResetInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\RestoreInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\RestoreInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResumeInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResumeInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\RotateClusterManagedCertRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\RotateClusterManagedCertResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\SwitchClusterMasterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\SwitchClusterMasterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\SyncClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\SyncClusterResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Hsm extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hsm', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Enables or disables the audit log feature and delivers audit logs to buckets.
     *
     * @remarks
     *   The region of the bucket must be the same as the region where the security audit feature is enabled.
     * *   If the security audit feature is enabled, do not delete Object Storage Service (OSS) buckets. If you delete OSS buckets, audit logs fail to be delivered.
     * *   Only electronic virtual security modules (EVSMs) and general virtual security modules (GVSMs) within the Chinese mainland support the security audit feature.
     *
     * @param request - ConfigAuditLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigAuditLogResponse
     *
     * @param ConfigAuditLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ConfigAuditLogResponse
     */
    public function configAuditLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditAction) {
            @$query['AuditAction'] = $request->auditAction;
        }

        if (null !== $request->auditOssBucket) {
            @$query['AuditOssBucket'] = $request->auditOssBucket;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigAuditLog',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigAuditLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the audit log feature and delivers audit logs to buckets.
     *
     * @remarks
     *   The region of the bucket must be the same as the region where the security audit feature is enabled.
     * *   If the security audit feature is enabled, do not delete Object Storage Service (OSS) buckets. If you delete OSS buckets, audit logs fail to be delivered.
     * *   Only electronic virtual security modules (EVSMs) and general virtual security modules (GVSMs) within the Chinese mainland support the security audit feature.
     *
     * @param request - ConfigAuditLogRequest
     *
     * @returns ConfigAuditLogResponse
     *
     * @param ConfigAuditLogRequest $request
     *
     * @return ConfigAuditLogResponse
     */
    public function configAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configAuditLogWithOptions($request, $runtime);
    }

    /**
     * Configures the name and description of a backup.
     *
     * @param request - ConfigBackupRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigBackupRemarkResponse
     *
     * @param ConfigBackupRemarkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConfigBackupRemarkResponse
     */
    public function configBackupRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigBackupRemark',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigBackupRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the name and description of a backup.
     *
     * @param request - ConfigBackupRemarkRequest
     *
     * @returns ConfigBackupRemarkResponse
     *
     * @param ConfigBackupRemarkRequest $request
     *
     * @return ConfigBackupRemarkResponse
     */
    public function configBackupRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configBackupRemarkWithOptions($request, $runtime);
    }

    /**
     * Modifies the execution mode of a backup task.
     *
     * @remarks
     * Only hardware security modules (HSMs) in the Chinese mainland support the operation.
     *
     * @param request - ConfigBackupTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigBackupTaskResponse
     *
     * @param ConfigBackupTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfigBackupTaskResponse
     */
    public function configBackupTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupHourInDay) {
            @$query['BackupHourInDay'] = $request->backupHourInDay;
        }

        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->backupPeriod) {
            @$query['BackupPeriod'] = $request->backupPeriod;
        }

        if (null !== $request->manual2PeriodicList) {
            @$query['Manual2PeriodicList'] = $request->manual2PeriodicList;
        }

        if (null !== $request->periodic2ManualList) {
            @$query['Periodic2ManualList'] = $request->periodic2ManualList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigBackupTask',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigBackupTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the execution mode of a backup task.
     *
     * @remarks
     * Only hardware security modules (HSMs) in the Chinese mainland support the operation.
     *
     * @param request - ConfigBackupTaskRequest
     *
     * @returns ConfigBackupTaskResponse
     *
     * @param ConfigBackupTaskRequest $request
     *
     * @return ConfigBackupTaskResponse
     */
    public function configBackupTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configBackupTaskWithOptions($request, $runtime);
    }

    /**
     * Configures a certificate for a cluster of hardware security modules (HSMs) outside the Chinese mainland.
     *
     * @remarks
     * For more information about how to create a self-signed certificate and a cluster certificate on an Elastic Compute Service (ECS) instance, see [Create a NIST FIPS-validated GVSM cluster](https://help.aliyun.com/document_detail/293585.html).
     *
     * @param request - ConfigClusterCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigClusterCertificateResponse
     *
     * @param ConfigClusterCertificateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ConfigClusterCertificateResponse
     */
    public function configClusterCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterCertificate) {
            @$body['ClusterCertificate'] = $request->clusterCertificate;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->issuerCertificate) {
            @$body['IssuerCertificate'] = $request->issuerCertificate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigClusterCertificate',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigClusterCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a certificate for a cluster of hardware security modules (HSMs) outside the Chinese mainland.
     *
     * @remarks
     * For more information about how to create a self-signed certificate and a cluster certificate on an Elastic Compute Service (ECS) instance, see [Create a NIST FIPS-validated GVSM cluster](https://help.aliyun.com/document_detail/293585.html).
     *
     * @param request - ConfigClusterCertificateRequest
     *
     * @returns ConfigClusterCertificateResponse
     *
     * @param ConfigClusterCertificateRequest $request
     *
     * @return ConfigClusterCertificateResponse
     */
    public function configClusterCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configClusterCertificateWithOptions($request, $runtime);
    }

    /**
     * Changes the name of a cluster.
     *
     * @param request - ConfigClusterNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigClusterNameResponse
     *
     * @param ConfigClusterNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ConfigClusterNameResponse
     */
    public function configClusterNameWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$body['ClusterName'] = $request->clusterName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigClusterName',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigClusterNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the name of a cluster.
     *
     * @param request - ConfigClusterNameRequest
     *
     * @returns ConfigClusterNameResponse
     *
     * @param ConfigClusterNameRequest $request
     *
     * @return ConfigClusterNameResponse
     */
    public function configClusterName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configClusterNameWithOptions($request, $runtime);
    }

    /**
     * Modifies a list of vSwitches that are associated with a hardware security module (HSM) cluster.
     *
     * @remarks
     * You can call the operation to configure all vSwitches that are associated with a HSM cluster. You can only add new vSwitches. You cannot delete vSwitches.
     *
     * @param tmpReq - ConfigClusterSubnetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigClusterSubnetResponse
     *
     * @param ConfigClusterSubnetRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ConfigClusterSubnetResponse
     */
    public function configClusterSubnetWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ConfigClusterSubnetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->vSwitchIds) {
            $request->vSwitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIds, 'VSwitchIds', 'json');
        }

        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vSwitchIdsShrink) {
            @$body['VSwitchIds'] = $request->vSwitchIdsShrink;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigClusterSubnet',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigClusterSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a list of vSwitches that are associated with a hardware security module (HSM) cluster.
     *
     * @remarks
     * You can call the operation to configure all vSwitches that are associated with a HSM cluster. You can only add new vSwitches. You cannot delete vSwitches.
     *
     * @param request - ConfigClusterSubnetRequest
     *
     * @returns ConfigClusterSubnetResponse
     *
     * @param ConfigClusterSubnetRequest $request
     *
     * @return ConfigClusterSubnetResponse
     */
    public function configClusterSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configClusterSubnetWithOptions($request, $runtime);
    }

    /**
     * Modifies the IP address whitelist of a cluster.
     *
     * @remarks
     * The IP address whitelist of a cluster has a higher priority than the IP address whitelist of a hardware security module (HSM) in the cluster. In cluster mode, we recommend that you create an IP address whitelist for your cluster. You do not need to create an IP address for the HSM in the cluster.
     *
     * @param request - ConfigClusterWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigClusterWhitelistResponse
     *
     * @param ConfigClusterWhitelistRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfigClusterWhitelistResponse
     */
    public function configClusterWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->whitelist) {
            @$body['Whitelist'] = $request->whitelist;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigClusterWhitelist',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigClusterWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IP address whitelist of a cluster.
     *
     * @remarks
     * The IP address whitelist of a cluster has a higher priority than the IP address whitelist of a hardware security module (HSM) in the cluster. In cluster mode, we recommend that you create an IP address whitelist for your cluster. You do not need to create an IP address for the HSM in the cluster.
     *
     * @param request - ConfigClusterWhitelistRequest
     *
     * @returns ConfigClusterWhitelistResponse
     *
     * @param ConfigClusterWhitelistRequest $request
     *
     * @return ConfigClusterWhitelistResponse
     */
    public function configClusterWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configClusterWhitelistWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of an image.
     *
     * @param request - ConfigImageRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigImageRemarkResponse
     *
     * @param ConfigImageRemarkRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ConfigImageRemarkResponse
     */
    public function configImageRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigImageRemark',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigImageRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of an image.
     *
     * @param request - ConfigImageRemarkRequest
     *
     * @returns ConfigImageRemarkResponse
     *
     * @param ConfigImageRemarkRequest $request
     *
     * @return ConfigImageRemarkResponse
     */
    public function configImageRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configImageRemarkWithOptions($request, $runtime);
    }

    /**
     * Modifies the virtual private cloud (VPC) endpoint of a hardware security module (HSM).
     *
     * @remarks
     * After you add an HSM to a cluster, you cannot modify the VPC endpoint of the HSM.
     *
     * @param request - ConfigInstanceIpAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigInstanceIpAddressResponse
     *
     * @param ConfigInstanceIpAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConfigInstanceIpAddressResponse
     */
    public function configInstanceIpAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$body['Ip'] = $request->ip;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vSwitchId) {
            @$body['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigInstanceIpAddress',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigInstanceIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the virtual private cloud (VPC) endpoint of a hardware security module (HSM).
     *
     * @remarks
     * After you add an HSM to a cluster, you cannot modify the VPC endpoint of the HSM.
     *
     * @param request - ConfigInstanceIpAddressRequest
     *
     * @returns ConfigInstanceIpAddressResponse
     *
     * @param ConfigInstanceIpAddressRequest $request
     *
     * @return ConfigInstanceIpAddressResponse
     */
    public function configInstanceIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceIpAddressWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a hardware security module (HSM).
     *
     * @param request - ConfigInstanceRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigInstanceRemarkResponse
     *
     * @param ConfigInstanceRemarkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ConfigInstanceRemarkResponse
     */
    public function configInstanceRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigInstanceRemark',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigInstanceRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a hardware security module (HSM).
     *
     * @param request - ConfigInstanceRemarkRequest
     *
     * @returns ConfigInstanceRemarkResponse
     *
     * @param ConfigInstanceRemarkRequest $request
     *
     * @return ConfigInstanceRemarkResponse
     */
    public function configInstanceRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceRemarkWithOptions($request, $runtime);
    }

    /**
     * Modifies the IP address whitelist of a hardware security module (HSM).
     *
     * @remarks
     * You can configure the IP address whitelist for HSMs that are not added to a cluster and are in the ACTIVE state.
     *
     * @param request - ConfigInstanceWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigInstanceWhitelistResponse
     *
     * @param ConfigInstanceWhitelistRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConfigInstanceWhitelistResponse
     */
    public function configInstanceWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->whitelist) {
            @$body['Whitelist'] = $request->whitelist;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigInstanceWhitelist',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigInstanceWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IP address whitelist of a hardware security module (HSM).
     *
     * @remarks
     * You can configure the IP address whitelist for HSMs that are not added to a cluster and are in the ACTIVE state.
     *
     * @param request - ConfigInstanceWhitelistRequest
     *
     * @returns ConfigInstanceWhitelistResponse
     *
     * @param ConfigInstanceWhitelistRequest $request
     *
     * @return ConfigInstanceWhitelistResponse
     */
    public function configInstanceWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceWhitelistWithOptions($request, $runtime);
    }

    /**
     * Copies an image to another region.
     *
     * @remarks
     * This operation requires that the destination region does not have the same image. This operation is available only for hardware security modules (HSMs) outside the Chinese mainland.
     *
     * @param request - CopyImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyImageResponse
     *
     * @param CopyImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CopyImageResponse
     */
    public function copyImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageUid) {
            @$body['ImageUid'] = $request->imageUid;
        }

        if (null !== $request->targetRegionId) {
            @$body['TargetRegionId'] = $request->targetRegionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CopyImage',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copies an image to another region.
     *
     * @remarks
     * This operation requires that the destination region does not have the same image. This operation is available only for hardware security modules (HSMs) outside the Chinese mainland.
     *
     * @param request - CopyImageRequest
     *
     * @returns CopyImageResponse
     *
     * @param CopyImageRequest $request
     *
     * @return CopyImageResponse
     */
    public function copyImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyImageWithOptions($request, $runtime);
    }

    /**
     * Creates a cluster by specifying a hardware security module (HSM) as the master HSM.
     *
     * @remarks
     * The master HSM that you specify to create a cluster must be in the ACTIVE state.
     *
     * @param request - CreateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterName) {
            @$body['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->masterInstanceId) {
            @$body['MasterInstanceId'] = $request->masterInstanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCluster',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cluster by specifying a hardware security module (HSM) as the master HSM.
     *
     * @remarks
     * The master HSM that you specify to create a cluster must be in the ACTIVE state.
     *
     * @param request - CreateClusterRequest
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * Deletes a hardware security module (HSM) cluster.
     *
     * @remarks
     * You can delete an HSM only if the cluster does not contain HSMs.
     *
     * @param request - DeleteClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCluster',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a hardware security module (HSM) cluster.
     *
     * @remarks
     * You can delete an HSM only if the cluster does not contain HSMs.
     *
     * @param request - DeleteClusterRequest
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * Queries the regions that are supported by Cloud Hardware Security Module.
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2023-11-13',
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
     * Queries the regions that are supported by Cloud Hardware Security Module.
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
     * 下载集群托管证书.
     *
     * @remarks
     * ## 请求说明
     * - 该API允许用户获取特定集群的管理证书。
     * - 返回的数据是经过base64编码的证书内容。
     *
     * @param request - DownloadClusterManagedCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadClusterManagedCertResponse
     *
     * @param DownloadClusterManagedCertRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DownloadClusterManagedCertResponse
     */
    public function downloadClusterManagedCertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadClusterManagedCert',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadClusterManagedCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下载集群托管证书.
     *
     * @remarks
     * ## 请求说明
     * - 该API允许用户获取特定集群的管理证书。
     * - 返回的数据是经过base64编码的证书内容。
     *
     * @param request - DownloadClusterManagedCertRequest
     *
     * @returns DownloadClusterManagedCertResponse
     *
     * @param DownloadClusterManagedCertRequest $request
     *
     * @return DownloadClusterManagedCertResponse
     */
    public function downloadClusterManagedCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadClusterManagedCertWithOptions($request, $runtime);
    }

    /**
     * Binds a backup to a specified hardware security module (HSM).
     *
     * @remarks
     * This operation is available only for backups in the Chinese mainland.
     *
     * @param request - EnableBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableBackupResponse
     *
     * @param EnableBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnableBackupResponse
     */
    public function enableBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableBackup',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a backup to a specified hardware security module (HSM).
     *
     * @remarks
     * This operation is available only for backups in the Chinese mainland.
     *
     * @param request - EnableBackupRequest
     *
     * @returns EnableBackupResponse
     *
     * @param EnableBackupRequest $request
     *
     * @return EnableBackupResponse
     */
    public function enableBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableBackupWithOptions($request, $runtime);
    }

    /**
     * Exports the image for a specified hardware security module (HSM).
     *
     * @param request - ExportImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportImageResponse
     *
     * @param ExportImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExportImageResponse
     */
    public function exportImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportImage',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports the image for a specified hardware security module (HSM).
     *
     * @param request - ExportImageRequest
     *
     * @returns ExportImageResponse
     *
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
     * Queries the status of the audit log feature in the current region.
     *
     * @param request - GetAuditLogStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAuditLogStatusResponse
     *
     * @param GetAuditLogStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAuditLogStatusResponse
     */
    public function getAuditLogStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->getOssBucket) {
            @$query['GetOssBucket'] = $request->getOssBucket;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAuditLogStatus',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAuditLogStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the audit log feature in the current region.
     *
     * @param request - GetAuditLogStatusRequest
     *
     * @returns GetAuditLogStatusResponse
     *
     * @param GetAuditLogStatusRequest $request
     *
     * @return GetAuditLogStatusResponse
     */
    public function getAuditLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditLogStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a specified backup.
     *
     * @param request - GetBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBackupResponse
     *
     * @param GetBackupRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetBackupResponse
     */
    public function getBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBackup',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a specified backup.
     *
     * @param request - GetBackupRequest
     *
     * @returns GetBackupResponse
     *
     * @param GetBackupRequest $request
     *
     * @return GetBackupResponse
     */
    public function getBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupWithOptions($request, $runtime);
    }

    /**
     * Queries information about a specified cluster.
     *
     * @param request - GetClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterResponse
     *
     * @param GetClusterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetClusterResponse
     */
    public function getClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCluster',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a specified cluster.
     *
     * @param request - GetClusterRequest
     *
     * @returns GetClusterResponse
     *
     * @param GetClusterRequest $request
     *
     * @return GetClusterResponse
     */
    public function getCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterWithOptions($request, $runtime);
    }

    /**
     * Queries information about an image.
     *
     * @param request - GetImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageResponse
     *
     * @param GetImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetImageResponse
     */
    public function getImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImage',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about an image.
     *
     * @param request - GetImageRequest
     *
     * @returns GetImageResponse
     *
     * @param GetImageRequest $request
     *
     * @return GetImageResponse
     */
    public function getImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageWithOptions($request, $runtime);
    }

    /**
     * Queries information about a specified hardware security module (HSM).
     *
     * @param request - GetInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a specified hardware security module (HSM).
     *
     * @param request - GetInstanceRequest
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an asynchronous task.
     *
     * @param request - GetJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobResponse
     *
     * @param GetJobRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJob',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an asynchronous task.
     *
     * @param request - GetJobRequest
     *
     * @returns GetJobResponse
     *
     * @param GetJobRequest $request
     *
     * @return GetJobResponse
     */
    public function getJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobWithOptions($request, $runtime);
    }

    /**
     * Authorizes Cloud Hardware Security Module to deliver logs.
     *
     * @param request - InitializeAuditLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeAuditLogResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return InitializeAuditLogResponse
     */
    public function initializeAuditLogWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'InitializeAuditLog',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitializeAuditLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Authorizes Cloud Hardware Security Module to deliver logs.
     *
     * @returns InitializeAuditLogResponse
     *
     * @return InitializeAuditLogResponse
     */
    public function initializeAuditLog()
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeAuditLogWithOptions($runtime);
    }

    /**
     * Initializes a cluster.
     *
     * @remarks
     *   The cluster is not initialized, but the master hardware security module (HSM) of the cluster is initialized.
     * *   Two or more vSwitches are configured for the cluster.
     *
     * @param request - InitializeClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeClusterResponse
     *
     * @param InitializeClusterRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return InitializeClusterResponse
     */
    public function initializeClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InitializeCluster',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitializeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initializes a cluster.
     *
     * @remarks
     *   The cluster is not initialized, but the master hardware security module (HSM) of the cluster is initialized.
     * *   Two or more vSwitches are configured for the cluster.
     *
     * @param request - InitializeClusterRequest
     *
     * @returns InitializeClusterResponse
     *
     * @param InitializeClusterRequest $request
     *
     * @return InitializeClusterResponse
     */
    public function initializeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeClusterWithOptions($request, $runtime);
    }

    /**
     * Adds a hardware security module (HSM) to the current cluster.
     *
     * @remarks
     *   You can add the HSM to only the cluster that is in the INITIALIZED state.
     * *   The HSM that you want to add to the cluster is enabled or disabled and is not initialized.
     *
     * @param request - JoinClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns JoinClusterResponse
     *
     * @param JoinClusterRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return JoinClusterResponse
     */
    public function joinClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'JoinCluster',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return JoinClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a hardware security module (HSM) to the current cluster.
     *
     * @remarks
     *   You can add the HSM to only the cluster that is in the INITIALIZED state.
     * *   The HSM that you want to add to the cluster is enabled or disabled and is not initialized.
     *
     * @param request - JoinClusterRequest
     *
     * @returns JoinClusterResponse
     *
     * @param JoinClusterRequest $request
     *
     * @return JoinClusterResponse
     */
    public function joinCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinClusterWithOptions($request, $runtime);
    }

    /**
     * Removes a hardware security module (HSM) from the current cluster.
     *
     * @remarks
     *   If non-master HSMs exist in a cluster, the master HSM cannot be removed from the cluster.
     * *   After the master HSM is removed from a cluster, the cluster enters the TO_DELETE state and cannot be restored to the available state. Proceed with caution.
     *
     * @param request - LeaveClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LeaveClusterResponse
     *
     * @param LeaveClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return LeaveClusterResponse
     */
    public function leaveClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LeaveCluster',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LeaveClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a hardware security module (HSM) from the current cluster.
     *
     * @remarks
     *   If non-master HSMs exist in a cluster, the master HSM cannot be removed from the cluster.
     * *   After the master HSM is removed from a cluster, the cluster enters the TO_DELETE state and cannot be restored to the available state. Proceed with caution.
     *
     * @param request - LeaveClusterRequest
     *
     * @returns LeaveClusterResponse
     *
     * @param LeaveClusterRequest $request
     *
     * @return LeaveClusterResponse
     */
    public function leaveCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->leaveClusterWithOptions($request, $runtime);
    }

    /**
     * Queries the backups that meet the query conditions.
     *
     * @param request - ListBackupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBackupsResponse
     *
     * @param ListBackupsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListBackupsResponse
     */
    public function listBackupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
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
            'action' => 'ListBackups',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the backups that meet the query conditions.
     *
     * @param request - ListBackupsRequest
     *
     * @returns ListBackupsResponse
     *
     * @param ListBackupsRequest $request
     *
     * @return ListBackupsResponse
     */
    public function listBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBackupsWithOptions($request, $runtime);
    }

    /**
     * Queries the clusters that meet the query conditions.
     *
     * @param request - ListClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListClusters',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the clusters that meet the query conditions.
     *
     * @param request - ListClustersRequest
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * Queries the images that meet the specified conditions.
     *
     * @param request - ListImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
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
            'action' => 'ListImages',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the images that meet the specified conditions.
     *
     * @param request - ListImagesRequest
     *
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($request, $runtime);
    }

    /**
     * Queries the hardware security modules (HSMs) that meet the query conditions.
     *
     * @param request - ListInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->tenantIsolationType) {
            @$body['TenantIsolationType'] = $request->tenantIsolationType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the hardware security modules (HSMs) that meet the query conditions.
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * Moves a resource to a new resource group.
     *
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action' => 'MoveResourceGroup',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves a resource to a new resource group.
     *
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Disables a hardware security module (HSM).
     *
     * @remarks
     * After you disable an HSM, the relevant service operations fail. Proceed with caution.
     *
     * @param request - PauseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseInstanceResponse
     *
     * @param PauseInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PauseInstanceResponse
     */
    public function pauseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PauseInstance',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PauseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a hardware security module (HSM).
     *
     * @remarks
     * After you disable an HSM, the relevant service operations fail. Proceed with caution.
     *
     * @param request - PauseInstanceRequest
     *
     * @returns PauseInstanceResponse
     *
     * @param PauseInstanceRequest $request
     *
     * @return PauseInstanceResponse
     */
    public function pauseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseInstanceWithOptions($request, $runtime);
    }

    /**
     * 快速部署集群.
     *
     * @param tmpReq - QuickDeployClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuickDeployClusterResponse
     *
     * @param QuickDeployClusterRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return QuickDeployClusterResponse
     */
    public function quickDeployClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QuickDeployClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceList) {
            $request->instanceListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceList, 'InstanceList', 'json');
        }

        if (null !== $tmpReq->vSwitchIdList) {
            $request->vSwitchIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIdList, 'VSwitchIdList', 'json');
        }

        if (null !== $tmpReq->whiteList) {
            $request->whiteListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->whiteList, 'WhiteList', 'json');
        }

        $query = [];
        if (null !== $request->certManaged) {
            @$query['CertManaged'] = $request->certManaged;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->instanceListShrink) {
            @$query['InstanceList'] = $request->instanceListShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vSwitchIdListShrink) {
            @$query['VSwitchIdList'] = $request->vSwitchIdListShrink;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->whiteListShrink) {
            @$query['WhiteList'] = $request->whiteListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuickDeployCluster',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuickDeployClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 快速部署集群.
     *
     * @param request - QuickDeployClusterRequest
     *
     * @returns QuickDeployClusterResponse
     *
     * @param QuickDeployClusterRequest $request
     *
     * @return QuickDeployClusterResponse
     */
    public function quickDeployCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->quickDeployClusterWithOptions($request, $runtime);
    }

    /**
     * Initializes a hardware security module (HSM).
     *
     * @remarks
     * This operation is supported only for general virtual security modules (GVSMs) in the Chinese mainland.
     *
     * @param request - QuickInitInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuickInitInstanceResponse
     *
     * @param QuickInitInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QuickInitInstanceResponse
     */
    public function quickInitInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QuickInitInstance',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuickInitInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initializes a hardware security module (HSM).
     *
     * @remarks
     * This operation is supported only for general virtual security modules (GVSMs) in the Chinese mainland.
     *
     * @param request - QuickInitInstanceRequest
     *
     * @returns QuickInitInstanceResponse
     *
     * @param QuickInitInstanceRequest $request
     *
     * @return QuickInitInstanceResponse
     */
    public function quickInitInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->quickInitInstanceWithOptions($request, $runtime);
    }

    /**
     * Disassociates a backup from a hardware security module (HSM).
     *
     * @remarks
     * This operation is available only for HSMs in the Chinese mainland.
     *
     * @param request - ResetBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetBackupResponse
     *
     * @param ResetBackupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ResetBackupResponse
     */
    public function resetBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetBackup',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a backup from a hardware security module (HSM).
     *
     * @remarks
     * This operation is available only for HSMs in the Chinese mainland.
     *
     * @param request - ResetBackupRequest
     *
     * @returns ResetBackupResponse
     *
     * @param ResetBackupRequest $request
     *
     * @return ResetBackupResponse
     */
    public function resetBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetBackupWithOptions($request, $runtime);
    }

    /**
     * Resets a hardware security module (HSM).
     *
     * @remarks
     * After an HSM is reset, all related data is deleted and cannot be recovered. Proceed with caution.
     *
     * @param request - ResetInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetInstanceResponse
     *
     * @param ResetInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResetInstanceResponse
     */
    public function resetInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetInstance',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets a hardware security module (HSM).
     *
     * @remarks
     * After an HSM is reset, all related data is deleted and cannot be recovered. Proceed with caution.
     *
     * @param request - ResetInstanceRequest
     *
     * @returns ResetInstanceResponse
     *
     * @param ResetInstanceRequest $request
     *
     * @return ResetInstanceResponse
     */
    public function resetInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetInstanceWithOptions($request, $runtime);
    }

    /**
     * Restores a hardware security module (HSM) by using an image.
     *
     * @remarks
     * You can use images to restore only HSMs that are paused or disabled.
     *
     * @param request - RestoreInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreInstanceResponse
     *
     * @param RestoreInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestoreInstanceResponse
     */
    public function restoreInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestoreInstance',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestoreInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores a hardware security module (HSM) by using an image.
     *
     * @remarks
     * You can use images to restore only HSMs that are paused or disabled.
     *
     * @param request - RestoreInstanceRequest
     *
     * @returns RestoreInstanceResponse
     *
     * @param RestoreInstanceRequest $request
     *
     * @return RestoreInstanceResponse
     */
    public function restoreInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreInstanceWithOptions($request, $runtime);
    }

    /**
     * Resumes a disabled hardware security module (HSM).
     *
     * @param request - ResumeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeInstanceResponse
     *
     * @param ResumeInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResumeInstance',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes a disabled hardware security module (HSM).
     *
     * @param request - ResumeInstanceRequest
     *
     * @returns ResumeInstanceResponse
     *
     * @param ResumeInstanceRequest $request
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeInstanceWithOptions($request, $runtime);
    }

    /**
     * 轮转集群托管证书.
     *
     * @remarks
     * ## 请求说明
     * 该API用于触发指定集群的管理证书轮转过程。通过提供`ClusterId`参数，可以指定需要进行证书轮转的集群。此操作有助于提高集群的安全性，建议定期执行。
     * ### 注意事项
     * - 确保提供的`ClusterId`是有效的，并且用户具有对该集群的操作权限。
     * - 证书轮转可能会影响依赖于旧证书的服务，请在适当的时间窗口内执行此操作。
     *
     * @param request - RotateClusterManagedCertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RotateClusterManagedCertResponse
     *
     * @param RotateClusterManagedCertRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RotateClusterManagedCertResponse
     */
    public function rotateClusterManagedCertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RotateClusterManagedCert',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RotateClusterManagedCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 轮转集群托管证书.
     *
     * @remarks
     * ## 请求说明
     * 该API用于触发指定集群的管理证书轮转过程。通过提供`ClusterId`参数，可以指定需要进行证书轮转的集群。此操作有助于提高集群的安全性，建议定期执行。
     * ### 注意事项
     * - 确保提供的`ClusterId`是有效的，并且用户具有对该集群的操作权限。
     * - 证书轮转可能会影响依赖于旧证书的服务，请在适当的时间窗口内执行此操作。
     *
     * @param request - RotateClusterManagedCertRequest
     *
     * @returns RotateClusterManagedCertResponse
     *
     * @param RotateClusterManagedCertRequest $request
     *
     * @return RotateClusterManagedCertResponse
     */
    public function rotateClusterManagedCert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rotateClusterManagedCertWithOptions($request, $runtime);
    }

    /**
     * Promotes a slave hardware security module (HSM) to the master HSM within the cluster. Clusters that are manually synchronized in the Chinese Mainland do not support this operation.
     *
     * @param request - SwitchClusterMasterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchClusterMasterResponse
     *
     * @param SwitchClusterMasterRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SwitchClusterMasterResponse
     */
    public function switchClusterMasterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SwitchClusterMaster',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchClusterMasterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Promotes a slave hardware security module (HSM) to the master HSM within the cluster. Clusters that are manually synchronized in the Chinese Mainland do not support this operation.
     *
     * @param request - SwitchClusterMasterRequest
     *
     * @returns SwitchClusterMasterResponse
     *
     * @param SwitchClusterMasterRequest $request
     *
     * @return SwitchClusterMasterResponse
     */
    public function switchClusterMaster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchClusterMasterWithOptions($request, $runtime);
    }

    /**
     * Synchronizes the data of hardware security modules (HSMs) in a cluster.
     *
     * @remarks
     *   This operation is used for manually synchronizing data within clusters located in the Chinese Mainland. For clusters outside the Chinese Mainland, automatic data synchronization is supported, and this operation is unnecessary. If you attempt to use this operation, a 400 error code will be returned.
     * *   The data synchronization takes approximately 5 minutes. To avoid service interruptions, we recommend performing this operation during off-peak hours.
     *
     * @param request - SyncClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncClusterResponse
     *
     * @param SyncClusterRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SyncClusterResponse
     */
    public function syncClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncCluster',
            'version' => '2023-11-13',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronizes the data of hardware security modules (HSMs) in a cluster.
     *
     * @remarks
     *   This operation is used for manually synchronizing data within clusters located in the Chinese Mainland. For clusters outside the Chinese Mainland, automatic data synchronization is supported, and this operation is unnecessary. If you attempt to use this operation, a 400 error code will be returned.
     * *   The data synchronization takes approximately 5 minutes. To avoid service interruptions, we recommend performing this operation during off-peak hours.
     *
     * @param request - SyncClusterRequest
     *
     * @returns SyncClusterResponse
     *
     * @param SyncClusterRequest $request
     *
     * @return SyncClusterResponse
     */
    public function syncCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncClusterWithOptions($request, $runtime);
    }
}
