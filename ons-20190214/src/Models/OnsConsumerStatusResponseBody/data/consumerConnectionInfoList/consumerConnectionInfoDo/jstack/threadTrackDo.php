<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack\threadTrackDo\trackList;
use AlibabaCloud\Tea\Model;

class threadTrackDo extends Model
{
    /**
     * @description The name of the thread.
     *
     * @example ConsumeMessageThread_0
     *
     * @var string
     */
    public $thread;

    /**
     * @description The details of thread stack traces.
     *
     * @var trackList
     */
    public $trackList;
    protected $_name = [
        'thread'    => 'Thread',
        'trackList' => 'TrackList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }
        if (null !== $this->trackList) {
            $res['TrackList'] = null !== $this->trackList ? $this->trackList->toMap() : null;
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
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }
        if (isset($map['TrackList'])) {
            $model->trackList = trackList::fromMap($map['TrackList']);
        }

        return $model;
    }
}
