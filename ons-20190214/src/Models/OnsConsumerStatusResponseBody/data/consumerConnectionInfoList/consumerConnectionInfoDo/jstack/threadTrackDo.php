<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack\threadTrackDo\trackList;
use AlibabaCloud\Tea\Model;

class threadTrackDo extends Model
{
    /**
     * @var trackList
     */
    public $trackList;

    /**
     * @var string
     */
    public $thread;
    protected $_name = [
        'trackList' => 'TrackList',
        'thread'    => 'Thread',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trackList) {
            $res['TrackList'] = null !== $this->trackList ? $this->trackList->toMap() : null;
        }
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return threadTrackDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrackList'])) {
            $model->trackList = trackList::fromMap($map['TrackList']);
        }
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }

        return $model;
    }
}
