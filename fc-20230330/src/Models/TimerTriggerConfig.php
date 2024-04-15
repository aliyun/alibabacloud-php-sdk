<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class TimerTriggerConfig extends Model
{
    /**
     * @example 0 0 4 * * *
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example {"workflowInstanceId":"39639"}
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return TimerTriggerConfig
     */
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
