<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\GetGlobalAcceleratorResourcesResponseBody;

use AlibabaCloud\Dara\Model;

class associatedResources extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $associatedMode;

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
    public $state;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'associatedMode' => 'AssociatedMode',
        'associatedResourceId' => 'AssociatedResourceId',
        'associatedResourceRegionId' => 'AssociatedResourceRegionId',
        'associatedResourceType' => 'AssociatedResourceType',
        'state' => 'State',
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

        if (null !== $this->associatedMode) {
            $res['AssociatedMode'] = $this->associatedMode;
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

        if (null !== $this->state) {
            $res['State'] = $this->state;
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

        if (isset($map['AssociatedMode'])) {
            $model->associatedMode = $map['AssociatedMode'];
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

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
