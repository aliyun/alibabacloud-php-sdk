<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsDbsResponseBody\data;

use AlibabaCloud\Dara\Model;

class objectList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $description;

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
    public $extra;

    /**
     * @var int
     */
    public $id;

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
     * @var int
     */
    public $tables;

    /**
     * @var int
     */
    public $tablesDoing;

    /**
     * @var int
     */
    public $tablesDone;

    /**
     * @var int
     */
    public $tablesFailed;

    /**
     * @var int
     */
    public $tablesPartDone;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var bool
     */
    public $updated;
    protected $_name = [
        'createTime' => 'createTime',
        'deleted' => 'deleted',
        'description' => 'description',
        'dstName' => 'dstName',
        'dstProjectName' => 'dstProjectName',
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
        'updateTime' => 'updateTime',
        'updated' => 'updated',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->deleted) {
            $res['deleted'] = $this->deleted;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->dstName) {
            $res['dstName'] = $this->dstName;
        }

        if (null !== $this->dstProjectName) {
            $res['dstProjectName'] = $this->dstProjectName;
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

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['deleted'])) {
            $model->deleted = $map['deleted'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['dstName'])) {
            $model->dstName = $map['dstName'];
        }

        if (isset($map['dstProjectName'])) {
            $model->dstProjectName = $map['dstProjectName'];
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

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
