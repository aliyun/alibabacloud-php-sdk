<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\GetUserBasicInfoResponseBody\unionIds;

class GetUserBasicInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $openId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var unionIds[]
     */
    public $unionIds;
    protected $_name = [
        'avatarUrl' => 'AvatarUrl',
        'nickname' => 'Nickname',
        'openId' => 'OpenId',
        'requestId' => 'RequestId',
        'unionIds' => 'UnionIds',
    ];

    public function validate()
    {
        if (\is_array($this->unionIds)) {
            Model::validateArray($this->unionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->unionIds)) {
                $res['UnionIds'] = [];
                $n1 = 0;
                foreach ($this->unionIds as $item1) {
                    $res['UnionIds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['UnionIds'] as $item1) {
                    $model->unionIds[$n1++] = unionIds::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
