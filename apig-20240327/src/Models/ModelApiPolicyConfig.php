<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ModelApiPolicyConfig extends Model
{
    /**
     * @var AiSecurityGuardConfig
     */
    public $aiSecurityGuardConfig;

    /**
     * @var AiStatisticsConfig
     */
    public $aiStatisticsConfig;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aiSecurityGuardConfig' => 'aiSecurityGuardConfig',
        'aiStatisticsConfig' => 'aiStatisticsConfig',
        'enable' => 'enable',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->aiSecurityGuardConfig) {
            $this->aiSecurityGuardConfig->validate();
        }
        if (null !== $this->aiStatisticsConfig) {
            $this->aiStatisticsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiSecurityGuardConfig) {
            $res['aiSecurityGuardConfig'] = null !== $this->aiSecurityGuardConfig ? $this->aiSecurityGuardConfig->toArray($noStream) : $this->aiSecurityGuardConfig;
        }

        if (null !== $this->aiStatisticsConfig) {
            $res['aiStatisticsConfig'] = null !== $this->aiStatisticsConfig ? $this->aiStatisticsConfig->toArray($noStream) : $this->aiStatisticsConfig;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['aiSecurityGuardConfig'])) {
            $model->aiSecurityGuardConfig = AiSecurityGuardConfig::fromMap($map['aiSecurityGuardConfig']);
        }

        if (isset($map['aiStatisticsConfig'])) {
            $model->aiStatisticsConfig = AiStatisticsConfig::fromMap($map['aiStatisticsConfig']);
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
