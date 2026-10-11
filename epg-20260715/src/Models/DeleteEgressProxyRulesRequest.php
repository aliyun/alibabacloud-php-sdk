<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;

class DeleteEgressProxyRulesRequest extends Model
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
     * @var string[]
     */
    public $egressProxyRuleIds;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'egressProxyRuleGroupId' => 'EgressProxyRuleGroupId',
        'egressProxyRuleIds' => 'EgressProxyRuleIds',
    ];

    public function validate()
    {
        if (\is_array($this->egressProxyRuleIds)) {
            Model::validateArray($this->egressProxyRuleIds);
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

        if (null !== $this->egressProxyRuleIds) {
            if (\is_array($this->egressProxyRuleIds)) {
                $res['EgressProxyRuleIds'] = [];
                $n1 = 0;
                foreach ($this->egressProxyRuleIds as $item1) {
                    $res['EgressProxyRuleIds'][$n1] = $item1;
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

        if (isset($map['EgressProxyRuleIds'])) {
            if (!empty($map['EgressProxyRuleIds'])) {
                $model->egressProxyRuleIds = [];
                $n1 = 0;
                foreach ($map['EgressProxyRuleIds'] as $item1) {
                    $model->egressProxyRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
