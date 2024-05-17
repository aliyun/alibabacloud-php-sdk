<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTrafficMarkingPoliciesResponseBody\trafficMarkingPolicies;

use AlibabaCloud\Tea\Model;

class trafficMatchRules extends Model
{
    /**
     * @description The destination CIDR block that is used to match packets.
     *
     * @example 192.168.120.0/24
     *
     * @var string
     */
    public $dstCidr;

    /**
     * @description The destination port range used to match data packets.
     *
     * @var int[]
     */
    public $dstPortRange;

    /**
     * @description The DSCP value used to match data packets.
     *
     * >  If the value of the **MatchDscp** parameter is -1, data packets are considered a match regardless of the DSCP value.
     * @example 6
     *
     * @var int
     */
    public $matchDscp;

    /**
     * @description The protocol that is used to match packets.
     *
     * >  Traffic marking policies support multiple protocols. For more information, see the documentation of CEN.
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The source CIDR block that is used to match packets.
     *
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $srcCidr;

    /**
     * @description The source port range used to match data packets.
     *
     * @var int[]
     */
    public $srcPortRange;

    /**
     * @description The description of the traffic classification rule.
     *
     * @example desctest
     *
     * @var string
     */
    public $trafficMatchRuleDescription;

    /**
     * @description The ID of the traffic classification rule.
     *
     * @example tm-rule-fa9kgq1e90rmhc****
     *
     * @var string
     */
    public $trafficMatchRuleId;

    /**
     * @description The name of the traffic classification rule.
     *
     * @example nametest
     *
     * @var string
     */
    public $trafficMatchRuleName;

    /**
     * @description The status of the traffic classification rule. Valid values:
     *
     *   **Creating**: The rule is being created.
     *   **Active**: The rule is available.
     *   **Deleting**: The rule is being deleted.
     *
     * @example Creating
     *
     * @var string
     */
    public $trafficMatchRuleStatus;
    protected $_name = [
        'dstCidr'                     => 'DstCidr',
        'dstPortRange'                => 'DstPortRange',
        'matchDscp'                   => 'MatchDscp',
        'protocol'                    => 'Protocol',
        'srcCidr'                     => 'SrcCidr',
        'srcPortRange'                => 'SrcPortRange',
        'trafficMatchRuleDescription' => 'TrafficMatchRuleDescription',
        'trafficMatchRuleId'          => 'TrafficMatchRuleId',
        'trafficMatchRuleName'        => 'TrafficMatchRuleName',
        'trafficMatchRuleStatus'      => 'TrafficMatchRuleStatus',
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
        if (null !== $this->trafficMatchRuleId) {
            $res['TrafficMatchRuleId'] = $this->trafficMatchRuleId;
        }
        if (null !== $this->trafficMatchRuleName) {
            $res['TrafficMatchRuleName'] = $this->trafficMatchRuleName;
        }
        if (null !== $this->trafficMatchRuleStatus) {
            $res['TrafficMatchRuleStatus'] = $this->trafficMatchRuleStatus;
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
        if (isset($map['TrafficMatchRuleId'])) {
            $model->trafficMatchRuleId = $map['TrafficMatchRuleId'];
        }
        if (isset($map['TrafficMatchRuleName'])) {
            $model->trafficMatchRuleName = $map['TrafficMatchRuleName'];
        }
        if (isset($map['TrafficMatchRuleStatus'])) {
            $model->trafficMatchRuleStatus = $map['TrafficMatchRuleStatus'];
        }

        return $model;
    }
}
