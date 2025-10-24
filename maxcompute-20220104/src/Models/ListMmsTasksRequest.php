<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTasksRequest\sorter;

class ListMmsTasksRequest extends Model
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
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

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
    public $partition;

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
    protected $_name = [
        'sorter' => 'sorter',
        'dstDbName' => 'dstDbName',
        'dstTableName' => 'dstTableName',
        'jobId' => 'jobId',
        'jobName' => 'jobName',
        'pageNum' => 'pageNum',
        'pageSize' => 'pageSize',
        'partition' => 'partition',
        'srcDbName' => 'srcDbName',
        'srcTableName' => 'srcTableName',
        'status' => 'status',
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

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['jobName'] = $this->jobName;
        }

        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
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

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['jobName'])) {
            $model->jobName = $map['jobName'];
        }

        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
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

        return $model;
    }
}
