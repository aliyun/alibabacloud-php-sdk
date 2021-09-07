<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetStandardRoomJumpUrlResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 样板间跳转协议地址
     *
     * @var string
     */
    public $standardRoomJumpUrl;
    protected $_name = [
        'standardRoomJumpUrl' => 'StandardRoomJumpUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->standardRoomJumpUrl) {
            $res['StandardRoomJumpUrl'] = $this->standardRoomJumpUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StandardRoomJumpUrl'])) {
            $model->standardRoomJumpUrl = $map['StandardRoomJumpUrl'];
        }

        return $model;
    }
}
