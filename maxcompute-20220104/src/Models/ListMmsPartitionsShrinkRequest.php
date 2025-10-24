<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsPartitionsShrinkRequest\sorter;

class ListMmsPartitionsShrinkRequest extends Model
{
    /**
     * @var sorter
     */
    public $sorter;

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
    public $lastDdlTimeEnd;

    /**
     * @var string
     */
    public $lastDdlTimeStart;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $statusShrink;

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
        'sorter' => 'sorter',
        'dbId' => 'dbId',
        'dbName' => 'dbName',
        'lastDdlTimeEnd' => 'lastDdlTimeEnd',
        'lastDdlTimeStart' => 'lastDdlTimeStart',
        'pageNum' => 'pageNum',
        'pageSize' => 'pageSize',
        'statusShrink' => 'status',
        'tableId' => 'tableId',
        'tableName' => 'tableName',
        'updated' => 'updated',
        'value' => 'value',
    ];

    public function validate()
    {
        if (null !== $this->sorter) {
            $this->sorter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sorter) {
            $res['sorter'] = null !== $this->sorter ? $this->sorter->toArray($noStream) : $this->sorter;
        }

        if (null !== $this->dbId) {
            $res['dbId'] = $this->dbId;
        }

        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        if (null !== $this->lastDdlTimeEnd) {
            $res['lastDdlTimeEnd'] = $this->lastDdlTimeEnd;
        }

        if (null !== $this->lastDdlTimeStart) {
            $res['lastDdlTimeStart'] = $this->lastDdlTimeStart;
        }

        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->statusShrink) {
            $res['status'] = $this->statusShrink;
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
        if (isset($map['sorter'])) {
            $model->sorter = sorter::fromMap($map['sorter']);
        }

        if (isset($map['dbId'])) {
            $model->dbId = $map['dbId'];
        }

        if (isset($map['dbName'])) {
            $model->dbName = $map['dbName'];
        }

        if (isset($map['lastDdlTimeEnd'])) {
            $model->lastDdlTimeEnd = $map['lastDdlTimeEnd'];
        }

        if (isset($map['lastDdlTimeStart'])) {
            $model->lastDdlTimeStart = $map['lastDdlTimeStart'];
        }

        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['status'])) {
            $model->statusShrink = $map['status'];
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
