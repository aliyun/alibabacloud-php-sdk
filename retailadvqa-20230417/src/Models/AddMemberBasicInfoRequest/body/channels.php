<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\AddMemberBasicInfoRequest\body;

use AlibabaCloud\Tea\Model;

class channels extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $channelCode;

    /**
     * @var string
     */
    public $channelOpenId;

    /**
     * @var string
     */
    public $channelUnionId;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'appId'          => 'AppId',
        'channelCode'    => 'ChannelCode',
        'channelOpenId'  => 'ChannelOpenId',
        'channelUnionId' => 'ChannelUnionId',
        'scene'          => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }
        if (null !== $this->channelOpenId) {
            $res['ChannelOpenId'] = $this->channelOpenId;
        }
        if (null !== $this->channelUnionId) {
            $res['ChannelUnionId'] = $this->channelUnionId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }
        if (isset($map['ChannelOpenId'])) {
            $model->channelOpenId = $map['ChannelOpenId'];
        }
        if (isset($map['ChannelUnionId'])) {
            $model->channelUnionId = $map['ChannelUnionId'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
