<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteJobGroupRequest extends Model
{
    /**
     * @example 8fa1953f-4a84-46d8-b80c-8ce9cf684fb3
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example fc1fb484-4fe8-4031-b662-5b87ea88590b
     *
     * @var string
     */
    public $jobGroupId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
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
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteJobGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }

        return $model;
    }
}
