<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ConfigLayer4RuleBakModeRequest
     */
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
