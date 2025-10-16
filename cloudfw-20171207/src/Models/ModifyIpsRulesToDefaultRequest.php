<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifyIpsRulesToDefaultRequest extends Model
{
    /**
     * @var string
     */
    public $attackApp;

    /**
     * @var string
     */
    public $firewallType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $rules;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'attackApp' => 'AttackApp',
        'firewallType' => 'FirewallType',
        'lang' => 'Lang',
        'ruleType' => 'RuleType',
        'rules' => 'Rules',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackApp) {
            $res['AttackApp'] = $this->attackApp;
        }

        if (null !== $this->firewallType) {
            $res['FirewallType'] = $this->firewallType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['AttackApp'])) {
            $model->attackApp = $map['AttackApp'];
        }

        if (isset($map['FirewallType'])) {
            $model->firewallType = $map['FirewallType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
