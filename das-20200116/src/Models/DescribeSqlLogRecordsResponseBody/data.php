<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $finish;

    /**
     * @var items
     */
    public $items;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $totalRecords;
    protected $_name = [
        'endTime'      => 'EndTime',
        'finish'       => 'Finish',
        'items'        => 'Items',
        'jobId'        => 'JobId',
        'startTime'    => 'StartTime',
        'totalRecords' => 'TotalRecords',
    ];

    public function validate()
    {
    }

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
