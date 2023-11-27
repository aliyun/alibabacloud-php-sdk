<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DestroyRoomRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @example testAppKey
     *
     * @var string
     */
    public $domain;

    /**
     * @example testOpenId
     *
     * @var string
     */
    public $openId;

    /**
     * @example testRoomId
     *
     * @var string
     */
    public $roomId;
    protected $_name = [
        'domain' => 'domain',
        'openId' => 'openId',
        'roomId' => 'roomId',
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
        if (null !== $this->openId) {
            $res['openId'] = $this->openId;
        }
        if (null !== $this->roomId) {
            $res['roomId'] = $this->roomId;
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
        if (isset($map['openId'])) {
            $model->openId = $map['openId'];
        }
        if (isset($map['roomId'])) {
            $model->roomId = $map['roomId'];
        }

        return $model;
    }
}
