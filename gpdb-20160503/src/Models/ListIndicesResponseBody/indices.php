<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListIndicesResponseBody;

use AlibabaCloud\Dara\Model;

class indices extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Gpdb\V20160503\Models\ListIndicesResponseBody\indices\indices[]
     */
    public $indices;
    protected $_name = [
        'indices' => 'Indices',
    ];

    public function validate()
    {
        if (\is_array($this->indices)) {
            Model::validateArray($this->indices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indices) {
            if (\is_array($this->indices)) {
                $res['Indices'] = [];
                $n1             = 0;
                foreach ($this->indices as $item1) {
                    $res['Indices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Indices'])) {
            if (!empty($map['Indices'])) {
                $model->indices = [];
                $n1             = 0;
                foreach ($map['Indices'] as $item1) {
                    $model->indices[$n1++] = \AlibabaCloud\SDK\Gpdb\V20160503\Models\ListIndicesResponseBody\indices\indices::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
