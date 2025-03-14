<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GenerateCoordinationCodeRequest extends Model
{
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
        'instanceId' => 'InstanceId',
        'ownerUserId' => 'OwnerUserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return GenerateCoordinationCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        return $model;
    }
}
