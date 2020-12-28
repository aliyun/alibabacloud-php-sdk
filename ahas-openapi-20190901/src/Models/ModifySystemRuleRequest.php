<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifySystemRuleRequest extends Model
{
    /**
     * @var float
     */
    public $threshold;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ahasRegionId;
    protected $_name = [
        'threshold'    => 'Threshold',
        'ruleId'       => 'RuleId',
        'ahasRegionId' => 'AhasRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ahasRegionId) {
            $res['AhasRegionId'] = $this->ahasRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySystemRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['AhasRegionId'])) {
            $model->ahasRegionId = $map['AhasRegionId'];
        }

        return $model;
    }
}
