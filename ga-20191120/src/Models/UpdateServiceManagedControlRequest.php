<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceManagedControlRequest extends Model
{
    /**
     * @example 123e4567****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example ga-bp149u6o36qt1as9b****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example Accelerator
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example false
     *
     * @var bool
     */
    public $serviceManaged;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'regionId'       => 'RegionId',
        'resourceId'     => 'ResourceId',
        'resourceType'   => 'ResourceType',
        'serviceManaged' => 'ServiceManaged',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceManagedControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }

        return $model;
    }
}
