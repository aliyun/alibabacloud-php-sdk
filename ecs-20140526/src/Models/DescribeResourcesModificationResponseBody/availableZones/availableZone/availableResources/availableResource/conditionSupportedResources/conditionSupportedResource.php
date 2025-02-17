<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources\conditionSupportedResource\conditions;

class conditionSupportedResource extends Model
{
    /**
     * @var conditions
     */
    public $conditions;
    /**
     * @var int
     */
    public $max;
    /**
     * @var int
     */
    public $min;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $statusCategory;
    /**
     * @var string
     */
    public $unit;
    /**
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
        if (null !== $this->conditions) {
            $this->conditions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = null !== $this->conditions ? $this->conditions->toArray($noStream) : $this->conditions;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
