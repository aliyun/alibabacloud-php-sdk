<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshTasksResponseBody\tasks\CDNTask;

class tasks extends Model
{
    /**
     * @var CDNTask[]
     */
    public $CDNTask;
    protected $_name = [
        'CDNTask' => 'CDNTask',
    ];

    public function validate()
    {
        if (\is_array($this->CDNTask)) {
            Model::validateArray($this->CDNTask);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CDNTask) {
            if (\is_array($this->CDNTask)) {
                $res['CDNTask'] = [];
                $n1 = 0;
                foreach ($this->CDNTask as $item1) {
                    $res['CDNTask'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CDNTask'])) {
            if (!empty($map['CDNTask'])) {
                $model->CDNTask = [];
                $n1 = 0;
                foreach ($map['CDNTask'] as $item1) {
                    $model->CDNTask[$n1] = CDNTask::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
