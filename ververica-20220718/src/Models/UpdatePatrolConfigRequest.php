<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdatePatrolConfigRequest\scopeConfig;

class UpdatePatrolConfigRequest extends Model
{
    /**
     * @var string
     */
    public $cron;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var scopeConfig
     */
    public $scopeConfig;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string
     */
    public $timezone;
    protected $_name = [
        'cron' => 'cron',
        'enabled' => 'enabled',
        'scopeConfig' => 'scopeConfig',
        'scopeType' => 'scopeType',
        'timezone' => 'timezone',
    ];

    public function validate()
    {
        if (null !== $this->scopeConfig) {
            $this->scopeConfig->validate();
        }
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

        if (null !== $this->scopeConfig) {
            $res['scopeConfig'] = null !== $this->scopeConfig ? $this->scopeConfig->toArray($noStream) : $this->scopeConfig;
        }

        if (null !== $this->scopeType) {
            $res['scopeType'] = $this->scopeType;
        }

        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
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

        if (isset($map['scopeConfig'])) {
            $model->scopeConfig = scopeConfig::fromMap($map['scopeConfig']);
        }

        if (isset($map['scopeType'])) {
            $model->scopeType = $map['scopeType'];
        }

        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        return $model;
    }
}
