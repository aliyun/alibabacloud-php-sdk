<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyRecordsResponseBody\notifyRecordsInfo\liveStreamNotifyRecordsInfo;

class notifyRecordsInfo extends Model
{
    /**
     * @var liveStreamNotifyRecordsInfo[]
     */
    public $liveStreamNotifyRecordsInfo;
    protected $_name = [
        'liveStreamNotifyRecordsInfo' => 'LiveStreamNotifyRecordsInfo',
    ];

    public function validate()
    {
        if (\is_array($this->liveStreamNotifyRecordsInfo)) {
            Model::validateArray($this->liveStreamNotifyRecordsInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamNotifyRecordsInfo) {
            if (\is_array($this->liveStreamNotifyRecordsInfo)) {
                $res['LiveStreamNotifyRecordsInfo'] = [];
                $n1 = 0;
                foreach ($this->liveStreamNotifyRecordsInfo as $item1) {
                    $res['LiveStreamNotifyRecordsInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveStreamNotifyRecordsInfo'])) {
            if (!empty($map['LiveStreamNotifyRecordsInfo'])) {
                $model->liveStreamNotifyRecordsInfo = [];
                $n1 = 0;
                foreach ($map['LiveStreamNotifyRecordsInfo'] as $item1) {
                    $model->liveStreamNotifyRecordsInfo[$n1] = liveStreamNotifyRecordsInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
