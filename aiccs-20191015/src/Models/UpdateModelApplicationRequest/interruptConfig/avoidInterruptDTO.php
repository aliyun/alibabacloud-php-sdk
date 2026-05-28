<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateModelApplicationRequest\interruptConfig;

use AlibabaCloud\Dara\Model;

class avoidInterruptDTO extends Model
{
    /**
     * @var int
     */
    public $interruptNum;

    /**
     * @var float
     */
    public $interruptProtectDuration;
    protected $_name = [
        'interruptNum' => 'InterruptNum',
        'interruptProtectDuration' => 'InterruptProtectDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interruptNum) {
            $res['InterruptNum'] = $this->interruptNum;
        }

        if (null !== $this->interruptProtectDuration) {
            $res['InterruptProtectDuration'] = $this->interruptProtectDuration;
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
        if (isset($map['InterruptNum'])) {
            $model->interruptNum = $map['InterruptNum'];
        }

        if (isset($map['InterruptProtectDuration'])) {
            $model->interruptProtectDuration = $map['InterruptProtectDuration'];
        }

        return $model;
    }
}
