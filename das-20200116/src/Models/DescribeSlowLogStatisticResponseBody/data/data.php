<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponseBody\data\data\logs;

class data extends Model
{
    /**
     * @var int
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $dbInstanceName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $itemsNumbers;

    /**
     * @var logs[]
     */
    public $logs;

    /**
     * @var int
     */
    public $maxRecordsPerPage;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $pageNumbers;

    /**
     * @var string
     */
    public $startTime;

    /**
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

    public function validate()
    {
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->logs)) {
                $res['Logs'] = [];
                $n1 = 0;
                foreach ($this->logs as $item1) {
                    $res['Logs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Logs'] as $item1) {
                    $model->logs[$n1] = logs::fromMap($item1);
                    ++$n1;
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
