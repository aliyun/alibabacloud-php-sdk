<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class UnbindDeviceSeatsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $serialNoListShrink;
    protected $_name = [
        'serialNoListShrink' => 'SerialNoList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serialNoListShrink) {
            $res['SerialNoList'] = $this->serialNoListShrink;
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
        if (isset($map['SerialNoList'])) {
            $model->serialNoListShrink = $map['SerialNoList'];
        }

        return $model;
    }
}
