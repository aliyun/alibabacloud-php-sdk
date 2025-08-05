<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsTableResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsTableResponseBody\data\schema;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $dbId;

    /**
     * @example mms_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @example {"mapkey.delim":":","collection.delim":",","serialization.format":"|","field.delim":"|"}
     *
     * @var string
     */
    public $extra;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasPartitions;

    /**
     * @description table ID
     *
     * @example 22
     *
     * @var int
     */
    public $id;

    /**
     * @description inputFormat
     *
     * @example org.apache.hadoop.hive.ql.io.parquet.MapredParquetInputFormat
     *
     * @var string
     */
    public $inputFormat;

    /**
     * @description lastDdlTime
     *
     * @example 2024-12-17 15:44:42
     *
     * @var string
     */
    public $lastDdlTime;

    /**
     * @example | hdfs://master-1-1.c-c127cd184bb029ea.cn-zhangjiakou.emr.aliyuncs.com:9000/user/hive/warehouse/demo
     *
     * @var string
     */
    public $location;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 233232
     *
     * @var int
     */
    public $numRows;

    /**
     * @description outputFormat
     *
     * @example org.apache.hadoop.hive.ql.io.parquet.MapredParquetOutputFormat
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @example Hive
     *
     * @var string
     */
    public $owner;

    /**
     * @example 100
     *
     * @var int
     */
    public $partitions;

    /**
     * @example 20
     *
     * @var int
     */
    public $partitionsDoing;

    /**
     * @example 80
     *
     * @var int
     */
    public $partitionsDone;

    /**
     * @example 0
     *
     * @var int
     */
    public $partitionsFailed;

    /**
     * @var schema
     */
    public $schema;

    /**
     * @description serde
     *
     * @example org.apache.hadoop.hive.ql.io.parquet.serde.ParquetHiveSerDe
     *
     * @var string
     */
    public $serde;

    /**
     * @example 23232
     *
     * @var int
     */
    public $size;

    /**
     * @example 2000028
     *
     * @var int
     */
    public $sourceId;

    /**
     * @example demo
     *
     * @var string
     */
    public $sourceName;

    /**
     * @example DONE
     *
     * @var string
     */
    public $status;

    /**
     * @example MANAGED_TABLED
     *
     * @var string
     */
    public $type;

    /**
     * @example false
     *
     * @var bool
     */
    public $updated;
    protected $_name = [
        'dbId' => 'dbId',
        'dbName' => 'dbName',
        'extra' => 'extra',
        'hasPartitions' => 'hasPartitions',
        'id' => 'id',
        'inputFormat' => 'inputFormat',
        'lastDdlTime' => 'lastDdlTime',
        'location' => 'location',
        'name' => 'name',
        'numRows' => 'numRows',
        'outputFormat' => 'outputFormat',
        'owner' => 'owner',
        'partitions' => 'partitions',
        'partitionsDoing' => 'partitionsDoing',
        'partitionsDone' => 'partitionsDone',
        'partitionsFailed' => 'partitionsFailed',
        'schema' => 'schema',
        'serde' => 'serde',
        'size' => 'size',
        'sourceId' => 'sourceId',
        'sourceName' => 'sourceName',
        'status' => 'status',
        'type' => 'type',
        'updated' => 'updated',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['dbId'] = $this->dbId;
        }
        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->hasPartitions) {
            $res['hasPartitions'] = $this->hasPartitions;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->inputFormat) {
            $res['inputFormat'] = $this->inputFormat;
        }
        if (null !== $this->lastDdlTime) {
            $res['lastDdlTime'] = $this->lastDdlTime;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->numRows) {
            $res['numRows'] = $this->numRows;
        }
        if (null !== $this->outputFormat) {
            $res['outputFormat'] = $this->outputFormat;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->partitions) {
            $res['partitions'] = $this->partitions;
        }
        if (null !== $this->partitionsDoing) {
            $res['partitionsDoing'] = $this->partitionsDoing;
        }
        if (null !== $this->partitionsDone) {
            $res['partitionsDone'] = $this->partitionsDone;
        }
        if (null !== $this->partitionsFailed) {
            $res['partitionsFailed'] = $this->partitionsFailed;
        }
        if (null !== $this->schema) {
            $res['schema'] = null !== $this->schema ? $this->schema->toMap() : null;
        }
        if (null !== $this->serde) {
            $res['serde'] = $this->serde;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceName) {
            $res['sourceName'] = $this->sourceName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dbId'])) {
            $model->dbId = $map['dbId'];
        }
        if (isset($map['dbName'])) {
            $model->dbName = $map['dbName'];
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }
        if (isset($map['hasPartitions'])) {
            $model->hasPartitions = $map['hasPartitions'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['inputFormat'])) {
            $model->inputFormat = $map['inputFormat'];
        }
        if (isset($map['lastDdlTime'])) {
            $model->lastDdlTime = $map['lastDdlTime'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['numRows'])) {
            $model->numRows = $map['numRows'];
        }
        if (isset($map['outputFormat'])) {
            $model->outputFormat = $map['outputFormat'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['partitions'])) {
            $model->partitions = $map['partitions'];
        }
        if (isset($map['partitionsDoing'])) {
            $model->partitionsDoing = $map['partitionsDoing'];
        }
        if (isset($map['partitionsDone'])) {
            $model->partitionsDone = $map['partitionsDone'];
        }
        if (isset($map['partitionsFailed'])) {
            $model->partitionsFailed = $map['partitionsFailed'];
        }
        if (isset($map['schema'])) {
            $model->schema = schema::fromMap($map['schema']);
        }
        if (isset($map['serde'])) {
            $model->serde = $map['serde'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['sourceName'])) {
            $model->sourceName = $map['sourceName'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
