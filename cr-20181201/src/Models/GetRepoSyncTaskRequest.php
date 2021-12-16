<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoSyncTaskRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $syncTaskId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'syncTaskId' => 'SyncTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->syncTaskId) {
            $res['SyncTaskId'] = $this->syncTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoSyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SyncTaskId'])) {
            $model->syncTaskId = $map['SyncTaskId'];
        }

        return $model;
    }
}
