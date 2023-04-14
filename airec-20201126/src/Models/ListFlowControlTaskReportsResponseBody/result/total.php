<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskReportsResponseBody\result;

use AlibabaCloud\Tea\Model;

class total extends Model
{
    /**
     * @example 0.3
     *
     * @var float
     */
    public $invalidPercent;

    /**
     * @example 0.1
     *
     * @var float
     */
    public $accTaskCtr;

    /**
     * @example 1000
     *
     * @var int
     */
    public $accTaskPv;

    /**
     * @example 0.2
     *
     * @var float
     */
    public $accTotalCtr;
    protected $_name = [
        'invalidPercent' => 'InvalidPercent',
        'accTaskCtr'     => 'accTaskCtr',
        'accTaskPv'      => 'accTaskPv',
        'accTotalCtr'    => 'accTotalCtr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidPercent) {
            $res['InvalidPercent'] = $this->invalidPercent;
        }
        if (null !== $this->accTaskCtr) {
            $res['accTaskCtr'] = $this->accTaskCtr;
        }
        if (null !== $this->accTaskPv) {
            $res['accTaskPv'] = $this->accTaskPv;
        }
        if (null !== $this->accTotalCtr) {
            $res['accTotalCtr'] = $this->accTotalCtr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return total
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvalidPercent'])) {
            $model->invalidPercent = $map['InvalidPercent'];
        }
        if (isset($map['accTaskCtr'])) {
            $model->accTaskCtr = $map['accTaskCtr'];
        }
        if (isset($map['accTaskPv'])) {
            $model->accTaskPv = $map['accTaskPv'];
        }
        if (isset($map['accTotalCtr'])) {
            $model->accTotalCtr = $map['accTotalCtr'];
        }

        return $model;
    }
}
