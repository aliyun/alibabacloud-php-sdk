<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content\fingerPrintRuleList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content\l4RuleList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content\portRuleList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content\sourceBlockList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content\sourceLimit;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example 1716878000
     *
     * @var int
     */
    public $blackIpListExpireAt;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableDropIcmp;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableIntelligence;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableL4Defense;

    /**
     * @var fingerPrintRuleList[]
     */
    public $fingerPrintRuleList;

    /**
     * @example default
     *
     * @var string
     */
    public $intelligenceLevel;

    /**
     * @var l4RuleList[]
     */
    public $l4RuleList;

    /**
     * @var portRuleList[]
     */
    public $portRuleList;

    /**
     * @var int[]
     */
    public $reflectBlockUdpPortList;

    /**
     * @var int[]
     */
    public $regionBlockCountryList;

    /**
     * @var int[]
     */
    public $regionBlockProvinceList;

    /**
     * @var sourceBlockList[]
     */
    public $sourceBlockList;

    /**
     * @var sourceLimit
     */
    public $sourceLimit;

    /**
     * @example false
     *
     * @var bool
     */
    public $whitenGfbrNets;
    protected $_name = [
        'blackIpListExpireAt'     => 'BlackIpListExpireAt',
        'enableDropIcmp'          => 'EnableDropIcmp',
        'enableIntelligence'      => 'EnableIntelligence',
        'enableL4Defense'         => 'EnableL4Defense',
        'fingerPrintRuleList'     => 'FingerPrintRuleList',
        'intelligenceLevel'       => 'IntelligenceLevel',
        'l4RuleList'              => 'L4RuleList',
        'portRuleList'            => 'PortRuleList',
        'reflectBlockUdpPortList' => 'ReflectBlockUdpPortList',
        'regionBlockCountryList'  => 'RegionBlockCountryList',
        'regionBlockProvinceList' => 'RegionBlockProvinceList',
        'sourceBlockList'         => 'SourceBlockList',
        'sourceLimit'             => 'SourceLimit',
        'whitenGfbrNets'          => 'WhitenGfbrNets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackIpListExpireAt) {
            $res['BlackIpListExpireAt'] = $this->blackIpListExpireAt;
        }
        if (null !== $this->enableDropIcmp) {
            $res['EnableDropIcmp'] = $this->enableDropIcmp;
        }
        if (null !== $this->enableIntelligence) {
            $res['EnableIntelligence'] = $this->enableIntelligence;
        }
        if (null !== $this->enableL4Defense) {
            $res['EnableL4Defense'] = $this->enableL4Defense;
        }
        if (null !== $this->fingerPrintRuleList) {
            $res['FingerPrintRuleList'] = [];
            if (null !== $this->fingerPrintRuleList && \is_array($this->fingerPrintRuleList)) {
                $n = 0;
                foreach ($this->fingerPrintRuleList as $item) {
                    $res['FingerPrintRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->intelligenceLevel) {
            $res['IntelligenceLevel'] = $this->intelligenceLevel;
        }
        if (null !== $this->l4RuleList) {
            $res['L4RuleList'] = [];
            if (null !== $this->l4RuleList && \is_array($this->l4RuleList)) {
                $n = 0;
                foreach ($this->l4RuleList as $item) {
                    $res['L4RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->portRuleList) {
            $res['PortRuleList'] = [];
            if (null !== $this->portRuleList && \is_array($this->portRuleList)) {
                $n = 0;
                foreach ($this->portRuleList as $item) {
                    $res['PortRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reflectBlockUdpPortList) {
            $res['ReflectBlockUdpPortList'] = $this->reflectBlockUdpPortList;
        }
        if (null !== $this->regionBlockCountryList) {
            $res['RegionBlockCountryList'] = $this->regionBlockCountryList;
        }
        if (null !== $this->regionBlockProvinceList) {
            $res['RegionBlockProvinceList'] = $this->regionBlockProvinceList;
        }
        if (null !== $this->sourceBlockList) {
            $res['SourceBlockList'] = [];
            if (null !== $this->sourceBlockList && \is_array($this->sourceBlockList)) {
                $n = 0;
                foreach ($this->sourceBlockList as $item) {
                    $res['SourceBlockList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceLimit) {
            $res['SourceLimit'] = null !== $this->sourceLimit ? $this->sourceLimit->toMap() : null;
        }
        if (null !== $this->whitenGfbrNets) {
            $res['WhitenGfbrNets'] = $this->whitenGfbrNets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackIpListExpireAt'])) {
            $model->blackIpListExpireAt = $map['BlackIpListExpireAt'];
        }
        if (isset($map['EnableDropIcmp'])) {
            $model->enableDropIcmp = $map['EnableDropIcmp'];
        }
        if (isset($map['EnableIntelligence'])) {
            $model->enableIntelligence = $map['EnableIntelligence'];
        }
        if (isset($map['EnableL4Defense'])) {
            $model->enableL4Defense = $map['EnableL4Defense'];
        }
        if (isset($map['FingerPrintRuleList'])) {
            if (!empty($map['FingerPrintRuleList'])) {
                $model->fingerPrintRuleList = [];
                $n                          = 0;
                foreach ($map['FingerPrintRuleList'] as $item) {
                    $model->fingerPrintRuleList[$n++] = null !== $item ? fingerPrintRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IntelligenceLevel'])) {
            $model->intelligenceLevel = $map['IntelligenceLevel'];
        }
        if (isset($map['L4RuleList'])) {
            if (!empty($map['L4RuleList'])) {
                $model->l4RuleList = [];
                $n                 = 0;
                foreach ($map['L4RuleList'] as $item) {
                    $model->l4RuleList[$n++] = null !== $item ? l4RuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PortRuleList'])) {
            if (!empty($map['PortRuleList'])) {
                $model->portRuleList = [];
                $n                   = 0;
                foreach ($map['PortRuleList'] as $item) {
                    $model->portRuleList[$n++] = null !== $item ? portRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReflectBlockUdpPortList'])) {
            if (!empty($map['ReflectBlockUdpPortList'])) {
                $model->reflectBlockUdpPortList = $map['ReflectBlockUdpPortList'];
            }
        }
        if (isset($map['RegionBlockCountryList'])) {
            if (!empty($map['RegionBlockCountryList'])) {
                $model->regionBlockCountryList = $map['RegionBlockCountryList'];
            }
        }
        if (isset($map['RegionBlockProvinceList'])) {
            if (!empty($map['RegionBlockProvinceList'])) {
                $model->regionBlockProvinceList = $map['RegionBlockProvinceList'];
            }
        }
        if (isset($map['SourceBlockList'])) {
            if (!empty($map['SourceBlockList'])) {
                $model->sourceBlockList = [];
                $n                      = 0;
                foreach ($map['SourceBlockList'] as $item) {
                    $model->sourceBlockList[$n++] = null !== $item ? sourceBlockList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceLimit'])) {
            $model->sourceLimit = sourceLimit::fromMap($map['SourceLimit']);
        }
        if (isset($map['WhitenGfbrNets'])) {
            $model->whitenGfbrNets = $map['WhitenGfbrNets'];
        }

        return $model;
    }
}
