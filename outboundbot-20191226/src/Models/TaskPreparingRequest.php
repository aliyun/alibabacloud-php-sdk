<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class TaskPreparingRequest extends Model
{
    /**
     * @example 33040b9a-b04b-452f-b554-cd6f3a15f850
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1971226538081821
     *
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @example c9e42cd7-ba99-4872-9802-e05719ab051c
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'instanceOwnerId' => 'InstanceOwnerId',
        'jobId'           => 'JobId',
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
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskPreparingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
