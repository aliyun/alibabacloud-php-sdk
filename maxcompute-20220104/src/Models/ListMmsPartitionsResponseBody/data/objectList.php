<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsPartitionsResponseBody\data;

use AlibabaCloud\Dara\Model;

class objectList extends Model
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
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $lastDdlTime;
    /**
     * @var int
     */
    public $numRows;
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
    public $tableId;
    /**
     * @var string
     */
    public $tableName;
    /**
     * @var bool
     */
    public $updated;
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'dbId'        => 'DbId',
        'dbName'      => 'dbName',
        'id'          => 'id',
        'lastDdlTime' => 'lastDdlTime',
        'numRows'     => 'numRows',
        'size'        => 'size',
        'sourceId'    => 'sourceId',
        'sourceName'  => 'sourceName',
        'status'      => 'status',
        'tableId'     => 'tableId',
        'tableName'   => 'tableName',
        'updated'     => 'updated',
        'value'       => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->lastDdlTime) {
            $res['lastDdlTime'] = $this->lastDdlTime;
        }

        if (null !== $this->numRows) {
            $res['numRows'] = $this->numRows;
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

        if (null !== $this->tableId) {
            $res['tableId'] = $this->tableId;
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['dbName'])) {
            $model->dbName = $map['dbName'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['lastDdlTime'])) {
            $model->lastDdlTime = $map['lastDdlTime'];
        }

        if (isset($map['numRows'])) {
            $model->numRows = $map['numRows'];
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

        if (isset($map['tableId'])) {
            $model->tableId = $map['tableId'];
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
