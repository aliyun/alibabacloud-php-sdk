<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyIsolationRuleRequest extends Model
{
    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $relationStrategy;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var string
     */
    public $limitOrigin;

    /**
     * @var string
     */
    public $refResource;

    /**
     * @var string
     */
    public $ahasRegionId;
    protected $_name = [
        'ruleId'           => 'RuleId',
        'relationStrategy' => 'RelationStrategy',
        'threshold'        => 'Threshold',
        'limitOrigin'      => 'LimitOrigin',
        'refResource'      => 'RefResource',
        'ahasRegionId'     => 'AhasRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->relationStrategy) {
            $res['RelationStrategy'] = $this->relationStrategy;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->limitOrigin) {
            $res['LimitOrigin'] = $this->limitOrigin;
        }
        if (null !== $this->refResource) {
            $res['RefResource'] = $this->refResource;
        }
        if (null !== $this->ahasRegionId) {
            $res['AhasRegionId'] = $this->ahasRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyIsolationRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RelationStrategy'])) {
            $model->relationStrategy = $map['RelationStrategy'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['LimitOrigin'])) {
            $model->limitOrigin = $map['LimitOrigin'];
        }
        if (isset($map['RefResource'])) {
            $model->refResource = $map['RefResource'];
        }
        if (isset($map['AhasRegionId'])) {
            $model->ahasRegionId = $map['AhasRegionId'];
        }

        return $model;
    }
}
