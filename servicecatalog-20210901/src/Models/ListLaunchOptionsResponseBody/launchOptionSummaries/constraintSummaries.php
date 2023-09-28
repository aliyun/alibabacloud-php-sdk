<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListLaunchOptionsResponseBody\launchOptionSummaries;

use AlibabaCloud\Tea\Model;

class constraintSummaries extends Model
{
    /**
     * @description The type of the constraint. Valid values:
     *
     * 4.  StackRegion
     * @example Launch
     *
     * @var string
     */
    public $constraintType;

    /**
     * @description The description of the constraint.
     *
     * @example Launch as local role TestRole
     *
     * @var string
     */
    public $description;

    /**
     * @description The types of operations that require approval. If the type of the constraint is Approval, this parameter is not empty.
     *
     * @var string[]
     */
    public $operationTypes;

    /**
     * @description The regions in which users can launch the service. If the type of the constraint is StackRegion, this parameter is not empty.
     *
     * @var string[]
     */
    public $stackRegions;
    protected $_name = [
        'constraintType' => 'ConstraintType',
        'description'    => 'Description',
        'operationTypes' => 'OperationTypes',
        'stackRegions'   => 'StackRegions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->constraintType) {
            $res['ConstraintType'] = $this->constraintType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->operationTypes) {
            $res['OperationTypes'] = $this->operationTypes;
        }
        if (null !== $this->stackRegions) {
            $res['StackRegions'] = $this->stackRegions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return constraintSummaries
     */
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
                $model->operationTypes = $map['OperationTypes'];
            }
        }
        if (isset($map['StackRegions'])) {
            if (!empty($map['StackRegions'])) {
                $model->stackRegions = $map['StackRegions'];
            }
        }

        return $model;
    }
}
