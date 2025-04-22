<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayInfo\liveTranscodingTaskList;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayInfo\meta;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayInfo\offlineVideoTranscodingList;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayInfo\quickVideoList;

class VideoPreviewPlayInfo extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var VideoPreviewSubtitleInfo[]
     */
    public $liveTranscodingSubtitleTaskList;

    /**
     * @var liveTranscodingTaskList[]
     */
    public $liveTranscodingTaskList;

    /**
     * @var string
     */
    public $masterUrl;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @var offlineVideoTranscodingList[]
     */
    public $offlineVideoTranscodingList;

    /**
     * @var VideoPreviewSubtitleInfo[]
     */
    public $offlineVideoTranscodingSubtitleList;

    /**
     * @var quickVideoList[]
     */
    public $quickVideoList;

    /**
     * @var VideoPreviewSubtitleInfo[]
     */
    public $quickVideoSubtitleList;
    protected $_name = [
        'category' => 'category',
        'liveTranscodingSubtitleTaskList' => 'live_transcoding_subtitle_task_list',
        'liveTranscodingTaskList' => 'live_transcoding_task_list',
        'masterUrl' => 'master_url',
        'meta' => 'meta',
        'offlineVideoTranscodingList' => 'offline_video_transcoding_list',
        'offlineVideoTranscodingSubtitleList' => 'offline_video_transcoding_subtitle_list',
        'quickVideoList' => 'quick_video_list',
        'quickVideoSubtitleList' => 'quick_video_subtitle_list',
    ];

    public function validate()
    {
        if (\is_array($this->liveTranscodingSubtitleTaskList)) {
            Model::validateArray($this->liveTranscodingSubtitleTaskList);
        }
        if (\is_array($this->liveTranscodingTaskList)) {
            Model::validateArray($this->liveTranscodingTaskList);
        }
        if (null !== $this->meta) {
            $this->meta->validate();
        }
        if (\is_array($this->offlineVideoTranscodingList)) {
            Model::validateArray($this->offlineVideoTranscodingList);
        }
        if (\is_array($this->offlineVideoTranscodingSubtitleList)) {
            Model::validateArray($this->offlineVideoTranscodingSubtitleList);
        }
        if (\is_array($this->quickVideoList)) {
            Model::validateArray($this->quickVideoList);
        }
        if (\is_array($this->quickVideoSubtitleList)) {
            Model::validateArray($this->quickVideoSubtitleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->liveTranscodingSubtitleTaskList) {
            if (\is_array($this->liveTranscodingSubtitleTaskList)) {
                $res['live_transcoding_subtitle_task_list'] = [];
                $n1 = 0;
                foreach ($this->liveTranscodingSubtitleTaskList as $item1) {
                    $res['live_transcoding_subtitle_task_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->liveTranscodingTaskList) {
            if (\is_array($this->liveTranscodingTaskList)) {
                $res['live_transcoding_task_list'] = [];
                $n1 = 0;
                foreach ($this->liveTranscodingTaskList as $item1) {
                    $res['live_transcoding_task_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->masterUrl) {
            $res['master_url'] = $this->masterUrl;
        }

        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
        }

        if (null !== $this->offlineVideoTranscodingList) {
            if (\is_array($this->offlineVideoTranscodingList)) {
                $res['offline_video_transcoding_list'] = [];
                $n1 = 0;
                foreach ($this->offlineVideoTranscodingList as $item1) {
                    $res['offline_video_transcoding_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->offlineVideoTranscodingSubtitleList) {
            if (\is_array($this->offlineVideoTranscodingSubtitleList)) {
                $res['offline_video_transcoding_subtitle_list'] = [];
                $n1 = 0;
                foreach ($this->offlineVideoTranscodingSubtitleList as $item1) {
                    $res['offline_video_transcoding_subtitle_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->quickVideoList) {
            if (\is_array($this->quickVideoList)) {
                $res['quick_video_list'] = [];
                $n1 = 0;
                foreach ($this->quickVideoList as $item1) {
                    $res['quick_video_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->quickVideoSubtitleList) {
            if (\is_array($this->quickVideoSubtitleList)) {
                $res['quick_video_subtitle_list'] = [];
                $n1 = 0;
                foreach ($this->quickVideoSubtitleList as $item1) {
                    $res['quick_video_subtitle_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['live_transcoding_subtitle_task_list'])) {
            if (!empty($map['live_transcoding_subtitle_task_list'])) {
                $model->liveTranscodingSubtitleTaskList = [];
                $n1 = 0;
                foreach ($map['live_transcoding_subtitle_task_list'] as $item1) {
                    $model->liveTranscodingSubtitleTaskList[$n1++] = VideoPreviewSubtitleInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['live_transcoding_task_list'])) {
            if (!empty($map['live_transcoding_task_list'])) {
                $model->liveTranscodingTaskList = [];
                $n1 = 0;
                foreach ($map['live_transcoding_task_list'] as $item1) {
                    $model->liveTranscodingTaskList[$n1++] = liveTranscodingTaskList::fromMap($item1);
                }
            }
        }

        if (isset($map['master_url'])) {
            $model->masterUrl = $map['master_url'];
        }

        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }

        if (isset($map['offline_video_transcoding_list'])) {
            if (!empty($map['offline_video_transcoding_list'])) {
                $model->offlineVideoTranscodingList = [];
                $n1 = 0;
                foreach ($map['offline_video_transcoding_list'] as $item1) {
                    $model->offlineVideoTranscodingList[$n1++] = offlineVideoTranscodingList::fromMap($item1);
                }
            }
        }

        if (isset($map['offline_video_transcoding_subtitle_list'])) {
            if (!empty($map['offline_video_transcoding_subtitle_list'])) {
                $model->offlineVideoTranscodingSubtitleList = [];
                $n1 = 0;
                foreach ($map['offline_video_transcoding_subtitle_list'] as $item1) {
                    $model->offlineVideoTranscodingSubtitleList[$n1++] = VideoPreviewSubtitleInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['quick_video_list'])) {
            if (!empty($map['quick_video_list'])) {
                $model->quickVideoList = [];
                $n1 = 0;
                foreach ($map['quick_video_list'] as $item1) {
                    $model->quickVideoList[$n1++] = quickVideoList::fromMap($item1);
                }
            }
        }

        if (isset($map['quick_video_subtitle_list'])) {
            if (!empty($map['quick_video_subtitle_list'])) {
                $model->quickVideoSubtitleList = [];
                $n1 = 0;
                foreach ($map['quick_video_subtitle_list'] as $item1) {
                    $model->quickVideoSubtitleList[$n1++] = VideoPreviewSubtitleInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
