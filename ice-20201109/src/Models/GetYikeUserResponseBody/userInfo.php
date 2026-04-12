<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetYikeUserResponseBody;

use AlibabaCloud\Dara\Model;

class userInfo extends Model
{
    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $yikeUserId;
    protected $_name = [
        'nickname' => 'Nickname',
        'userName' => 'UserName',
        'workspaceId' => 'WorkspaceId',
        'yikeUserId' => 'YikeUserId',
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

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->yikeUserId) {
            $res['YikeUserId'] = $this->yikeUserId;
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

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['YikeUserId'])) {
            $model->yikeUserId = $map['YikeUserId'];
        }

        return $model;
    }
}
