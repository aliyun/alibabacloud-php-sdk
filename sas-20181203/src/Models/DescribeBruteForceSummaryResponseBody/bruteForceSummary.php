<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class bruteForceSummary extends Model
{
    /**
     * @description The number of anti-brute force IP blocking policies.
     *
     * @example 13
     *
     * @var int
     */
    public $allStrategyCount;

    /**
     * @description The number of defense policies.
     *
     * @example 2
     *
     * @var string
     */
    public $antiBruteForceRuleCount;

    /**
     * @description The number of custom blocking rules that are in effect.
     *
     * @example 3
     *
     * @var string
     */
    public $customEffectiveCount;

    /**
     * @description The number of custom blocking rules.
     *
     * @example 19730
     *
     * @var string
     */
    public $customRecordCount;

    /**
     * @description The number of anti-brute force IP blocking policies enabled.
     *
     * @example 2
     *
     * @var int
     */
    public $effectiveCount;

    /**
     * @description The number of system blocking rules that are in effect.
     *
     * @example 1
     *
     * @var string
     */
    public $systemEffectiveCount;

    /**
     * @description The number of system blocking rules.
     *
     * @example 2
     *
     * @var string
     */
    public $systemRecordCount;
    protected $_name = [
        'allStrategyCount'        => 'AllStrategyCount',
        'antiBruteForceRuleCount' => 'AntiBruteForceRuleCount',
        'customEffectiveCount'    => 'CustomEffectiveCount',
        'customRecordCount'       => 'CustomRecordCount',
        'effectiveCount'          => 'EffectiveCount',
        'systemEffectiveCount'    => 'SystemEffectiveCount',
        'systemRecordCount'       => 'SystemRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allStrategyCount) {
            $res['AllStrategyCount'] = $this->allStrategyCount;
        }
        if (null !== $this->antiBruteForceRuleCount) {
            $res['AntiBruteForceRuleCount'] = $this->antiBruteForceRuleCount;
        }
        if (null !== $this->customEffectiveCount) {
            $res['CustomEffectiveCount'] = $this->customEffectiveCount;
        }
        if (null !== $this->customRecordCount) {
            $res['CustomRecordCount'] = $this->customRecordCount;
        }
        if (null !== $this->effectiveCount) {
            $res['EffectiveCount'] = $this->effectiveCount;
        }
        if (null !== $this->systemEffectiveCount) {
            $res['SystemEffectiveCount'] = $this->systemEffectiveCount;
        }
        if (null !== $this->systemRecordCount) {
            $res['SystemRecordCount'] = $this->systemRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bruteForceSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllStrategyCount'])) {
            $model->allStrategyCount = $map['AllStrategyCount'];
        }
        if (isset($map['AntiBruteForceRuleCount'])) {
            $model->antiBruteForceRuleCount = $map['AntiBruteForceRuleCount'];
        }
        if (isset($map['CustomEffectiveCount'])) {
            $model->customEffectiveCount = $map['CustomEffectiveCount'];
        }
        if (isset($map['CustomRecordCount'])) {
            $model->customRecordCount = $map['CustomRecordCount'];
        }
        if (isset($map['EffectiveCount'])) {
            $model->effectiveCount = $map['EffectiveCount'];
        }
        if (isset($map['SystemEffectiveCount'])) {
            $model->systemEffectiveCount = $map['SystemEffectiveCount'];
        }
        if (isset($map['SystemRecordCount'])) {
            $model->systemRecordCount = $map['SystemRecordCount'];
        }

        return $model;
    }
}
