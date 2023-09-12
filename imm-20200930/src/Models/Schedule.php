<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Schedule extends Model
{
    /**
     * @example 0.97
     *
     * @var float
     */
    public $gamma;

    /**
     * @example StepLR
     *
     * @var string
     */
    public $LRScheduler;

    /**
     * @example 1
     *
     * @var int
     */
    public $stepSize;
    protected $_name = [
        'gamma'       => 'Gamma',
        'LRScheduler' => 'LRScheduler',
        'stepSize'    => 'StepSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gamma) {
            $res['Gamma'] = $this->gamma;
        }
        if (null !== $this->LRScheduler) {
            $res['LRScheduler'] = $this->LRScheduler;
        }
        if (null !== $this->stepSize) {
            $res['StepSize'] = $this->stepSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Schedule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Gamma'])) {
            $model->gamma = $map['Gamma'];
        }
        if (isset($map['LRScheduler'])) {
            $model->LRScheduler = $map['LRScheduler'];
        }
        if (isset($map['StepSize'])) {
            $model->stepSize = $map['StepSize'];
        }

        return $model;
    }
}
