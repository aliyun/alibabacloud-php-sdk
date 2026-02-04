<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class ListBroadcastAudiosByIdShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $audioIdsShrink;
    protected $_name = [
        'audioIdsShrink' => 'audioIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioIdsShrink) {
            $res['audioIds'] = $this->audioIdsShrink;
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
        if (isset($map['audioIds'])) {
            $model->audioIdsShrink = $map['audioIds'];
        }

        return $model;
    }
}
