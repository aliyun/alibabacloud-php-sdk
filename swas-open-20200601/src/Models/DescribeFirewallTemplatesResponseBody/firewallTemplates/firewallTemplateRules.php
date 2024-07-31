<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplatesResponseBody\firewallTemplates;

use AlibabaCloud\Tea\Model;

class firewallTemplateRules extends Model
{
    /**
     * @description The ID of the firewall template rule.
     *
     * @example eeea34d9867b4d55a4ff8d5fcfbd****
     *
     * @var string
     */
    public $firewallTemplateRuleId;

    /**
     * @description The port range. Valid values: 1 to 65535. Specify a port range in the format of \\<start port number>/\\<end port number>. Example: `1024/1055`, which indicates that the port range of 1024 to 1055.
     *
     * >  If you set RuleProtocol to ICMP, you must set Port to -1/-1.
     * @example 8080
     *
     * @var string
     */
    public $port;

    /**
     * @description The remarks of the firewall template rule.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The transport layer protocol that the rule supports. Valid values:
     *
     *   TCP
     *   UDP
     *   TCP+UDP
     *   ICMP
     *
     * @example TCP
     *
     * @var string
     */
    public $ruleProtocol;

    /**
     * @description The source address to which you want to grant access permissions. CIDR blocks and IPv4 addresses are supported.
     *
     * @example 119.145.XX.XX
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return firewallTemplateRules
     */
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
