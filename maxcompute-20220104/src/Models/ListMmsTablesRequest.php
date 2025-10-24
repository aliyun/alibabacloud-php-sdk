<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesRequest\sorter;

class ListMmsTablesRequest extends Model
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
     * @var string[]
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'sorter' => 'sorter',
        'dbId' => 'dbId',
        'dbName' => 'dbName',
        'dstName' => 'dstName',
        'dstProjectName' => 'dstProjectName',
        'dstSchemaName' => 'dstSchemaName',
        'hasPartitions' => 'hasPartitions',
        'lastDdlTimeEnd' => 'lastDdlTimeEnd',
        'lastDdlTimeStart' => 'lastDdlTimeStart',
        'name' => 'name',
        'onlyName' => 'onlyName',
        'pageNum' => 'pageNum',
        'pageSize' => 'pageSize',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->sorter) {
            $this->sorter->validate();
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
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

        if (null !== $this->dstName) {
            $res['dstName'] = $this->dstName;
        }

        if (null !== $this->dstProjectName) {
            $res['dstProjectName'] = $this->dstProjectName;
        }

        if (null !== $this->dstSchemaName) {
            $res['dstSchemaName'] = $this->dstSchemaName;
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

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['status'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['dstName'])) {
            $model->dstName = $map['dstName'];
        }

        if (isset($map['dstProjectName'])) {
            $model->dstProjectName = $map['dstProjectName'];
        }

        if (isset($map['dstSchemaName'])) {
            $model->dstSchemaName = $map['dstSchemaName'];
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
            if (!empty($map['status'])) {
                $model->status = [];
                $n1 = 0;
                foreach ($map['status'] as $item1) {
                    $model->status[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
