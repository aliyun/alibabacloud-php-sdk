<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class StartChatShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accessChannelId;
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
    public $userListShrink;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'instanceId'      => 'InstanceId',
        'token'           => 'Token',
        'userListShrink'  => 'UserList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessChannelId) {
            $res['AccessChannelId'] = $this->accessChannelId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->userListShrink) {
            $res['UserList'] = $this->userListShrink;
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
        if (isset($map['AccessChannelId'])) {
            $model->accessChannelId = $map['AccessChannelId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['UserList'])) {
            $model->userListShrink = $map['UserList'];
        }

        return $model;
    }
}
