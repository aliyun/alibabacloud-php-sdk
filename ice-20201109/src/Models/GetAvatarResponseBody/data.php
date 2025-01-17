<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarResponseBody\data\avatar;

class data extends Model
{
    /**
     * @var avatar
     */
    public $avatar;
    protected $_name = [
        'avatar' => 'Avatar',
    ];

    public function validate()
    {
        if (null !== $this->avatar) {
            $this->avatar->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['Avatar'] = null !== $this->avatar ? $this->avatar->toArray($noStream) : $this->avatar;
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
        if (isset($map['Avatar'])) {
            $model->avatar = avatar::fromMap($map['Avatar']);
        }

        return $model;
    }
}
