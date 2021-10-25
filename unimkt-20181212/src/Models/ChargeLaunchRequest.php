<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ChargeLaunchRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $alipayOpenId;

    /**
     * @var string
     */
    public $outerCode;

    /**
     * @var string
     */
    public $extra;
    protected $_name = [
        'channelId'    => 'ChannelId',
        'alipayOpenId' => 'AlipayOpenId',
        'outerCode'    => 'OuterCode',
        'extra'        => 'Extra',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->alipayOpenId) {
            $res['AlipayOpenId'] = $this->alipayOpenId;
        }
        if (null !== $this->outerCode) {
            $res['OuterCode'] = $this->outerCode;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChargeLaunchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['AlipayOpenId'])) {
            $model->alipayOpenId = $map['AlipayOpenId'];
        }
        if (isset($map['OuterCode'])) {
            $model->outerCode = $map['OuterCode'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        return $model;
    }
}
