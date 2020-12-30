<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowResponseBody\flow\flow;
use AlibabaCloud\Tea\Model;

class flow extends Model
{
    /**
     * @var flow[]
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
                    $model->flow[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
