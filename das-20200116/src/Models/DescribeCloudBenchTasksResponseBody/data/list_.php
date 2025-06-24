<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudBenchTasksResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudBenchTasksResponseBody\data\list_\cloudbenchTasks;

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
        if (\is_array($this->cloudbenchTasks)) {
            Model::validateArray($this->cloudbenchTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudbenchTasks) {
            if (\is_array($this->cloudbenchTasks)) {
                $res['cloudbenchTasks'] = [];
                $n1 = 0;
                foreach ($this->cloudbenchTasks as $item1) {
                    $res['cloudbenchTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['cloudbenchTasks'])) {
            if (!empty($map['cloudbenchTasks'])) {
                $model->cloudbenchTasks = [];
                $n1 = 0;
                foreach ($map['cloudbenchTasks'] as $item1) {
                    $model->cloudbenchTasks[$n1] = cloudbenchTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
