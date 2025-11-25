<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack\threadTrackDo\trackList;

class threadTrackDo extends Model
{
    /**
     * @var string
     */
    public $thread;

    /**
     * @var trackList
     */
    public $trackList;
    protected $_name = [
        'thread' => 'Thread',
        'trackList' => 'TrackList',
    ];

    public function validate()
    {
        if (null !== $this->trackList) {
            $this->trackList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }

        if (null !== $this->trackList) {
            $res['TrackList'] = null !== $this->trackList ? $this->trackList->toArray($noStream) : $this->trackList;
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
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }

        if (isset($map['TrackList'])) {
            $model->trackList = trackList::fromMap($map['TrackList']);
        }

        return $model;
    }
}
