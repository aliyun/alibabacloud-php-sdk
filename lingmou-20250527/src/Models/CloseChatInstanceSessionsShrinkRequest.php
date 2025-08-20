<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class CloseChatInstanceSessionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $sessionIdsShrink;
    protected $_name = [
        'sessionIdsShrink' => 'sessionIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionIdsShrink) {
            $res['sessionIds'] = $this->sessionIdsShrink;
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
        if (isset($map['sessionIds'])) {
            $model->sessionIdsShrink = $map['sessionIds'];
        }

        return $model;
    }
}
