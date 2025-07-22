<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The end of the time range to query. This value is a UNIX timestamp. Unit: millisecond.
     *
     * @example 1608888296000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Indicates whether the task was complete. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * >  If the value of **Finish** is 0 and the value of **JobId** is returned, the request is an asynchronous request and the return result cannot be directly obtained. You must query the return result based on the value of **JobId**. Specify JobId as the key of **Filters** and the value of **JobId** as the value of Filters. Example: `Filters=[{"Key": "JobId", "Value": "******"}]`.
     *
     * @example 1
     *
     * @var string
     */
    public $finish;

    /**
     * @description The data.
     *
     * @var items
     */
    public $items;

    /**
     * @description The ID of the asynchronous task.
     *
     * @example MzI4NTZfUUlOR0RBT19DTTlfTlUyMF9NWVNRTF9PREJTX0xWU18zMjg1Nl9teXNxbF9XZWQgTWFyIDA2IDE0OjUwOjQ3IENTVCAyMDI0XzBfMzBfRXhlY3V0ZVRpbWVfREVTQ19XZWQgTWFyIDA2IDE0OjM1OjQ3IENTVCAyMDI0Xw==_1709708406465
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp. Unit: millisecond.
     *
     * @example 1596177993000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The total number of entries.
     *
     * @example 1
     *
     * @var int
     */
    public $totalRecords;
    protected $_name = [
        'endTime' => 'EndTime',
        'finish' => 'Finish',
        'items' => 'Items',
        'jobId' => 'JobId',
        'startTime' => 'StartTime',
        'totalRecords' => 'TotalRecords',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->finish) {
            $res['Finish'] = $this->finish;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalRecords) {
            $res['TotalRecords'] = $this->totalRecords;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Finish'])) {
            $model->finish = $map['Finish'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalRecords'])) {
            $model->totalRecords = $map['TotalRecords'];
        }

        return $model;
    }
}
