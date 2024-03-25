<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTrafficMarkingPolicyRequest;

use AlibabaCloud\Tea\Model;

class trafficMatchRules extends Model
{
    /**
     * @description The destination CIDR block that is used to match packets.
     *
     * You can create up to 50 traffic classification rules in each call You can specify a destination CIDR block for each traffic classification rule.
     * @example 10.10.10.0/24
     *
     * @var string
     */
    public $dstCidr;

    /**
     * @description The destination port range that is used to match packets. Valid values: **-1** and **1** to **65535**.
     *
     * You can enter up to two port numbers. Take note of the following rules:
     *
     *   If you enter only one port number, such as 1, packets whose destination port is 1 meet the traffic classification rule.
     *   If you enter two port numbers, such as 1 and 200, packets whose destination ports fall into 1 and 200 meet the traffic classification rule.
     *   If you enter two port numbers and one of them is -1, the other port number must also be -1. In this case, all packets meet the traffic classification rule.
     *
     * You can create up to 50 traffic classification rules in each call. You can specify a destination port range for each traffic classification rule.
     * @var int[]
     */
    public $dstPortRange;

    /**
     * @description The DSCP value that is used to match packets. Valid values: **0** to **63**.
     *
     * You can create up to 50 traffic classification rules in each call. You can specify a DSCP value for each traffic classification rule.
     * @example 6
     *
     * @var int
     */
    public $matchDscp;

    /**
     * @description The protocol that is used to match packets.
     *
     * Traffic classification rules support the following protocols: **HTTP**, **HTTPS**, **TCP**, **UDP**, **SSH**, and **Telnet**. For more information, log on to the [CEN console](https://cen.console.aliyun.com/cen/list).
     *
     **Some protocols use a fixed port. Click to view protocols and ports.**
     *
     *   If the protocol is **ICMP**, the destination port must be **-1**.
     *   If the protocol is **GRE**, the destination port must be **1**.
     *   If the protocol is **SSH**, the destination port must be **22**.
     *   If the protocol is **Telnet**, the destination port must be **23**.
     *   If the protocol is **HTTP**, the destination port must be **80**.
     *   If the protocol is **HTTPS**, the destination port must be **443**.
     *   If the protocol is **MS SQL**, the destination port must be **1443**.
     *   If the protocol is **Oracle**, the destination port must be **1521**.
     *   If the protocol is **Mysql**, the destination port must be **3306**.
     *   If the protocol is **RDP**, the destination port must be **3389**.
     *   If the protocol is **Postgre SQL**, the destination port must be **5432**.
     *   If the protocol is **Redis**, the destination port must be **6379**.
     *
     * You can create up to 50 traffic classification rules in each call. You can specify a protocol for each traffic classification rule.
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The source CIDR block that is used to match packets.
     *
     * You can create up to 50 traffic classification rules in each call. You can specify a source CIDR block for each traffic classification rule.
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $srcCidr;

    /**
     * @description The source port range that is used to match packets. Valid values: **-1** and **1** to **65535**.
     *
     * You can enter up to two port numbers. Take note of the following rules:
     *
     *   If you enter only one port number, such as 1, packets whose source port is 1 meet the traffic classification rule.
     *   If you enter two port numbers, such as 1 and 200, packets whose source ports fall into 1 and 200 meet the traffic classification rule.
     *   If you enter two port numbers and one of them is -1, the other port number must also be -1. In this case, all packets meet the traffic classification rule.
     *
     * You can create up to 50 traffic classification rules in each call. You can specify a source port range for each traffic classification rule.
     * @var int[]
     */
    public $srcPortRange;

    /**
     * @description The description of the traffic classification rule.
     *
     * This parameter is optional. If you enter a description, it must be 1 to 256 characters in length, and cannot start with http:// or https://.
     * @example desctest
     *
     * @var string
     */
    public $trafficMatchRuleDescription;

    /**
     * @description The name of the traffic classification rule.
     *
     * The name can be empty or 1 to 128 characters in length, and cannot start with http:// or https://.
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
