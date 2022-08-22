<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceStatusShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $payloadShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'payloadShrink'  => 'Payload',
        'userInfoShrink' => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payloadShrink) {
            $res['Payload'] = $this->payloadShrink;
        }
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceStatusShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Payload'])) {
            $model->payloadShrink = $map['Payload'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
