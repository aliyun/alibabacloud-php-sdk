<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListLaunchOptionsResponseBody\launchOptionSummaries;

use AlibabaCloud\Dara\Model;

class constraintSummaries extends Model
{
    /**
     * @var string
     */
    public $constraintType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $operationTypes;

    /**
     * @var string[]
     */
    public $stackRegions;
    protected $_name = [
        'constraintType' => 'ConstraintType',
        'description' => 'Description',
        'operationTypes' => 'OperationTypes',
        'stackRegions' => 'StackRegions',
    ];

    public function validate()
    {
        if (\is_array($this->operationTypes)) {
            Model::validateArray($this->operationTypes);
        }
        if (\is_array($this->stackRegions)) {
            Model::validateArray($this->stackRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->constraintType) {
            $res['ConstraintType'] = $this->constraintType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->operationTypes) {
            if (\is_array($this->operationTypes)) {
                $res['OperationTypes'] = [];
                $n1 = 0;
                foreach ($this->operationTypes as $item1) {
                    $res['OperationTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stackRegions) {
            if (\is_array($this->stackRegions)) {
                $res['StackRegions'] = [];
                $n1 = 0;
                foreach ($this->stackRegions as $item1) {
                    $res['StackRegions'][$n1] = $item1;
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
        if (isset($map['ConstraintType'])) {
            $model->constraintType = $map['ConstraintType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['OperationTypes'])) {
            if (!empty($map['OperationTypes'])) {
                $model->operationTypes = [];
                $n1 = 0;
                foreach ($map['OperationTypes'] as $item1) {
                    $model->operationTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StackRegions'])) {
            if (!empty($map['StackRegions'])) {
                $model->stackRegions = [];
                $n1 = 0;
                foreach ($map['StackRegions'] as $item1) {
                    $model->stackRegions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
