<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ListTaskFlowInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $dagId;
    /**
     * @var int
     */
    public $pageIndex;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $startTimeBegin;
    /**
     * @var string
     */
    public $startTimeEnd;
    /**
     * @var int
     */
    public $status;
    /**
     * @var int
     */
    public $tid;
    /**
     * @var int
     */
    public $triggerType;
    /**
     * @var bool
     */
    public $useBizDate;
    protected $_name = [
        'dagId'          => 'DagId',
        'pageIndex'      => 'PageIndex',
        'pageSize'       => 'PageSize',
        'startTimeBegin' => 'StartTimeBegin',
        'startTimeEnd'   => 'StartTimeEnd',
        'status'         => 'Status',
        'tid'            => 'Tid',
        'triggerType'    => 'TriggerType',
        'useBizDate'     => 'UseBizDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->startTimeBegin) {
            $res['StartTimeBegin'] = $this->startTimeBegin;
        }

        if (null !== $this->startTimeEnd) {
            $res['StartTimeEnd'] = $this->startTimeEnd;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        if (null !== $this->useBizDate) {
            $res['UseBizDate'] = $this->useBizDate;
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
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StartTimeBegin'])) {
            $model->startTimeBegin = $map['StartTimeBegin'];
        }

        if (isset($map['StartTimeEnd'])) {
            $model->startTimeEnd = $map['StartTimeEnd'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        if (isset($map['UseBizDate'])) {
            $model->useBizDate = $map['UseBizDate'];
        }

        return $model;
    }
}
