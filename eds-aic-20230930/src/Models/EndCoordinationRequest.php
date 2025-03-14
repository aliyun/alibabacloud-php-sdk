<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class EndCoordinationRequest extends Model
{
    /**
     * @example lina
     *
     * @var string
     */
    public $coordinatorUserId;

    /**
     * @example acp-2zecay9ponatdc4m****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example xiaoming
     *
     * @var string
     */
    public $ownerUserId;
    protected $_name = [
        'coordinatorUserId' => 'CoordinatorUserId',
        'instanceId' => 'InstanceId',
        'ownerUserId' => 'OwnerUserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->coordinatorUserId) {
            $res['CoordinatorUserId'] = $this->coordinatorUserId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EndCoordinationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoordinatorUserId'])) {
            $model->coordinatorUserId = $map['CoordinatorUserId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        return $model;
    }
}
