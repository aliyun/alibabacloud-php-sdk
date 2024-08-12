<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNoListShrink) {
            $res['SerialNoList'] = $this->serialNoListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindDeviceSeatsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNoList'])) {
            $model->serialNoListShrink = $map['SerialNoList'];
        }

        return $model;
    }
}
