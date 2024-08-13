<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content\fingerPrintRuleList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content\l4RuleList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content\portRuleList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content\sourceBlockList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content\sourceLimit;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The IP addresses in the blacklist.
     *
     * @var string[]
     */
    public $blackIpList;

    /**
     * @description The validity period of the IP address blacklist. The value is a UNIX timestamp.
     *
     * @example 1716878000
     *
     * @var int
     */
    public $blackIpListExpireAt;

    /**
     * @description Specifies whether to enable ICMP blocking.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDropIcmp;

    /**
     * @description Specifies whether to enable intelligent protection.
     *
     * @example true
     *
     * @var bool
     */
    public $enableIntelligence;

    /**
     * @description Specifies whether to enable port-specific mitigation.
     *
     * @var bool
     */
    public $enableL4Defense;

    /**
     * @description The byte-match filter rules.
     *
     * @var fingerPrintRuleList[]
     */
    public $fingerPrintRuleList;

    /**
     * @description The level of intelligent protection. Valid values:
     *
     *   **default**: normal.
     *   **hard**: strict.
     *   **weak**: loose.
     *
     * @example default
     *
     * @var string
     */
    public $intelligenceLevel;

    /**
     * @description The port-specific mitigation rules.
     *
     * @var l4RuleList[]
     */
    public $l4RuleList;

    /**
     * @description The port blocking rules.
     *
     * @var portRuleList[]
     */
    public $portRuleList;

    /**
     * @description The ports whose traffic is filtered out by the filtering policies for UDP reflection attacks.
     *
     * @var int[]
     */
    public $reflectBlockUdpPortList;

    /**
     * @description The countries in the location blacklist.
     *
     * @var int[]
     */
    public $regionBlockCountryList;

    /**
     * @description The provinces in the location blacklist.
     *
     * @var int[]
     */
    public $regionBlockProvinceList;

    /**
     * @description The source IP addresses that are added to the blacklist.
     *
     * @var sourceBlockList[]
     */
    public $sourceBlockList;

    /**
     * @description The settings for source rate limiting.
     *
     * @var sourceLimit
     */
    public $sourceLimit;

    /**
     * @description The IP addresses in the whitelist.
     *
     * @var string[]
     */
    public $whiteIpList;

    /**
     * @description Specifies whether to add back-to-origin CIDR blocks of Anti-DDoS Proxy to the whitelist.
     *
     * @example false
     *
     * @var bool
     */
    public $whitenGfbrNets;
    protected $_name = [
        'blackIpList'             => 'BlackIpList',
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
        'whiteIpList'             => 'WhiteIpList',
        'whitenGfbrNets'          => 'WhitenGfbrNets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackIpList) {
            $res['BlackIpList'] = $this->blackIpList;
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
        if (null !== $this->whiteIpList) {
            $res['WhiteIpList'] = $this->whiteIpList;
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
        if (isset($map['BlackIpList'])) {
            if (!empty($map['BlackIpList'])) {
                $model->blackIpList = $map['BlackIpList'];
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
        if (isset($map['WhiteIpList'])) {
            if (!empty($map['WhiteIpList'])) {
                $model->whiteIpList = $map['WhiteIpList'];
            }
        }
        if (isset($map['WhitenGfbrNets'])) {
            $model->whitenGfbrNets = $map['WhitenGfbrNets'];
        }

        return $model;
    }
}
