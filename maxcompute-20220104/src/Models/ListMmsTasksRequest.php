<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTasksRequest\sorter;
use AlibabaCloud\Tea\Model;

class ListMmsTasksRequest extends Model
{
    /**
     * @var sorter
     */
    public $sorter;

    /**
     * @example mms_test
     *
     * @var string
     */
    public $dstDbName;

    /**
     * @example test_table_1
     *
     * @var string
     */
    public $dstTableName;

    /**
     * @example 10
     *
     * @var int
     */
    public $jobId;

    /**
     * @example test1
     *
     * @var string
     */
    public $jobName;

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
     * @example p1=1/p2=abc
     *
     * @var string
     */
    public $partition;

    /**
     * @example test_db_1
     *
     * @var string
     */
    public $srcDbName;

    /**
     * @example test_table_1
     *
     * @var string
     */
    public $srcTableName;

    /**
     * @example DATA_DOING
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sorter) {
            $res['sorter'] = null !== $this->sorter ? $this->sorter->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return ListMmsTasksRequest
     */
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
