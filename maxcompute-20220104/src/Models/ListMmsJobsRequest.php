<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsJobsRequest\sorter;

class ListMmsJobsRequest extends Model
{
    /**
     * @var sorter
     */
    public $sorter;
    /**
     * @var string
     */
    public $dstDbName;
    /**
     * @var string
     */
    public $dstTableName;
    /**
     * @var string
     */
    public $name;
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
    public $srcDbName;
    /**
     * @var string
     */
    public $srcTableName;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $stopped;
    protected $_name = [
        'sorter'       => 'sorter',
        'dstDbName'    => 'dstDbName',
        'dstTableName' => 'dstTableName',
        'name'         => 'name',
        'pageNum'      => 'pageNum',
        'pageSize'     => 'pageSize',
        'srcDbName'    => 'srcDbName',
        'srcTableName' => 'srcTableName',
        'status'       => 'status',
        'stopped'      => 'stopped',
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

        if (null !== $this->dstDbName) {
            $res['dstDbName'] = $this->dstDbName;
        }

        if (null !== $this->dstTableName) {
            $res['dstTableName'] = $this->dstTableName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->srcDbName) {
            $res['srcDbName'] = $this->srcDbName;
        }

        if (null !== $this->srcTableName) {
            $res['srcTableName'] = $this->srcTableName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->stopped) {
            $res['stopped'] = $this->stopped;
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

        if (isset($map['dstDbName'])) {
            $model->dstDbName = $map['dstDbName'];
        }

        if (isset($map['dstTableName'])) {
            $model->dstTableName = $map['dstTableName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['srcDbName'])) {
            $model->srcDbName = $map['srcDbName'];
        }

        if (isset($map['srcTableName'])) {
            $model->srcTableName = $map['srcTableName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['stopped'])) {
            $model->stopped = $map['stopped'];
        }

        return $model;
    }
}
