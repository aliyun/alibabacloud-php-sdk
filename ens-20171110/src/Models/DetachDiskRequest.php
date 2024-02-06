<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DetachDiskRequest extends Model
{
    /**
     * @description The ID of the disk.
     *
     * @example d-5r7v69e0bejrnzger09w7****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The ID of the instance.
     *
     * @example i-5inkeimcipxk26yqtzm4q****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'diskId'     => 'DiskId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DetachDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
