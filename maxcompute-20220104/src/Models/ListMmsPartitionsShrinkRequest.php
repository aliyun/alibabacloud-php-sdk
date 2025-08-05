<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsPartitionsShrinkRequest\sorter;
use AlibabaCloud\Tea\Model;

class ListMmsPartitionsShrinkRequest extends Model
{
    /**
     * @var sorter
     */
    public $sorter;

    /**
     * @example 2
     *
     * @var int
     */
    public $dbId;

    /**
     * @example d1
     *
     * @var string
     */
    public $dbName;

    /**
     * @example 2024-12-17 19:44:42
     *
     * @var string
     */
    public $lastDdlTimeEnd;

    /**
     * @example 2024-12-17 15:44:42
     *
     * @var string
     */
    public $lastDdlTimeStart;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $statusShrink;

    /**
     * @example t1
     *
     * @var string
     */
    public $tableName;

    /**
     * @example false
     *
     * @var bool
     */
    public $updated;

    /**
     * @example p1=1/p2=abc
     *
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
        'tableName' => 'tableName',
        'updated' => 'updated',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sorter) {
            $res['sorter'] = null !== $this->sorter ? $this->sorter->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return ListMmsPartitionsShrinkRequest
     */
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
