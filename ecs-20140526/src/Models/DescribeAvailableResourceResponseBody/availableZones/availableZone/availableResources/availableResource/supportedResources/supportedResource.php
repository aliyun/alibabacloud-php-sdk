<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\availableResources\availableResource\supportedResources;

use AlibabaCloud\Tea\Model;

class supportedResource extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $max;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $statusCategory;

    /**
     * @var int
     */
    public $min;
    protected $_name = [
        'status'         => 'Status',
        'value'          => 'Value',
        'max'            => 'Max',
        'unit'           => 'Unit',
        'statusCategory' => 'StatusCategory',
        'min'            => 'Min',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->statusCategory) {
            $res['StatusCategory'] = $this->statusCategory;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['StatusCategory'])) {
            $model->statusCategory = $map['StatusCategory'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        return $model;
    }
}
