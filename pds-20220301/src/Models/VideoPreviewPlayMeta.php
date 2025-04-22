<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayMeta\liveTranscodingTaskList;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayMeta\meta;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayMeta\offlineVideoTranscodingList;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayMeta\quickVideoList;

class VideoPreviewPlayMeta extends Model
{
    /**
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
        'category' => 'category',
        'liveTranscodingTaskList' => 'live_transcoding_task_list',
        'meta' => 'meta',
        'offlineVideoTranscodingList' => 'offline_video_transcoding_list',
        'quickVideoList' => 'quick_video_list',
    ];

    public function validate()
    {
        if (\is_array($this->liveTranscodingTaskList)) {
            Model::validateArray($this->liveTranscodingTaskList);
        }
        if (null !== $this->meta) {
            $this->meta->validate();
        }
        if (\is_array($this->offlineVideoTranscodingList)) {
            Model::validateArray($this->offlineVideoTranscodingList);
        }
        if (\is_array($this->quickVideoList)) {
            Model::validateArray($this->quickVideoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
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

        if (null !== $this->quickVideoList) {
            if (\is_array($this->quickVideoList)) {
                $res['quick_video_list'] = [];
                $n1 = 0;
                foreach ($this->quickVideoList as $item1) {
                    $res['quick_video_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['live_transcoding_task_list'])) {
            if (!empty($map['live_transcoding_task_list'])) {
                $model->liveTranscodingTaskList = [];
                $n1 = 0;
                foreach ($map['live_transcoding_task_list'] as $item1) {
                    $model->liveTranscodingTaskList[$n1++] = liveTranscodingTaskList::fromMap($item1);
                }
            }
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

        if (isset($map['quick_video_list'])) {
            if (!empty($map['quick_video_list'])) {
                $model->quickVideoList = [];
                $n1 = 0;
                foreach ($map['quick_video_list'] as $item1) {
                    $model->quickVideoList[$n1++] = quickVideoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
