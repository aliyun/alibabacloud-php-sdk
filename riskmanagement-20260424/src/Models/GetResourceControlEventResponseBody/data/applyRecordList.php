<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventResponseBody\data\applyRecordList\eventTimeRecord;

class applyRecordList extends Model
{
    /**
     * @var string
     */
    public $approvalReason;

    /**
     * @var eventTimeRecord
     */
    public $eventTimeRecord;

    /**
     * @var string
     */
    public $rejectReason;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'approvalReason' => 'ApprovalReason',
        'eventTimeRecord' => 'EventTimeRecord',
        'rejectReason' => 'RejectReason',
        'remark' => 'Remark',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->eventTimeRecord) {
            $this->eventTimeRecord->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalReason) {
            $res['ApprovalReason'] = $this->approvalReason;
        }

        if (null !== $this->eventTimeRecord) {
            $res['EventTimeRecord'] = null !== $this->eventTimeRecord ? $this->eventTimeRecord->toArray($noStream) : $this->eventTimeRecord;
        }

        if (null !== $this->rejectReason) {
            $res['RejectReason'] = $this->rejectReason;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApprovalReason'])) {
            $model->approvalReason = $map['ApprovalReason'];
        }

        if (isset($map['EventTimeRecord'])) {
            $model->eventTimeRecord = eventTimeRecord::fromMap($map['EventTimeRecord']);
        }

        if (isset($map['RejectReason'])) {
            $model->rejectReason = $map['RejectReason'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
