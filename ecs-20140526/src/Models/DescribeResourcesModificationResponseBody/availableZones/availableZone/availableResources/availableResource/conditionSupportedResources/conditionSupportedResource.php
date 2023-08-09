<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources\conditionSupportedResource\conditions;
use AlibabaCloud\Tea\Model;

class conditionSupportedResource extends Model
{
    /**
     * @description The conditions.
     *
     * @var conditions
     */
    public $conditions;

    /**
     * @description The maximum resource specification value. This parameter is not returned if it has no value.
     *
     * @example 2
     *
     * @var int
     */
    public $max;

    /**
     * @description The minimum resource specification value. This parameter is not returned if it has no value.
     *
     * @example 1
     *
     * @var int
     */
    public $min;

    /**
     * @description The stock status of the resource. Valid values:
     *
     * - SoldOut
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The category of resource based on stock status. Valid values:
     *
     * - WithoutStock: resources that are out of stock
     * @example WithStock
     *
     * @var string
     */
    public $statusCategory;

    /**
     * @description The resource specification unit. This parameter is not returned if it has no value.
     *
     * @example null
     *
     * @var string
     */
    public $unit;

    /**
     * @description The resource type.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'conditions'     => 'Conditions',
        'max'            => 'Max',
        'min'            => 'Min',
        'status'         => 'Status',
        'statusCategory' => 'StatusCategory',
        'unit'           => 'Unit',
        'value'          => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = null !== $this->conditions ? $this->conditions->toMap() : null;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusCategory) {
            $res['StatusCategory'] = $this->statusCategory;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionSupportedResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            $model->conditions = conditions::fromMap($map['Conditions']);
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusCategory'])) {
            $model->statusCategory = $map['StatusCategory'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
