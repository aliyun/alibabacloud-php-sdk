<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class CreateChatConfigRequest extends Model
{
    /**
     * @var string
     */
    public $avatarId;

    /**
     * @var string
     */
    public $backgroundId;
    protected $_name = [
        'avatarId' => 'avatarId',
        'backgroundId' => 'backgroundId',
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

        if (null !== $this->backgroundId) {
            $res['backgroundId'] = $this->backgroundId;
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

        if (isset($map['backgroundId'])) {
            $model->backgroundId = $map['backgroundId'];
        }

        return $model;
    }
}
