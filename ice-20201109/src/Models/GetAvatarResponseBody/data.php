<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarResponseBody\data\avatar;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the digital human.
     *
     * @var avatar
     */
    public $avatar;
    protected $_name = [
        'avatar' => 'Avatar',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['Avatar'] = null !== $this->avatar ? $this->avatar->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Avatar'])) {
            $model->avatar = avatar::fromMap($map['Avatar']);
        }

        return $model;
    }
}
