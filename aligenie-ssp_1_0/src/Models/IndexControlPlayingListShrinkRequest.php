<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class IndexControlPlayingListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $openIndexControlRequestShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'deviceInfoShrink'              => 'DeviceInfo',
        'openIndexControlRequestShrink' => 'OpenIndexControlRequest',
        'userInfoShrink'                => 'UserInfo',
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
        if (null !== $this->openIndexControlRequestShrink) {
            $res['OpenIndexControlRequest'] = $this->openIndexControlRequestShrink;
        }
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IndexControlPlayingListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }
        if (isset($map['OpenIndexControlRequest'])) {
            $model->openIndexControlRequestShrink = $map['OpenIndexControlRequest'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
