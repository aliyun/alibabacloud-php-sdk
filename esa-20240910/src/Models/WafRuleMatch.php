<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class WafRuleMatch extends Model
{
    /**
     * @var bool
     */
    public $convertToLower;

    /**
     * @var \AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleMatch[]
     */
    public $criteria;

    /**
     * @var string
     */
    public $logic;

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
        'criteria'       => 'Criteria',
        'logic'          => 'Logic',
        'matchOperator'  => 'MatchOperator',
        'matchType'      => 'MatchType',
        'matchValue'     => 'MatchValue',
        'negate'         => 'Negate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->convertToLower) {
            $res['ConvertToLower'] = $this->convertToLower;
        }
        if (null !== $this->criteria) {
            $res['Criteria'] = [];
            if (null !== $this->criteria && \is_array($this->criteria)) {
                $n = 0;
                foreach ($this->criteria as $item) {
                    $res['Criteria'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
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
     * @return WafRuleMatch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConvertToLower'])) {
            $model->convertToLower = $map['ConvertToLower'];
        }
        if (isset($map['Criteria'])) {
            if (!empty($map['Criteria'])) {
                $model->criteria = [];
                $n               = 0;
                foreach ($map['Criteria'] as $item) {
                    $model->criteria[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
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
