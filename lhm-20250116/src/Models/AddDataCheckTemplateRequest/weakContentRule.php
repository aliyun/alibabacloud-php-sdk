<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\AddDataCheckTemplateRequest;

use AlibabaCloud\Dara\Model;

class weakContentRule extends Model
{
    /**
     * @var string
     */
    public $filterColumnExpression;

    /**
     * @var string[]
     */
    public $filterColumnTypes;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $weakContentAlgorithm;
    protected $_name = [
        'filterColumnExpression' => 'filterColumnExpression',
        'filterColumnTypes' => 'filterColumnTypes',
        'ruleId' => 'ruleId',
        'weakContentAlgorithm' => 'weakContentAlgorithm',
    ];

    public function validate()
    {
        if (\is_array($this->filterColumnTypes)) {
            Model::validateArray($this->filterColumnTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterColumnExpression) {
            $res['filterColumnExpression'] = $this->filterColumnExpression;
        }

        if (null !== $this->filterColumnTypes) {
            if (\is_array($this->filterColumnTypes)) {
                $res['filterColumnTypes'] = [];
                $n1 = 0;
                foreach ($this->filterColumnTypes as $item1) {
                    $res['filterColumnTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->weakContentAlgorithm) {
            $res['weakContentAlgorithm'] = $this->weakContentAlgorithm;
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
        if (isset($map['filterColumnExpression'])) {
            $model->filterColumnExpression = $map['filterColumnExpression'];
        }

        if (isset($map['filterColumnTypes'])) {
            if (!empty($map['filterColumnTypes'])) {
                $model->filterColumnTypes = [];
                $n1 = 0;
                foreach ($map['filterColumnTypes'] as $item1) {
                    $model->filterColumnTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['weakContentAlgorithm'])) {
            $model->weakContentAlgorithm = $map['weakContentAlgorithm'];
        }

        return $model;
    }
}
