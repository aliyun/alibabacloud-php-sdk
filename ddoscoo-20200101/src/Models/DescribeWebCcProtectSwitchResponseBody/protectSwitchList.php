<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCcProtectSwitchResponseBody;

use AlibabaCloud\Dara\Model;

class protectSwitchList extends Model
{
    /**
     * @var string
     */
    public $aiMode;

    /**
     * @var int
     */
    public $aiRuleEnable;

    /**
     * @var string
     */
    public $aiTemplate;

    /**
     * @var int
     */
    public $blackWhiteListEnable;

    /**
     * @var int
     */
    public $ccCustomRuleEnable;

    /**
     * @var int
     */
    public $ccEnable;

    /**
     * @var string
     */
    public $ccGlobalSwitch;

    /**
     * @var string
     */
    public $ccTemplate;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $preciseRuleEnable;

    /**
     * @var int
     */
    public $regionBlockEnable;
    protected $_name = [
        'aiMode' => 'AiMode',
        'aiRuleEnable' => 'AiRuleEnable',
        'aiTemplate' => 'AiTemplate',
        'blackWhiteListEnable' => 'BlackWhiteListEnable',
        'ccCustomRuleEnable' => 'CcCustomRuleEnable',
        'ccEnable' => 'CcEnable',
        'ccGlobalSwitch' => 'CcGlobalSwitch',
        'ccTemplate' => 'CcTemplate',
        'domain' => 'Domain',
        'preciseRuleEnable' => 'PreciseRuleEnable',
        'regionBlockEnable' => 'RegionBlockEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
