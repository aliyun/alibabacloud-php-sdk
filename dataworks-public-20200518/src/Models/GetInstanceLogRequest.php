<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceLogRequest extends Model
{
    /**
     * @description The historical record number of the instance. You can call the ListInstanceHistory operation to query the ID.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceHistoryId;

    /**
     * @description The ID of the instance.
     *
     * @example 1234
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV.
     *
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'instanceHistoryId' => 'InstanceHistoryId',
        'instanceId'        => 'InstanceId',
        'projectEnv'        => 'ProjectEnv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceHistoryId) {
            $res['InstanceHistoryId'] = $this->instanceHistoryId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceHistoryId'])) {
            $model->instanceHistoryId = $map['InstanceHistoryId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}
