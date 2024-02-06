<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AttachDiskRequest extends Model
{
    /**
     * @description Specifies whether the disk to be attached is released with the instance. Valid values:
     *
     *   true: The disk will be released when the ECS instance is released.
     *   false: The disk will be retained when the ECS instance is released.
     *   If you leave this parameter empty, the default value is used.
     *
     * @example false
     *
     * @var string
     */
    public $deleteWithInstance;

    /**
     * @description The ID of the disk to be attached. The cloud disk and the instance must belong to the same zone.
     *
     * @example d-5saf13yy6sopmmg88mzsg****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The ID of the instance.
     *
     * @example i-5rr19av7tkpgi9os52ag1****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'deleteWithInstance' => 'DeleteWithInstance',
        'diskId'             => 'DiskId',
        'instanceId'         => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
