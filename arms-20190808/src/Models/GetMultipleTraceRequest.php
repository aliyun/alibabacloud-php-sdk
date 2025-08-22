<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GetMultipleTraceRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $traceIDs;
    protected $_name = [
        'endTime' => 'EndTime',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'traceIDs' => 'TraceIDs',
    ];

    public function validate()
    {
        if (\is_array($this->traceIDs)) {
            Model::validateArray($this->traceIDs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->traceIDs) {
            if (\is_array($this->traceIDs)) {
                $res['TraceIDs'] = [];
                $n1 = 0;
                foreach ($this->traceIDs as $item1) {
                    $res['TraceIDs'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TraceIDs'])) {
            if (!empty($map['TraceIDs'])) {
                $model->traceIDs = [];
                $n1 = 0;
                foreach ($map['TraceIDs'] as $item1) {
                    $model->traceIDs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
