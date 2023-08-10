<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDtsJobRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The **ClientToken** parameter can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe63****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dataInitialization;

    /**
     * @var bool
     */
    public $dataSynchronization;

    /**
     * @description The objects of the data synchronization task after modification. The value is a JSON string. For more information, see [Objects of DTS tasks](~~209545~~).
     *
     * >  Before you call the ModifyDtsJob operation, we recommend that you call the [DescribeDtsJobDetail](~~208925~~) to query the current objects of the data synchronization task. Then, you can specify the new objects based on your business requirements. For example, if the current objects are Table A and Table B and you need to add Table C, you must specify Table A, Table B, and Table C for this parameter.
     * @example {"dtstest":{"name":"dtstest","all":true}}
     *
     * @var mixed[]
     */
    public $dbList;

    /**
     * @description The ID of the data synchronization instance.
     *
     * @example dtsbi6e22ay243****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The operator that is related to the extract, transform, and load (ETL) feature and dedicated to T+1 business.
     *
     * @example {
     * }
     * @var string
     */
    public $etlOperatorColumnReference;

    /**
     * @description The endpoint of the Object Storage Service (OSS) bucket in which the files to be synchronized are stored.
     *
     * @example http://db-list-os-file.oss-cn-shanghai.aliyuncs.com/8e42_12185******43989_************
     *
     * @var string
     */
    public $fileOssUrl;

    /**
     * @description The name of the table to be filtered.
     *
     * @example testtable
     *
     * @var string
     */
    public $filterTableName;

    /**
     * @description The method that is used to modify the data synchronization task. If you do not specify the parameter, the objects of the data synchronization task are modified by default. If you specify UPDATE_RESERVED for the parameter, the reserved parameters are modified.
     *
     * @example UPDATE_RESERVED
     *
     * @var string
     */
    public $modifyTypeEnum;

    /**
     * @description The ID of the region in which the data synchronization instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The reserved parameters of the data synchronization task. You can add reserved parameters instead of overwriting the existing reserved parameters. The value of the parameter is a MAP JSON string. You can specify this parameter to meet special requirements, such as specifying whether to automatically start the precheck of the data synchronization task. For more information, see [MigrationReserved](~~176470~~).
     *
     * @example {\"srcHostPorts\":\"\",\"whitelist.dms.online.ddl.enable\":false,\"filterDDL\":false,\"sqlparser.dms.original.ddl\":true,\"srcOracleType\":\"sid\",\"maxRetryTime\":43200,\"destSSL\":\"0\",\"destOracleType\":\"sid\",\"srcSSL\":\"0\",\"dbListCaseChangeMode\":\"default\",\"SourceEngineVersion\":\"8.0.18\",\"srcNetType\":\"VPC\",\"destNetType\":\"VPC\",\"srcVpcNetMappingInst\":\"172.16.1**.**:10803\",\"destVpcNetMappingInst\":\"172.16.1**.**:11077\",\"useJobTask\":\"1\"}
     *
     * @var string
     */
    public $reserved;

    /**
     * @var bool
     */
    public $structureInitialization;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**: Data is synchronized from the source database to the destination database.
     *   **Reverse**: Data is synchronized from the destination database to the source database.
     *
     * >
     *   Default value: **Forward**.
     *   This parameter is required only if the topology of the data synchronization instance is two-way synchronization.
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;
    protected $_name = [
        'clientToken'                => 'ClientToken',
        'dataInitialization'         => 'DataInitialization',
        'dataSynchronization'        => 'DataSynchronization',
        'dbList'                     => 'DbList',
        'dtsInstanceId'              => 'DtsInstanceId',
        'etlOperatorColumnReference' => 'EtlOperatorColumnReference',
        'fileOssUrl'                 => 'FileOssUrl',
        'filterTableName'            => 'FilterTableName',
        'modifyTypeEnum'             => 'ModifyTypeEnum',
        'regionId'                   => 'RegionId',
        'reserved'                   => 'Reserved',
        'structureInitialization'    => 'StructureInitialization',
        'synchronizationDirection'   => 'SynchronizationDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataInitialization) {
            $res['DataInitialization'] = $this->dataInitialization;
        }
        if (null !== $this->dataSynchronization) {
            $res['DataSynchronization'] = $this->dataSynchronization;
        }
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->etlOperatorColumnReference) {
            $res['EtlOperatorColumnReference'] = $this->etlOperatorColumnReference;
        }
        if (null !== $this->fileOssUrl) {
            $res['FileOssUrl'] = $this->fileOssUrl;
        }
        if (null !== $this->filterTableName) {
            $res['FilterTableName'] = $this->filterTableName;
        }
        if (null !== $this->modifyTypeEnum) {
            $res['ModifyTypeEnum'] = $this->modifyTypeEnum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }
        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = $this->structureInitialization;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDtsJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataInitialization'])) {
            $model->dataInitialization = $map['DataInitialization'];
        }
        if (isset($map['DataSynchronization'])) {
            $model->dataSynchronization = $map['DataSynchronization'];
        }
        if (isset($map['DbList'])) {
            $model->dbList = $map['DbList'];
        }
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['EtlOperatorColumnReference'])) {
            $model->etlOperatorColumnReference = $map['EtlOperatorColumnReference'];
        }
        if (isset($map['FileOssUrl'])) {
            $model->fileOssUrl = $map['FileOssUrl'];
        }
        if (isset($map['FilterTableName'])) {
            $model->filterTableName = $map['FilterTableName'];
        }
        if (isset($map['ModifyTypeEnum'])) {
            $model->modifyTypeEnum = $map['ModifyTypeEnum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }
        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        return $model;
    }
}
