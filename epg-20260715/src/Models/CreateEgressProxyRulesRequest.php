<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyRulesRequest\egressProxyRules;

class CreateEgressProxyRulesRequest extends Model
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
     * @var egressProxyRules
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
        if (null !== $this->egressProxyRules) {
            $this->egressProxyRules->validate();
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
            $res['EgressProxyRules'] = null !== $this->egressProxyRules ? $this->egressProxyRules->toArray($noStream) : $this->egressProxyRules;
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
            $model->egressProxyRules = egressProxyRules::fromMap($map['EgressProxyRules']);
        }

        return $model;
    }
}
