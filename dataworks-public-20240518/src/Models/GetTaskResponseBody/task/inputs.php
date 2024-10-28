<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\inputs\variables;
use AlibabaCloud\Tea\Model;

class inputs extends Model
{
    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'variables' => 'Variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->variables) {
            $res['Variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['Variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['Variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
