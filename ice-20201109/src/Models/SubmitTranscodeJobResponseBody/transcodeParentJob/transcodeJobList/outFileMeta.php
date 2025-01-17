<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\outFileMeta\audioStreamInfoList;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\outFileMeta\fileBasicInfo;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\outFileMeta\videoStreamInfoList;

class outFileMeta extends Model
{
    /**
     * @var audioStreamInfoList[]
     */
    public $audioStreamInfoList;
    /**
     * @var fileBasicInfo
     */
    public $fileBasicInfo;
    /**
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
        if (\is_array($this->audioStreamInfoList)) {
            Model::validateArray($this->audioStreamInfoList);
        }
        if (null !== $this->fileBasicInfo) {
            $this->fileBasicInfo->validate();
        }
        if (\is_array($this->videoStreamInfoList)) {
            Model::validateArray($this->videoStreamInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioStreamInfoList) {
            if (\is_array($this->audioStreamInfoList)) {
                $res['AudioStreamInfoList'] = [];
                $n1                         = 0;
                foreach ($this->audioStreamInfoList as $item1) {
                    $res['AudioStreamInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->fileBasicInfo) {
            $res['FileBasicInfo'] = null !== $this->fileBasicInfo ? $this->fileBasicInfo->toArray($noStream) : $this->fileBasicInfo;
        }

        if (null !== $this->videoStreamInfoList) {
            if (\is_array($this->videoStreamInfoList)) {
                $res['VideoStreamInfoList'] = [];
                $n1                         = 0;
                foreach ($this->videoStreamInfoList as $item1) {
                    $res['VideoStreamInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AudioStreamInfoList'])) {
            if (!empty($map['AudioStreamInfoList'])) {
                $model->audioStreamInfoList = [];
                $n1                         = 0;
                foreach ($map['AudioStreamInfoList'] as $item1) {
                    $model->audioStreamInfoList[$n1++] = audioStreamInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['FileBasicInfo'])) {
            $model->fileBasicInfo = fileBasicInfo::fromMap($map['FileBasicInfo']);
        }

        if (isset($map['VideoStreamInfoList'])) {
            if (!empty($map['VideoStreamInfoList'])) {
                $model->videoStreamInfoList = [];
                $n1                         = 0;
                foreach ($map['VideoStreamInfoList'] as $item1) {
                    $model->videoStreamInfoList[$n1++] = videoStreamInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
