<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupCapabilityResponseBody;

use AlibabaCloud\Dara\Model;

class capabilities extends Model
{
    /**
     * @var string
     */
    public $resourceCenterResourceType;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $service;

    /**
     * @var bool
     */
    public $supportResourceGroupEvent;
    protected $_name = [
        'resourceCenterResourceType' => 'ResourceCenterResourceType',
        'resourceType' => 'ResourceType',
        'service' => 'Service',
        'supportResourceGroupEvent' => 'SupportResourceGroupEvent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceCenterResourceType) {
            $res['ResourceCenterResourceType'] = $this->resourceCenterResourceType;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        if (null !== $this->supportResourceGroupEvent) {
            $res['SupportResourceGroupEvent'] = $this->supportResourceGroupEvent;
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
        if (isset($map['ResourceCenterResourceType'])) {
            $model->resourceCenterResourceType = $map['ResourceCenterResourceType'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        if (isset($map['SupportResourceGroupEvent'])) {
            $model->supportResourceGroupEvent = $map['SupportResourceGroupEvent'];
        }

        return $model;
    }
}
