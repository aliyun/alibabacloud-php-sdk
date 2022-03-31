<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowResponseBody\taskFlowList\DAGInstance;
use AlibabaCloud\Tea\Model;

class taskFlowList extends Model
{
    /**
     * @var DAGInstance[]
     */
    public $DAGInstance;
    protected $_name = [
        'DAGInstance' => 'DAGInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DAGInstance) {
            $res['DAGInstance'] = [];
            if (null !== $this->DAGInstance && \is_array($this->DAGInstance)) {
                $n = 0;
                foreach ($this->DAGInstance as $item) {
                    $res['DAGInstance'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DAGInstance'])) {
            if (!empty($map['DAGInstance'])) {
                $model->DAGInstance = [];
                $n                  = 0;
                foreach ($map['DAGInstance'] as $item) {
                    $model->DAGInstance[$n++] = null !== $item ? DAGInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
