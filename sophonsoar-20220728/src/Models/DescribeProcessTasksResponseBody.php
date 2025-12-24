<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessTasksResponseBody\page;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessTasksResponseBody\processTasks;

class DescribeProcessTasksResponseBody extends Model
{
    /**
     * @var page
     */
    public $page;

    /**
     * @var processTasks[]
     */
    public $processTasks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'page' => 'Page',
        'processTasks' => 'ProcessTasks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->page) {
            $this->page->validate();
        }
        if (\is_array($this->processTasks)) {
            Model::validateArray($this->processTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
        }

        if (null !== $this->processTasks) {
            if (\is_array($this->processTasks)) {
                $res['ProcessTasks'] = [];
                $n1 = 0;
                foreach ($this->processTasks as $item1) {
                    $res['ProcessTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        if (isset($map['ProcessTasks'])) {
            if (!empty($map['ProcessTasks'])) {
                $model->processTasks = [];
                $n1 = 0;
                foreach ($map['ProcessTasks'] as $item1) {
                    $model->processTasks[$n1] = processTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
