<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest;

use AlibabaCloud\Dara\Model;

class slowStartConfig extends Model
{
    /**
     * @var int
     */
    public $slowStartDuration;

    /**
     * @var bool
     */
    public $slowStartEnabled;
    protected $_name = [
        'slowStartDuration' => 'SlowStartDuration',
        'slowStartEnabled' => 'SlowStartEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slowStartDuration) {
            $res['SlowStartDuration'] = $this->slowStartDuration;
        }

        if (null !== $this->slowStartEnabled) {
            $res['SlowStartEnabled'] = $this->slowStartEnabled;
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
        if (isset($map['SlowStartDuration'])) {
            $model->slowStartDuration = $map['SlowStartDuration'];
        }

        if (isset($map['SlowStartEnabled'])) {
            $model->slowStartEnabled = $map['SlowStartEnabled'];
        }

        return $model;
    }
}
