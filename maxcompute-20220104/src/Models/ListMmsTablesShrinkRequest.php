<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesShrinkRequest\sorter;

class ListMmsTablesShrinkRequest extends Model
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
     * @var bool
     */
    public $hasPartitions;
    /**
     * @var string
     */
    public $lastDdlTimeEnd;
    /**
     * @var string
     */
    public $lastDdlTimeStart;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $onlyName;
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
     * @var string
     */
    public $type;
    protected $_name = [
        'sorter'           => 'sorter',
        'dbId'             => 'dbId',
        'dbName'           => 'dbName',
        'hasPartitions'    => 'hasPartitions',
        'lastDdlTimeEnd'   => 'lastDdlTimeEnd',
        'lastDdlTimeStart' => 'lastDdlTimeStart',
        'name'             => 'name',
        'onlyName'         => 'onlyName',
        'pageNum'          => 'pageNum',
        'pageSize'         => 'pageSize',
        'statusShrink'     => 'status',
        'type'             => 'type',
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
