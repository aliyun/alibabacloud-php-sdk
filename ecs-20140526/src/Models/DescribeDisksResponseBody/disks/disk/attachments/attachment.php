<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk\attachments;

use AlibabaCloud\Tea\Model;

class attachment extends Model
{
    /**
     * @description The time when the disk was attached. The time is displayed in UTC.
     *
     * @example 2021-06-07T06:08:56Z
     *
     * @var string
     */
    public $attachedTime;

    /**
     * @description The device name of the disk.
     *
     * @example /dev/xvda
     *
     * @var string
     */
    public $device;

    /**
     * @description The ID of the instance to which the disk was attached.
     *
     * @example i-bp67acfmxazb4q****
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
     * @return attachment
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
