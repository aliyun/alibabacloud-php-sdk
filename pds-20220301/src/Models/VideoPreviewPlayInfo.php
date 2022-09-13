<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayInfo\liveTranscodingTaskList;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoPreviewPlayInfo\meta;
use AlibabaCloud\Tea\Model;

class VideoPreviewPlayInfo extends Model
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
    protected $_name = [
        'category'                => 'category',
        'liveTranscodingTaskList' => 'live_transcoding_task_list',
        'meta'                    => 'meta',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VideoPreviewPlayInfo
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

        return $model;
    }
}
