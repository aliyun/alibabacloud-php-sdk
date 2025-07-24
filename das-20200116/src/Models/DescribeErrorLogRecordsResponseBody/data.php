<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeErrorLogRecordsResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeErrorLogRecordsResponseBody\data\logs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2025-07-23T05:48:43Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $itemsNumbers;

    /**
     * @var logs[]
     */
    public $logs;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxRecordsPerPage;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumbers;

    /**
     * @example 2025-07-22T05:48:43Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalRecords;
    protected $_name = [
        'endTime' => 'EndTime',
        'itemsNumbers' => 'ItemsNumbers',
        'logs' => 'Logs',
        'maxRecordsPerPage' => 'MaxRecordsPerPage',
        'pageNumbers' => 'PageNumbers',
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
        if (null !== $this->itemsNumbers) {
            $res['ItemsNumbers'] = $this->itemsNumbers;
        }
        if (null !== $this->logs) {
            $res['Logs'] = [];
            if (null !== $this->logs && \is_array($this->logs)) {
                $n = 0;
                foreach ($this->logs as $item) {
                    $res['Logs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxRecordsPerPage) {
            $res['MaxRecordsPerPage'] = $this->maxRecordsPerPage;
        }
        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
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
        if (isset($map['ItemsNumbers'])) {
            $model->itemsNumbers = $map['ItemsNumbers'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n = 0;
                foreach ($map['Logs'] as $item) {
                    $model->logs[$n++] = null !== $item ? logs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }
        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
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
