<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayMeta\liveTranscodingTaskList;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayMeta\meta;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayMeta\offlineVideoTranscodingList;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayMeta\quickVideoList;
use AlibabaCloud\Tea\Model;

class VideoPreviewPlayMeta extends Model
{
    /**
     * @example live_transcoding
     *
     * @var string
     */
    public $category;

    /**
     * @var liveTranscodingTaskList[]
     */
    public $liveTranscodingTaskList;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @var offlineVideoTranscodingList[]
     */
    public $offlineVideoTranscodingList;

    /**
     * @var quickVideoList[]
     */
    public $quickVideoList;
    protected $_name = [
        'category'                    => 'category',
        'liveTranscodingTaskList'     => 'live_transcoding_task_list',
        'meta'                        => 'meta',
        'offlineVideoTranscodingList' => 'offline_video_transcoding_list',
        'quickVideoList'              => 'quick_video_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->liveTranscodingTaskList) {
            $res['live_transcoding_task_list'] = [];
            if (null !== $this->liveTranscodingTaskList && \is_array($this->liveTranscodingTaskList)) {
                $n = 0;
                foreach ($this->liveTranscodingTaskList as $item) {
                    $res['live_transcoding_task_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->offlineVideoTranscodingList) {
            $res['offline_video_transcoding_list'] = [];
            if (null !== $this->offlineVideoTranscodingList && \is_array($this->offlineVideoTranscodingList)) {
                $n = 0;
                foreach ($this->offlineVideoTranscodingList as $item) {
                    $res['offline_video_transcoding_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->quickVideoList) {
            $res['quick_video_list'] = [];
            if (null !== $this->quickVideoList && \is_array($this->quickVideoList)) {
                $n = 0;
                foreach ($this->quickVideoList as $item) {
                    $res['quick_video_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VideoPreviewPlayMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['live_transcoding_task_list'])) {
            if (!empty($map['live_transcoding_task_list'])) {
                $model->liveTranscodingTaskList = [];
                $n                              = 0;
                foreach ($map['live_transcoding_task_list'] as $item) {
                    $model->liveTranscodingTaskList[$n++] = null !== $item ? liveTranscodingTaskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }
        if (isset($map['offline_video_transcoding_list'])) {
            if (!empty($map['offline_video_transcoding_list'])) {
                $model->offlineVideoTranscodingList = [];
                $n                                  = 0;
                foreach ($map['offline_video_transcoding_list'] as $item) {
                    $model->offlineVideoTranscodingList[$n++] = null !== $item ? offlineVideoTranscodingList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['quick_video_list'])) {
            if (!empty($map['quick_video_list'])) {
                $model->quickVideoList = [];
                $n                     = 0;
                foreach ($map['quick_video_list'] as $item) {
                    $model->quickVideoList[$n++] = null !== $item ? quickVideoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
