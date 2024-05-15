<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk\mountInstances;

use AlibabaCloud\Tea\Model;

class mountInstance extends Model
{
    /**
     * @description The time when the disk was attached. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-12-05T2340:00Z
     *
     * @var string
     */
    public $attachedTime;

    /**
     * @description The mount point of the disk.
     *
     * @example /dev/xvda
     *
     * @var string
     */
    public $device;

    /**
     * @description The ID of the instance to which the disk is attached.
     *
     * @example i-bp1j4i2jdf3owlhe****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'attachedTime' => 'AttachedTime',
        'device'       => 'Device',
        'instanceId'   => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachedTime) {
            $res['AttachedTime'] = $this->attachedTime;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachedTime'])) {
            $model->attachedTime = $map['AttachedTime'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
