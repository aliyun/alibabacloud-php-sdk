<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ConfigureBackupSetInfoRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ConfigureBackupSetInfoResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\CreateAdvancedPolicyRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\CreateAdvancedPolicyResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\CreateDownloadRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\CreateDownloadResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DeleteSandboxInstanceRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DeleteSandboxInstanceResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupDataListRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupDataListResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBakDataSourceStorageAccessInfoRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBakDataSourceStorageAccessInfoResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeCostInfoByDbsInstanceRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeCostInfoByDbsInstanceResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDBTablesRecoveryBackupSetRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDBTablesRecoveryBackupSetResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDBTablesRecoveryStateRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDBTablesRecoveryStateResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDBTablesRecoveryTimeRangeRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDBTablesRecoveryTimeRangeResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDownloadBackupSetStorageInfoRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDownloadBackupSetStorageInfoResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDownloadSupportRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDownloadSupportResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDownloadTaskRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDownloadTaskResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxBackupSetsRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxBackupSetsResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxInstancesRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxInstancesResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxRecoveryTimeRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxRecoveryTimeResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyBackupPolicyShrinkRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyDBTablesRecoveryStateRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyDBTablesRecoveryStateResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\RetryDownloadTaskRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\RetryDownloadTaskResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\SupportDBTableRecoveryRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\SupportDBTableRecoveryResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dbs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-beijing' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-chengdu' => 'dbs-api.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-huhehaote' => 'dbs-api.cn-huhehaote.aliyuncs.com',
            'cn-hangzhou' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shanghai' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-hongkong' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'ap-southeast-1' => 'dbs-api.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'dbs-api.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'dbs-api.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'dbs-api.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1' => 'dbs-api.ap-northeast-1.aliyuncs.com',
            'us-west-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'us-east-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'eu-central-1' => 'dbs-api.eu-central-1.aliyuncs.com',
            'cn-hangzhou-finance' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'ap-south-1' => 'dbs-api.ap-south-1.aliyuncs.com',
            'eu-west-1' => 'dbs-api.eu-west-1.aliyuncs.com',
            'me-east-1' => 'dbs-api.me-east-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dbs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Moves a resource from one resource group to another.
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
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
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
            'version' => '2021-01-01',
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
     * Moves a resource from one resource group to another.
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
     * 配置备份集信息.
     *
     * @param request - ConfigureBackupSetInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureBackupSetInfoResponse
     *
     * @param ConfigureBackupSetInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfigureBackupSetInfoResponse
     */
    public function configureBackupSetInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupMethod) {
            @$query['BackupMethod'] = $request->backupMethod;
        }

        if (null !== $request->backupMode) {
            @$query['BackupMode'] = $request->backupMode;
        }

        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->backupSetName) {
            @$query['BackupSetName'] = $request->backupSetName;
        }

        if (null !== $request->backupType) {
            @$query['BackupType'] = $request->backupType;
        }

        if (null !== $request->checkSum) {
            @$query['CheckSum'] = $request->checkSum;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->extraMeta) {
            @$query['ExtraMeta'] = $request->extraMeta;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->uploadStatus) {
            @$query['UploadStatus'] = $request->uploadStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigureBackupSetInfo',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureBackupSetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置备份集信息.
     *
     * @param request - ConfigureBackupSetInfoRequest
     *
     * @returns ConfigureBackupSetInfoResponse
     *
     * @param ConfigureBackupSetInfoRequest $request
     *
     * @return ConfigureBackupSetInfoResponse
     */
    public function configureBackupSetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureBackupSetInfoWithOptions($request, $runtime);
    }

    /**
     * Enables an advanced backup policy for a PolarDB instance.
     *
     * @remarks
     * ### [](#)Supported database engines
     * PolarDB for MySQL
     * >  This API operation is available only to specific customers. If you want to call this API operation, join the Database Backup (DBS) DingTalk group (ID 35585947) for customer consultation to request permissions.
     *
     * @param request - CreateAdvancedPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAdvancedPolicyResponse
     *
     * @param CreateAdvancedPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateAdvancedPolicyResponse
     */
    public function createAdvancedPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAdvancedPolicy',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAdvancedPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables an advanced backup policy for a PolarDB instance.
     *
     * @remarks
     * ### [](#)Supported database engines
     * PolarDB for MySQL
     * >  This API operation is available only to specific customers. If you want to call this API operation, join the Database Backup (DBS) DingTalk group (ID 35585947) for customer consultation to request permissions.
     *
     * @param request - CreateAdvancedPolicyRequest
     *
     * @returns CreateAdvancedPolicyResponse
     *
     * @param CreateAdvancedPolicyRequest $request
     *
     * @return CreateAdvancedPolicyResponse
     */
    public function createAdvancedPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAdvancedPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates an advanced download task for an ApsaraDB RDS for MySQL instance, an ApsaraDB RDS for PostgreSQL instance, or a PolarDB for MySQL cluster.
     *
     * @remarks
     * ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * For the instances that meet your business requirements, you can create an advanced download task by point in time or backup set. You can set the download destination to a URL or directly upload the downloaded backup set to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving.
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *
     * @param request - CreateDownloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDownloadResponse
     *
     * @param CreateDownloadRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDownloadResponse
     */
    public function createDownloadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adminDatabase) {
            @$query['AdminDatabase'] = $request->adminDatabase;
        }

        if (null !== $request->bakSetId) {
            @$query['BakSetId'] = $request->bakSetId;
        }

        if (null !== $request->bakSetSize) {
            @$query['BakSetSize'] = $request->bakSetSize;
        }

        if (null !== $request->bakSetType) {
            @$query['BakSetType'] = $request->bakSetType;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->downloadPointInTime) {
            @$query['DownloadPointInTime'] = $request->downloadPointInTime;
        }

        if (null !== $request->formatType) {
            @$query['FormatType'] = $request->formatType;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->isCluster) {
            @$query['IsCluster'] = $request->isCluster;
        }

        if (null !== $request->isPhysical) {
            @$query['IsPhysical'] = $request->isPhysical;
        }

        if (null !== $request->primaryKeyTypeOnly) {
            @$query['PrimaryKeyTypeOnly'] = $request->primaryKeyTypeOnly;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        if (null !== $request->targetBucket) {
            @$query['TargetBucket'] = $request->targetBucket;
        }

        if (null !== $request->targetOssRegion) {
            @$query['TargetOssRegion'] = $request->targetOssRegion;
        }

        if (null !== $request->targetPath) {
            @$query['TargetPath'] = $request->targetPath;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        if (null !== $request->useZstd) {
            @$query['UseZstd'] = $request->useZstd;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDownload',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an advanced download task for an ApsaraDB RDS for MySQL instance, an ApsaraDB RDS for PostgreSQL instance, or a PolarDB for MySQL cluster.
     *
     * @remarks
     * ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * For the instances that meet your business requirements, you can create an advanced download task by point in time or backup set. You can set the download destination to a URL or directly upload the downloaded backup set to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving.
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *
     * @param request - CreateDownloadRequest
     *
     * @returns CreateDownloadResponse
     *
     * @param CreateDownloadRequest $request
     *
     * @return CreateDownloadResponse
     */
    public function createDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDownloadWithOptions($request, $runtime);
    }

    /**
     * Releases a sandbox instance.
     *
     * @remarks
     * This operation is available only for the Database Backup (DBS) API of the 2021-01-01 version.
     *
     * @param request - DeleteSandboxInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSandboxInstanceResponse
     *
     * @param DeleteSandboxInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSandboxInstanceResponse
     */
    public function deleteSandboxInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSandboxInstance',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSandboxInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a sandbox instance.
     *
     * @remarks
     * This operation is available only for the Database Backup (DBS) API of the 2021-01-01 version.
     *
     * @param request - DeleteSandboxInstanceRequest
     *
     * @returns DeleteSandboxInstanceResponse
     *
     * @param DeleteSandboxInstanceRequest $request
     *
     * @return DeleteSandboxInstanceResponse
     */
    public function deleteSandboxInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSandboxInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the backup data of a PolarDB for MySQL cluster.
     *
     * @remarks
     * ### [](#)Supported database engine
     * PolarDB for MySQL
     * >  This API operation is available only to specific customers. If you want to call this API operation, join the Database Backup (DBS) DingTalk group (ID: 35585947) for customer consultation to request permissions.
     * ### [](#)References
     * [Back up data of PolarDB for MySQL](https://help.aliyun.com/document_detail/88172.html)
     *
     * @param request - DescribeBackupDataListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupDataListResponse
     *
     * @param DescribeBackupDataListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackupDataListResponse
     */
    public function describeBackupDataListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->backupMethod) {
            @$query['BackupMethod'] = $request->backupMethod;
        }

        if (null !== $request->backupMode) {
            @$query['BackupMode'] = $request->backupMode;
        }

        if (null !== $request->backupScale) {
            @$query['BackupScale'] = $request->backupScale;
        }

        if (null !== $request->backupStatus) {
            @$query['BackupStatus'] = $request->backupStatus;
        }

        if (null !== $request->backupType) {
            @$query['BackupType'] = $request->backupType;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIsDeleted) {
            @$query['InstanceIsDeleted'] = $request->instanceIsDeleted;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceRegion) {
            @$query['InstanceRegion'] = $request->instanceRegion;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupDataList',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the backup data of a PolarDB for MySQL cluster.
     *
     * @remarks
     * ### [](#)Supported database engine
     * PolarDB for MySQL
     * >  This API operation is available only to specific customers. If you want to call this API operation, join the Database Backup (DBS) DingTalk group (ID: 35585947) for customer consultation to request permissions.
     * ### [](#)References
     * [Back up data of PolarDB for MySQL](https://help.aliyun.com/document_detail/88172.html)
     *
     * @param request - DescribeBackupDataListRequest
     *
     * @returns DescribeBackupDataListResponse
     *
     * @param DescribeBackupDataListRequest $request
     *
     * @return DescribeBackupDataListResponse
     */
    public function describeBackupDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupDataListWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the backup policy of a PolarDB for MySQL instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * PolarDB for MySQL
     * >  The API operation is available only to specific customers. If you want to call this API operation, request permissions by joining the Database Backup (DBS) DingTalk group (ID 35585947) for customer consultation.
     * ### [](#)References
     * [Topics related to backup policies of PolarDB for MySQL instances](https://help.aliyun.com/document_detail/280422.html)
     *
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
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPolicy',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the backup policy of a PolarDB for MySQL instance.
     *
     * @remarks
     * ### [](#)Supported database engine
     * PolarDB for MySQL
     * >  The API operation is available only to specific customers. If you want to call this API operation, request permissions by joining the Database Backup (DBS) DingTalk group (ID 35585947) for customer consultation.
     * ### [](#)References
     * [Topics related to backup policies of PolarDB for MySQL instances](https://help.aliyun.com/document_detail/280422.html)
     *
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
     * 查询存储介质访问详情.
     *
     * @param request - DescribeBakDataSourceStorageAccessInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBakDataSourceStorageAccessInfoResponse
     *
     * @param DescribeBakDataSourceStorageAccessInfoRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeBakDataSourceStorageAccessInfoResponse
     */
    public function describeBakDataSourceStorageAccessInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->backupType) {
            @$query['BackupType'] = $request->backupType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->durationSeconds) {
            @$query['DurationSeconds'] = $request->durationSeconds;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBakDataSourceStorageAccessInfo',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBakDataSourceStorageAccessInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询存储介质访问详情.
     *
     * @param request - DescribeBakDataSourceStorageAccessInfoRequest
     *
     * @returns DescribeBakDataSourceStorageAccessInfoResponse
     *
     * @param DescribeBakDataSourceStorageAccessInfoRequest $request
     *
     * @return DescribeBakDataSourceStorageAccessInfoResponse
     */
    public function describeBakDataSourceStorageAccessInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBakDataSourceStorageAccessInfoWithOptions($request, $runtime);
    }

    /**
     * 根据dbs实例id获取费用列表.
     *
     * @param request - DescribeCostInfoByDbsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCostInfoByDbsInstanceResponse
     *
     * @param DescribeCostInfoByDbsInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCostInfoByDbsInstanceResponse
     */
    public function describeCostInfoByDbsInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCostInfoByDbsInstance',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCostInfoByDbsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据dbs实例id获取费用列表.
     *
     * @param request - DescribeCostInfoByDbsInstanceRequest
     *
     * @returns DescribeCostInfoByDbsInstanceResponse
     *
     * @param DescribeCostInfoByDbsInstanceRequest $request
     *
     * @return DescribeCostInfoByDbsInstanceResponse
     */
    public function describeCostInfoByDbsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCostInfoByDbsInstanceWithOptions($request, $runtime);
    }

    /**
     * 查库表恢复可用的备份集.
     *
     * @param request - DescribeDBTablesRecoveryBackupSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBTablesRecoveryBackupSetResponse
     *
     * @param DescribeDBTablesRecoveryBackupSetRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDBTablesRecoveryBackupSetResponse
     */
    public function describeDBTablesRecoveryBackupSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBTablesRecoveryBackupSet',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBTablesRecoveryBackupSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查库表恢复可用的备份集.
     *
     * @param request - DescribeDBTablesRecoveryBackupSetRequest
     *
     * @returns DescribeDBTablesRecoveryBackupSetResponse
     *
     * @param DescribeDBTablesRecoveryBackupSetRequest $request
     *
     * @return DescribeDBTablesRecoveryBackupSetResponse
     */
    public function describeDBTablesRecoveryBackupSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBTablesRecoveryBackupSetWithOptions($request, $runtime);
    }

    /**
     * 查库表恢复状态
     *
     * @param request - DescribeDBTablesRecoveryStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBTablesRecoveryStateResponse
     *
     * @param DescribeDBTablesRecoveryStateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBTablesRecoveryStateResponse
     */
    public function describeDBTablesRecoveryStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBTablesRecoveryState',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBTablesRecoveryStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查库表恢复状态
     *
     * @param request - DescribeDBTablesRecoveryStateRequest
     *
     * @returns DescribeDBTablesRecoveryStateResponse
     *
     * @param DescribeDBTablesRecoveryStateRequest $request
     *
     * @return DescribeDBTablesRecoveryStateResponse
     */
    public function describeDBTablesRecoveryState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBTablesRecoveryStateWithOptions($request, $runtime);
    }

    /**
     * 查库表恢复可恢复的时间范围.
     *
     * @param request - DescribeDBTablesRecoveryTimeRangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBTablesRecoveryTimeRangeResponse
     *
     * @param DescribeDBTablesRecoveryTimeRangeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDBTablesRecoveryTimeRangeResponse
     */
    public function describeDBTablesRecoveryTimeRangeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBTablesRecoveryTimeRange',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBTablesRecoveryTimeRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查库表恢复可恢复的时间范围.
     *
     * @param request - DescribeDBTablesRecoveryTimeRangeRequest
     *
     * @returns DescribeDBTablesRecoveryTimeRangeResponse
     *
     * @param DescribeDBTablesRecoveryTimeRangeRequest $request
     *
     * @return DescribeDBTablesRecoveryTimeRangeResponse
     */
    public function describeDBTablesRecoveryTimeRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBTablesRecoveryTimeRangeWithOptions($request, $runtime);
    }

    /**
     * Queries the storage information of a downloaded backup set.
     *
     * @remarks
     * ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL that uses Enterprise SSDs (ESSDs)
     * *   RDS PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *
     * @param request - DescribeDownloadBackupSetStorageInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDownloadBackupSetStorageInfoResponse
     *
     * @param DescribeDownloadBackupSetStorageInfoRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDownloadBackupSetStorageInfoResponse
     */
    public function describeDownloadBackupSetStorageInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDownloadBackupSetStorageInfo',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDownloadBackupSetStorageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage information of a downloaded backup set.
     *
     * @remarks
     * ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL that uses Enterprise SSDs (ESSDs)
     * *   RDS PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *
     * @param request - DescribeDownloadBackupSetStorageInfoRequest
     *
     * @returns DescribeDownloadBackupSetStorageInfoResponse
     *
     * @param DescribeDownloadBackupSetStorageInfoRequest $request
     *
     * @return DescribeDownloadBackupSetStorageInfoResponse
     */
    public function describeDownloadBackupSetStorageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadBackupSetStorageInfoWithOptions($request, $runtime);
    }

    /**
     * Queries whether an instance supports the advanced download feature.
     *
     * @remarks
     * ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * You can create an advanced download task by point in time or backup set. You can set the download destination to a URL or directly upload the downloaded backup set to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving.
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *
     * @param request - DescribeDownloadSupportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDownloadSupportResponse
     *
     * @param DescribeDownloadSupportRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDownloadSupportResponse
     */
    public function describeDownloadSupportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDownloadSupport',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDownloadSupportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether an instance supports the advanced download feature.
     *
     * @remarks
     * ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * You can create an advanced download task by point in time or backup set. You can set the download destination to a URL or directly upload the downloaded backup set to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving.
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *
     * @param request - DescribeDownloadSupportRequest
     *
     * @returns DescribeDownloadSupportResponse
     *
     * @param DescribeDownloadSupportRequest $request
     *
     * @return DescribeDownloadSupportResponse
     */
    public function describeDownloadSupport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadSupportWithOptions($request, $runtime);
    }

    /**
     * Queries the advanced download tasks for an ApsaraDB RDS for MySQL instance, an ApsaraDB RDS for PostgreSQL instance, or a PolarDB for MySQL cluster.
     *
     * @remarks
     * ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *
     * @param request - DescribeDownloadTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDownloadTaskResponse
     *
     * @param DescribeDownloadTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDownloadTaskResponse
     */
    public function describeDownloadTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->datasourceId) {
            @$query['DatasourceId'] = $request->datasourceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderDirect) {
            @$query['OrderDirect'] = $request->orderDirect;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDownloadTask',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDownloadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the advanced download tasks for an ApsaraDB RDS for MySQL instance, an ApsaraDB RDS for PostgreSQL instance, or a PolarDB for MySQL cluster.
     *
     * @remarks
     * ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *
     * @param request - DescribeDownloadTaskRequest
     *
     * @returns DescribeDownloadTaskResponse
     *
     * @param DescribeDownloadTaskRequest $request
     *
     * @return DescribeDownloadTaskResponse
     */
    public function describeDownloadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the snapshots of an instance.
     *
     * @remarks
     * Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Use the emergency recovery feature of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/203154.html) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](https://help.aliyun.com/document_detail/185577.html). This operation is available only for the Database Backup (DBS) API of the 2021-01-01 version.
     *
     * @param request - DescribeSandboxBackupSetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSandboxBackupSetsResponse
     *
     * @param DescribeSandboxBackupSetsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSandboxBackupSetsResponse
     */
    public function describeSandboxBackupSetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
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
            'action' => 'DescribeSandboxBackupSets',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSandboxBackupSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the snapshots of an instance.
     *
     * @remarks
     * Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Use the emergency recovery feature of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/203154.html) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](https://help.aliyun.com/document_detail/185577.html). This operation is available only for the Database Backup (DBS) API of the 2021-01-01 version.
     *
     * @param request - DescribeSandboxBackupSetsRequest
     *
     * @returns DescribeSandboxBackupSetsResponse
     *
     * @param DescribeSandboxBackupSetsRequest $request
     *
     * @return DescribeSandboxBackupSetsResponse
     */
    public function describeSandboxBackupSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSandboxBackupSetsWithOptions($request, $runtime);
    }

    /**
     * Queries sandbox instances that are created within an account.
     *
     * @remarks
     * This operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *
     * @param request - DescribeSandboxInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSandboxInstancesResponse
     *
     * @param DescribeSandboxInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSandboxInstancesResponse
     */
    public function describeSandboxInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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
            'action' => 'DescribeSandboxInstances',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSandboxInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries sandbox instances that are created within an account.
     *
     * @remarks
     * This operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *
     * @param request - DescribeSandboxInstancesRequest
     *
     * @returns DescribeSandboxInstancesResponse
     *
     * @param DescribeSandboxInstancesRequest $request
     *
     * @return DescribeSandboxInstancesResponse
     */
    public function describeSandboxInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSandboxInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the recoverable time range of a sandbox instance.
     *
     * @remarks
     * Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Use the emergency recovery feature of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/203154.html) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](https://help.aliyun.com/document_detail/185577.html). This operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *
     * @param request - DescribeSandboxRecoveryTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSandboxRecoveryTimeResponse
     *
     * @param DescribeSandboxRecoveryTimeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSandboxRecoveryTimeResponse
     */
    public function describeSandboxRecoveryTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSandboxRecoveryTime',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSandboxRecoveryTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the recoverable time range of a sandbox instance.
     *
     * @remarks
     * Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Use the emergency recovery feature of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/203154.html) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](https://help.aliyun.com/document_detail/185577.html). This operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *
     * @param request - DescribeSandboxRecoveryTimeRequest
     *
     * @returns DescribeSandboxRecoveryTimeResponse
     *
     * @param DescribeSandboxRecoveryTimeRequest $request
     *
     * @return DescribeSandboxRecoveryTimeResponse
     */
    public function describeSandboxRecoveryTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSandboxRecoveryTimeWithOptions($request, $runtime);
    }

    /**
     * Modifies the backup policy of a PolarDB instance.
     *
     * @remarks
     * ### [](#)Supported database engines
     * PolarDB for MySQL
     * >  This API operation is available only to specific customers. If you want to call this API operation, join the Database Backup (DBS) DingTalk group (ID 35585947) for customer consultation to request permissions.
     *
     * @param tmpReq - ModifyBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackupPolicyResponse
     *
     * @param ModifyBackupPolicyRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyBackupPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->advanceDataPolicies) {
            $request->advanceDataPoliciesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->advanceDataPolicies, 'AdvanceDataPolicies', 'json');
        }

        if (null !== $tmpReq->advanceIncPolicies) {
            $request->advanceIncPoliciesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->advanceIncPolicies, 'AdvanceIncPolicies', 'json');
        }

        if (null !== $tmpReq->advanceLogPolicies) {
            $request->advanceLogPoliciesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->advanceLogPolicies, 'AdvanceLogPolicies', 'json');
        }

        $query = [];
        if (null !== $request->advanceDataPoliciesShrink) {
            @$query['AdvanceDataPolicies'] = $request->advanceDataPoliciesShrink;
        }

        if (null !== $request->advanceIncPoliciesShrink) {
            @$query['AdvanceIncPolicies'] = $request->advanceIncPoliciesShrink;
        }

        if (null !== $request->advanceLogPoliciesShrink) {
            @$query['AdvanceLogPolicies'] = $request->advanceLogPoliciesShrink;
        }

        if (null !== $request->backupMethod) {
            @$query['BackupMethod'] = $request->backupMethod;
        }

        if (null !== $request->backupPriority) {
            @$query['BackupPriority'] = $request->backupPriority;
        }

        if (null !== $request->backupRetentionPolicyOnClusterDeletion) {
            @$query['BackupRetentionPolicyOnClusterDeletion'] = $request->backupRetentionPolicyOnClusterDeletion;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->enableIncBackup) {
            @$query['EnableIncBackup'] = $request->enableIncBackup;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->preferredBackupWindowBegin) {
            @$query['PreferredBackupWindowBegin'] = $request->preferredBackupWindowBegin;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupPolicy',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the backup policy of a PolarDB instance.
     *
     * @remarks
     * ### [](#)Supported database engines
     * PolarDB for MySQL
     * >  This API operation is available only to specific customers. If you want to call this API operation, join the Database Backup (DBS) DingTalk group (ID 35585947) for customer consultation to request permissions.
     *
     * @param request - ModifyBackupPolicyRequest
     *
     * @returns ModifyBackupPolicyResponse
     *
     * @param ModifyBackupPolicyRequest $request
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * 修改库表恢复状态
     *
     * @param request - ModifyDBTablesRecoveryStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBTablesRecoveryStateResponse
     *
     * @param ModifyDBTablesRecoveryStateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBTablesRecoveryStateResponse
     */
    public function modifyDBTablesRecoveryStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        if (null !== $request->retention) {
            @$query['Retention'] = $request->retention;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBTablesRecoveryState',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBTablesRecoveryStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改库表恢复状态
     *
     * @param request - ModifyDBTablesRecoveryStateRequest
     *
     * @returns ModifyDBTablesRecoveryStateResponse
     *
     * @param ModifyDBTablesRecoveryStateRequest $request
     *
     * @return ModifyDBTablesRecoveryStateResponse
     */
    public function modifyDBTablesRecoveryState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBTablesRecoveryStateWithOptions($request, $runtime);
    }

    /**
     * 重试高级下载任务
     *
     * @param request - RetryDownloadTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryDownloadTaskResponse
     *
     * @param RetryDownloadTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RetryDownloadTaskResponse
     */
    public function retryDownloadTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RetryDownloadTask',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetryDownloadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重试高级下载任务
     *
     * @param request - RetryDownloadTaskRequest
     *
     * @returns RetryDownloadTaskResponse
     *
     * @param RetryDownloadTaskRequest $request
     *
     * @return RetryDownloadTaskResponse
     */
    public function retryDownloadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryDownloadTaskWithOptions($request, $runtime);
    }

    /**
     * 查询是否支持库表恢复.
     *
     * @param request - SupportDBTableRecoveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SupportDBTableRecoveryResponse
     *
     * @param SupportDBTableRecoveryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SupportDBTableRecoveryResponse
     */
    public function supportDBTableRecoveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionCode) {
            @$query['RegionCode'] = $request->regionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SupportDBTableRecovery',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SupportDBTableRecoveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询是否支持库表恢复.
     *
     * @param request - SupportDBTableRecoveryRequest
     *
     * @returns SupportDBTableRecoveryResponse
     *
     * @param SupportDBTableRecoveryRequest $request
     *
     * @return SupportDBTableRecoveryResponse
     */
    public function supportDBTableRecovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->supportDBTableRecoveryWithOptions($request, $runtime);
    }
}
