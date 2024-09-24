<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody;

use AlibabaCloud\Tea\Model;

class dataFlowSubTask extends Model
{
    /**
     * @var \AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask\dataFlowSubTask[]
     */
    public $dataFlowSubTask;
    protected $_name = [
        'dataFlowSubTask' => 'DataFlowSubTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFlowSubTask) {
            $res['DataFlowSubTask'] = [];
            if (null !== $this->dataFlowSubTask && \is_array($this->dataFlowSubTask)) {
                $n = 0;
                foreach ($this->dataFlowSubTask as $item) {
                    $res['DataFlowSubTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataFlowSubTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataFlowSubTask'])) {
            if (!empty($map['DataFlowSubTask'])) {
                $model->dataFlowSubTask = [];
                $n                      = 0;
                foreach ($map['DataFlowSubTask'] as $item) {
                    $model->dataFlowSubTask[$n++] = null !== $item ? \AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask\dataFlowSubTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
