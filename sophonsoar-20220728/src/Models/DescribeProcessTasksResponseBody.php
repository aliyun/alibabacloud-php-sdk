<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessTasksResponseBody\page;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessTasksResponseBody\processTasks;
use AlibabaCloud\Tea\Model;

class DescribeProcessTasksResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var page
     */
    public $page;

    /**
     * @description The handling tasks.
     *
     * @var processTasks[]
     */
    public $processTasks;

    /**
     * @description The request ID.
     *
     * @example E7698CFB-4E1C-5840-8EC9-691B86729E94
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'page'         => 'Page',
        'processTasks' => 'ProcessTasks',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->processTasks) {
            $res['ProcessTasks'] = [];
            if (null !== $this->processTasks && \is_array($this->processTasks)) {
                $n = 0;
                foreach ($this->processTasks as $item) {
                    $res['ProcessTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProcessTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['ProcessTasks'])) {
            if (!empty($map['ProcessTasks'])) {
                $model->processTasks = [];
                $n                   = 0;
                foreach ($map['ProcessTasks'] as $item) {
                    $model->processTasks[$n++] = null !== $item ? processTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
