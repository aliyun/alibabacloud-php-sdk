<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamPreloadTasksResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamPreloadTasksResponseBody\preloadTasks\preloadTask;
use AlibabaCloud\Tea\Model;

class preloadTasks extends Model
{
    /**
     * @var preloadTask[]
     */
    public $preloadTask;
    protected $_name = [
        'preloadTask' => 'PreloadTask',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->preloadTask) {
            $res['PreloadTask'] = [];
            if (null !== $this->preloadTask && \is_array($this->preloadTask)) {
                $n = 0;
                foreach ($this->preloadTask as $item) {
                    $res['PreloadTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preloadTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreloadTask'])) {
            if (!empty($map['PreloadTask'])) {
                $model->preloadTask = [];
                $n = 0;
                foreach ($map['PreloadTask'] as $item) {
                    $model->preloadTask[$n++] = null !== $item ? preloadTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
