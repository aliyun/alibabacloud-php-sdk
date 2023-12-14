<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserAvatarRequest extends Model
{
    /**
     * @example @lADPDfYH3A-xxxx
     *
     * @var string
     */
    public $avatarMediaId;
    protected $_name = [
        'avatarMediaId' => 'AvatarMediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarMediaId) {
            $res['AvatarMediaId'] = $this->avatarMediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserAvatarRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarMediaId'])) {
            $model->avatarMediaId = $map['AvatarMediaId'];
        }

        return $model;
    }
}
