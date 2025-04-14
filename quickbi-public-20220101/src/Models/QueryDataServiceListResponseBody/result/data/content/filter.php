<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var mixed[][]
     */
    public $filters;

    /**
     * @var string
     */
    public $logicalOperator;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'filters' => 'Filters',
        'logicalOperator' => 'LogicalOperator',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    if (\is_array($item1)) {
                        $res['Filters'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Filters'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->logicalOperator) {
            $res['LogicalOperator'] = $this->logicalOperator;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1 = 0;
                foreach ($map['Filters'] as $item1) {
                    if (!empty($item1)) {
                        $model->filters[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->filters[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['LogicalOperator'])) {
            $model->logicalOperator = $map['LogicalOperator'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
