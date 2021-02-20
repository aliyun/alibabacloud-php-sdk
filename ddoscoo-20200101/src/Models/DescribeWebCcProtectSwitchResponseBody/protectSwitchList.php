<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCcProtectSwitchResponseBody;

use AlibabaCloud\Tea\Model;

class protectSwitchList extends Model
{
    /**
     * @var int
     */
    public $blackWhiteListEnable;

    /**
     * @var string
     */
    public $aiTemplate;

    /**
     * @var int
     */
    public $preciseRuleEnable;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $aiMode;

    /**
     * @var int
     */
    public $aiRuleEnable;

    /**
     * @var int
     */
    public $regionBlockEnable;

    /**
     * @var string
     */
    public $ccTemplate;

    /**
     * @var int
     */
    public $ccCustomRuleEnable;

    /**
     * @var int
     */
    public $ccEnable;
    protected $_name = [
        'blackWhiteListEnable' => 'BlackWhiteListEnable',
        'aiTemplate'           => 'AiTemplate',
        'preciseRuleEnable'    => 'PreciseRuleEnable',
        'domain'               => 'Domain',
        'aiMode'               => 'AiMode',
        'aiRuleEnable'         => 'AiRuleEnable',
        'regionBlockEnable'    => 'RegionBlockEnable',
        'ccTemplate'           => 'CcTemplate',
        'ccCustomRuleEnable'   => 'CcCustomRuleEnable',
        'ccEnable'             => 'CcEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackWhiteListEnable) {
            $res['BlackWhiteListEnable'] = $this->blackWhiteListEnable;
        }
        if (null !== $this->aiTemplate) {
            $res['AiTemplate'] = $this->aiTemplate;
        }
        if (null !== $this->preciseRuleEnable) {
            $res['PreciseRuleEnable'] = $this->preciseRuleEnable;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->aiMode) {
            $res['AiMode'] = $this->aiMode;
        }
        if (null !== $this->aiRuleEnable) {
            $res['AiRuleEnable'] = $this->aiRuleEnable;
        }
        if (null !== $this->regionBlockEnable) {
            $res['RegionBlockEnable'] = $this->regionBlockEnable;
        }
        if (null !== $this->ccTemplate) {
            $res['CcTemplate'] = $this->ccTemplate;
        }
        if (null !== $this->ccCustomRuleEnable) {
            $res['CcCustomRuleEnable'] = $this->ccCustomRuleEnable;
        }
        if (null !== $this->ccEnable) {
            $res['CcEnable'] = $this->ccEnable;
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
        if (isset($map['BlackWhiteListEnable'])) {
            $model->blackWhiteListEnable = $map['BlackWhiteListEnable'];
        }
        if (isset($map['AiTemplate'])) {
            $model->aiTemplate = $map['AiTemplate'];
        }
        if (isset($map['PreciseRuleEnable'])) {
            $model->preciseRuleEnable = $map['PreciseRuleEnable'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['AiMode'])) {
            $model->aiMode = $map['AiMode'];
        }
        if (isset($map['AiRuleEnable'])) {
            $model->aiRuleEnable = $map['AiRuleEnable'];
        }
        if (isset($map['RegionBlockEnable'])) {
            $model->regionBlockEnable = $map['RegionBlockEnable'];
        }
        if (isset($map['CcTemplate'])) {
            $model->ccTemplate = $map['CcTemplate'];
        }
        if (isset($map['CcCustomRuleEnable'])) {
            $model->ccCustomRuleEnable = $map['CcCustomRuleEnable'];
        }
        if (isset($map['CcEnable'])) {
            $model->ccEnable = $map['CcEnable'];
        }

        return $model;
    }
}
