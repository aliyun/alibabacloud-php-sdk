<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudBenchTasksResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudBenchTasksResponseBody\data\list_\cloudbenchTasks;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var cloudbenchTasks[]
     */
    public $cloudbenchTasks;
    protected $_name = [
        'cloudbenchTasks' => 'cloudbenchTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudbenchTasks) {
            $res['cloudbenchTasks'] = [];
            if (null !== $this->cloudbenchTasks && \is_array($this->cloudbenchTasks)) {
                $n = 0;
                foreach ($this->cloudbenchTasks as $item) {
                    $res['cloudbenchTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cloudbenchTasks'])) {
            if (!empty($map['cloudbenchTasks'])) {
                $model->cloudbenchTasks = [];
                $n                      = 0;
                foreach ($map['cloudbenchTasks'] as $item) {
                    $model->cloudbenchTasks[$n++] = null !== $item ? cloudbenchTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
