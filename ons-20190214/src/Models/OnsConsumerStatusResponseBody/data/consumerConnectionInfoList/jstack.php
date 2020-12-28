<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList;

use AlibabaCloud\Tea\Model;

class jstack extends Model
{
    /**
     * @var string[]
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
            $res['TrackList'] = $this->trackList;
        }
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jstack
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrackList'])) {
            if (!empty($map['TrackList'])) {
                $model->trackList = $map['TrackList'];
            }
        }
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }

        return $model;
    }
}
