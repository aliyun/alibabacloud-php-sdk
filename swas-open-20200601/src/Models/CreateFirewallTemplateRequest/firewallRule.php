<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallTemplateRequest;

use AlibabaCloud\Tea\Model;

class firewallRule extends Model
{
    /**
     * @description The port range. Valid values: 1 to 65535. Specify a port range in the format of \\<start port number>/\\<end port number>. Example: `1024/1055`, which indicates that the port range of 1024 to 1055.
     *
     * This parameter is required.
     * @example 8080
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
     * @description The transport layer protocol that the rule supports. Valid values:
     *
     *   TCP
     *   UDP
     *   TCP+UDP
     *   ICMP
     *
     * This parameter is required.
     * @example TCP
     *
     * @var string
     */
    public $ruleProtocol;

    /**
     * @description The source address to which you want to grant access permissions. CIDR blocks and IPv4 addresses are supported.
     *
     * This parameter is required.
     * @example 223.166.XX.XX
     *
     * @var string
     */
    public $sourceCidrIp;
    protected $_name = [
        'port'         => 'Port',
        'remark'       => 'Remark',
        'ruleProtocol' => 'RuleProtocol',
        'sourceCidrIp' => 'SourceCidrIp',
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
     * @return firewallRule
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
