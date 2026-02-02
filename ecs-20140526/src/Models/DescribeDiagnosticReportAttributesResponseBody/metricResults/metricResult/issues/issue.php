<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody\metricResults\metricResult\issues;

use AlibabaCloud\Dara\Model;

class issue extends Model
{
    /**
     * @var string
     */
    public $additional;

    /**
     * @var string
     */
    public $issueId;

    /**
     * @var string
     */
    public $occurrenceTime;

    /**
     * @var string
     */
    public $repairStatus;

    /**
     * @var bool
     */
    public $repairable;

    /**
     * @var string
     */
    public $severity;
    protected $_name = [
        'additional' => 'Additional',
        'issueId' => 'IssueId',
        'occurrenceTime' => 'OccurrenceTime',
        'repairStatus' => 'RepairStatus',
        'repairable' => 'Repairable',
        'severity' => 'Severity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additional) {
            $res['Additional'] = $this->additional;
        }

        if (null !== $this->issueId) {
            $res['IssueId'] = $this->issueId;
        }

        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }

        if (null !== $this->repairStatus) {
            $res['RepairStatus'] = $this->repairStatus;
        }

        if (null !== $this->repairable) {
            $res['Repairable'] = $this->repairable;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
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
        if (isset($map['Additional'])) {
            $model->additional = $map['Additional'];
        }

        if (isset($map['IssueId'])) {
            $model->issueId = $map['IssueId'];
        }

        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }

        if (isset($map['RepairStatus'])) {
            $model->repairStatus = $map['RepairStatus'];
        }

        if (isset($map['Repairable'])) {
            $model->repairable = $map['Repairable'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}
