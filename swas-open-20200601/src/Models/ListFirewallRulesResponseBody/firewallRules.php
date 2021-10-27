<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListFirewallRulesResponseBody;

use AlibabaCloud\Tea\Model;

class firewallRules extends Model
{
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
    public $ruleId;

    /**
     * @var string
     */
    public $ruleProtocol;
    protected $_name = [
        'port'         => 'Port',
        'remark'       => 'Remark',
        'ruleId'       => 'RuleId',
        'ruleProtocol' => 'RuleProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleProtocol) {
            $res['RuleProtocol'] = $this->ruleProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return firewallRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleProtocol'])) {
            $model->ruleProtocol = $map['RuleProtocol'];
        }

        return $model;
    }
}
