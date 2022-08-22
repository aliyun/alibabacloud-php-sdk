<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class ProgressControlShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $openProgressControlRequestShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'deviceInfoShrink'                 => 'DeviceInfo',
        'openProgressControlRequestShrink' => 'OpenProgressControlRequest',
        'userInfoShrink'                   => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }
        if (null !== $this->openProgressControlRequestShrink) {
            $res['OpenProgressControlRequest'] = $this->openProgressControlRequestShrink;
        }
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProgressControlShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }
        if (isset($map['OpenProgressControlRequest'])) {
            $model->openProgressControlRequestShrink = $map['OpenProgressControlRequest'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
