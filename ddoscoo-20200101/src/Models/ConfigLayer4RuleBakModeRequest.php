<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ConfigLayer4RuleBakModeRequest extends Model
{
    /**
     * @var string
     */
    public $bakMode;
    /**
     * @var string
     */
    public $listeners;
    protected $_name = [
        'bakMode'   => 'BakMode',
        'listeners' => 'Listeners',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bakMode) {
            $res['BakMode'] = $this->bakMode;
        }

        if (null !== $this->listeners) {
            $res['Listeners'] = $this->listeners;
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
        if (isset($map['BakMode'])) {
            $model->bakMode = $map['BakMode'];
        }

        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }

        return $model;
    }
}
