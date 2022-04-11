<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshMediaPlayUrlsRequest extends Model
{
    /**
     * @description 播放流清晰度
     *
     * @var string
     */
    public $definitions;

    /**
     * @description 播放流格式
     *
     * @var string
     */
    public $formats;

    /**
     * @description 媒资ID列表
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @description 结果类型：Single或Multiple
     *
     * @var string
     */
    public $resultType;

    /**
     * @description M3U8文件的ts链接数量
     *
     * @var int
     */
    public $sliceCount;

    /**
     * @description M3U8文件是否获取ts链接
     *
     * @var bool
     */
    public $sliceFlag;

    /**
     * @description 播放流类型：视频或音频
     *
     * @var string
     */
    public $streamType;

    /**
     * @description Refresh: 刷新。Preload: 预热
     *
     * @var string
     */
    public $taskType;

    /**
     * @description 回调设置
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'definitions' => 'Definitions',
        'formats'     => 'Formats',
        'mediaIds'    => 'MediaIds',
        'resultType'  => 'ResultType',
        'sliceCount'  => 'SliceCount',
        'sliceFlag'   => 'SliceFlag',
        'streamType'  => 'StreamType',
        'taskType'    => 'TaskType',
        'userData'    => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definitions) {
            $res['Definitions'] = $this->definitions;
        }
        if (null !== $this->formats) {
            $res['Formats'] = $this->formats;
        }
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->sliceCount) {
            $res['SliceCount'] = $this->sliceCount;
        }
        if (null !== $this->sliceFlag) {
            $res['SliceFlag'] = $this->sliceFlag;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshMediaPlayUrlsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Definitions'])) {
            $model->definitions = $map['Definitions'];
        }
        if (isset($map['Formats'])) {
            $model->formats = $map['Formats'];
        }
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['SliceCount'])) {
            $model->sliceCount = $map['SliceCount'];
        }
        if (isset($map['SliceFlag'])) {
            $model->sliceFlag = $map['SliceFlag'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
