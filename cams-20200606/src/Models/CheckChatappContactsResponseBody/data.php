<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CheckChatappContactsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 号码
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description 状态
     * 有效账号为"valid"，无法账号为"invalid"，查询失败返回"failed"
     * @var string
     */
    public $status;
    protected $_name = [
        'phoneNumber' => 'PhoneNumber',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
