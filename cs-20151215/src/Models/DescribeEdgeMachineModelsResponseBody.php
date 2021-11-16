<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachineModelsResponseBody\models;
use AlibabaCloud\Tea\Model;

class DescribeEdgeMachineModelsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var models[]
     */
    public $models;
    protected $_name = [
        'models' => 'models',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->models) {
            $res['models'] = [];
            if (null !== $this->models && \is_array($this->models)) {
                $n = 0;
                foreach ($this->models as $item) {
                    $res['models'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEdgeMachineModelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n             = 0;
                foreach ($map['models'] as $item) {
                    $model->models[$n++] = null !== $item ? models::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
