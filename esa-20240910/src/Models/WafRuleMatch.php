<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class WafRuleMatch extends Model
{
    /**
     * @var bool
     */
    public $convertToLower;

    /**
     * @var WafRuleMatch[]
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
        'criteria' => 'Criteria',
        'logic' => 'Logic',
        'matchOperator' => 'MatchOperator',
        'matchType' => 'MatchType',
        'matchValue' => 'MatchValue',
        'negate' => 'Negate',
    ];

    public function validate()
    {
        if (\is_array($this->criteria)) {
            Model::validateArray($this->criteria);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->convertToLower) {
            $res['ConvertToLower'] = $this->convertToLower;
        }

        if (null !== $this->criteria) {
            if (\is_array($this->criteria)) {
                $res['Criteria'] = [];
                $n1 = 0;
                foreach ($this->criteria as $item1) {
                    $res['Criteria'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConvertToLower'])) {
            $model->convertToLower = $map['ConvertToLower'];
        }

        if (isset($map['Criteria'])) {
            if (!empty($map['Criteria'])) {
                $model->criteria = [];
                $n1 = 0;
                foreach ($map['Criteria'] as $item1) {
                    $model->criteria[$n1] = self::fromMap($item1);
                    ++$n1;
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
