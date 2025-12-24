<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class EnableInternalAuthenticationSourceRequest extends Model
{
    /**
     * @var string
     */
    public $authenticationSourceId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'authenticationSourceId' => 'AuthenticationSourceId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationSourceId) {
            $res['AuthenticationSourceId'] = $this->authenticationSourceId;
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
        if (isset($map['AuthenticationSourceId'])) {
            $model->authenticationSourceId = $map['AuthenticationSourceId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
