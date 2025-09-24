<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody\data\evaluateList\evaluate;

class evaluateList extends Model
{
    /**
     * @var evaluate[]
     */
    public $evaluate;
    protected $_name = [
        'evaluate' => 'Evaluate',
    ];

    public function validate()
    {
        if (\is_array($this->evaluate)) {
            Model::validateArray($this->evaluate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluate) {
            if (\is_array($this->evaluate)) {
                $res['Evaluate'] = [];
                $n1 = 0;
                foreach ($this->evaluate as $item1) {
                    $res['Evaluate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Evaluate'])) {
            if (!empty($map['Evaluate'])) {
                $model->evaluate = [];
                $n1 = 0;
                foreach ($map['Evaluate'] as $item1) {
                    $model->evaluate[$n1] = evaluate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
