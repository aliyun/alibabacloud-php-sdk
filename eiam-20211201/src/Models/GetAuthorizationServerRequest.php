<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GetAuthorizationServerRequest extends Model
{
    /**
     * @var string
     */
    public $authorizationServerId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'authorizationServerId' => 'AuthorizationServerId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationServerId) {
            $res['AuthorizationServerId'] = $this->authorizationServerId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationServerId'])) {
            $model->authorizationServerId = $map['AuthorizationServerId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
