<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamPreloadTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamPreloadTasksResponseBody\preloadTasks\preloadTask;

class preloadTasks extends Model
{
    /**
     * @var preloadTask[]
     */
    public $preloadTask;
    protected $_name = [
        'preloadTask' => 'PreloadTask',
    ];

    public function validate()
    {
        if (\is_array($this->preloadTask)) {
            Model::validateArray($this->preloadTask);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preloadTask) {
            if (\is_array($this->preloadTask)) {
                $res['PreloadTask'] = [];
                $n1 = 0;
                foreach ($this->preloadTask as $item1) {
                    $res['PreloadTask'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['PreloadTask'])) {
            if (!empty($map['PreloadTask'])) {
                $model->preloadTask = [];
                $n1 = 0;
                foreach ($map['PreloadTask'] as $item1) {
                    $model->preloadTask[$n1] = preloadTask::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
