<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class CreateSignalRequest extends Model
{
    /**
     * @var string
     */
    public $signal;

    /**
     * @var SignalTarget
     */
    public $target;
    protected $_name = [
        'signal' => 'Signal',
        'target' => 'Target',
    ];

    public function validate()
    {
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->signal) {
            $res['Signal'] = $this->signal;
        }

        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
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
        if (isset($map['Signal'])) {
            $model->signal = $map['Signal'];
        }

        if (isset($map['Target'])) {
            $model->target = SignalTarget::fromMap($map['Target']);
        }

        return $model;
    }
}
