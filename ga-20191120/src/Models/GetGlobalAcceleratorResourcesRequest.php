<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class GetGlobalAcceleratorResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $associatedResourceId;

    /**
     * @var string
     */
    public $associatedResourceRegionId;

    /**
     * @var string
     */
    public $associatedResourceType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'associatedResourceId' => 'AssociatedResourceId',
        'associatedResourceRegionId' => 'AssociatedResourceRegionId',
        'associatedResourceType' => 'AssociatedResourceType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->associatedResourceId) {
            $res['AssociatedResourceId'] = $this->associatedResourceId;
        }

        if (null !== $this->associatedResourceRegionId) {
            $res['AssociatedResourceRegionId'] = $this->associatedResourceRegionId;
        }

        if (null !== $this->associatedResourceType) {
            $res['AssociatedResourceType'] = $this->associatedResourceType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['AssociatedResourceId'])) {
            $model->associatedResourceId = $map['AssociatedResourceId'];
        }

        if (isset($map['AssociatedResourceRegionId'])) {
            $model->associatedResourceRegionId = $map['AssociatedResourceRegionId'];
        }

        if (isset($map['AssociatedResourceType'])) {
            $model->associatedResourceType = $map['AssociatedResourceType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
