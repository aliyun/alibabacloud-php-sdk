<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterTasksResponseBody\pageInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterTasksResponseBody\tasks;

class DescribeClusterTasksResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'pageInfo' => 'page_info',
        'requestId' => 'requestId',
        'tasks' => 'tasks',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->tasks) {
            if (\is_array($this->tasks)) {
                $res['tasks'] = [];
                $n1 = 0;
                foreach ($this->tasks as $item1) {
                    $res['tasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['page_info'])) {
            $model->pageInfo = pageInfo::fromMap($map['page_info']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['tasks'])) {
            if (!empty($map['tasks'])) {
                $model->tasks = [];
                $n1 = 0;
                foreach ($map['tasks'] as $item1) {
                    $model->tasks[$n1++] = tasks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
