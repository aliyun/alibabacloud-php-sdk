<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListEmrHiveTablesResponseBody\data;

use AlibabaCloud\Tea\Model;

class pagedData extends Model
{
    /**
     * @example C-D033DD5FB82436A6
     *
     * @var string
     */
    public $clusterBizId;

    /**
     * @var string
     */
    public $clusterBizName;

    /**
     * @example default
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example 2019-09-09 20:23:47
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2019-09-09 20:23:47
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example org.apache.hadoop.hive.ql.io.orc.OrcInputFormat
     *
     * @var string
     */
    public $inputFormat;

    /**
     * @example false
     *
     * @var bool
     */
    public $isCompressed;

    /**
     * @example false
     *
     * @var bool
     */
    public $isTemporary;

    /**
     * @example 1970-01-01 08:00:00
     *
     * @var string
     */
    public $lastAccessTime;

    /**
     * @example 2019-09-09 20:23:47
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @example hdfs://emr-header-1.cluster-136574:9000/user/hive/warehouse/pt_table_090901_emr
     *
     * @var string
     */
    public $location;

    /**
     * @example org.apache.hadoop.hive.ql.io.HiveIgnoreKeyTextOutputFormat
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @example root
     *
     * @var string
     */
    public $owner;

    /**
     * @example 18612767103****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example ROLE
     *
     * @var string
     */
    public $ownerType;

    /**
     * @example DS,HR,REGION
     *
     * @var string
     */
    public $partitionKeys;

    /**
     * @example org.apache.hadoop.hive.serde2.lazy.LazySimpleSerDe
     *
     * @var string
     */
    public $serializationLib;

    /**
     * @example RANDOM GENERATED TEST DATA BY FUNCTION OF RANDOM_TEST_DATA
     *
     * @var string
     */
    public $tableComment;

    /**
     * @example RANDOM GENERATED TEST DATA BY FUNCTION OF RANDOM_TEST_DATA
     *
     * @var string
     */
    public $tableDesc;

    /**
     * @example pt_table_090901_emr_orc
     *
     * @var string
     */
    public $tableName;

    /**
     * @example {\"transient_lastDdlTime\":\"1568031823\",\"bucketing_version\":\"2\",\"comment\":\"RANDOM GENERATED TEST DATA BY FUNCTION OF RANDOM_TEST_DATA\"}
     *
     * @var string
     */
    public $tableParameters;

    /**
     * @example MANAGED_TABLE
     *
     * @var string
     */
    public $tableType;
    protected $_name = [
        'clusterBizId'     => 'ClusterBizId',
        'clusterBizName'   => 'ClusterBizName',
        'databaseName'     => 'DatabaseName',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'inputFormat'      => 'InputFormat',
        'isCompressed'     => 'IsCompressed',
        'isTemporary'      => 'IsTemporary',
        'lastAccessTime'   => 'LastAccessTime',
        'lastModifyTime'   => 'LastModifyTime',
        'location'         => 'Location',
        'outputFormat'     => 'OutputFormat',
        'owner'            => 'Owner',
        'ownerId'          => 'OwnerId',
        'ownerType'        => 'OwnerType',
        'partitionKeys'    => 'PartitionKeys',
        'serializationLib' => 'SerializationLib',
        'tableComment'     => 'TableComment',
        'tableDesc'        => 'TableDesc',
        'tableName'        => 'TableName',
        'tableParameters'  => 'TableParameters',
        'tableType'        => 'TableType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->clusterBizName) {
            $res['ClusterBizName'] = $this->clusterBizName;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->inputFormat) {
            $res['InputFormat'] = $this->inputFormat;
        }
        if (null !== $this->isCompressed) {
            $res['IsCompressed'] = $this->isCompressed;
        }
        if (null !== $this->isTemporary) {
            $res['IsTemporary'] = $this->isTemporary;
        }
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->partitionKeys) {
            $res['PartitionKeys'] = $this->partitionKeys;
        }
        if (null !== $this->serializationLib) {
            $res['SerializationLib'] = $this->serializationLib;
        }
        if (null !== $this->tableComment) {
            $res['TableComment'] = $this->tableComment;
        }
        if (null !== $this->tableDesc) {
            $res['TableDesc'] = $this->tableDesc;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableParameters) {
            $res['TableParameters'] = $this->tableParameters;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagedData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['ClusterBizName'])) {
            $model->clusterBizName = $map['ClusterBizName'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InputFormat'])) {
            $model->inputFormat = $map['InputFormat'];
        }
        if (isset($map['IsCompressed'])) {
            $model->isCompressed = $map['IsCompressed'];
        }
        if (isset($map['IsTemporary'])) {
            $model->isTemporary = $map['IsTemporary'];
        }
        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['PartitionKeys'])) {
            $model->partitionKeys = $map['PartitionKeys'];
        }
        if (isset($map['SerializationLib'])) {
            $model->serializationLib = $map['SerializationLib'];
        }
        if (isset($map['TableComment'])) {
            $model->tableComment = $map['TableComment'];
        }
        if (isset($map['TableDesc'])) {
            $model->tableDesc = $map['TableDesc'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableParameters'])) {
            $model->tableParameters = $map['TableParameters'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        return $model;
    }
}
