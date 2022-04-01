<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class TimeTriggerConfig extends Model
{
    /**
     * @description cronExpression
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description enable
     *
     * @var bool
     */
    public $enable;

    /**
     * @description payload
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
     * @return TimeTriggerConfig
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
