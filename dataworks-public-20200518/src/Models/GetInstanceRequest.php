<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceRequest extends Model
{
    /**
     * @description The ID of the instance. You can call the [ListInstances](https://help.aliyun.com/document_detail/173982.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV. The value PROD indicates the production environment, and the value DEV indicates the development environment.
     *
     * This parameter is required.
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'projectEnv' => 'ProjectEnv',
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
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}
