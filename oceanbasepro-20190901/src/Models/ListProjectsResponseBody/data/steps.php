<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data\steps\extraInfo;
use AlibabaCloud\Tea\Model;

class steps extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @example 2020-05-22T17:05:18
     *
     * @var string
     */
    public $finishTime;

    /**
     * @example TRANSFER_PRECHECK
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $order;

    /**
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @example 2020-05-22T17:04:18
     *
     * @var string
     */
    public $startTime;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example null
     *
     * @var mixed[]
     */
    public $stepInfo;
    protected $_name = [
        'description' => 'Description',
        'extraInfo'   => 'ExtraInfo',
        'finishTime'  => 'FinishTime',
        'name'        => 'Name',
        'order'       => 'Order',
        'progress'    => 'Progress',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
        'stepInfo'    => 'StepInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toMap() : null;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stepInfo) {
            $res['StepInfo'] = $this->stepInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return steps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['ExtraInfo']);
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StepInfo'])) {
            $model->stepInfo = $map['StepInfo'];
        }

        return $model;
    }
}
