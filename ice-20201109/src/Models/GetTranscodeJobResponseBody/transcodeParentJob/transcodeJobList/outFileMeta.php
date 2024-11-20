<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\outFileMeta\audioStreamInfoList;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\outFileMeta\fileBasicInfo;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\outFileMeta\videoStreamInfoList;
use AlibabaCloud\Tea\Model;

class outFileMeta extends Model
{
    /**
     * @description The information about the audio stream.
     *
     * @var audioStreamInfoList[]
     */
    public $audioStreamInfoList;

    /**
     * @description The basic file information.
     *
     * @var fileBasicInfo
     */
    public $fileBasicInfo;

    /**
     * @description The information about the video stream.
     *
     * @var videoStreamInfoList[]
     */
    public $videoStreamInfoList;
    protected $_name = [
        'audioStreamInfoList' => 'AudioStreamInfoList',
        'fileBasicInfo'       => 'FileBasicInfo',
        'videoStreamInfoList' => 'VideoStreamInfoList',
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
     * @return outFileMeta
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
