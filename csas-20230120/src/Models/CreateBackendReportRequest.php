<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateBackendReportRequest\reportObjects;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateBackendReportRequest\targets;

class CreateBackendReportRequest extends Model
{
    /**
     * @var int
     */
    public $endTimestamp;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var reportObjects[]
     */
    public $reportObjects;

    /**
     * @var targets[]
     */
    public $targets;

    /**
     * @var string
     */
    public $validityType;
    protected $_name = [
        'endTimestamp' => 'EndTimestamp',
        'policyType' => 'PolicyType',
        'reason' => 'Reason',
        'reportObjects' => 'ReportObjects',
        'targets' => 'Targets',
        'validityType' => 'ValidityType',
    ];

    public function validate()
    {
        if (\is_array($this->reportObjects)) {
            Model::validateArray($this->reportObjects);
        }
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->reportObjects) {
            if (\is_array($this->reportObjects)) {
                $res['ReportObjects'] = [];
                $n1 = 0;
                foreach ($this->reportObjects as $item1) {
                    $res['ReportObjects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->validityType) {
            $res['ValidityType'] = $this->validityType;
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
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ReportObjects'])) {
            if (!empty($map['ReportObjects'])) {
                $model->reportObjects = [];
                $n1 = 0;
                foreach ($map['ReportObjects'] as $item1) {
                    $model->reportObjects[$n1] = reportObjects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1] = targets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ValidityType'])) {
            $model->validityType = $map['ValidityType'];
        }

        return $model;
    }
}
