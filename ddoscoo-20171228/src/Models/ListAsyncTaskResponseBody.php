<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListAsyncTaskResponseBody\asyncTasks;
use AlibabaCloud\Tea\Model;

class ListAsyncTaskResponseBody extends Model
{
    /**
     * @var asyncTasks[]
     */
    public $asyncTasks;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'asyncTasks' => 'AsyncTasks',
        'requestId'  => 'RequestId',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTasks) {
            $res['AsyncTasks'] = [];
            if (null !== $this->asyncTasks && \is_array($this->asyncTasks)) {
                $n = 0;
                foreach ($this->asyncTasks as $item) {
                    $res['AsyncTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAsyncTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncTasks'])) {
            if (!empty($map['AsyncTasks'])) {
                $model->asyncTasks = [];
                $n                 = 0;
                foreach ($map['AsyncTasks'] as $item) {
                    $model->asyncTasks[$n++] = null !== $item ? asyncTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
