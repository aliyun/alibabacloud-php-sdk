<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\AttachEgressProxyRuleGroupsToConfigurationRequest\egressProxyRuleGroups;

class AttachEgressProxyRuleGroupsToConfigurationRequest extends Model
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
     * @var egressProxyRuleGroups[]
     */
    public $egressProxyRuleGroups;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'egressProxyConfigurationId' => 'EgressProxyConfigurationId',
        'egressProxyRuleGroups' => 'EgressProxyRuleGroups',
    ];

    public function validate()
    {
        if (\is_array($this->egressProxyRuleGroups)) {
            Model::validateArray($this->egressProxyRuleGroups);
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

        if (null !== $this->egressProxyRuleGroups) {
            if (\is_array($this->egressProxyRuleGroups)) {
                $res['EgressProxyRuleGroups'] = [];
                $n1 = 0;
                foreach ($this->egressProxyRuleGroups as $item1) {
                    $res['EgressProxyRuleGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['EgressProxyRuleGroups'])) {
            if (!empty($map['EgressProxyRuleGroups'])) {
                $model->egressProxyRuleGroups = [];
                $n1 = 0;
                foreach ($map['EgressProxyRuleGroups'] as $item1) {
                    $model->egressProxyRuleGroups[$n1] = egressProxyRuleGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
