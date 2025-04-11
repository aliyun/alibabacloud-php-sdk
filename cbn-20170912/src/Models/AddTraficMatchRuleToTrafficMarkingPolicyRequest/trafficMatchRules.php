<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\AddTraficMatchRuleToTrafficMarkingPolicyRequest;

use AlibabaCloud\Dara\Model;

class trafficMatchRules extends Model
{
    /**
     * @var string
     */
    public $dstCidr;

    /**
     * @var int[]
     */
    public $dstPortRange;

    /**
     * @var int
     */
    public $matchDscp;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $srcCidr;

    /**
     * @var int[]
     */
    public $srcPortRange;

    /**
     * @var string
     */
    public $trafficMatchRuleDescription;

    /**
     * @var string
     */
    public $trafficMatchRuleName;
    protected $_name = [
        'dstCidr' => 'DstCidr',
        'dstPortRange' => 'DstPortRange',
        'matchDscp' => 'MatchDscp',
        'protocol' => 'Protocol',
        'srcCidr' => 'SrcCidr',
        'srcPortRange' => 'SrcPortRange',
        'trafficMatchRuleDescription' => 'TrafficMatchRuleDescription',
        'trafficMatchRuleName' => 'TrafficMatchRuleName',
    ];

    public function validate()
    {
        if (\is_array($this->dstPortRange)) {
            Model::validateArray($this->dstPortRange);
        }
        if (\is_array($this->srcPortRange)) {
            Model::validateArray($this->srcPortRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstCidr) {
            $res['DstCidr'] = $this->dstCidr;
        }

        if (null !== $this->dstPortRange) {
            if (\is_array($this->dstPortRange)) {
                $res['DstPortRange'] = [];
                $n1 = 0;
                foreach ($this->dstPortRange as $item1) {
                    $res['DstPortRange'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->srcPortRange)) {
                $res['SrcPortRange'] = [];
                $n1 = 0;
                foreach ($this->srcPortRange as $item1) {
                    $res['SrcPortRange'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->trafficMatchRuleDescription) {
            $res['TrafficMatchRuleDescription'] = $this->trafficMatchRuleDescription;
        }

        if (null !== $this->trafficMatchRuleName) {
            $res['TrafficMatchRuleName'] = $this->trafficMatchRuleName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstCidr'])) {
            $model->dstCidr = $map['DstCidr'];
        }

        if (isset($map['DstPortRange'])) {
            if (!empty($map['DstPortRange'])) {
                $model->dstPortRange = [];
                $n1 = 0;
                foreach ($map['DstPortRange'] as $item1) {
                    $model->dstPortRange[$n1++] = $item1;
                }
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
                $model->srcPortRange = [];
                $n1 = 0;
                foreach ($map['SrcPortRange'] as $item1) {
                    $model->srcPortRange[$n1++] = $item1;
                }
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
