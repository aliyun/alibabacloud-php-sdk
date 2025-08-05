<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsDbResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example for mms_test
     *
     * @var string
     */
    public $description;

    /**
     * @example {}
     *
     * @var string
     */
    public $extra;

    /**
     * @example 63
     *
     * @var int
     */
    public $id;

    /**
     * @description last ddl time
     *
     * @example 2024-12-17 15:44:42
     *
     * @var string
     */
    public $lastDdlTime;

    /**
     * @example hdfs://master-1-1.c-6fc187819ed6bae0.cn-shanghai.emr.aliyuncs.com:9000/user/hive/warehouse
     *
     * @var string
     */
    public $location;

    /**
     * @example mms_test
     *
     * @var string
     */
    public $name;

    /**
     * @example 2323
     *
     * @var int
     */
    public $numRows;

    /**
     * @example System user
     *
     * @var string
     */
    public $owner;

    /**
     * @example 2000
     *
     * @var int
     */
    public $partitions;

    /**
     * @example 200
     *
     * @var int
     */
    public $partitionsDoing;

    /**
     * @example 1400
     *
     * @var int
     */
    public $partitionsDone;

    /**
     * @example 400
     *
     * @var int
     */
    public $partitionsFailed;

    /**
     * @example 323232332
     *
     * @var int
     */
    public $size;

    /**
     * @example 2000017
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
     * @example DOING
     *
     * @var string
     */
    public $status;

    /**
     * @example 200
     *
     * @var int
     */
    public $tables;

    /**
     * @example 20
     *
     * @var int
     */
    public $tablesDoing;

    /**
     * @example 120
     *
     * @var int
     */
    public $tablesDone;

    /**
     * @example 20
     *
     * @var int
     */
    public $tablesFailed;

    /**
     * @example 20
     *
     * @var int
     */
    public $tablesPartDone;

    /**
     * @example true
     *
     * @var bool
     */
    public $updated;
    protected $_name = [
        'description' => 'description',
        'extra' => 'extra',
        'id' => 'id',
        'lastDdlTime' => 'lastDdlTime',
        'location' => 'location',
        'name' => 'name',
        'numRows' => 'numRows',
        'owner' => 'owner',
        'partitions' => 'partitions',
        'partitionsDoing' => 'partitionsDoing',
        'partitionsDone' => 'partitionsDone',
        'partitionsFailed' => 'partitionsFailed',
        'size' => 'size',
        'sourceId' => 'sourceId',
        'sourceName' => 'sourceName',
        'status' => 'status',
        'tables' => 'tables',
        'tablesDoing' => 'tablesDoing',
        'tablesDone' => 'tablesDone',
        'tablesFailed' => 'tablesFailed',
        'tablesPartDone' => 'tablesPartDone',
        'updated' => 'updated',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (null !== $this->tables) {
            $res['tables'] = $this->tables;
        }
        if (null !== $this->tablesDoing) {
            $res['tablesDoing'] = $this->tablesDoing;
        }
        if (null !== $this->tablesDone) {
            $res['tablesDone'] = $this->tablesDone;
        }
        if (null !== $this->tablesFailed) {
            $res['tablesFailed'] = $this->tablesFailed;
        }
        if (null !== $this->tablesPartDone) {
            $res['tablesPartDone'] = $this->tablesPartDone;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
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
        if (isset($map['tables'])) {
            $model->tables = $map['tables'];
        }
        if (isset($map['tablesDoing'])) {
            $model->tablesDoing = $map['tablesDoing'];
        }
        if (isset($map['tablesDone'])) {
            $model->tablesDone = $map['tablesDone'];
        }
        if (isset($map['tablesFailed'])) {
            $model->tablesFailed = $map['tablesFailed'];
        }
        if (isset($map['tablesPartDone'])) {
            $model->tablesPartDone = $map['tablesPartDone'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
