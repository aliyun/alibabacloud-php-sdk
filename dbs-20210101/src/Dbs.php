<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\CreateDownloadRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\CreateDownloadResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\CreateSandboxInstanceRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\CreateSandboxInstanceResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DeleteSandboxInstanceRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DeleteSandboxInstanceResponse;
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
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
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
     * You can create an advanced download task by point in time or backup file. You can set the Download Destination parameter to URL or directly upload the downloaded data to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving. For more information, see [Advanced download](~~98819~~).
     *   *
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
     * You can create an advanced download task by point in time or backup file. You can set the Download Destination parameter to URL or directly upload the downloaded data to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving. For more information, see [Advanced download](~~98819~~).
     *   *
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
     * Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Create a sandbox instance for emergency disaster recovery of an ApsaraDB RDS for MySQL database](~~203154~~) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](~~185577~~). The API operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *   *
     * @param CreateSandboxInstanceRequest $request CreateSandboxInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSandboxInstanceResponse CreateSandboxInstanceResponse
     */
    public function createSandboxInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->sandboxInstanceName)) {
            $query['SandboxInstanceName'] = $request->sandboxInstanceName;
        }
        if (!Utils::isUnset($request->sandboxPassword)) {
            $query['SandboxPassword'] = $request->sandboxPassword;
        }
        if (!Utils::isUnset($request->sandboxSpecification)) {
            $query['SandboxSpecification'] = $request->sandboxSpecification;
        }
        if (!Utils::isUnset($request->sandboxType)) {
            $query['SandboxType'] = $request->sandboxType;
        }
        if (!Utils::isUnset($request->sandboxUser)) {
            $query['SandboxUser'] = $request->sandboxUser;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcSwitchId)) {
            $query['VpcSwitchId'] = $request->vpcSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSandboxInstance',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSandboxInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Create a sandbox instance for emergency disaster recovery of an ApsaraDB RDS for MySQL database](~~203154~~) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](~~185577~~). The API operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *   *
     * @param CreateSandboxInstanceRequest $request CreateSandboxInstanceRequest
     *
     * @return CreateSandboxInstanceResponse CreateSandboxInstanceResponse
     */
    public function createSandboxInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSandboxInstanceWithOptions($request, $runtime);
    }

    /**
     * The API operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *   *
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
     * The API operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *   *
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
     * @param DescribeDBTablesRecoveryBackupSetRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDBTablesRecoveryBackupSetResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
     * @param DescribeDBTablesRecoveryStateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBTablesRecoveryStateResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
     * @param DescribeDBTablesRecoveryTimeRangeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDBTablesRecoveryTimeRangeResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
     * You can create an advanced download task by point in time or backup file. You can set the Download Destination parameter to URL or directly upload the downloaded data to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving. For more information, see [Advanced download](~~98819~~).
     *   *
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
     * You can create an advanced download task by point in time or backup file. You can set the Download Destination parameter to URL or directly upload the downloaded data to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving. For more information, see [Advanced download](~~98819~~).
     *   *
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
     * You can create an advanced download task by point in time or backup file. You can set the Download Destination parameter to URL or directly upload the downloaded data to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving. For more information, see [Advanced download](~~98819~~).
     *   *
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
     * You can create an advanced download task by point in time or backup file. You can set the Download Destination parameter to URL or directly upload the downloaded data to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving. For more information, see [Advanced download](~~98819~~).
     *   *
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
     * You can create an advanced download task by point in time or backup file. You can set the Download Destination parameter to URL or directly upload the downloaded data to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving. For more information, see [Advanced download](~~98819~~).
     *   *
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
     * You can create an advanced download task by point in time or backup file. You can set the Download Destination parameter to URL or directly upload the downloaded data to your Object Storage Service (OSS) bucket to facilitate data analysis and offline archiving. For more information, see [Advanced download](~~98819~~).
     *   *
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
     * Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Create a sandbox instance for emergency disaster recovery of an ApsaraDB RDS for MySQL database](~~203154~~) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](~~185577~~). The API operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *   *
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
     * Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Create a sandbox instance for emergency disaster recovery of an ApsaraDB RDS for MySQL database](~~203154~~) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](~~185577~~). The API operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *   *
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
     * The API operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *   *
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
     * The API operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *   *
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
     * Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Create a sandbox instance for emergency disaster recovery of an ApsaraDB RDS for MySQL database](~~203154~~) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](~~185577~~). The API operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *   *
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
     * Before you call this operation, you must enable the sandbox feature for the database instance. For more information, see [Create a sandbox instance for emergency disaster recovery of an ApsaraDB RDS for MySQL database](~~203154~~) or [Create a sandbox instance for emergency disaster recovery of a self-managed MySQL database](~~185577~~). The API operation is available only in Database Backup (DBS) API of the 2021-01-01 version.
     *   *
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
     * @param ModifyDBTablesRecoveryStateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBTablesRecoveryStateResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
     * @param SupportDBTableRecoveryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SupportDBTableRecoveryResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
