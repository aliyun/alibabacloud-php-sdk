<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content\fingerPrintRuleList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content\l4RuleList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content\portRuleList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content\sourceBlockList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content\sourceLimit;

class content extends Model
{
    /**
     * @var string[]
     */
    public $blackIpList;

    /**
     * @var int
     */
    public $blackIpListExpireAt;

    /**
     * @var bool
     */
    public $enableDropIcmp;

    /**
     * @var bool
     */
    public $enableIntelligence;

    /**
     * @var bool
     */
    public $enableL4Defense;

    /**
     * @var fingerPrintRuleList[]
     */
    public $fingerPrintRuleList;

    /**
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
     * @var string[]
     */
    public $whiteIpList;

    /**
     * @var bool
     */
    public $whitenGfbrNets;
    protected $_name = [
        'blackIpList' => 'BlackIpList',
        'blackIpListExpireAt' => 'BlackIpListExpireAt',
        'enableDropIcmp' => 'EnableDropIcmp',
        'enableIntelligence' => 'EnableIntelligence',
        'enableL4Defense' => 'EnableL4Defense',
        'fingerPrintRuleList' => 'FingerPrintRuleList',
        'intelligenceLevel' => 'IntelligenceLevel',
        'l4RuleList' => 'L4RuleList',
        'portRuleList' => 'PortRuleList',
        'reflectBlockUdpPortList' => 'ReflectBlockUdpPortList',
        'regionBlockCountryList' => 'RegionBlockCountryList',
        'regionBlockProvinceList' => 'RegionBlockProvinceList',
        'sourceBlockList' => 'SourceBlockList',
        'sourceLimit' => 'SourceLimit',
        'whiteIpList' => 'WhiteIpList',
        'whitenGfbrNets' => 'WhitenGfbrNets',
    ];

