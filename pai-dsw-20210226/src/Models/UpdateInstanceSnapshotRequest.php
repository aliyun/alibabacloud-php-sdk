<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceSnapshotRequest extends Model
{
    /**
     * @description 实例快照名称
     *
     * @var string
     */
    public $instanceSnapshotName;
    protected $_name = [
        'instanceSnapshotName' => 'InstanceSnapshotName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSnapshotName) {
            $res['InstanceSnapshotName'] = $this->instanceSnapshotName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSnapshotName'])) {
            $model->instanceSnapshotName = $map['InstanceSnapshotName'];
        }

        return $model;
    }
}
