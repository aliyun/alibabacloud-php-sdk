<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\TriggerPatrolRequest\scopeConfig;

class TriggerPatrolRequest extends Model
{
    /**
     * @var scopeConfig
     */
    public $scopeConfig;

    /**
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'scopeConfig' => 'scopeConfig',
        'scopeType' => 'scopeType',
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
        if (null !== $this->scopeConfig) {
            $res['scopeConfig'] = null !== $this->scopeConfig ? $this->scopeConfig->toArray($noStream) : $this->scopeConfig;
        }

        if (null !== $this->scopeType) {
            $res['scopeType'] = $this->scopeType;
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
        if (isset($map['scopeConfig'])) {
            $model->scopeConfig = scopeConfig::fromMap($map['scopeConfig']);
        }

        if (isset($map['scopeType'])) {
            $model->scopeType = $map['scopeType'];
        }

        return $model;
    }
}
