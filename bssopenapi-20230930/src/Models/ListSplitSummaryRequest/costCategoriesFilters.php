<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListSplitSummaryRequest;

use AlibabaCloud\Dara\Model;

class costCategoriesFilters extends Model
{
    /**
     * @var string
     */
    public $costCategoriesKey;

    /**
     * @var string[]
     */
    public $costCategoriesValues;
    protected $_name = [
        'costCategoriesKey' => 'CostCategoriesKey',
        'costCategoriesValues' => 'CostCategoriesValues',
    ];

    public function validate()
    {
        if (\is_array($this->costCategoriesValues)) {
            Model::validateArray($this->costCategoriesValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCategoriesKey) {
            $res['CostCategoriesKey'] = $this->costCategoriesKey;
        }

        if (null !== $this->costCategoriesValues) {
            if (\is_array($this->costCategoriesValues)) {
                $res['CostCategoriesValues'] = [];
                $n1 = 0;
                foreach ($this->costCategoriesValues as $item1) {
                    $res['CostCategoriesValues'][$n1] = $item1;
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
        if (isset($map['CostCategoriesKey'])) {
            $model->costCategoriesKey = $map['CostCategoriesKey'];
        }

        if (isset($map['CostCategoriesValues'])) {
            if (!empty($map['CostCategoriesValues'])) {
                $model->costCategoriesValues = [];
                $n1 = 0;
                foreach ($map['CostCategoriesValues'] as $item1) {
                    $model->costCategoriesValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
