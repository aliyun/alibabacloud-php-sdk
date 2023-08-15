<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody\restoreFull\restoreFullDetails;

use AlibabaCloud\Tea\Model;

class restoreFullDetail extends Model
{
    /**
     * @example 1.2 kB
     *
     * @var string
     */
    public $dataSize;

    /**
     * @example 2020-11-05T06:45:51Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example “”
     *
     * @var string
     */
    public $message;

    /**
     * @example 14/14
     *
     * @var string
     */
    public $process;

    /**
     * @example 0.00 MB/s
     *
     * @var string
     */
    public $speed;

    /**
     * @example 2020-11-05T06:45:45Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SUCCEEDED
     *
     * @var string
     */
    public $state;

    /**
     * @example default:test1
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'dataSize'  => 'DataSize',
        'endTime'   => 'EndTime',
        'message'   => 'Message',
        'process'   => 'Process',
        'speed'     => 'Speed',
        'startTime' => 'StartTime',
        'state'     => 'State',
        'table'     => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreFullDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        return $model;
    }
}
