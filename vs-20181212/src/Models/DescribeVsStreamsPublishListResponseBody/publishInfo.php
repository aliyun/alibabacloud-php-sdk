<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsPublishListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsPublishListResponseBody\publishInfo\liveStreamPublishInfo;

class publishInfo extends Model
{
    /**
     * @var liveStreamPublishInfo[]
     */
    public $liveStreamPublishInfo;
    protected $_name = [
        'liveStreamPublishInfo' => 'LiveStreamPublishInfo',
    ];

    public function validate()
    {
        if (\is_array($this->liveStreamPublishInfo)) {
            Model::validateArray($this->liveStreamPublishInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamPublishInfo) {
            if (\is_array($this->liveStreamPublishInfo)) {
                $res['LiveStreamPublishInfo'] = [];
                $n1 = 0;
                foreach ($this->liveStreamPublishInfo as $item1) {
                    $res['LiveStreamPublishInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveStreamPublishInfo'])) {
            if (!empty($map['LiveStreamPublishInfo'])) {
                $model->liveStreamPublishInfo = [];
                $n1 = 0;
                foreach ($map['LiveStreamPublishInfo'] as $item1) {
                    $model->liveStreamPublishInfo[$n1++] = liveStreamPublishInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
