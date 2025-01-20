<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\StartChatRequest\userList;

class StartChatRequest extends Model
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
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'instanceId'      => 'InstanceId',
        'token'           => 'Token',
        'userList'        => 'UserList',
    ];

    public function validate()
    {
        if (\is_array($this->userList)) {
            Model::validateArray($this->userList);
        }
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

        if (null !== $this->userList) {
            if (\is_array($this->userList)) {
                $res['UserList'] = [];
                $n1              = 0;
                foreach ($this->userList as $item1) {
                    $res['UserList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n1              = 0;
                foreach ($map['UserList'] as $item1) {
                    $model->userList[$n1++] = userList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
