<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderRequest\payload;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderRequest\userInfo;
use AlibabaCloud\Tea\Model;

class ListHotelOrderRequest extends Model
{
    /**
     * @var payload
     */
    public $payload;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'payload'  => 'Payload',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payload) {
            $res['Payload'] = null !== $this->payload ? $this->payload->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotelOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Payload'])) {
            $model->payload = payload::fromMap($map['Payload']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
