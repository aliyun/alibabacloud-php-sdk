<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class TimerTriggerConfig extends Model
{
    /**
     * @var string
     */
    public $cronExpression;
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var string
     */
    public $payload;
    protected $_name = [
        'cronExpression' => 'cronExpression',
        'enable'         => 'enable',
        'payload'        => 'payload',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['cronExpression'] = $this->cronExpression;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->payload) {
            $res['payload'] = $this->payload;
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
        if (isset($map['cronExpression'])) {
            $model->cronExpression = $map['cronExpression'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['payload'])) {
            $model->payload = $map['payload'];
        }

        return $model;
    }
}
