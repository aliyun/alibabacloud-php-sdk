<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeUserTotalFlowReportResponseBody;

use AlibabaCloud\Tea\Model;

class flowReport extends Model
{
    /**
     * @var string[]
     */
    public $time;

    /**
     * @var string[]
     */
    public $maxInflow;

    /**
     * @var string[]
     */
    public $attackFlow;

    /**
     * @var string[]
     */
    public $maxOutFlow;
    protected $_name = [
        'time'       => 'Time',
        'maxInflow'  => 'MaxInflow',
        'attackFlow' => 'AttackFlow',
        'maxOutFlow' => 'MaxOutFlow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->maxInflow) {
            $res['MaxInflow'] = $this->maxInflow;
        }
        if (null !== $this->attackFlow) {
            $res['AttackFlow'] = $this->attackFlow;
        }
        if (null !== $this->maxOutFlow) {
            $res['MaxOutFlow'] = $this->maxOutFlow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            if (!empty($map['Time'])) {
                $model->time = $map['Time'];
            }
        }
        if (isset($map['MaxInflow'])) {
            if (!empty($map['MaxInflow'])) {
                $model->maxInflow = $map['MaxInflow'];
            }
        }
        if (isset($map['AttackFlow'])) {
            if (!empty($map['AttackFlow'])) {
                $model->attackFlow = $map['AttackFlow'];
            }
        }
        if (isset($map['MaxOutFlow'])) {
            if (!empty($map['MaxOutFlow'])) {
                $model->maxOutFlow = $map['MaxOutFlow'];
            }
        }

        return $model;
    }
}
