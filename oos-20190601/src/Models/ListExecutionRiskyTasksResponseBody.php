<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionRiskyTasksResponseBody\riskyTasks;

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
        'requestId' => 'RequestId',
        'riskyTasks' => 'RiskyTasks',
    ];

    public function validate()
    {
        if (\is_array($this->riskyTasks)) {
            Model::validateArray($this->riskyTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskyTasks) {
            if (\is_array($this->riskyTasks)) {
                $res['RiskyTasks'] = [];
                $n1 = 0;
                foreach ($this->riskyTasks as $item1) {
                    $res['RiskyTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskyTasks'])) {
            if (!empty($map['RiskyTasks'])) {
                $model->riskyTasks = [];
                $n1 = 0;
                foreach ($map['RiskyTasks'] as $item1) {
                    $model->riskyTasks[$n1] = riskyTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
