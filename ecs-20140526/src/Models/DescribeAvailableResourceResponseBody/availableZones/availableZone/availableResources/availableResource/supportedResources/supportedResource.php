<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\availableResources\availableResource\supportedResources;

use AlibabaCloud\Tea\Model;

class supportedResource extends Model
{
    /**
     * @description The maximum disk capacity.
     *
     * This parameter takes effect only if DestinationResource is set to SystemDisk or DataDisk.
     * @example 2
     *
     * @var int
     */
    public $max;

    /**
     * @description The minimum disk capacity.
     *
     * This parameter takes effect only if DestinationResource is set to SystemDisk or DataDisk.
     * @example 1
     *
     * @var int
     */
    public $min;

    /**
     * @description The status of the resource. Valid values:
     *
     *   Available
     *   SoldOut
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The resource category based on the stock level. Valid values:
     *
     *   WithStock: Resources are in sufficient stock.
     *   ClosedWithStock: Resources are in insufficient stock. We recommend that you use other resources that are in sufficient stock.
     *   WithoutStock: Resources are out of stock and will be replenished. We recommend that you use other resources that are in sufficient stock.
     *   ClosedWithoutStock: Resources are out of stock and will not be replenished. We recommend that you use other resources that are in sufficient stock.
     *
     * @example WithStock
     *
     * @var string
     */
    public $statusCategory;

    /**
     * @description The unit of the disk capacity.
     *
     * This parameter takes effect only if DestinationResource is set to SystemDisk or DataDisk.
     * @example null
     *
     * @var string
     */
    public $unit;

    /**
     * @description The resource.
     *
     * @example ecs.d1ne.xlarge
     *
     * @var string
     */
    public $value;
    protected $_name = [
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
     * @return supportedResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
