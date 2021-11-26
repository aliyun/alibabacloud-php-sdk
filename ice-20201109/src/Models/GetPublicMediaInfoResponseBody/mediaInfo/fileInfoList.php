<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo\fileInfoList\audioStreamInfoList;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo\fileInfoList\fileBasicInfo;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo\fileInfoList\subtitleStreamInfoList;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo\fileInfoList\videoStreamInfoList;
use AlibabaCloud\Tea\Model;

class fileInfoList extends Model
{
    /**
     * @description 音频流信息，一个媒资可能有多条音频流
     *
     * @var audioStreamInfoList[]
     */
    public $audioStreamInfoList;

    /**
     * @description 文件基础信息，包含时长，大小等
     *
     * @var fileBasicInfo
     */
    public $fileBasicInfo;

    /**
     * @description 字幕流信息，一个媒资可能有多条字幕流
     *
     * @var subtitleStreamInfoList[]
     */
    public $subtitleStreamInfoList;

    /**
     * @description 视频流信息，一个媒资可能有多条视频流
     *
     * @var videoStreamInfoList[]
     */
    public $videoStreamInfoList;
    protected $_name = [
        'audioStreamInfoList'    => 'AudioStreamInfoList',
        'fileBasicInfo'          => 'FileBasicInfo',
        'subtitleStreamInfoList' => 'SubtitleStreamInfoList',
        'videoStreamInfoList'    => 'VideoStreamInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioStreamInfoList) {
            $res['AudioStreamInfoList'] = [];
            if (null !== $this->audioStreamInfoList && \is_array($this->audioStreamInfoList)) {
                $n = 0;
                foreach ($this->audioStreamInfoList as $item) {
                    $res['AudioStreamInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileBasicInfo) {
            $res['FileBasicInfo'] = null !== $this->fileBasicInfo ? $this->fileBasicInfo->toMap() : null;
        }
        if (null !== $this->subtitleStreamInfoList) {
            $res['SubtitleStreamInfoList'] = [];
            if (null !== $this->subtitleStreamInfoList && \is_array($this->subtitleStreamInfoList)) {
                $n = 0;
                foreach ($this->subtitleStreamInfoList as $item) {
                    $res['SubtitleStreamInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoStreamInfoList) {
            $res['VideoStreamInfoList'] = [];
            if (null !== $this->videoStreamInfoList && \is_array($this->videoStreamInfoList)) {
                $n = 0;
                foreach ($this->videoStreamInfoList as $item) {
                    $res['VideoStreamInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioStreamInfoList'])) {
            if (!empty($map['AudioStreamInfoList'])) {
                $model->audioStreamInfoList = [];
                $n                          = 0;
                foreach ($map['AudioStreamInfoList'] as $item) {
                    $model->audioStreamInfoList[$n++] = null !== $item ? audioStreamInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FileBasicInfo'])) {
            $model->fileBasicInfo = fileBasicInfo::fromMap($map['FileBasicInfo']);
        }
        if (isset($map['SubtitleStreamInfoList'])) {
            if (!empty($map['SubtitleStreamInfoList'])) {
                $model->subtitleStreamInfoList = [];
                $n                             = 0;
                foreach ($map['SubtitleStreamInfoList'] as $item) {
                    $model->subtitleStreamInfoList[$n++] = null !== $item ? subtitleStreamInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoStreamInfoList'])) {
            if (!empty($map['VideoStreamInfoList'])) {
                $model->videoStreamInfoList = [];
                $n                          = 0;
                foreach ($map['VideoStreamInfoList'] as $item) {
                    $model->videoStreamInfoList[$n++] = null !== $item ? videoStreamInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
