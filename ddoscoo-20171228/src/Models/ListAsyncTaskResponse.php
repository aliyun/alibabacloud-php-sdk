<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListAsyncTaskResponse\asyncTasks;
use AlibabaCloud\Tea\Model;

class ListAsyncTaskResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var asyncTasks[]
     */
    public $asyncTasks;
    protected $_name = [
        'requestId'  => 'RequestId',
        'total'      => 'Total',
        'asyncTasks' => 'AsyncTasks',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('asyncTasks', $this->asyncTasks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->asyncTasks) {
            $res['AsyncTasks'] = [];
            if (null !== $this->asyncTasks && \is_array($this->asyncTasks)) {
                $n = 0;
                foreach ($this->asyncTasks as $item) {
                    $res['AsyncTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAsyncTaskResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['AsyncTasks'])) {
            if (!empty($map['AsyncTasks'])) {
                $model->asyncTasks = [];
                $n                 = 0;
                foreach ($map['AsyncTasks'] as $item) {
                    $model->asyncTasks[$n++] = null !== $item ? asyncTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
