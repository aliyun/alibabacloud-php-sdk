<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask\dataFlowSubTask;

class dataFlowSubTask extends Model
{
    /**
     * @var dataFlowSubTask[]
     */
    public $dataFlowSubTask;
    protected $_name = [
        'dataFlowSubTask' => 'DataFlowSubTask',
    ];

    public function validate()
    {
        if (\is_array($this->dataFlowSubTask)) {
            Model::validateArray($this->dataFlowSubTask);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataFlowSubTask) {
            if (\is_array($this->dataFlowSubTask)) {
                $res['DataFlowSubTask'] = [];
                $n1 = 0;
                foreach ($this->dataFlowSubTask as $item1) {
                    $res['DataFlowSubTask'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataFlowSubTask'])) {
            if (!empty($map['DataFlowSubTask'])) {
                $model->dataFlowSubTask = [];
                $n1 = 0;
                foreach ($map['DataFlowSubTask'] as $item1) {
                    $model->dataFlowSubTask[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
