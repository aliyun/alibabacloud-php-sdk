<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiSecurityGuardConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiSecurityGuardConfig\riskConfig\consumerRules;

class riskConfig extends Model
{
    /**
     * @var consumerRules
     */
    public $consumerRules;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'consumerRules' => 'consumerRules',
        'level' => 'level',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->consumerRules) {
            $this->consumerRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerRules) {
            $res['consumerRules'] = null !== $this->consumerRules ? $this->consumerRules->toArray($noStream) : $this->consumerRules;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
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
        if (isset($map['consumerRules'])) {
            $model->consumerRules = consumerRules::fromMap($map['consumerRules']);
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
