<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\managedRulesets\managedRules;

class managedRulesets extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $attackType;

    /**
     * @var managedRules[]
     */
    public $managedRules;

    /**
     * @var int
     */
    public $numberEnabled;

    /**
     * @var int
     */
    public $numberTotal;

    /**
     * @var int
     */
    public $protectionLevel;
    protected $_name = [
        'action' => 'Action',
        'attackType' => 'AttackType',
        'managedRules' => 'ManagedRules',
        'numberEnabled' => 'NumberEnabled',
        'numberTotal' => 'NumberTotal',
        'protectionLevel' => 'ProtectionLevel',
    ];

    public function validate()
    {
        if (\is_array($this->managedRules)) {
            Model::validateArray($this->managedRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->managedRules) {
            if (\is_array($this->managedRules)) {
                $res['ManagedRules'] = [];
                $n1 = 0;
                foreach ($this->managedRules as $item1) {
                    $res['ManagedRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->numberEnabled) {
            $res['NumberEnabled'] = $this->numberEnabled;
        }

        if (null !== $this->numberTotal) {
            $res['NumberTotal'] = $this->numberTotal;
        }

        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['ManagedRules'])) {
            if (!empty($map['ManagedRules'])) {
                $model->managedRules = [];
                $n1 = 0;
                foreach ($map['ManagedRules'] as $item1) {
                    $model->managedRules[$n1] = managedRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NumberEnabled'])) {
            $model->numberEnabled = $map['NumberEnabled'];
        }

        if (isset($map['NumberTotal'])) {
            $model->numberTotal = $map['NumberTotal'];
        }

        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }

        return $model;
    }
}
