<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\AddTraficMatchRuleToTrafficMarkingPolicyRequest;

use AlibabaCloud\Tea\Model;

class trafficMatchRules extends Model
{
    /**
     * @description The destination CIDR block that is used to match packets.
     *
     * You can specify at most 50 traffic classification rules.
     * @example 10.10.10.0/24
     *
     * @var string
     */
    public $dstCidr;

    /**
     * @description The destination port range that is used to match packets. Valid values: **-1** and **1** to **65535**.
     *
     * You can specify at most two ports. Take note of the following rules:
     *
     *   If you enter only one port number such as 1, the system matches the packets whose destination port is port 1.
     *   If you enter two port numbers such as 1 and 200, the system matches the packets whose destination ports fall between 1 and 200.
     *   If you enter two port numbers and one of them is -1, the other port number must also be -1. In this case, packets are considered a match regardless of the destination port.
     *
     * You can specify at most 50 traffic classification rules.
     * @var int[]
     */
    public $dstPortRange;

    /**
     * @description The differentiated services code point (DSCP) value that is used to match packets. Valid values: **0** to **63**.
     *
     * You can specify at most 50 traffic classification rules.
     * @example 5
     *
     * @var int
     */
    public $matchDscp;

    /**
     * @description The protocol that is used to match packets.
     *
     * Valid values: **HTTP**, **HTTPS**, **TCP**, **UDP**, **SSH**, and **Telnet**. For more information, log on to the [Cloud Enterprise Network (CEN) console](https://cen.console.aliyun.com/cen/list).
     *
     * You can specify at most 50 traffic classification rules.
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The source CIDR block that is used to match packets.
     *
     * You can specify at most 50 traffic classification rules.
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $srcCidr;

    /**
     * @description The source port range that is used to match packets. Valid values: **-1** and **1** to **65535**.
     *
     * You can specify at most two ports. Take note of the following rules:
     *
     *   If you enter only one port number such as 1, the system matches the packets whose source port is 1.
     *   If you enter two port numbers such as 1 and 200, the system matches the packets whose source ports fall between 1 and 200.
     *   If you enter two port numbers and one of them is -1, the other port number must also be -1. In this case, packets are considered a match regardless of the source port.
     *
     * You can specify at most 50 traffic classification rules.
     * @var int[]
     */
    public $srcPortRange;

    /**
     * @description The description of the traffic classification rule.
     *
     * You can specify at most 50 traffic classification rules.
     * @example desctest
     *
     * @var string
     */
    public $trafficMatchRuleDescription;

    /**
     * @description The name of the traffic classification rule.
     *
     * You can specify at most 50 traffic classification rules.
     * @example nametest
     *
     * @var string
     */
    public $trafficMatchRuleName;
    protected $_name = [
        'dstCidr'                     => 'DstCidr',
        'dstPortRange'                => 'DstPortRange',
        'matchDscp'                   => 'MatchDscp',
        'protocol'                    => 'Protocol',
        'srcCidr'                     => 'SrcCidr',
        'srcPortRange'                => 'SrcPortRange',
        'trafficMatchRuleDescription' => 'TrafficMatchRuleDescription',
        'trafficMatchRuleName'        => 'TrafficMatchRuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstCidr) {
            $res['DstCidr'] = $this->dstCidr;
        }
        if (null !== $this->dstPortRange) {
            $res['DstPortRange'] = $this->dstPortRange;
        }
        if (null !== $this->matchDscp) {
            $res['MatchDscp'] = $this->matchDscp;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->srcCidr) {
            $res['SrcCidr'] = $this->srcCidr;
        }
        if (null !== $this->srcPortRange) {
            $res['SrcPortRange'] = $this->srcPortRange;
        }
        if (null !== $this->trafficMatchRuleDescription) {
            $res['TrafficMatchRuleDescription'] = $this->trafficMatchRuleDescription;
        }
        if (null !== $this->trafficMatchRuleName) {
            $res['TrafficMatchRuleName'] = $this->trafficMatchRuleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficMatchRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstCidr'])) {
            $model->dstCidr = $map['DstCidr'];
        }
        if (isset($map['DstPortRange'])) {
            if (!empty($map['DstPortRange'])) {
                $model->dstPortRange = $map['DstPortRange'];
            }
        }
        if (isset($map['MatchDscp'])) {
            $model->matchDscp = $map['MatchDscp'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['SrcCidr'])) {
            $model->srcCidr = $map['SrcCidr'];
        }
        if (isset($map['SrcPortRange'])) {
            if (!empty($map['SrcPortRange'])) {
                $model->srcPortRange = $map['SrcPortRange'];
            }
        }
        if (isset($map['TrafficMatchRuleDescription'])) {
            $model->trafficMatchRuleDescription = $map['TrafficMatchRuleDescription'];
        }
        if (isset($map['TrafficMatchRuleName'])) {
            $model->trafficMatchRuleName = $map['TrafficMatchRuleName'];
        }

        return $model;
    }
}
