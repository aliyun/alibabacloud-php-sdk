<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class SLSTriggerConfig extends Model
{
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var string[]
     */
    public $functionParameter;
    /**
     * @var JobConfig
     */
    public $jobConfig;
    /**
     * @var SLSTriggerLogConfig
     */
    public $logConfig;
    /**
     * @var SourceConfig
     */
    public $sourceConfig;
    protected $_name = [
        'enable'            => 'enable',
        'functionParameter' => 'functionParameter',
        'jobConfig'         => 'jobConfig',
        'logConfig'         => 'logConfig',
        'sourceConfig'      => 'sourceConfig',
    ];

    public function validate()
    {
        if (\is_array($this->functionParameter)) {
            Model::validateArray($this->functionParameter);
        }
        if (null !== $this->jobConfig) {
            $this->jobConfig->validate();
        }
        if (null !== $this->logConfig) {
            $this->logConfig->validate();
        }
        if (null !== $this->sourceConfig) {
            $this->sourceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->functionParameter) {
            if (\is_array($this->functionParameter)) {
                $res['functionParameter'] = [];
                foreach ($this->functionParameter as $key1 => $value1) {
                    $res['functionParameter'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->jobConfig) {
            $res['jobConfig'] = null !== $this->jobConfig ? $this->jobConfig->toArray($noStream) : $this->jobConfig;
        }

        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toArray($noStream) : $this->logConfig;
        }

        if (null !== $this->sourceConfig) {
            $res['sourceConfig'] = null !== $this->sourceConfig ? $this->sourceConfig->toArray($noStream) : $this->sourceConfig;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['functionParameter'])) {
            if (!empty($map['functionParameter'])) {
                $model->functionParameter = [];
                foreach ($map['functionParameter'] as $key1 => $value1) {
                    $model->functionParameter[$key1] = $value1;
                }
            }
        }

        if (isset($map['jobConfig'])) {
            $model->jobConfig = JobConfig::fromMap($map['jobConfig']);
        }

        if (isset($map['logConfig'])) {
            $model->logConfig = SLSTriggerLogConfig::fromMap($map['logConfig']);
        }

        if (isset($map['sourceConfig'])) {
            $model->sourceConfig = SourceConfig::fromMap($map['sourceConfig']);
        }

        return $model;
    }
}
