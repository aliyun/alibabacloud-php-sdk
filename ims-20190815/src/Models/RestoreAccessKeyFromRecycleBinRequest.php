<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class RestoreAccessKeyFromRecycleBinRequest extends Model
{
    /**
     * @description The AccessKey ID of the RAM user.
     *
     * @example LTAI4GFTgcR8m8cZQDTH****
     *
     * @var string
     */
    public $userAccessKeyId;

    /**
     * @description The ID of the Resource Access Management (RAM) user.
     *
     * @example 20732900249392****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'userAccessKeyId' => 'UserAccessKeyId',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userAccessKeyId) {
            $res['UserAccessKeyId'] = $this->userAccessKeyId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreAccessKeyFromRecycleBinRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserAccessKeyId'])) {
            $model->userAccessKeyId = $map['UserAccessKeyId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
