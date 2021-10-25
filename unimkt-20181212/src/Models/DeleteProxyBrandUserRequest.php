<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DeleteProxyBrandUserRequest extends Model
{
    /**
     * @var int
     */
    public $proxyUserId;

    /**
     * @var string
     */
    public $brandUserNick;

    /**
     * @var string
     */
    public $channelId;
    protected $_name = [
        'proxyUserId'   => 'ProxyUserId',
        'brandUserNick' => 'BrandUserNick',
        'channelId'     => 'ChannelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->brandUserNick) {
            $res['BrandUserNick'] = $this->brandUserNick;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteProxyBrandUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['BrandUserNick'])) {
            $model->brandUserNick = $map['BrandUserNick'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        return $model;
    }
}
