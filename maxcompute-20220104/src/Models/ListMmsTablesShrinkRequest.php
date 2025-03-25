<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesShrinkRequest\sorter;
use AlibabaCloud\Tea\Model;

class ListMmsTablesShrinkRequest extends Model
{
    /**
     * @var sorter
     */
    public $sorter;

    /**
     * @example 197
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
     * @example true
     *
     * @var bool
     */
    public $hasPartitions;

    /**
     * @example 2024-12-19 15:44:42
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
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var bool
     */
    public $onlyName;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $statusShrink;

    /**
     * @example MANAGED_TABLE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'sorter' => 'sorter',
        'dbId' => 'dbId',
        'dbName' => 'dbName',
        'hasPartitions' => 'hasPartitions',
        'lastDdlTimeEnd' => 'lastDdlTimeEnd',
        'lastDdlTimeStart' => 'lastDdlTimeStart',
        'name' => 'name',
        'onlyName' => 'onlyName',
        'pageNum' => 'pageNum',
        'pageSize' => 'pageSize',
        'statusShrink' => 'status',
        'type' => 'type',
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
        if (null !== $this->hasPartitions) {
            $res['hasPartitions'] = $this->hasPartitions;
        }
        if (null !== $this->lastDdlTimeEnd) {
            $res['lastDdlTimeEnd'] = $this->lastDdlTimeEnd;
        }
        if (null !== $this->lastDdlTimeStart) {
            $res['lastDdlTimeStart'] = $this->lastDdlTimeStart;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->onlyName) {
            $res['onlyName'] = $this->onlyName;
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMmsTablesShrinkRequest
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
        if (isset($map['hasPartitions'])) {
            $model->hasPartitions = $map['hasPartitions'];
        }
        if (isset($map['lastDdlTimeEnd'])) {
            $model->lastDdlTimeEnd = $map['lastDdlTimeEnd'];
        }
        if (isset($map['lastDdlTimeStart'])) {
            $model->lastDdlTimeStart = $map['lastDdlTimeStart'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['onlyName'])) {
            $model->onlyName = $map['onlyName'];
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
