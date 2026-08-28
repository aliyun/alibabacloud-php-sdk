<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolReportDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolReportDetailResponseBody\data\overview\problemSummary;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolReportDetailResponseBody\data\overview\riskSummary;

class overview extends Model
{
    /**
     * @var problemSummary
     */
    public $problemSummary;

    /**
     * @var riskSummary
     */
    public $riskSummary;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'problemSummary' => 'problemSummary',
        'riskSummary' => 'riskSummary',
        'total' => 'total',
    ];

    public function validate()
    {
        if (null !== $this->problemSummary) {
            $this->problemSummary->validate();
        }
        if (null !== $this->riskSummary) {
            $this->riskSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->problemSummary) {
            $res['problemSummary'] = null !== $this->problemSummary ? $this->problemSummary->toArray($noStream) : $this->problemSummary;
        }

        if (null !== $this->riskSummary) {
            $res['riskSummary'] = null !== $this->riskSummary ? $this->riskSummary->toArray($noStream) : $this->riskSummary;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['problemSummary'])) {
            $model->problemSummary = problemSummary::fromMap($map['problemSummary']);
        }

        if (isset($map['riskSummary'])) {
            $model->riskSummary = riskSummary::fromMap($map['riskSummary']);
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
