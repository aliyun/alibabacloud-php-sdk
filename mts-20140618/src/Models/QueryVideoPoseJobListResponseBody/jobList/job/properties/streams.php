<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponseBody\jobList\job\properties;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponseBody\jobList\job\properties\streams\audioStreamList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponseBody\jobList\job\properties\streams\subtitleStreamList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponseBody\jobList\job\properties\streams\videoStreamList;
use AlibabaCloud\Tea\Model;

class streams extends Model
{
    /**
     * @var videoStreamList
     */
    public $videoStreamList;

    /**
     * @var audioStreamList
     */
    public $audioStreamList;

    /**
     * @var subtitleStreamList
     */
    public $subtitleStreamList;
    protected $_name = [
        'videoStreamList'    => 'VideoStreamList',
        'audioStreamList'    => 'AudioStreamList',
        'subtitleStreamList' => 'SubtitleStreamList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoStreamList) {
            $res['VideoStreamList'] = null !== $this->videoStreamList ? $this->videoStreamList->toMap() : null;
        }
        if (null !== $this->audioStreamList) {
            $res['AudioStreamList'] = null !== $this->audioStreamList ? $this->audioStreamList->toMap() : null;
        }
        if (null !== $this->subtitleStreamList) {
            $res['SubtitleStreamList'] = null !== $this->subtitleStreamList ? $this->subtitleStreamList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoStreamList'])) {
            $model->videoStreamList = videoStreamList::fromMap($map['VideoStreamList']);
        }
        if (isset($map['AudioStreamList'])) {
            $model->audioStreamList = audioStreamList::fromMap($map['AudioStreamList']);
        }
        if (isset($map['SubtitleStreamList'])) {
            $model->subtitleStreamList = subtitleStreamList::fromMap($map['SubtitleStreamList']);
        }

        return $model;
    }
}
