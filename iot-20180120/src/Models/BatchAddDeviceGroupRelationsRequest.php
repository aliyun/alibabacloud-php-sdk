<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchAddDeviceGroupRelationsRequest\device;
use AlibabaCloud\Tea\Model;

class BatchAddDeviceGroupRelationsRequest extends Model
{
    /**
     * @var device[]
     */
    public $device;

    /**
     * @description The ProductKeys of the products to which the devices belong. You can specify a maximum of 200 ProductKeys.
     *
     * @example 6VfhebLg5iUe****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the group. The ID is the globally unique identifier (GUID) for the group.
     *
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'device'        => 'Device',
        'groupId'       => 'GroupId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = [];
            if (null !== $this->device && \is_array($this->device)) {
                $n = 0;
                foreach ($this->device as $item) {
                    $res['Device'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddDeviceGroupRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            if (!empty($map['Device'])) {
                $model->device = [];
                $n             = 0;
                foreach ($map['Device'] as $item) {
                    $model->device[$n++] = null !== $item ? device::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
