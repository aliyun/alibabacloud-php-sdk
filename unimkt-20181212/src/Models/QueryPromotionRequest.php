<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class QueryPromotionRequest extends Model
{
    /**
     * @var string
     */
    public $alipayOpenId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'alipayOpenId' => 'AlipayOpenId',
        'channelId'    => 'ChannelId',
        'extra'        => 'Extra',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alipayOpenId) {
            $res['AlipayOpenId'] = $this->alipayOpenId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPromotionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlipayOpenId'])) {
            $model->alipayOpenId = $map['AlipayOpenId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
