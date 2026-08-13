<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateScheduledTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateScheduledTaskRequest\triggerConfig\pushConfig;

class triggerConfig extends Model
{
    /**
     * @var string
     */
    public $cron;

    /**
     * @var string
     */
    public $language;

    /**
     * @var pushConfig[]
     */
    public $pushConfig;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $triggerMode;
    protected $_name = [
        'cron' => 'cron',
        'language' => 'language',
        'pushConfig' => 'pushConfig',
        'timezone' => 'timezone',
        'triggerMode' => 'triggerMode',
    ];

    public function validate()
    {
        if (\is_array($this->pushConfig)) {
            Model::validateArray($this->pushConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cron) {
            $res['cron'] = $this->cron;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->pushConfig) {
            if (\is_array($this->pushConfig)) {
                $res['pushConfig'] = [];
                $n1 = 0;
                foreach ($this->pushConfig as $item1) {
                    $res['pushConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }

        if (null !== $this->triggerMode) {
            $res['triggerMode'] = $this->triggerMode;
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

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['pushConfig'])) {
            if (!empty($map['pushConfig'])) {
                $model->pushConfig = [];
                $n1 = 0;
                foreach ($map['pushConfig'] as $item1) {
                    $model->pushConfig[$n1] = pushConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        if (isset($map['triggerMode'])) {
            $model->triggerMode = $map['triggerMode'];
        }

        return $model;
    }
}
