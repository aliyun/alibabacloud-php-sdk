<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetCodeEnhanceShrinkRequest extends Model
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
        'userInfoShrink'    => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetCodeEnhanceShrinkRequest
     */
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
