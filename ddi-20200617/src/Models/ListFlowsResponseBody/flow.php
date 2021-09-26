<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowsResponseBody;

use AlibabaCloud\Tea\Model;

class flow extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowsResponseBody\flow\flow[]
     */
    public $flow;
    protected $_name = [
        'flow' => 'Flow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flow) {
            $res['Flow'] = [];
            if (null !== $this->flow && \is_array($this->flow)) {
                $n = 0;
                foreach ($this->flow as $item) {
                    $res['Flow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flow'])) {
            if (!empty($map['Flow'])) {
                $model->flow = [];
                $n           = 0;
                foreach ($map['Flow'] as $item) {
                    $model->flow[$n++] = null !== $item ? \AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowsResponseBody\flow\flow::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
