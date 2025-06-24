<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTaskResponseBody\data\filters;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTaskResponseBody\data\queries;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $end;

    /**
     * @var bool
     */
    public $expire;

    /**
     * @var string
     */
    public $export;

    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @var string
     */
    public $name;

    /**
     * @var queries[]
     */
    public $queries;

    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'createTime' => 'CreateTime',
        'end' => 'End',
        'expire' => 'Expire',
        'export' => 'Export',
        'filters' => 'Filters',
        'name' => 'Name',
        'queries' => 'Queries',
        'start' => 'Start',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        if (\is_array($this->queries)) {
            Model::validateArray($this->queries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->export) {
            $res['Export'] = $this->export;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->queries) {
            if (\is_array($this->queries)) {
                $res['Queries'] = [];
                $n1 = 0;
                foreach ($this->queries as $item1) {
                    $res['Queries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['Export'])) {
            $model->export = $map['Export'];
        }

        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1 = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1] = filters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Queries'])) {
            if (!empty($map['Queries'])) {
                $model->queries = [];
                $n1 = 0;
                foreach ($map['Queries'] as $item1) {
                    $model->queries[$n1] = queries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
