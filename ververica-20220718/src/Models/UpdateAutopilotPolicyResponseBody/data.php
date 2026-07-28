<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateAutopilotPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy;

class data extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var AutopilotPolicy
     */
    public $policyConfig;
    protected $_name = [
        'enabled' => 'enabled',
        'policyConfig' => 'policyConfig',
    ];

    public function validate()
    {
        if (null !== $this->policyConfig) {
            $this->policyConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->policyConfig) {
            $res['policyConfig'] = null !== $this->policyConfig ? $this->policyConfig->toArray($noStream) : $this->policyConfig;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['policyConfig'])) {
            $model->policyConfig = AutopilotPolicy::fromMap($map['policyConfig']);
        }

        return $model;
    }
}
