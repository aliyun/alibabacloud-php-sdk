<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeTransitionVSwitchesResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeTransitionVSwitchesResponseBody\vSwitchModels\model_;
use AlibabaCloud\Tea\Model;

class vSwitchModels extends Model
{
    /**
     * @var model_[]
     */
    public $model;
    protected $_name = [
        'model' => 'Model',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = [];
            if (null !== $this->model && \is_array($this->model)) {
                $n = 0;
                foreach ($this->model as $item) {
                    $res['Model'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitchModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Model'])) {
            if (!empty($map['Model'])) {
                $model->model = [];
                $n            = 0;
                foreach ($map['Model'] as $item) {
                    $model->model[$n++] = null !== $item ? model_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
