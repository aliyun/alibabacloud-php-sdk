<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendCustomMessageToRoomUsersRequest\request;
use AlibabaCloud\Tea\Model;

class SendCustomMessageToRoomUsersRequest extends Model
{
    /**
     * @description 请求参数的结构体。
     *
     * @var request
     */
    public $request;

    /**
     * @description 指定的消息接受者的用户ID列表，大小不得超过100。
     *
     * @var string[]
     */
    public $receivers;
    protected $_name = [
        'request'   => 'Request',
        'receivers' => 'Receivers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->request) {
            $res['Request'] = null !== $this->request ? $this->request->toMap() : null;
        }
        if (null !== $this->receivers) {
            $res['Receivers'] = $this->receivers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCustomMessageToRoomUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Request'])) {
            $model->request = request::fromMap($map['Request']);
        }
        if (isset($map['Receivers'])) {
            if (!empty($map['Receivers'])) {
                $model->receivers = $map['Receivers'];
            }
        }

        return $model;
    }
}
