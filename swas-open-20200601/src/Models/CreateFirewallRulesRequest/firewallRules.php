<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesRequest;

use AlibabaCloud\Tea\Model;

class firewallRules extends Model
{
    /**
     * @description The port number.
     *
     *   When the transport layer protocol is TCP and/or UDP, the port number range is 1 to 65535. Specify a port range in the format of \\<Start port number>/\\<End port number>. Example: 1/200.
     *   When the transport layer protocol is ICMP, the port number range is -1/-1, which indicates all ports.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The description of the firewall rule.
     *
     * @example TEST
     *
     * @var string
     */
    public $remark;

    /**
     * @description The transport layer protocol. Valid values:
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
     * @description The IP address or CIDR block that is allowed in the firewall rule.
     *
     * @example 47.101.XX.XX
     *
     * @var string
     */
    public $sourceCidrIp;
    protected $_name = [
        'port' => 'Port',
        'remark' => 'Remark',
        'ruleProtocol' => 'RuleProtocol',
        'sourceCidrIp' => 'SourceCidrIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (isset($map['RuleProtocol'])) {
            $model->ruleProtocol = $map['RuleProtocol'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }

        return $model;
    }
}
