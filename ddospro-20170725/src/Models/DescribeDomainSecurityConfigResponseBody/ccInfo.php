<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDomainSecurityConfigResponseBody;

use AlibabaCloud\Tea\Model;

class ccInfo extends Model
{
    /**
     * @var int
     */
    public $ccCustomRuleCount;

    /**
     * @var bool
     */
    public $ccSwitch;

    /**
     * @var string
     */
    public $ccTemplate;

    /**
     * @var bool
     */
    public $ccCustomRuleEnable;
    protected $_name = [
        'ccCustomRuleCount'  => 'CcCustomRuleCount',
        'ccSwitch'           => 'CcSwitch',
        'ccTemplate'         => 'CcTemplate',
        'ccCustomRuleEnable' => 'CcCustomRuleEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ccCustomRuleCount) {
            $res['CcCustomRuleCount'] = $this->ccCustomRuleCount;
        }
        if (null !== $this->ccSwitch) {
            $res['CcSwitch'] = $this->ccSwitch;
        }
        if (null !== $this->ccTemplate) {
            $res['CcTemplate'] = $this->ccTemplate;
        }
        if (null !== $this->ccCustomRuleEnable) {
            $res['CcCustomRuleEnable'] = $this->ccCustomRuleEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ccInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CcCustomRuleCount'])) {
            $model->ccCustomRuleCount = $map['CcCustomRuleCount'];
        }
        if (isset($map['CcSwitch'])) {
            $model->ccSwitch = $map['CcSwitch'];
        }
        if (isset($map['CcTemplate'])) {
            $model->ccTemplate = $map['CcTemplate'];
        }
        if (isset($map['CcCustomRuleEnable'])) {
            $model->ccCustomRuleEnable = $map['CcCustomRuleEnable'];
        }

        return $model;
    }
}
