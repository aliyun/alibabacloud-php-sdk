<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplatesResponseBody\firewallTemplates;

use AlibabaCloud\Dara\Model;

class firewallTemplateRules extends Model
{
    /**
     * @var string
     */
    public $firewallTemplateRuleId;
    /**
     * @var string
     */
    public $port;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $ruleProtocol;
    /**
     * @var string
     */
    public $sourceCidrIp;
    protected $_name = [
        'firewallTemplateRuleId' => 'FirewallTemplateRuleId',
        'port'                   => 'Port',
        'remark'                 => 'Remark',
        'ruleProtocol'           => 'RuleProtocol',
        'sourceCidrIp'           => 'SourceCidrIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firewallTemplateRuleId) {
            $res['FirewallTemplateRuleId'] = $this->firewallTemplateRuleId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->ruleProtocol) {
            $res['RuleProtocol'] = $this->ruleProtocol;
        }

        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
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
        if (isset($map['FirewallTemplateRuleId'])) {
            $model->firewallTemplateRuleId = $map['FirewallTemplateRuleId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RuleProtocol'])) {
            $model->ruleProtocol = $map['RuleProtocol'];
        }

        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }

        return $model;
    }
}
