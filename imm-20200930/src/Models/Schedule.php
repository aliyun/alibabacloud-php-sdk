<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Schedule extends Model
{
    /**
     * @var float
     */
    public $gamma;

    /**
     * @var string
     */
    public $LRScheduler;

    /**
     * @var int
     */
    public $stepSize;
    protected $_name = [
        'gamma' => 'Gamma',
        'LRScheduler' => 'LRScheduler',
        'stepSize' => 'StepSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
