<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosRuleResponseBody;

use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @description The destination IPv4 CIDR block that matches the QoS rule traffic.
     *
     * > When this parameter is unavailable, specify **SrcIPv6Cidr** or **DstIPv6Cidr**.
     * @example 1.1.1.0/24
     *
     * @var string
     */
    public $dstCidr;

    /**
     * @description The destination IPv6 CIDR block that matches the QoS rule traffic.
     *
     * > When this parameter is unavailable, specify **SrcCidr** or **DstCidr**.
     * @example 2001:0db8:1234:5678::/64
     *
     * @var string
     */
    public $dstIPv6Cidr;

    /**
     * @description The range of destination ports that match the QoS rule traffic. Valid values: **0** to **65535**. If the traffic does not match, the value is -1. You can specify only one port. The start port number must be the same as the end port number. Different protocols correspond to different ports. Valid values:
     *
     *   **ALL** (uneditable): -1/-1.
     *   **ICMP(IPv4)** (uneditable): -1/-1.
     *   **ICMPv6(IPv6)** (uneditable): -1/-1.
     *   **TCP** (editable): -1/-1.
     *   **UDP** (editable): -1/-1.
     *   **GRE** (uneditable): -1/-1.
     *   **SSH** (uneditable): 22/22.
     *   **Telnet** (uneditable): 23/23.
     *   **HTTP** (uneditable): 80/80.
     *   **HTTPS** (uneditable): 443/443.
     *   **MS SQL** (uneditable): 1443/1443.
     *   **Oracle** (uneditable): 1521/1521.
     *   **MySql** (uneditable): 3306/3306.
     *   **RDP** (uneditable): 3389/3389.
     *   **PostgreSQL** (uneditable): 5432/5432.
     *   **Redis** (uneditable): 6379/6379.
     *
     * @example -1/-1
     *
     * @var string
     */
    public $dstPortRange;

    /**
     * @description The DSCP value that matches the QoS rule traffic. Valid values: **0** to **63**. If no value is matched, the value is -1.
     *
     * @example 1
     *
     * @var int
     */
    public $matchDscp;

    /**
     * @description The priority of the QoS rule. Valid values: **1** to **9000**. A larger value indicates a higher priority. The priority of each QoS rule must be unique in the same QoS policy.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The protocol of the QoS rule. Valid values:
     *
     *   **ALL**
     *   **ICMP(IPv4)**
     *   **ICMPv6(IPv6)**
     *   **TCP**
     *   **UDP**
     *   **GRE**
     *   **SSH**
     *   **Telnet**
     *   **HTTP**
     *   **HTTPS**
     *   **MS SQL**
     *   **Oracle**
     *   **MySql**
     *   **RDP**
     *   **PostgreSQL**
     *   **Redis**
     *
     * @example ALL
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the QoS policy.
     *
     * @example qos-pksbqfmotl5hzqmhf8
     *
     * @var string
     */
    public $qosId;

    /**
     * @description The ID of the QoS queue.
     *
     * @example qos-queue-9nyx2u7n71s2rcy4n5
     *
     * @var string
     */
    public $queueId;

    /**
     * @description The new DSCP value. Valid values: **0** to **63**. If you do not change the value, set the value to -1.
     *
     * @example 1
     *
     * @var int
     */
    public $remarkingDscp;

    /**
     * @description The description of the QoS rule.
     *
     * The description must be 0 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example qos-rule-test
     *
     * @var string
     */
    public $ruleDescription;

    /**
     * @description The ID of the QoS rule.
     *
     * @example qos-rule-iugg0l9x27f2nocouj
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the QoS rule.
     *
     * The name must be 0 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example qos-rule-test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The source IPv4 CIDR block that matches the QoS rule traffic.
     *
     * > When this parameter is unavailable, specify **SrcIPv6Cidr** or **DstIPv6Cidr**.
     * @example 1.1.1.0/24
     *
     * @var string
     */
    public $srcCidr;

    /**
     * @description The source IPv6 CIDR block that matches the QoS rule traffic.
     *
     * > When this parameter is unavailable, specify **SrcCidr** or **DstCidr**.
     * @example 2001:0db8:1234:5678::/64
     *
     * @var string
     */
    public $srcIPv6Cidr;

    /**
     * @description The range of source ports that match the QoS rule traffic. Valid values: **0** to **65535**. If the traffic does not match, the value is -1. You can specify only one port. The start port number must be the same as the end port number.
     *
     * @example -1/-1
     *
     * @var string
     */
    public $srcPortRange;

    /**
     * @description The status of the QoS rule. Valid values:
     *
     *   **Normal**
     *   **Configuring**
     *   **Deleting**
     *
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'dstCidr'         => 'DstCidr',
        'dstIPv6Cidr'     => 'DstIPv6Cidr',
        'dstPortRange'    => 'DstPortRange',
        'matchDscp'       => 'MatchDscp',
        'priority'        => 'Priority',
        'protocol'        => 'Protocol',
        'qosId'           => 'QosId',
        'queueId'         => 'QueueId',
        'remarkingDscp'   => 'RemarkingDscp',
        'ruleDescription' => 'RuleDescription',
        'ruleId'          => 'RuleId',
        'ruleName'        => 'RuleName',
        'srcCidr'         => 'SrcCidr',
        'srcIPv6Cidr'     => 'SrcIPv6Cidr',
        'srcPortRange'    => 'SrcPortRange',
        'status'          => 'Status',
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
        if (null !== $this->dstIPv6Cidr) {
            $res['DstIPv6Cidr'] = $this->dstIPv6Cidr;
        }
        if (null !== $this->dstPortRange) {
            $res['DstPortRange'] = $this->dstPortRange;
        }
        if (null !== $this->matchDscp) {
            $res['MatchDscp'] = $this->matchDscp;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }
        if (null !== $this->remarkingDscp) {
            $res['RemarkingDscp'] = $this->remarkingDscp;
        }
        if (null !== $this->ruleDescription) {
            $res['RuleDescription'] = $this->ruleDescription;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->srcCidr) {
            $res['SrcCidr'] = $this->srcCidr;
        }
        if (null !== $this->srcIPv6Cidr) {
            $res['SrcIPv6Cidr'] = $this->srcIPv6Cidr;
        }
        if (null !== $this->srcPortRange) {
            $res['SrcPortRange'] = $this->srcPortRange;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstCidr'])) {
            $model->dstCidr = $map['DstCidr'];
        }
        if (isset($map['DstIPv6Cidr'])) {
            $model->dstIPv6Cidr = $map['DstIPv6Cidr'];
        }
        if (isset($map['DstPortRange'])) {
            $model->dstPortRange = $map['DstPortRange'];
        }
        if (isset($map['MatchDscp'])) {
            $model->matchDscp = $map['MatchDscp'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }
        if (isset($map['RemarkingDscp'])) {
            $model->remarkingDscp = $map['RemarkingDscp'];
        }
        if (isset($map['RuleDescription'])) {
            $model->ruleDescription = $map['RuleDescription'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SrcCidr'])) {
            $model->srcCidr = $map['SrcCidr'];
        }
        if (isset($map['SrcIPv6Cidr'])) {
            $model->srcIPv6Cidr = $map['SrcIPv6Cidr'];
        }
        if (isset($map['SrcPortRange'])) {
            $model->srcPortRange = $map['SrcPortRange'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
