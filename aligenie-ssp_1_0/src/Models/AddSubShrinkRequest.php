<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class AddSubShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addSubscriptionInfoRequestShrink;

    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'addSubscriptionInfoRequestShrink' => 'AddSubscriptionInfoRequest',
        'deviceInfoShrink'                 => 'DeviceInfo',
        'userInfoShrink'                   => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addSubscriptionInfoRequestShrink) {
            $res['AddSubscriptionInfoRequest'] = $this->addSubscriptionInfoRequestShrink;
        }
        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSubShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddSubscriptionInfoRequest'])) {
            $model->addSubscriptionInfoRequestShrink = $map['AddSubscriptionInfoRequest'];
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
