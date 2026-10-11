<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;

class DetachEgressProxyRuleGroupsFromConfigurationRequest extends Model
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
    public $egressProxyConfigurationId;

    /**
     * @var string[]
     */
    public $egressProxyRuleGroupIds;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'egressProxyConfigurationId' => 'EgressProxyConfigurationId',
        'egressProxyRuleGroupIds' => 'EgressProxyRuleGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->egressProxyRuleGroupIds)) {
            Model::validateArray($this->egressProxyRuleGroupIds);
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

        if (null !== $this->egressProxyConfigurationId) {
            $res['EgressProxyConfigurationId'] = $this->egressProxyConfigurationId;
        }

        if (null !== $this->egressProxyRuleGroupIds) {
            if (\is_array($this->egressProxyRuleGroupIds)) {
                $res['EgressProxyRuleGroupIds'] = [];
                $n1 = 0;
                foreach ($this->egressProxyRuleGroupIds as $item1) {
                    $res['EgressProxyRuleGroupIds'][$n1] = $item1;
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

        if (isset($map['EgressProxyConfigurationId'])) {
            $model->egressProxyConfigurationId = $map['EgressProxyConfigurationId'];
        }

        if (isset($map['EgressProxyRuleGroupIds'])) {
            if (!empty($map['EgressProxyRuleGroupIds'])) {
                $model->egressProxyRuleGroupIds = [];
                $n1 = 0;
                foreach ($map['EgressProxyRuleGroupIds'] as $item1) {
                    $model->egressProxyRuleGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
