<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GenerateMessageChatTokenRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 19de81b3b3d94abda22******
     *
     * @var string
     */
    public $AIAgentId;

    /**
     * @example 3600
     *
     * @var int
     */
    public $expire;

    /**
     * @example user
     *
     * @var string
     */
    public $role;

    /**
     * @description This parameter is required.
     *
     * @example YOURUSERID
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'expire'    => 'Expire',
        'role'      => 'Role',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateMessageChatTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
