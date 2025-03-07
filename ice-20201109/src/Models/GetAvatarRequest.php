<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetAvatarRequest extends Model
{
    /**
     * @description *   The ID of the digital human.
     *
     * This parameter is required.
     * @example Avatar-XXXX
     *
     * @var string
     */
    public $avatarId;
    protected $_name = [
        'avatarId' => 'AvatarId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarId) {
            $res['AvatarId'] = $this->avatarId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAvatarRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarId'])) {
            $model->avatarId = $map['AvatarId'];
        }

        return $model;
    }
}
