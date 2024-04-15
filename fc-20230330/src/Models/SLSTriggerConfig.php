<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class SLSTriggerConfig extends Model
{
    /**
     * @example true
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->functionParameter) {
            $res['functionParameter'] = $this->functionParameter;
        }
        if (null !== $this->jobConfig) {
            $res['jobConfig'] = null !== $this->jobConfig ? $this->jobConfig->toMap() : null;
        }
        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->sourceConfig) {
            $res['sourceConfig'] = null !== $this->sourceConfig ? $this->sourceConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SLSTriggerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['functionParameter'])) {
            $model->functionParameter = $map['functionParameter'];
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
