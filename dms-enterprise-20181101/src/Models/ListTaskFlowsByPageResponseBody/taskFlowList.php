<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowsByPageResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowsByPageResponseBody\taskFlowList\taskFlow;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskFlow) {
            $res['TaskFlow'] = [];
            if (null !== $this->taskFlow && \is_array($this->taskFlow)) {
                $n = 0;
                foreach ($this->taskFlow as $item) {
                    $res['TaskFlow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskFlowList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskFlow'])) {
            if (!empty($map['TaskFlow'])) {
                $model->taskFlow = [];
                $n               = 0;
                foreach ($map['TaskFlow'] as $item) {
                    $model->taskFlow[$n++] = null !== $item ? taskFlow::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
