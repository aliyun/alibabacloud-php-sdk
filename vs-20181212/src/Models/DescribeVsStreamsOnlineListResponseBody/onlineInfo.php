<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsOnlineListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsOnlineListResponseBody\onlineInfo\liveStreamOnlineInfo;

class onlineInfo extends Model
{
    /**
     * @var liveStreamOnlineInfo[]
     */
    public $liveStreamOnlineInfo;
    protected $_name = [
        'liveStreamOnlineInfo' => 'LiveStreamOnlineInfo',
    ];

    public function validate()
    {
        if (\is_array($this->liveStreamOnlineInfo)) {
            Model::validateArray($this->liveStreamOnlineInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamOnlineInfo) {
            if (\is_array($this->liveStreamOnlineInfo)) {
                $res['LiveStreamOnlineInfo'] = [];
                $n1 = 0;
                foreach ($this->liveStreamOnlineInfo as $item1) {
                    $res['LiveStreamOnlineInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveStreamOnlineInfo'])) {
            if (!empty($map['LiveStreamOnlineInfo'])) {
                $model->liveStreamOnlineInfo = [];
                $n1 = 0;
                foreach ($map['LiveStreamOnlineInfo'] as $item1) {
                    $model->liveStreamOnlineInfo[$n1] = liveStreamOnlineInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
