<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreateClientsResponseBody\instanceStatuses;

use AlibabaCloud\Tea\Model;

class instanceStatus extends Model
{
    /**
     * @description The ID of the ECS instance.
     *
     * @example i-2zegp3cdu******uj9i
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether an HBR client can be installed on the ECS instance. Valid values:
     *
     *   true: An HBR client can be installed on the ECS instance.
     *   false: An HBR client cannot be installed on the ECS instance.
     *
     * @example true
     *
     * @var bool
     */
    public $validInstance;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'validInstance' => 'ValidInstance',
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
        if (null !== $this->validInstance) {
            $res['ValidInstance'] = $this->validInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ValidInstance'])) {
            $model->validInstance = $map['ValidInstance'];
        }

        return $model;
    }
}
