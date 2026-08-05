<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class GetAuthorizationTokenRequest extends Model
{
    /**
     * @var int
     */
    public $expiresInHours;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'expiresInHours' => 'ExpiresInHours',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiresInHours) {
            $res['ExpiresInHours'] = $this->expiresInHours;
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
        if (isset($map['ExpiresInHours'])) {
            $model->expiresInHours = $map['ExpiresInHours'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
