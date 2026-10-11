<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\UpdateEgressProxyRulesAttributeRequest\egressProxyRules;

class UpdateEgressProxyRulesAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $egressProxyRuleGroupId;

    /**
     * @var egressProxyRules[]
     */
    public $egressProxyRules;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'egressProxyRuleGroupId' => 'EgressProxyRuleGroupId',
        'egressProxyRules' => 'EgressProxyRules',
    ];

    public function validate()
    {
        if (\is_array($this->egressProxyRules)) {
            Model::validateArray($this->egressProxyRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->egressProxyRuleGroupId) {
            $res['EgressProxyRuleGroupId'] = $this->egressProxyRuleGroupId;
        }

        if (null !== $this->egressProxyRules) {
            if (\is_array($this->egressProxyRules)) {
                $res['EgressProxyRules'] = [];
                $n1 = 0;
                foreach ($this->egressProxyRules as $item1) {
                    $res['EgressProxyRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EgressProxyRuleGroupId'])) {
            $model->egressProxyRuleGroupId = $map['EgressProxyRuleGroupId'];
        }

        if (isset($map['EgressProxyRules'])) {
            if (!empty($map['EgressProxyRules'])) {
                $model->egressProxyRules = [];
                $n1 = 0;
                foreach ($map['EgressProxyRules'] as $item1) {
                    $model->egressProxyRules[$n1] = egressProxyRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
