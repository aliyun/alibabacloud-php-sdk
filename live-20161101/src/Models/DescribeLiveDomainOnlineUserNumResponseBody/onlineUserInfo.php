<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo\liveStreamOnlineUserNumInfo;

class onlineUserInfo extends Model
{
    /**
     * @var liveStreamOnlineUserNumInfo[]
     */
    public $liveStreamOnlineUserNumInfo;
    protected $_name = [
        'liveStreamOnlineUserNumInfo' => 'LiveStreamOnlineUserNumInfo',
    ];

    public function validate()
    {
        if (\is_array($this->liveStreamOnlineUserNumInfo)) {
            Model::validateArray($this->liveStreamOnlineUserNumInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamOnlineUserNumInfo) {
            if (\is_array($this->liveStreamOnlineUserNumInfo)) {
                $res['LiveStreamOnlineUserNumInfo'] = [];
                $n1 = 0;
                foreach ($this->liveStreamOnlineUserNumInfo as $item1) {
                    $res['LiveStreamOnlineUserNumInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['LiveStreamOnlineUserNumInfo'])) {
            if (!empty($map['LiveStreamOnlineUserNumInfo'])) {
                $model->liveStreamOnlineUserNumInfo = [];
                $n1 = 0;
                foreach ($map['LiveStreamOnlineUserNumInfo'] as $item1) {
                    $model->liveStreamOnlineUserNumInfo[$n1] = liveStreamOnlineUserNumInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
