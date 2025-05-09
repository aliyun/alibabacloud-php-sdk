<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowsByPageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowsByPageResponseBody\taskFlowList\taskFlow;

class taskFlowList extends Model
{
    /**
     * @var taskFlow[]
     */
    public $taskFlow;
    protected $_name = [
        'taskFlow' => 'TaskFlow',
    ];

    public function validate()
    {
        if (\is_array($this->taskFlow)) {
            Model::validateArray($this->taskFlow);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskFlow) {
            if (\is_array($this->taskFlow)) {
                $res['TaskFlow'] = [];
                $n1 = 0;
                foreach ($this->taskFlow as $item1) {
                    $res['TaskFlow'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TaskFlow'])) {
            if (!empty($map['TaskFlow'])) {
                $model->taskFlow = [];
                $n1 = 0;
                foreach ($map['TaskFlow'] as $item1) {
                    $model->taskFlow[$n1++] = taskFlow::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
