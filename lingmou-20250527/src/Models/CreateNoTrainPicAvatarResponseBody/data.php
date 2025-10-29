<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\CreateNoTrainPicAvatarResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $avatarId;

    /**
     * @var bool
     */
    public $pass;
    protected $_name = [
        'avatarId' => 'avatarId',
        'pass' => 'pass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarId) {
            $res['avatarId'] = $this->avatarId;
        }

        if (null !== $this->pass) {
            $res['pass'] = $this->pass;
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
        if (isset($map['avatarId'])) {
            $model->avatarId = $map['avatarId'];
        }

        if (isset($map['pass'])) {
            $model->pass = $map['pass'];
        }

        return $model;
    }
}
