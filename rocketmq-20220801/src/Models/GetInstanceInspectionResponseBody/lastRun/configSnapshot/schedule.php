<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\lastRun\configSnapshot;

use AlibabaCloud\Dara\Model;

class schedule extends Model
{
    /**
     * @var string
     */
    public $cron;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'cron' => 'cron',
        'enabled' => 'enabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cron) {
            $res['cron'] = $this->cron;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
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
        if (isset($map['cron'])) {
            $model->cron = $map['cron'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        return $model;
    }
}
