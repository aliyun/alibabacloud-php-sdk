<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowInstanceResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowInstanceResponseBody\flowInstances\flowInstance;
use AlibabaCloud\Tea\Model;

class flowInstances extends Model
{
    /**
     * @var flowInstance[]
     */
    public $flowInstance;
    protected $_name = [
        'flowInstance' => 'FlowInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowInstance) {
            $res['FlowInstance'] = [];
            if (null !== $this->flowInstance && \is_array($this->flowInstance)) {
                $n = 0;
                foreach ($this->flowInstance as $item) {
                    $res['FlowInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowInstance'])) {
            if (!empty($map['FlowInstance'])) {
                $model->flowInstance = [];
                $n                   = 0;
                foreach ($map['FlowInstance'] as $item) {
                    $model->flowInstance[$n++] = null !== $item ? flowInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
