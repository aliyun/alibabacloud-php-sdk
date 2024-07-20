<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceManagedControlRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the value of **RequestId** as the value of **ClientToken**. The **request ID** may be different for each request.
     * @example 123e4567****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The region ID of the GA instance. Set the value to cn-hangzhou.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource whose control mode you want to change.
     *
     * This parameter is required.
     * @example ga-bp149u6o36qt1as9b****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource whose control mode you want to change.
     *
     * Set the value to **Accelerator**, which specifies a standard GA instance.
     *
     * This parameter is required.
     * @example Accelerator
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The control mode of the resource.
     *
     * Set the value to **false**, which changes the control mode of the resource from managed mode to unmanaged mode.
     *
     * >  You can change the control mode only from managed mode to unmanaged mode.
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