    public function validate()
    {
        if (\is_array($this->blackIpList)) {
            Model::validateArray($this->blackIpList);
        }
        if (\is_array($this->fingerPrintRuleList)) {
            Model::validateArray($this->fingerPrintRuleList);
        }
        if (\is_array($this->l4RuleList)) {
            Model::validateArray($this->l4RuleList);
        }
        if (\is_array($this->portRuleList)) {
            Model::validateArray($this->portRuleList);
        }
        if (\is_array($this->reflectBlockUdpPortList)) {
            Model::validateArray($this->reflectBlockUdpPortList);
        }
        if (\is_array($this->regionBlockCountryList)) {
            Model::validateArray($this->regionBlockCountryList);
        }
        if (\is_array($this->regionBlockProvinceList)) {
            Model::validateArray($this->regionBlockProvinceList);
        }
        if (\is_array($this->sourceBlockList)) {
            Model::validateArray($this->sourceBlockList);
        }
        if (null !== $this->sourceLimit) {
            $this->sourceLimit->validate();
        }
        if (\is_array($this->whiteIpList)) {
            Model::validateArray($this->whiteIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackIpList) {
            if (\is_array($this->blackIpList)) {
                $res['BlackIpList'] = [];
                $n1 = 0;
                foreach ($this->blackIpList as $item1) {
                    $res['BlackIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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
            if (\is_array($this->fingerPrintRuleList)) {
                $res['FingerPrintRuleList'] = [];
                $n1 = 0;
                foreach ($this->fingerPrintRuleList as $item1) {
                    $res['FingerPrintRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->intelligenceLevel) {
            $res['IntelligenceLevel'] = $this->intelligenceLevel;
        }

        if (null !== $this->l4RuleList) {
            if (\is_array($this->l4RuleList)) {
                $res['L4RuleList'] = [];
                $n1 = 0;
                foreach ($this->l4RuleList as $item1) {
                    $res['L4RuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->portRuleList) {
            if (\is_array($this->portRuleList)) {
                $res['PortRuleList'] = [];
                $n1 = 0;
                foreach ($this->portRuleList as $item1) {
                    $res['PortRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reflectBlockUdpPortList) {
            if (\is_array($this->reflectBlockUdpPortList)) {
                $res['ReflectBlockUdpPortList'] = [];
                $n1 = 0;
                foreach ($this->reflectBlockUdpPortList as $item1) {
                    $res['ReflectBlockUdpPortList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionBlockCountryList) {
            if (\is_array($this->regionBlockCountryList)) {
                $res['RegionBlockCountryList'] = [];
                $n1 = 0;
                foreach ($this->regionBlockCountryList as $item1) {
                    $res['RegionBlockCountryList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionBlockProvinceList) {
            if (\is_array($this->regionBlockProvinceList)) {
                $res['RegionBlockProvinceList'] = [];
                $n1 = 0;
                foreach ($this->regionBlockProvinceList as $item1) {
                    $res['RegionBlockProvinceList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceBlockList) {
            if (\is_array($this->sourceBlockList)) {
                $res['SourceBlockList'] = [];
                $n1 = 0;
                foreach ($this->sourceBlockList as $item1) {
                    $res['SourceBlockList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceLimit) {
            $res['SourceLimit'] = null !== $this->sourceLimit ? $this->sourceLimit->toArray($noStream) : $this->sourceLimit;
        }

        if (null !== $this->whiteIpList) {
            if (\is_array($this->whiteIpList)) {
                $res['WhiteIpList'] = [];
                $n1 = 0;
                foreach ($this->whiteIpList as $item1) {
                    $res['WhiteIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->whitenGfbrNets) {
            $res['WhitenGfbrNets'] = $this->whitenGfbrNets;
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
        if (isset($map['BlackIpList'])) {
            if (!empty($map['BlackIpList'])) {
                $model->blackIpList = [];
                $n1 = 0;
                foreach ($map['BlackIpList'] as $item1) {
                    $model->blackIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

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
                $n1 = 0;
                foreach ($map['FingerPrintRuleList'] as $item1) {
                    $model->fingerPrintRuleList[$n1] = fingerPrintRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IntelligenceLevel'])) {
            $model->intelligenceLevel = $map['IntelligenceLevel'];
        }

        if (isset($map['L4RuleList'])) {
            if (!empty($map['L4RuleList'])) {
                $model->l4RuleList = [];
                $n1 = 0;
                foreach ($map['L4RuleList'] as $item1) {
                    $model->l4RuleList[$n1] = l4RuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PortRuleList'])) {
            if (!empty($map['PortRuleList'])) {
                $model->portRuleList = [];
                $n1 = 0;
                foreach ($map['PortRuleList'] as $item1) {
                    $model->portRuleList[$n1] = portRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReflectBlockUdpPortList'])) {
            if (!empty($map['ReflectBlockUdpPortList'])) {
                $model->reflectBlockUdpPortList = [];
                $n1 = 0;
                foreach ($map['ReflectBlockUdpPortList'] as $item1) {
                    $model->reflectBlockUdpPortList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionBlockCountryList'])) {
            if (!empty($map['RegionBlockCountryList'])) {
                $model->regionBlockCountryList = [];
                $n1 = 0;
                foreach ($map['RegionBlockCountryList'] as $item1) {
                    $model->regionBlockCountryList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionBlockProvinceList'])) {
            if (!empty($map['RegionBlockProvinceList'])) {
                $model->regionBlockProvinceList = [];
                $n1 = 0;
                foreach ($map['RegionBlockProvinceList'] as $item1) {
                    $model->regionBlockProvinceList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceBlockList'])) {
            if (!empty($map['SourceBlockList'])) {
                $model->sourceBlockList = [];
                $n1 = 0;
                foreach ($map['SourceBlockList'] as $item1) {
                    $model->sourceBlockList[$n1] = sourceBlockList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceLimit'])) {
            $model->sourceLimit = sourceLimit::fromMap($map['SourceLimit']);
        }

        if (isset($map['WhiteIpList'])) {
            if (!empty($map['WhiteIpList'])) {
                $model->whiteIpList = [];
                $n1 = 0;
                foreach ($map['WhiteIpList'] as $item1) {
                    $model->whiteIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WhitenGfbrNets'])) {
            $model->whitenGfbrNets = $map['WhitenGfbrNets'];
        }

        return $model;
    }
}
