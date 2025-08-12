<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsControlHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsControlHistoryResponseBody\controlInfo\liveStreamControlInfo;

class controlInfo extends Model
{
    /**
     * @var liveStreamControlInfo[]
     */
    public $liveStreamControlInfo;
    protected $_name = [
        'liveStreamControlInfo' => 'LiveStreamControlInfo',
    ];

    public function validate()
    {
        if (\is_array($this->liveStreamControlInfo)) {
            Model::validateArray($this->liveStreamControlInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamControlInfo) {
            if (\is_array($this->liveStreamControlInfo)) {
                $res['LiveStreamControlInfo'] = [];
                $n1 = 0;
                foreach ($this->liveStreamControlInfo as $item1) {
                    $res['LiveStreamControlInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveStreamControlInfo'])) {
            if (!empty($map['LiveStreamControlInfo'])) {
                $model->liveStreamControlInfo = [];
                $n1 = 0;
                foreach ($map['LiveStreamControlInfo'] as $item1) {
                    $model->liveStreamControlInfo[$n1] = liveStreamControlInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
