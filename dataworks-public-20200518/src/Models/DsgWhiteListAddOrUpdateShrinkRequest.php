<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DsgWhiteListAddOrUpdateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $whiteListsShrink;
    protected $_name = [
        'whiteListsShrink' => 'WhiteLists',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->whiteListsShrink) {
            $res['WhiteLists'] = $this->whiteListsShrink;
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
        if (isset($map['WhiteLists'])) {
            $model->whiteListsShrink = $map['WhiteLists'];
        }

        return $model;
    }
}
