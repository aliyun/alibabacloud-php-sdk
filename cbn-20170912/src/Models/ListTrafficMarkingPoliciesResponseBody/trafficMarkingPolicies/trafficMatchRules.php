<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTrafficMarkingPoliciesResponseBody\trafficMarkingPolicies;

use AlibabaCloud\Tea\Model;

class trafficMatchRules extends Model
{
    /**
     * @example 192.168.120.0/24
     *
     * @var string
     */
    public $dstCidr;

    /**
     * @var int[]
     */
    public $dstPortRange;

    /**
     * @example 6
     *
     * @var int
     */
    public $matchDscp;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $srcCidr;

    /**
     * @var int[]
     */
    public $srcPortRange;

    /**
     * @example desctest
     *
     * @var string
     */
    public $trafficMatchRuleDescription;

    /**
     * @example tm-rule-fa9kgq1e90rmhc****
     *
     * @var string
     */
    public $trafficMatchRuleId;

    /**
     * @example nametest
     *
     * @var string
     */
    public $trafficMatchRuleName;

    /**
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
