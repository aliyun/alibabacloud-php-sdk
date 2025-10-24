<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsTableResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsTableResponseBody\data\schema;

class data extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dstName;

    /**
     * @var string
     */
    public $dstProjectName;

    /**
     * @var string
     */
    public $dstSchemaName;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var bool
     */
    public $hasPartitions;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $inputFormat;

    /**
     * @var string
     */
    public $lastDdlTime;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $numRows;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $partitions;

    /**
     * @var int
     */
    public $partitionsDoing;

    /**
     * @var int
     */
    public $partitionsDone;

    /**
     * @var int
     */
    public $partitionsFailed;

    /**
     * @var schema
     */
    public $schema;

    /**
     * @var string
     */
    public $serde;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $updated;
    protected $_name = [
        'dbId' => 'dbId',
        'dbName' => 'dbName',
        'dstName' => 'dstName',
        'dstProjectName' => 'dstProjectName',
        'dstSchemaName' => 'dstSchemaName',
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

    public function validate()
    {
        if (null !== $this->schema) {
            $this->schema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['dbId'] = $this->dbId;
        }

        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        if (null !== $this->dstName) {
            $res['dstName'] = $this->dstName;
        }

        if (null !== $this->dstProjectName) {
            $res['dstProjectName'] = $this->dstProjectName;
        }

        if (null !== $this->dstSchemaName) {
            $res['dstSchemaName'] = $this->dstSchemaName;
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
            $res['schema'] = null !== $this->schema ? $this->schema->toArray($noStream) : $this->schema;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dbId'])) {
            $model->dbId = $map['dbId'];
        }

        if (isset($map['dbName'])) {
            $model->dbName = $map['dbName'];
        }

        if (isset($map['dstName'])) {
            $model->dstName = $map['dstName'];
        }

        if (isset($map['dstProjectName'])) {
            $model->dstProjectName = $map['dstProjectName'];
        }

        if (isset($map['dstSchemaName'])) {
            $model->dstSchemaName = $map['dstSchemaName'];
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
