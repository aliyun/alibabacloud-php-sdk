<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component;

class components extends Model
{
    /**
     * @var component[]
     */
    public $component;
    protected $_name = [
        'component' => 'Component',
    ];

    public function validate()
    {
        if (\is_array($this->component)) {
            Model::validateArray($this->component);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->component) {
            if (\is_array($this->component)) {
                $res['Component'] = [];
                $n1 = 0;
                foreach ($this->component as $item1) {
                    $res['Component'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Component'])) {
            if (!empty($map['Component'])) {
                $model->component = [];
                $n1 = 0;
                foreach ($map['Component'] as $item1) {
                    $model->component[$n1] = component::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
