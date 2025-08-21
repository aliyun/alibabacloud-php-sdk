<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;

class ListDeviceByUserIdAndChanelShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $channelInfoShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'channelInfoShrink' => 'ChannelInfo',
        'userInfoShrink' => 'UserInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelInfoShrink) {
            $res['ChannelInfo'] = $this->channelInfoShrink;
        }

        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelInfo'])) {
            $model->channelInfoShrink = $map['ChannelInfo'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
