<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class CreatePlayingListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $openCreatePlayingListRequestShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'deviceInfoShrink'                   => 'DeviceInfo',
        'openCreatePlayingListRequestShrink' => 'OpenCreatePlayingListRequest',
        'userInfoShrink'                     => 'UserInfo',
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
        if (null !== $this->openCreatePlayingListRequestShrink) {
            $res['OpenCreatePlayingListRequest'] = $this->openCreatePlayingListRequestShrink;
        }
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePlayingListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }
        if (isset($map['OpenCreatePlayingListRequest'])) {
            $model->openCreatePlayingListRequestShrink = $map['OpenCreatePlayingListRequest'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
