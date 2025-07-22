<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data\data\logs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example rm-k2ja51w7cnusg5a1x
     *
     * @var int
     */
    public $dbInstanceId;

    /**
     * @example 0
     *
     * @var string
     */
    public $dbInstanceName;

    /**
     * @example 2024-08-08T02:15:00Z
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
     * @example pi-wz99g5rn7w1x8h0sf
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumbers;

    /**
     * @example 2024-10-08T02:01:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 13
     *
     * @var int
     */
    public $totalRecords;
    protected $_name = [
        'dbInstanceId' => 'DbInstanceId',
        'dbInstanceName' => 'DbInstanceName',
        'endTime' => 'EndTime',
        'itemsNumbers' => 'ItemsNumbers',
        'logs' => 'Logs',
        'maxRecordsPerPage' => 'MaxRecordsPerPage',
        'nodeId' => 'NodeId',
        'pageNumbers' => 'PageNumbers',
        'startTime' => 'StartTime',
        'totalRecords' => 'TotalRecords',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }
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
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
