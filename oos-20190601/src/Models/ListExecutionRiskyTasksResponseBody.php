<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionRiskyTasksResponseBody\riskyTasks;
use AlibabaCloud\Tea\Model;

class ListExecutionRiskyTasksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskyTasks[]
     */
    public $riskyTasks;
    protected $_name = [
        'requestId'  => 'RequestId',
        'riskyTasks' => 'RiskyTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskyTasks) {
            $res['RiskyTasks'] = [];
            if (null !== $this->riskyTasks && \is_array($this->riskyTasks)) {
                $n = 0;
                foreach ($this->riskyTasks as $item) {
                    $res['RiskyTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExecutionRiskyTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskyTasks'])) {
            if (!empty($map['RiskyTasks'])) {
                $model->riskyTasks = [];
                $n                 = 0;
                foreach ($map['RiskyTasks'] as $item) {
                    $model->riskyTasks[$n++] = null !== $item ? riskyTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
