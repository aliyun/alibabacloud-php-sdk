<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponseBody\liveRecordVideoList\liveRecordVideo;

class liveRecordVideoList extends Model
{
    /**
     * @var liveRecordVideo[]
     */
    public $liveRecordVideo;
    protected $_name = [
        'liveRecordVideo' => 'LiveRecordVideo',
    ];

    public function validate()
    {
        if (\is_array($this->liveRecordVideo)) {
            Model::validateArray($this->liveRecordVideo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveRecordVideo) {
            if (\is_array($this->liveRecordVideo)) {
                $res['LiveRecordVideo'] = [];
                $n1 = 0;
                foreach ($this->liveRecordVideo as $item1) {
                    $res['LiveRecordVideo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveRecordVideo'])) {
            if (!empty($map['LiveRecordVideo'])) {
                $model->liveRecordVideo = [];
                $n1 = 0;
                foreach ($map['LiveRecordVideo'] as $item1) {
                    $model->liveRecordVideo[$n1] = liveRecordVideo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
