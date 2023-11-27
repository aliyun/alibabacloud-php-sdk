<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendCustomMessageToRoomUsersRequest\request;
use AlibabaCloud\Tea\Model;

class SendCustomMessageToRoomUsersRequest extends Model
{
    /**
     * @var string[]
     */
    public $receivers;

    /**
     * @var request
     */
    public $request;
    protected $_name = [
        'receivers' => 'Receivers',
        'request'   => 'Request',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receivers) {
            $res['Receivers'] = $this->receivers;
        }
        if (null !== $this->request) {
            $res['Request'] = null !== $this->request ? $this->request->toMap() : null;
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
        if (isset($map['Receivers'])) {
            if (!empty($map['Receivers'])) {
                $model->receivers = $map['Receivers'];
            }
        }
        if (isset($map['Request'])) {
            $model->request = request::fromMap($map['Request']);
        }

        return $model;
    }
}
