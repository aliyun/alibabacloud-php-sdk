<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceSnapshotRequest extends Model
{
    /**
     * @description 实例快照描述
     *
     * @var string
     */
    public $instanceSnapshotDescription;

    /**
     * @description 实例快照名称
     *
     * @var string
     */
    public $instanceSnapshotName;

    /**
     * @description 实例快照存储地址（可选）
     *
     * @var string
     */
    public $instanceSnapshotRepoUrl;
    protected $_name = [
        'instanceSnapshotDescription' => 'InstanceSnapshotDescription',
        'instanceSnapshotName'        => 'InstanceSnapshotName',
        'instanceSnapshotRepoUrl'     => 'InstanceSnapshotRepoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSnapshotDescription) {
            $res['InstanceSnapshotDescription'] = $this->instanceSnapshotDescription;
        }
        if (null !== $this->instanceSnapshotName) {
            $res['InstanceSnapshotName'] = $this->instanceSnapshotName;
        }
        if (null !== $this->instanceSnapshotRepoUrl) {
            $res['InstanceSnapshotRepoUrl'] = $this->instanceSnapshotRepoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSnapshotDescription'])) {
            $model->instanceSnapshotDescription = $map['InstanceSnapshotDescription'];
        }
        if (isset($map['InstanceSnapshotName'])) {
            $model->instanceSnapshotName = $map['InstanceSnapshotName'];
        }
        if (isset($map['InstanceSnapshotRepoUrl'])) {
            $model->instanceSnapshotRepoUrl = $map['InstanceSnapshotRepoUrl'];
        }

        return $model;
    }
}
