<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\GetUserBasicInfoResponseBody\unionIds;
use AlibabaCloud\Tea\Model;

class GetUserBasicInfoResponseBody extends Model
{
    /**
     * @example https://xxxxxx
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $nickname;

    /**
     * @example 3hPPBd9YuhfJQCzZ/07AAWdoO3K8zCb/KAqW96zPHXPiFkzjB/JfcWuuFHQQDaGZ4wVbNMV6wYuj075p/rhVLg==
     *
     * @var string
     */
    public $openId;

    /**
     * @example 4070039E-5822-1F32-9295-1D2883E48BA5
     *
     * @var string
     */
    public $requestId;

    /**
     * @var unionIds[]
     */
    public $unionIds;
    protected $_name = [
        'avatarUrl' => 'AvatarUrl',
        'nickname'  => 'Nickname',
        'openId'    => 'OpenId',
        'requestId' => 'RequestId',
        'unionIds'  => 'UnionIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->openId) {
            $res['OpenId'] = $this->openId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->unionIds) {
            $res['UnionIds'] = [];
            if (null !== $this->unionIds && \is_array($this->unionIds)) {
                $n = 0;
                foreach ($this->unionIds as $item) {
                    $res['UnionIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserBasicInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['OpenId'])) {
            $model->openId = $map['OpenId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UnionIds'])) {
            if (!empty($map['UnionIds'])) {
                $model->unionIds = [];
                $n               = 0;
                foreach ($map['UnionIds'] as $item) {
                    $model->unionIds[$n++] = null !== $item ? unionIds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
