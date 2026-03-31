<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateYikeUserRequest extends Model
{
    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $productionIds;

    /**
     * @var string
     */
    public $userNamePrefix;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'nickname' => 'Nickname',
        'password' => 'Password',
        'productionIds' => 'ProductionIds',
        'userNamePrefix' => 'UserNamePrefix',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->productionIds) {
            $res['ProductionIds'] = $this->productionIds;
        }

        if (null !== $this->userNamePrefix) {
            $res['UserNamePrefix'] = $this->userNamePrefix;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['ProductionIds'])) {
            $model->productionIds = $map['ProductionIds'];
        }

        if (isset($map['UserNamePrefix'])) {
            $model->userNamePrefix = $map['UserNamePrefix'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
