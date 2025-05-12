<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob\properties;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob\properties\streams\audioStreamList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob\properties\streams\subtitleStreamList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponseBody\mediaInfoJobList\mediaInfoJob\properties\streams\videoStreamList;

class streams extends Model
{
    /**
     * @var audioStreamList
     */
    public $audioStreamList;

    /**
     * @var subtitleStreamList
     */
    public $subtitleStreamList;

    /**
     * @var videoStreamList
     */
    public $videoStreamList;
    protected $_name = [
        'audioStreamList' => 'AudioStreamList',
        'subtitleStreamList' => 'SubtitleStreamList',
        'videoStreamList' => 'VideoStreamList',
    ];

    public function validate()
    {
        if (null !== $this->audioStreamList) {
            $this->audioStreamList->validate();
        }
        if (null !== $this->subtitleStreamList) {
            $this->subtitleStreamList->validate();
        }
        if (null !== $this->videoStreamList) {
            $this->videoStreamList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioStreamList) {
            $res['AudioStreamList'] = null !== $this->audioStreamList ? $this->audioStreamList->toArray($noStream) : $this->audioStreamList;
        }

        if (null !== $this->subtitleStreamList) {
            $res['SubtitleStreamList'] = null !== $this->subtitleStreamList ? $this->subtitleStreamList->toArray($noStream) : $this->subtitleStreamList;
        }

        if (null !== $this->videoStreamList) {
            $res['VideoStreamList'] = null !== $this->videoStreamList ? $this->videoStreamList->toArray($noStream) : $this->videoStreamList;
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
        if (isset($map['AudioStreamList'])) {
            $model->audioStreamList = audioStreamList::fromMap($map['AudioStreamList']);
        }

        if (isset($map['SubtitleStreamList'])) {
            $model->subtitleStreamList = subtitleStreamList::fromMap($map['SubtitleStreamList']);
        }

        if (isset($map['VideoStreamList'])) {
            $model->videoStreamList = videoStreamList::fromMap($map['VideoStreamList']);
        }

        return $model;
    }
}
