<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceResponseBody\flowNodeInstances\flowNodeInstance;
use AlibabaCloud\Tea\Model;

class flowNodeInstances extends Model
{
    /**
     * @var flowNodeInstance[]
     */
    public $flowNodeInstance;
    protected $_name = [
        'flowNodeInstance' => 'FlowNodeInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowNodeInstance) {
            $res['FlowNodeInstance'] = [];
            if (null !== $this->flowNodeInstance && \is_array($this->flowNodeInstance)) {
                $n = 0;
                foreach ($this->flowNodeInstance as $item) {
                    $res['FlowNodeInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowNodeInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowNodeInstance'])) {
            if (!empty($map['FlowNodeInstance'])) {
                $model->flowNodeInstance = [];
                $n                       = 0;
                foreach ($map['FlowNodeInstance'] as $item) {
                    $model->flowNodeInstance[$n++] = null !== $item ? flowNodeInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
