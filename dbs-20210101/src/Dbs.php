<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ChangeResourceGroupResponse;
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
use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyDBTablesRecoveryStateRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyDBTablesRecoveryStateResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\SupportDBTableRecoveryRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\SupportDBTableRecoveryResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dbs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'            => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-beijing'            => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-chengdu'            => 'dbs-api.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou'        => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-huhehaote'          => 'dbs-api.cn-huhehaote.aliyuncs.com',
            'cn-hangzhou'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'ap-southeast-1'        => 'dbs-api.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'dbs-api.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'dbs-api.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'dbs-api.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1'        => 'dbs-api.ap-northeast-1.aliyuncs.com',
            'us-west-1'             => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'us-east-1'             => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'eu-central-1'          => 'dbs-api.eu-central-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'ap-south-1'            => 'dbs-api.ap-south-1.aliyuncs.com',
            'eu-west-1'             => 'dbs-api.eu-west-1.aliyuncs.com',
            'me-east-1'             => 'dbs-api.me-east-1.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Moves a resource from one resource group to another.
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
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
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
            'version'     => '2021-01-01',
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
     * @summary Moves a resource from one resource group to another.
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
     * @summary 开启高级备份策略
     *  *
     * @param CreateAdvancedPolicyRequest $request CreateAdvancedPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAdvancedPolicyResponse CreateAdvancedPolicyResponse
     */
    public function createAdvancedPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAdvancedPolicy',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAdvancedPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启高级备份策略
     *  *
     * @param CreateAdvancedPolicyRequest $request CreateAdvancedPolicyRequest
     *
     * @return CreateAdvancedPolicyResponse CreateAdvancedPolicyResponse
     */
    public function createAdvancedPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAdvancedPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an advanced download task for an ApsaraDB RDS for MySQL instance, an ApsaraDB RDS for PostgreSQL instance, or a PolarDB for MySQL cluster.
     *  *
     * @description ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * For the instances that meet your business requirements, you can create an advanced download task by point in time or backup set. You can set the download destination to a URL or directly upload the downloaded backup set to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving.
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *  *
     * @param CreateDownloadRequest $request CreateDownloadRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDownloadResponse CreateDownloadResponse
     */
    public function createDownloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bakSetId)) {
            $query['BakSetId'] = $request->bakSetId;
        }
        if (!Utils::isUnset($request->bakSetSize)) {
            $query['BakSetSize'] = $request->bakSetSize;
        }
        if (!Utils::isUnset($request->bakSetType)) {
            $query['BakSetType'] = $request->bakSetType;
        }
        if (!Utils::isUnset($request->downloadPointInTime)) {
            $query['DownloadPointInTime'] = $request->downloadPointInTime;
        }
        if (!Utils::isUnset($request->formatType)) {
            $query['FormatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        if (!Utils::isUnset($request->targetBucket)) {
            $query['TargetBucket'] = $request->targetBucket;
        }
        if (!Utils::isUnset($request->targetOssRegion)) {
            $query['TargetOssRegion'] = $request->targetOssRegion;
        }
        if (!Utils::isUnset($request->targetPath)) {
            $query['TargetPath'] = $request->targetPath;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDownload',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an advanced download task for an ApsaraDB RDS for MySQL instance, an ApsaraDB RDS for PostgreSQL instance, or a PolarDB for MySQL cluster.
     *  *
     * @description ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * For the instances that meet your business requirements, you can create an advanced download task by point in time or backup set. You can set the download destination to a URL or directly upload the downloaded backup set to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving.
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *  *
     * @param CreateDownloadRequest $request CreateDownloadRequest
     *
     * @return CreateDownloadResponse CreateDownloadResponse
     */
    public function createDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDownloadWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a sandbox instance.
     *  *
     * @description This operation is available only for the Database Backup (DBS) API of the 2021-01-01 version.
     *  *
     * @param DeleteSandboxInstanceRequest $request DeleteSandboxInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSandboxInstanceResponse DeleteSandboxInstanceResponse
     */
    public function deleteSandboxInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSandboxInstance',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSandboxInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases a sandbox instance.
     *  *
     * @description This operation is available only for the Database Backup (DBS) API of the 2021-01-01 version.
     *  *
     * @param DeleteSandboxInstanceRequest $request DeleteSandboxInstanceRequest
     *
     * @return DeleteSandboxInstanceResponse DeleteSandboxInstanceResponse
     */
    public function deleteSandboxInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSandboxInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 备份数据列表查询接口
     *  *
     * @param DescribeBackupDataListRequest $request DescribeBackupDataListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupDataListResponse DescribeBackupDataListResponse
     */
    public function describeBackupDataListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupMethod)) {
            $query['BackupMethod'] = $request->backupMethod;
        }
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->backupScale)) {
            $query['BackupScale'] = $request->backupScale;
        }
        if (!Utils::isUnset($request->backupStatus)) {
            $query['BackupStatus'] = $request->backupStatus;
        }
        if (!Utils::isUnset($request->backupType)) {
            $query['BackupType'] = $request->backupType;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceIsDeleted)) {
            $query['InstanceIsDeleted'] = $request->instanceIsDeleted;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceRegion)) {
            $query['InstanceRegion'] = $request->instanceRegion;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        if (!Utils::isUnset($request->sceneType)) {
            $query['SceneType'] = $request->sceneType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupDataList',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 备份数据列表查询接口
     *  *
     * @param DescribeBackupDataListRequest $request DescribeBackupDataListRequest
     *
     * @return DescribeBackupDataListResponse DescribeBackupDataListResponse
     */
    public function describeBackupDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupDataListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取备份策略接口
     *  *
     * @param DescribeBackupPolicyRequest $request DescribeBackupPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupPolicyResponse DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2021-01-01',
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
     * @summary 获取备份策略接口
     *  *
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
     * @param DescribeDBTablesRecoveryBackupSetRequest $request DescribeDBTablesRecoveryBackupSetRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBTablesRecoveryBackupSetResponse DescribeDBTablesRecoveryBackupSetResponse
     */
    public function describeDBTablesRecoveryBackupSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBTablesRecoveryBackupSet',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBTablesRecoveryBackupSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBTablesRecoveryBackupSetRequest $request DescribeDBTablesRecoveryBackupSetRequest
     *
     * @return DescribeDBTablesRecoveryBackupSetResponse DescribeDBTablesRecoveryBackupSetResponse
     */
    public function describeDBTablesRecoveryBackupSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBTablesRecoveryBackupSetWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBTablesRecoveryStateRequest $request DescribeDBTablesRecoveryStateRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBTablesRecoveryStateResponse DescribeDBTablesRecoveryStateResponse
     */
    public function describeDBTablesRecoveryStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBTablesRecoveryState',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBTablesRecoveryStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBTablesRecoveryStateRequest $request DescribeDBTablesRecoveryStateRequest
     *
     * @return DescribeDBTablesRecoveryStateResponse DescribeDBTablesRecoveryStateResponse
     */
    public function describeDBTablesRecoveryState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBTablesRecoveryStateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBTablesRecoveryTimeRangeRequest $request DescribeDBTablesRecoveryTimeRangeRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBTablesRecoveryTimeRangeResponse DescribeDBTablesRecoveryTimeRangeResponse
     */
    public function describeDBTablesRecoveryTimeRangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBTablesRecoveryTimeRange',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBTablesRecoveryTimeRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBTablesRecoveryTimeRangeRequest $request DescribeDBTablesRecoveryTimeRangeRequest
     *
     * @return DescribeDBTablesRecoveryTimeRangeResponse DescribeDBTablesRecoveryTimeRangeResponse
     */
    public function describeDBTablesRecoveryTimeRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBTablesRecoveryTimeRangeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the storage information of a downloaded backup set.
     *  *
     * @description ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *  *
     * @param DescribeDownloadBackupSetStorageInfoRequest $request DescribeDownloadBackupSetStorageInfoRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDownloadBackupSetStorageInfoResponse DescribeDownloadBackupSetStorageInfoResponse
     */
    public function describeDownloadBackupSetStorageInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDownloadBackupSetStorageInfo',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadBackupSetStorageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the storage information of a downloaded backup set.
     *  *
     * @description ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *  *
     * @param DescribeDownloadBackupSetStorageInfoRequest $request DescribeDownloadBackupSetStorageInfoRequest
     *
     * @return DescribeDownloadBackupSetStorageInfoResponse DescribeDownloadBackupSetStorageInfoResponse
     */
    public function describeDownloadBackupSetStorageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadBackupSetStorageInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether an instance supports the advanced download feature.
     *  *
     * @description ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * You can create an advanced download task by point in time or backup set. You can set the download destination to a URL or directly upload the downloaded backup set to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving.
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *  *
     * @param DescribeDownloadSupportRequest $request DescribeDownloadSupportRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDownloadSupportResponse DescribeDownloadSupportResponse
     */
    public function describeDownloadSupportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDownloadSupport',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadSupportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether an instance supports the advanced download feature.
     *  *
     * @description ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * You can create an advanced download task by point in time or backup set. You can set the download destination to a URL or directly upload the downloaded backup set to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving.
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *  *
     * @param DescribeDownloadSupportRequest $request DescribeDownloadSupportRequest
     *
     * @return DescribeDownloadSupportResponse DescribeDownloadSupportResponse
     */
    public function describeDownloadSupport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadSupportWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the advanced download tasks for an ApsaraDB RDS for MySQL instance, an ApsaraDB RDS for PostgreSQL instance, or a PolarDB for MySQL cluster.
     *  *
     * @description ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *  *
     * @param DescribeDownloadTaskRequest $request DescribeDownloadTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDownloadTaskResponse DescribeDownloadTaskResponse
     */
    public function describeDownloadTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->datasourceId)) {
            $query['DatasourceId'] = $request->datasourceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->orderColumn)) {
            $query['OrderColumn'] = $request->orderColumn;
        }
        if (!Utils::isUnset($request->orderDirect)) {
            $query['OrderDirect'] = $request->orderDirect;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDownloadTask',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the advanced download tasks for an ApsaraDB RDS for MySQL instance, an ApsaraDB RDS for PostgreSQL instance, or a PolarDB for MySQL cluster.
     *  *
     * @description ### [](#)Supported database engines
     * *   ApsaraDB RDS for MySQL
     * *   ApsaraDB RDS for PostgreSQL
     * *   PolarDB for MySQL
     * ### [](#)References
     * *   [Download the backup files of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/98819.html)
     * *   [Download the backup files of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96774.html)
     * *   [Download the backup files of a PolarDB for MySQL cluster](https://help.aliyun.com/document_detail/2627635.html)
     *  *
     * @param DescribeDownloadTaskRequest $request DescribeDownloadTaskRequest
     *
     * @return DescribeDownloadTaskResponse DescribeDownloadTaskResponse
     */
    public function describeDownloadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the snapshots of an instance.
     *  *
     * @description Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Use the emergency recovery feature of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/203154.html) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](https://help.aliyun.com/document_detail/185577.html). This operation is available only for the Database Backup (DBS) API of the 2021-01-01 version.
     *  *
     * @param DescribeSandboxBackupSetsRequest $request DescribeSandboxBackupSetsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSandboxBackupSetsResponse DescribeSandboxBackupSetsResponse
     */
    public function describeSandboxBackupSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
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
            'action'      => 'DescribeSandboxBackupSets',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSandboxBackupSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the snapshots of an instance.
     *  *
     * @description Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Use the emergency recovery feature of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/203154.html) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](https://help.aliyun.com/document_detail/185577.html). This operation is available only for the Database Backup (DBS) API of the 2021-01-01 version.
     *  *
     * @param DescribeSandboxBackupSetsRequest $request DescribeSandboxBackupSetsRequest
     *
     * @return DescribeSandboxBackupSetsResponse DescribeSandboxBackupSetsResponse
     */
    public function describeSandboxBackupSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSandboxBackupSetsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries sandbox instances that are created within an account.
     *  *
     * @description This operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *  *
     * @param DescribeSandboxInstancesRequest $request DescribeSandboxInstancesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSandboxInstancesResponse DescribeSandboxInstancesResponse
     */
    public function describeSandboxInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'DescribeSandboxInstances',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSandboxInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries sandbox instances that are created within an account.
     *  *
     * @description This operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *  *
     * @param DescribeSandboxInstancesRequest $request DescribeSandboxInstancesRequest
     *
     * @return DescribeSandboxInstancesResponse DescribeSandboxInstancesResponse
     */
    public function describeSandboxInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSandboxInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the recoverable time range of a sandbox instance.
     *  *
     * @description Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Use the emergency recovery feature of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/203154.html) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](https://help.aliyun.com/document_detail/185577.html). This operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *  *
     * @param DescribeSandboxRecoveryTimeRequest $request DescribeSandboxRecoveryTimeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSandboxRecoveryTimeResponse DescribeSandboxRecoveryTimeResponse
     */
    public function describeSandboxRecoveryTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSandboxRecoveryTime',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSandboxRecoveryTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the recoverable time range of a sandbox instance.
     *  *
     * @description Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Use the emergency recovery feature of an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/203154.html) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](https://help.aliyun.com/document_detail/185577.html). This operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *  *
     * @param DescribeSandboxRecoveryTimeRequest $request DescribeSandboxRecoveryTimeRequest
     *
     * @return DescribeSandboxRecoveryTimeResponse DescribeSandboxRecoveryTimeResponse
     */
    public function describeSandboxRecoveryTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSandboxRecoveryTimeWithOptions($request, $runtime);
    }

    /**
     * @summary 修改备份策略
     *  *
     * @param ModifyBackupPolicyRequest $request ModifyBackupPolicyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBackupPolicyResponse ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->advanceDataPolicies)) {
            $query['AdvanceDataPolicies'] = $request->advanceDataPolicies;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->preferredBackupWindowBegin)) {
            $query['PreferredBackupWindowBegin'] = $request->preferredBackupWindowBegin;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupPolicy',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改备份策略
     *  *
     * @param ModifyBackupPolicyRequest $request ModifyBackupPolicyRequest
     *
     * @return ModifyBackupPolicyResponse ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBTablesRecoveryStateRequest $request ModifyDBTablesRecoveryStateRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBTablesRecoveryStateResponse ModifyDBTablesRecoveryStateResponse
     */
    public function modifyDBTablesRecoveryStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBTablesRecoveryState',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBTablesRecoveryStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBTablesRecoveryStateRequest $request ModifyDBTablesRecoveryStateRequest
     *
     * @return ModifyDBTablesRecoveryStateResponse ModifyDBTablesRecoveryStateResponse
     */
    public function modifyDBTablesRecoveryState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBTablesRecoveryStateWithOptions($request, $runtime);
    }

    /**
     * @param SupportDBTableRecoveryRequest $request SupportDBTableRecoveryRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SupportDBTableRecoveryResponse SupportDBTableRecoveryResponse
     */
    public function supportDBTableRecoveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SupportDBTableRecovery',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SupportDBTableRecoveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SupportDBTableRecoveryRequest $request SupportDBTableRecoveryRequest
     *
     * @return SupportDBTableRecoveryResponse SupportDBTableRecoveryResponse
     */
    public function supportDBTableRecovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->supportDBTableRecoveryWithOptions($request, $runtime);
    }
}
