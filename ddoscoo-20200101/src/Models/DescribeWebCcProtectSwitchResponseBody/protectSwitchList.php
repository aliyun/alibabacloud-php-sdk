<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCcProtectSwitchResponseBody;

use AlibabaCloud\Tea\Model;

class protectSwitchList extends Model
{
    /**
     * @description The mode of the Intelligent Protection policy. Valid values:
     *
     *   **watch**: the Warning mode
     *   **defense**: the Defense mode
     *
     * @example defense
     *
     * @var string
     */
    public $aiMode;

    /**
     * @description The status of the Intelligent Protection policy. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $aiRuleEnable;

    /**
     * @description The level of the Intelligent Protection policy. Valid values:
     *
     *   **level30**: the Low level
     *   **level60**: the Normal level
     *   **level90**: the Strict level
     *
     * @example level60
     *
     * @var string
     */
    public $aiTemplate;

    /**
     * @description The status of the Black Lists and White Lists (Domain Names) policy. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $blackWhiteListEnable;

    /**
     * @description The status of the Custom Rule switch for the Frequency Control policy. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 0
     *
     * @var int
     */
    public $ccCustomRuleEnable;

    /**
     * @description The status of the Frequency Control policy. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $ccEnable;

    /**
     * @var string
     */
    public $ccGlobalSwitch;

    /**
     * @description The mode of the Frequency Control policy. Valid values:
     *
     *   **default**: Normal
     *   **gf_under_attack**: Emergency
     *   **gf_sos_verify**: Strict
     *   **gf_sos_enhance**: Super Strict
     *
     * @example default
     *
     * @var string
     */
    public $ccTemplate;

    /**
     * @description The domain name of the website.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The status of the Accurate Access Control policy. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 0
     *
     * @var int
     */
    public $preciseRuleEnable;

    /**
     * @description The status of the Location Blacklist (Domain Names) policy. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 0
     *
     * @var int
     */
    public $regionBlockEnable;
    protected $_name = [
        'aiMode'               => 'AiMode',
        'aiRuleEnable'         => 'AiRuleEnable',
        'aiTemplate'           => 'AiTemplate',
        'blackWhiteListEnable' => 'BlackWhiteListEnable',
        'ccCustomRuleEnable'   => 'CcCustomRuleEnable',
        'ccEnable'             => 'CcEnable',
        'ccGlobalSwitch'       => 'CcGlobalSwitch',
        'ccTemplate'           => 'CcTemplate',
        'domain'               => 'Domain',
        'preciseRuleEnable'    => 'PreciseRuleEnable',
        'regionBlockEnable'    => 'RegionBlockEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiMode) {
            $res['AiMode'] = $this->aiMode;
        }
        if (null !== $this->aiRuleEnable) {
            $res['AiRuleEnable'] = $this->aiRuleEnable;
        }
        if (null !== $this->aiTemplate) {
            $res['AiTemplate'] = $this->aiTemplate;
        }
        if (null !== $this->blackWhiteListEnable) {
            $res['BlackWhiteListEnable'] = $this->blackWhiteListEnable;
        }
        if (null !== $this->ccCustomRuleEnable) {
            $res['CcCustomRuleEnable'] = $this->ccCustomRuleEnable;
        }
        if (null !== $this->ccEnable) {
            $res['CcEnable'] = $this->ccEnable;
        }
        if (null !== $this->ccGlobalSwitch) {
            $res['CcGlobalSwitch'] = $this->ccGlobalSwitch;
        }
        if (null !== $this->ccTemplate) {
            $res['CcTemplate'] = $this->ccTemplate;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->preciseRuleEnable) {
            $res['PreciseRuleEnable'] = $this->preciseRuleEnable;
        }
        if (null !== $this->regionBlockEnable) {
            $res['RegionBlockEnable'] = $this->regionBlockEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protectSwitchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiMode'])) {
            $model->aiMode = $map['AiMode'];
        }
        if (isset($map['AiRuleEnable'])) {
            $model->aiRuleEnable = $map['AiRuleEnable'];
        }
        if (isset($map['AiTemplate'])) {
            $model->aiTemplate = $map['AiTemplate'];
        }
        if (isset($map['BlackWhiteListEnable'])) {
            $model->blackWhiteListEnable = $map['BlackWhiteListEnable'];
        }
        if (isset($map['CcCustomRuleEnable'])) {
            $model->ccCustomRuleEnable = $map['CcCustomRuleEnable'];
        }
        if (isset($map['CcEnable'])) {
            $model->ccEnable = $map['CcEnable'];
        }
        if (isset($map['CcGlobalSwitch'])) {
            $model->ccGlobalSwitch = $map['CcGlobalSwitch'];
        }
        if (isset($map['CcTemplate'])) {
            $model->ccTemplate = $map['CcTemplate'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['PreciseRuleEnable'])) {
            $model->preciseRuleEnable = $map['PreciseRuleEnable'];
        }
        if (isset($map['RegionBlockEnable'])) {
            $model->regionBlockEnable = $map['RegionBlockEnable'];
        }

        return $model;
    }
}
