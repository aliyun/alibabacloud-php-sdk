<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListFlowNodeGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListFlowNodeGroupResponseBody\data\model_;

class data extends Model
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
        if (\is_array($this->model)) {
            Model::validateArray($this->model);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->model) {
            if (\is_array($this->model)) {
                $res['Model'] = [];
                $n1 = 0;
                foreach ($this->model as $item1) {
                    $res['Model'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Model'])) {
            if (!empty($map['Model'])) {
                $model->model = [];
                $n1 = 0;
                foreach ($map['Model'] as $item1) {
                    $model->model[$n1] = model_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
