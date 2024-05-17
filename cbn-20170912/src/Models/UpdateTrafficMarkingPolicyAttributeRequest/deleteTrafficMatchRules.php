<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTrafficMarkingPolicyAttributeRequest;

use AlibabaCloud\Tea\Model;

class deleteTrafficMatchRules extends Model
{
    /**
     * @description The destination CIDR block that is used to match packets.
     *
     * @example 192.168.200.3/32
     *
     * @var string
     */
    public $dstCidr;

    /**
     * @description The destination port range that is used to match packets.
     *
     * @var int[]
     */
    public $dstPortRange;

    /**
     * @description The DSCP value that is used to match packets.
     *
     * @example 3
     *
     * @var int
     */
    public $matchDscp;

    /**
     * @description The protocol that is used to match packets.
     *
     * You can call the [ListTrafficMarkingPolicies](https://help.aliyun.com/document_detail/468322.html) operation to query the details about a traffic classification rule.
     * @example TCP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The source CIDR block that is used to match packets.
     *
     * @example 10.72.0.0/16
     *
     * @var string
     */
    public $srcCidr;

    /**
     * @description The source port range that is used to match packets.
     *
     * @var int[]
     */
    public $srcPortRange;

    /**
     * @description The description of the traffic classification rule.
     *
     * This parameter is optional. If you enter a description, it must be 1 to 256 characters in length, and cannot start with http:// or https://.
     * @example Hangzhou-to-Qingdao CAT
     *
     * @var string
     */
    public $trafficMatchRuleDescription;

    /**
     * @description The name of the traffic classification rule.
     *
     * The name can be empty or 1 to 128 characters in length, and cannot start with http:// or https://.
     * @example test
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
     * @return deleteTrafficMatchRules
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
