<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionTasksRequest extends Model
{
    /**
     * @description The end time is less than the specified time. Specify the time in the UNIX timestamp format. Unit: milliseconds.
     *
     * @example 1582646399
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 1.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The start time is greater than the specified time. Specify the time in the UNIX timestamp format. Unit: milliseconds.
     *
     * @example 1582214400
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the task. Valid values:
     *
     *   success
     *   failed
     *   running
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'    => 'endTime',
        'pageNumber' => 'pageNumber',
        'pageSize'   => 'pageSize',
        'startTime'  => 'startTime',
        'status'     => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
