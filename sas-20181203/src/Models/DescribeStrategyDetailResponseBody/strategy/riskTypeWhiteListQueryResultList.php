<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy\riskTypeWhiteListQueryResultList\subTypes;

class riskTypeWhiteListQueryResultList extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var bool
     */
    public $on;

    /**
     * @var subTypes[]
     */
    public $subTypes;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'alias' => 'Alias',
        'on' => 'On',
        'subTypes' => 'SubTypes',
        'typeName' => 'TypeName',
    ];

    public function validate()
    {
        if (\is_array($this->subTypes)) {
            Model::validateArray($this->subTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->on) {
            $res['On'] = $this->on;
        }

        if (null !== $this->subTypes) {
            if (\is_array($this->subTypes)) {
                $res['SubTypes'] = [];
                $n1 = 0;
                foreach ($this->subTypes as $item1) {
                    $res['SubTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['On'])) {
            $model->on = $map['On'];
        }

        if (isset($map['SubTypes'])) {
            if (!empty($map['SubTypes'])) {
                $model->subTypes = [];
                $n1 = 0;
                foreach ($map['SubTypes'] as $item1) {
                    $model->subTypes[$n1] = subTypes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
