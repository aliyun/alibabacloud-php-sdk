<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\managedRulesets\managedRules;
use AlibabaCloud\Tea\Model;

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
        'action'          => 'Action',
        'attackType'      => 'AttackType',
        'managedRules'    => 'ManagedRules',
        'numberEnabled'   => 'NumberEnabled',
        'numberTotal'     => 'NumberTotal',
        'protectionLevel' => 'ProtectionLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }
        if (null !== $this->managedRules) {
            $res['ManagedRules'] = [];
            if (null !== $this->managedRules && \is_array($this->managedRules)) {
                $n = 0;
                foreach ($this->managedRules as $item) {
                    $res['ManagedRules'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return managedRulesets
     */
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
                $n                   = 0;
                foreach ($map['ManagedRules'] as $item) {
                    $model->managedRules[$n++] = null !== $item ? managedRules::fromMap($item) : $item;
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
