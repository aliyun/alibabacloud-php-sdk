<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AttachDiskRequest extends Model
{
    /**
     * @example False
     *
     * @var string
     */
    public $deleteWithInstance;

    /**
     * @example d-5saf13yy6sopmmg88mzsgovj5
     *
     * @var string
     */
    public $diskId;

    /**
     * @example i-5rr19av7tkpgi9os52ag1enu1
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
