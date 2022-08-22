<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCodeEnhanceRequest\channelInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCodeEnhanceRequest\userInfo;
use AlibabaCloud\Tea\Model;

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
        'userInfo'    => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelInfo) {
            $res['ChannelInfo'] = null !== $this->channelInfo ? $this->channelInfo->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCodeEnhanceRequest
     */
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
