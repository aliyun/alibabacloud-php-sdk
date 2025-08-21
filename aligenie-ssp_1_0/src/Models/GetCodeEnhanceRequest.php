<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCodeEnhanceRequest\channelInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCodeEnhanceRequest\userInfo;

class GetCodeEnhanceRequest extends Model
{
    /**
     * @var channelInfo
     */
    public $channelInfo;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'channelInfo' => 'ChannelInfo',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->channelInfo) {
            $this->channelInfo->validate();
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelInfo) {
            $res['ChannelInfo'] = null !== $this->channelInfo ? $this->channelInfo->toArray($noStream) : $this->channelInfo;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
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
            $model->channelInfo = channelInfo::fromMap($map['ChannelInfo']);
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
