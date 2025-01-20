<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class GetVisitorLoginDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $chatDeviceId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $token;
    /**
     * @var string
     */
    public $visitorId;
    protected $_name = [
        'chatDeviceId' => 'ChatDeviceId',
        'instanceId'   => 'InstanceId',
        'token'        => 'Token',
        'visitorId'    => 'VisitorId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatDeviceId) {
            $res['ChatDeviceId'] = $this->chatDeviceId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->visitorId) {
            $res['VisitorId'] = $this->visitorId;
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
        if (isset($map['ChatDeviceId'])) {
            $model->chatDeviceId = $map['ChatDeviceId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['VisitorId'])) {
            $model->visitorId = $map['VisitorId'];
        }

        return $model;
    }
}
