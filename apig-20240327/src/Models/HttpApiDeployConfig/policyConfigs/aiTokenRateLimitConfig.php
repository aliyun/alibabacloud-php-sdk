<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\policyConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\policyConfigs\aiTokenRateLimitConfig\globalRules;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\policyConfigs\aiTokenRateLimitConfig\rules;

class aiTokenRateLimitConfig extends Model
{
    /**
     * @var bool
     */
    public $enableGlobalRules;

    /**
     * @var globalRules[]
     */
    public $globalRules;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'enableGlobalRules' => 'enableGlobalRules',
        'globalRules' => 'globalRules',
        'rules' => 'rules',
    ];

    public function validate()
    {
        if (\is_array($this->globalRules)) {
            Model::validateArray($this->globalRules);
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableGlobalRules) {
            $res['enableGlobalRules'] = $this->enableGlobalRules;
        }

        if (null !== $this->globalRules) {
            if (\is_array($this->globalRules)) {
                $res['globalRules'] = [];
                $n1 = 0;
                foreach ($this->globalRules as $item1) {
                    $res['globalRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['enableGlobalRules'])) {
            $model->enableGlobalRules = $map['enableGlobalRules'];
        }

        if (isset($map['globalRules'])) {
            if (!empty($map['globalRules'])) {
                $model->globalRules = [];
                $n1 = 0;
                foreach ($map['globalRules'] as $item1) {
                    $model->globalRules[$n1] = globalRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['rules'])) {
            if (!empty($map['rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
