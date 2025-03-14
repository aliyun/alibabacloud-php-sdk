<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListFirewallRulesResponseBody;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListFirewallRulesResponseBody\firewallRules\tags;
use AlibabaCloud\Tea\Model;

class firewallRules extends Model
{
    /**
     * @description The firewall policy. Valid values:
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
     * @example TEST
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
     *   TCP
     *   UDP
     *   TCP+UDP
     *
     * @example TCP
     *
     * @var string
     */
    public $ruleProtocol;

    /**
     * @description The source CIDR block.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The tags of the firewall rule.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'policy' => 'Policy',
        'port' => 'Port',
        'remark' => 'Remark',
        'ruleId' => 'RuleId',
        'ruleProtocol' => 'RuleProtocol',
        'sourceCidrIp' => 'SourceCidrIp',
        'tags' => 'Tags',
    ];

    public function validate() {}

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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
