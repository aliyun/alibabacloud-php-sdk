<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleMatch2\criteria\criteria;

use AlibabaCloud\Tea\Model;

class criteria extends Model
{
    /**
     * @var bool
     */
    public $convertToLower;

    /**
     * @var string
     */
    public $matchOperator;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var mixed
     */
    public $matchValue;

    /**
     * @var bool
     */
    public $negate;
    protected $_name = [
        'convertToLower' => 'ConvertToLower',
        'matchOperator' => 'MatchOperator',
        'matchType' => 'MatchType',
        'matchValue' => 'MatchValue',
        'negate' => 'Negate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->convertToLower) {
            $res['ConvertToLower'] = $this->convertToLower;
        }
        if (null !== $this->matchOperator) {
            $res['MatchOperator'] = $this->matchOperator;
        }
        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }
        if (null !== $this->matchValue) {
            $res['MatchValue'] = $this->matchValue;
        }
        if (null !== $this->negate) {
            $res['Negate'] = $this->negate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return criteria
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConvertToLower'])) {
            $model->convertToLower = $map['ConvertToLower'];
        }
        if (isset($map['MatchOperator'])) {
            $model->matchOperator = $map['MatchOperator'];
        }
        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }
        if (isset($map['MatchValue'])) {
            $model->matchValue = $map['MatchValue'];
        }
        if (isset($map['Negate'])) {
            $model->negate = $map['Negate'];
        }

        return $model;
    }
}
