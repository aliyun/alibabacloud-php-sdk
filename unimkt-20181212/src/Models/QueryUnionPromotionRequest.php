<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class QueryUnionPromotionRequest extends Model
{
    /**
     * @var int
     */
    public $alipayOpenId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var string
     */
    public $unionBizType;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;

    /**
     * @var string
     */
    public $proxyChannelId;
    protected $_name = [
        'alipayOpenId'   => 'AlipayOpenId',
        'channelId'      => 'ChannelId',
        'sign'           => 'Sign',
        'unionBizType'   => 'UnionBizType',
        'userId'         => 'UserId',
        'userNick'       => 'UserNick',
        'proxyChannelId' => 'ProxyChannelId',
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
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->unionBizType) {
            $res['UnionBizType'] = $this->unionBizType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->proxyChannelId) {
            $res['ProxyChannelId'] = $this->proxyChannelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUnionPromotionRequest
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
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['UnionBizType'])) {
            $model->unionBizType = $map['UnionBizType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['ProxyChannelId'])) {
            $model->proxyChannelId = $map['ProxyChannelId'];
        }

        return $model;
    }
}
