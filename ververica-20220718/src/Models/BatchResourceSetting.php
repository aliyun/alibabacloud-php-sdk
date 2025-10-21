<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class BatchResourceSetting extends Model
{
    /**
     * @var BasicResourceSetting
     */
    public $basicResourceSetting;

    /**
     * @var int
     */
    public $maxSlot;
    protected $_name = [
        'basicResourceSetting' => 'basicResourceSetting',
        'maxSlot' => 'maxSlot',
    ];

    public function validate()
    {
        if (null !== $this->basicResourceSetting) {
            $this->basicResourceSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicResourceSetting) {
            $res['basicResourceSetting'] = null !== $this->basicResourceSetting ? $this->basicResourceSetting->toArray($noStream) : $this->basicResourceSetting;
        }

        if (null !== $this->maxSlot) {
            $res['maxSlot'] = $this->maxSlot;
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
        if (isset($map['basicResourceSetting'])) {
            $model->basicResourceSetting = BasicResourceSetting::fromMap($map['basicResourceSetting']);
        }

        if (isset($map['maxSlot'])) {
            $model->maxSlot = $map['maxSlot'];
        }

        return $model;
    }
}
