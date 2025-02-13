<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserAvatarRequest extends Model
{
    /**
     * @var string
     */
    public $avatarMediaId;
    protected $_name = [
        'avatarMediaId' => 'AvatarMediaId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarMediaId) {
            $res['AvatarMediaId'] = $this->avatarMediaId;
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
        if (isset($map['AvatarMediaId'])) {
            $model->avatarMediaId = $map['AvatarMediaId'];
        }

        return $model;
    }
}
