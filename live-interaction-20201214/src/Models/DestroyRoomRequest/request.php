<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DestroyRoomRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @description 应用appKey
     *
     * @var string
     */
    public $domain;

    /**
     * @description 房间id
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 操作人id
     *
     * @var string
     */
    public $openId;
    protected $_name = [
        'domain' => 'domain',
        'roomId' => 'roomId',
        'openId' => 'openId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->roomId) {
            $res['roomId'] = $this->roomId;
        }
        if (null !== $this->openId) {
            $res['openId'] = $this->openId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['roomId'])) {
            $model->roomId = $map['roomId'];
        }
        if (isset($map['openId'])) {
            $model->openId = $map['openId'];
        }

        return $model;
    }
}
