<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class bruteForceSummary extends Model
{
    /**
     * @var int
     */
    public $allStrategyCount;
    /**
     * @var string
     */
    public $antiBruteForceRuleCount;
    /**
     * @var string
     */
    public $customEffectiveCount;
    /**
     * @var string
     */
    public $customRecordCount;
    /**
     * @var int
     */
    public $effectiveCount;
    /**
     * @var string
     */
    public $systemEffectiveCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
