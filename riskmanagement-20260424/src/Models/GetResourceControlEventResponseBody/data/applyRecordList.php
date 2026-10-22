<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventResponseBody\data\applyRecordList\anomalyHours;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventResponseBody\data\applyRecordList\eventTimeRecord;

class applyRecordList extends Model
{
    /**
     * @var anomalyHours[]
     */
    public $anomalyHours;

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
        'anomalyHours' => 'AnomalyHours',
        'approvalReason' => 'ApprovalReason',
        'eventTimeRecord' => 'EventTimeRecord',
        'rejectReason' => 'RejectReason',
        'remark' => 'Remark',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->anomalyHours)) {
            Model::validateArray($this->anomalyHours);
        }
        if (null !== $this->eventTimeRecord) {
            $this->eventTimeRecord->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anomalyHours) {
            if (\is_array($this->anomalyHours)) {
                $res['AnomalyHours'] = [];
                $n1 = 0;
                foreach ($this->anomalyHours as $item1) {
                    $res['AnomalyHours'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

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
        if (isset($map['AnomalyHours'])) {
            if (!empty($map['AnomalyHours'])) {
                $model->anomalyHours = [];
                $n1 = 0;
                foreach ($map['AnomalyHours'] as $item1) {
                    $model->anomalyHours[$n1] = anomalyHours::fromMap($item1);
                    ++$n1;
                }
            }
        }

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
