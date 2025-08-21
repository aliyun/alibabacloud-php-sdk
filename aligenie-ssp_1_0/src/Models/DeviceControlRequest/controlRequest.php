<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeviceControlRequest;

use AlibabaCloud\Dara\Model;

class controlRequest extends Model
{
    /**
     * @var bool
     */
    public $muted;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'muted' => 'Muted',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->muted) {
            $res['Muted'] = $this->muted;
        }

        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
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
        if (isset($map['Muted'])) {
            $model->muted = $map['Muted'];
        }

        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
