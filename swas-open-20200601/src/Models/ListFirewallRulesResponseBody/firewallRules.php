<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListFirewallRulesResponseBody;

use AlibabaCloud\Tea\Model;

class firewallRules extends Model
{
    /**
     * @description The firewall policy.
     *
     *   accept: Access is allowed.
     *   drop: Access is refused.
     *
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The port range.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The remarks of the firewall rule.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the firewall rule.
     *
     * @example eeea34d9867b4d55a4ff8d5fcfbd****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The transport layer protocol. Valid values:
     *
     *   TCP: the TCP protocol.
     *   UDP: the UDP protocol
     *   TCP+UDP: the TCP and UDP protocols
     *
     * @example TCP
     *
     * @var string
     */
    public $ruleProtocol;

    /**
     * @description The IP address or CIDR block that is allowed by the firewall rule.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $sourceCidrIp;
    protected $_name = [
        'policy'       => 'Policy',
        'port'         => 'Port',
        'remark'       => 'Remark',
        'ruleId'       => 'RuleId',
        'ruleProtocol' => 'RuleProtocol',
        'sourceCidrIp' => 'SourceCidrIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
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
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
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
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
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
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }

        return $model;
    }
}
