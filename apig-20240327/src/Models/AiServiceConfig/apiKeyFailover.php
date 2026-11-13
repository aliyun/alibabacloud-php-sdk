<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig;

use AlibabaCloud\Dara\Model;

class apiKeyFailover extends Model
{
    /**
     * @var int
     */
    public $cooldownDuration;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string[]
     */
    public $failoverOnStatus;

    /**
     * @var int
     */
    public $failureThreshold;
    protected $_name = [
        'cooldownDuration' => 'cooldownDuration',
        'enabled' => 'enabled',
        'failoverOnStatus' => 'failoverOnStatus',
        'failureThreshold' => 'failureThreshold',
    ];

    public function validate()
    {
        if (\is_array($this->failoverOnStatus)) {
            Model::validateArray($this->failoverOnStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cooldownDuration) {
            $res['cooldownDuration'] = $this->cooldownDuration;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->failoverOnStatus) {
            if (\is_array($this->failoverOnStatus)) {
                $res['failoverOnStatus'] = [];
                $n1 = 0;
                foreach ($this->failoverOnStatus as $item1) {
                    $res['failoverOnStatus'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->failureThreshold) {
            $res['failureThreshold'] = $this->failureThreshold;
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
        if (isset($map['cooldownDuration'])) {
            $model->cooldownDuration = $map['cooldownDuration'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['failoverOnStatus'])) {
            if (!empty($map['failoverOnStatus'])) {
                $model->failoverOnStatus = [];
                $n1 = 0;
                foreach ($map['failoverOnStatus'] as $item1) {
                    $model->failoverOnStatus[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['failureThreshold'])) {
            $model->failureThreshold = $map['failureThreshold'];
        }

        return $model;
    }
}
